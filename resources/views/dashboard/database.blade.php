@extends('dashboard.layouts.main')

@section('content')
<div id="app"></div>
<div class="database-wrap">
    <h1>Управление базой данных</h1>
    <div class="backup-timeline">
        <div class="history">
            <div class="revert">
                <input type="text" placeholder="Выберите время между {{ $startTime }} и {{ $endTime }}">
                <button onclick="revert()"><i class="fas fa-calendar-alt"></i><span>Откатиться</span></button>
                <button onclick="createDump()" type="button"><i class="fas fa-database"></i><span>Создать бэкап</span></button>
            </div>
            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>Дата</th>
                            <th>Время</th>
                            <th>Информация</th>
                            <th>SQL операция</th>
                            <th>Инициатор</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dblogs as $log)
                            <tr>
                                <td>{{ $log->date }}</td>
                                <td>{{ $log->time }}</td>
                                <td><a href="{{ URL::to($log->item_url) }}">{{ str_limit($log->item, 100, '...') }}</a></td>
                                <td>{{ $log->action }}</td>
                                <td>{{ $log->user }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="table-fix"></div>
        </div>
    </div>
    <div class="database-log">
        @foreach ($databaseDumps as $db)
            <div class="block">
                <div class="date">Дата <span>{{ $db->date }}</span></div>
                <div class="time">Время <span>{{ $db->time }}</span></div>
                <div class="name">Имя файла <span>{{ $db->name }}</span></div>
                <button onclick="restore(this)" class="restore" data-url="{{ $db->url }}" type="button"><i class="fas fa-wrench"></i><span>Восстановить</span></button>
                <button onclick="deleteDb(this)" class="delete" data-url="{{ $db->url }}" type="button"><i class="fas fa-trash"></i><span>Удалить</span></button>
            </div>
        @endforeach
    </div>
</div>
<script>
$(document).ready(function() {
    $(".backup-timeline input").flatpickr(
        {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            time_24hr: true,
            locale: "ru",
            minTime: "{{ $startTime }}",
            maxTime: "{{ $endTime }}",
            onChange: function(selectedDates, dateStr, instance)
            {
                console.log(selectedDates, dateStr, instance);
            },
        },
    );
});
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function revert() {
    if(!$('.revert input').val()) {
        var dbTime = "00:00";
    } else {
        var dbTime = $('.revert input').val();
    }
    $('main').prepend('<div id="global-message-waiting">Идет восстановление из бэкапа. Пожалуйста, подождите...</div>');
    var url = '/restoreIncrementalDatabase';
    $.ajax({
        url: url,
        method: 'POST',
        data: {
            db_time: dbTime,
        },
        dataType: 'JSON',
        success: function(response) {
            $('#global-message-waiting').remove();
            $('#global-message').remove();
            $('#global-message-red').remove();
            if (response.success == true) {
                if (response.refresh == true) {
                    $('main').prepend('<div id="global-message">' + response.shell + '</div>');
                    setTimeout(function() {
                        location.reload();
                    }, 2000);
                } else {
                    $('main').prepend('<div id="global-message">' + response.shell + '</div>');
                }
            } else {
                $('main').prepend('<div id="global-message-red">' + response.shell + '</div>');
            }
        }
    });
};
function createDump() {
    $('main').prepend('<div id="global-message-waiting">Идет создание бэкапа. Пожалуйста, подождите...</div>');
    var url = '/createDump';
    $.ajax({
        url: url,
        method: 'POST',
        dataType: 'JSON',
        contentType: false,
        processData: false,
        success: function(response) {
            $('#global-message-waiting').remove();
            $('#global-message').remove();
            $('#global-message-red').remove();
            if (response.success == true) {
                if (response.refresh == true) {
                    $('main').prepend('<div id="global-message">' + response.shell + '</div>');
                    setTimeout(function() {
                        location.reload();
                    }, 2000);
                } else {
                    $('main').prepend('<div id="global-message">' + response.shell + '</div>');
                }
            } else {
                $('main').prepend('<div id="global-message-red">' + response.shell + '</div>');
            }
        }
    });
};
function restore(element) {
    $('main').prepend('<div id="global-message-waiting">Идет восстановление из бэкапа. Пожалуйста, подождите...</div>');
    var url = '/restoreDatabase';
    $.ajax({
        url: url,
        method: 'POST',
        data: {
            db_path: element.getAttribute('data-url'),
        },
        dataType: 'JSON',
        success: function(response) {
            $('#global-message-waiting').remove();
            $('#global-message').remove();
            $('#global-message-red').remove();
            if (response.success == true) {
                if (response.refresh == true) {
                    $('main').prepend('<div id="global-message">' + response.shell + '</div>');
                    setTimeout(function() {
                        location.reload();
                    }, 2000);
                } else {
                    $('main').prepend('<div id="global-message">' + response.shell + '</div>');
                }
            } else {
                $('main').prepend('<div id="global-message-red">' + response.shell + '</div>');
            }
        }
    });
};
function deleteDb(element) {
    $('main').prepend('<div id="global-message-waiting">Идет удаление бэкапа. Пожалуйста, подождите...</div>');
    var url = '/deleteDatabase';
    $.ajax({
        url: url,
        method: 'POST',
        data: {
            db_path: element.getAttribute('data-url'),
        },
        dataType: 'JSON',
        success: function(response) {
            $('#global-message-waiting').remove();
            $('#global-message').remove();
            $('#global-message-red').remove();
            if (response.success == true) {
                if (response.refresh == true) {
                    $('main').prepend('<div id="global-message">' + response.shell + '</div>');
                    setTimeout(function() {
                        location.reload();
                    }, 2000);
                } else {
                    $('main').prepend('<div id="global-message">' + response.shell + '</div>');
                }
            } else {
                $('main').prepend('<div id="global-message-red">' + response.shell + '</div>');
            }
        }
    });
};
</script>
@endsection
