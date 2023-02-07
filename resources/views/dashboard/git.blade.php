@extends('dashboard.layouts.main')

@section('content')
<div id="app"></div>
<div class="git-control">
    <div class="all-info">
        <div class="status">
            <div class="version">Версия <span>{{ $gitAllLogs[0]['Message'] }}</span></div>
            <div class="row">Последнее обновление: <span>{{ $gitAllLogs[0]['Date'] }}</span></div>
            <div class="row">Hash текущего коммита: <span>{{ $gitAllLogs[0]['Commit']  }}</span></div>
        </div>
        <div class="messages">
            <div class="whats-new">
                <div class="header">Что нового в версии {{ $gitAllLogs[0]['Message']  }}</div>
                <div class="header">Исправленные баги</div>
                <div class="header">Что запланировано в следующем апдейте</div>
                <ul>
                    <li>-</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="control">
        <button id="update" type="button"><i class="fas fa-sync-alt"></i><span>Обновить</span></button>
        <button id="revert" type="button"><i class="fas fa-undo-alt"></i><span>Откатиться</span></button>
    </div>
    <div class="git-log">
        @foreach ($gitAllLogs as $log)
            <div class="block">
                <div class="version">Версия <span>{{ $log['Message'] }}</span></div>
                <div class="date">Дата <span>{{ $log['Date'] }}</span></div>
                <div class="author">Автор <span>{{ $log['Author'] }}</span></div>
                <button class="revert-this" data-commit="{{ $log['Commit'] }}" type="button"><i class="fas fa-undo-alt"></i><span>Откатиться</span></button>
            </div>
        @endforeach
    </div>
</div>
<script>
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#update').on('click', function(e) {
        e.preventDefault();
        var url = '/gitUpdate';
        $.ajax({
            url: url,
            method: 'POST',
            dataType: 'JSON',
            contentType: false,
            processData: false,
            success: function(response) {
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
    });
    $('#revert').on('click', function(e) {
        e.preventDefault();
        var url = '/gitRevert';
        $.ajax({
            url: url,
            method: 'POST',
            dataType: 'JSON',
            contentType: false,
            processData: false,
            success: function(response) {
                $('#global-message').remove();
                $('#global-message-red').remove();
                if (response.success == true) {
                    $('main').prepend('<div id="global-message">' + response.shell + '</div>');
                    setTimeout(function() {
                        location.reload();
                    }, 2000);
                } else {
                    $('main').prepend('<div id="global-message-red">' + response.shell + '</div>');
                }
            }
        });
    });
    $('.revert-this').on('click', function(e) {
        e.preventDefault();
        var element = this;
        var url = '/revertToCommit';
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: url,
            method: 'POST',
            data: {
                commit: element.getAttribute('data-commit'),
            },
            success: function(response) {
                $('#global-message').remove();
                $('#global-message-red').remove();
                if (response.success == true) {
                    $('main').prepend('<div id="global-message">' + response.shell + '</div>');
                    setTimeout(function() {
                        location.reload();
                    }, 2000);
                } else {
                    $('main').prepend('<div id="global-message-red">' + response.shell + '</div>');
                }
            }
        });
    });
});
</script>
@endsection
