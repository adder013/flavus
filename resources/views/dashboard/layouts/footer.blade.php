<div class="laravel">
    <img src="{{ url('svg/system/laravel.svg') }}" alt="Laravel" />Laravel 6.7.0
</div>
<div class="console-terminal">
    <div class="close-terminal">
        <div class="close">
            <div class="button"></div>
        </div>
    </div>
    <div class="content"></div>
    <form id="terminal">
        <span>{{ $currentDirectory }}#</span>
        <input id="dir" type="hidden" name="dir" value="{{ $currentDirectory }}">
        <input type="text" name="command" spellcheck="false" autocomplete="off">
    </form>
</div>
<div class="manager">
    <div class="manager-info">
        <div class="preview">
            <div class="user-img">
                <img onerror="this.src = '/img/placeholder.jpg'" src="{{ Auth::user()->image }}" alt="{{ Auth::user()->name }}">
            </div>
            <a href="{{ URL::to('dashboard/users/'.Auth::user()->id) }}">Редактировать</a>
        </div>
        <div class="user">
            <div class="name">
                <div class="wrapped">
                    {{ Auth::user()->name }}
                    <a href="{{ URL::to('logout') }}"><i class="fas fa-sign-out-alt"></i></a>
                </div>
                <span>имя</span>
            </div>
            <div class="email">{{ Auth::user()->email }}<span>e-mail</span></div>
            <div class="role">
                {{ Auth::user()->role->name }}
                <span>Уровень доступа</span></div>
        </div>
    </div>
    <div class="actions">
        @if (Auth::user()->role_id <= 1)
            <button id="console" type="button"><i class="fas fa-terminal"></i><span>Консоль</span></button>
        @endif
        @if (Auth::user()->role_id <= 2)
            <a href="{{ URL::to('dashboard/git') }}"><i class="fab fa-github"></i><span>Управление версиями</span></a>
        @endif
        @if (Auth::user()->role_id <= 2)
            <a href="{{ URL::to('dashboard/database') }}"><i class="fas fa-database"></i><span>Управление базой данных</span></a>
        @endif
        @if (Auth::user()->role_id <= 2)
            <a href="{{ URL::to('dashboard/system') }}"><i class="fas fa-lock"></i><span>Управление системой</span></a>
        @endif
        @if (Auth::user()->role_id <= 2)
            <a href="{{ URL::to('dashboard/users') }}"><i class="fas fa-user-circle"></i><span>Управление пользователями</span></a>
        @endif
        @if (Auth::user()->role_id <= 3)
            <a href="http://94.154.12.177:5601" target="_blank"><svg fill="currentColor" viewBox="0 0 256 342" xmlns="http://www.w3.org/2000/svg"><path d="M0,306.929431 L0,340.94153 L15.9856864,340.94153 L156.319606,172.717689 C146.588635,166.392997 136.454031,160.712166 125.980814,155.71164 L0,306.929431 Z"></path><path d="M156.32414,172.717689 L15.9221957,341.009554 L255.571444,341.009554 C255.571444,272.441163 216.661603,211.491482 156.32414,172.717689 Z"></path><polygon points="-5.24025268e-14 0 -1.27897692e-13 307.445368 256 0"></polygon><path d="M0.0681886504,307.339209 L126.243164,155.845133 C86.6932342,137.371934 43.6510777,127.804446 0,128.003058 L0.0681886504,307.339209 Z"></path></svg><span>Kibana</span></a>
        @endif
    </div>
</div>
<script>
$(document).ready(function() {
    $('.close-terminal .close .button').on('click', function() {
        $('.console-terminal').css('height', '0');
        $('.console-terminal .close-terminal').css('position', 'relative');
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#terminal').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        var url = '/terminal';
        $.ajax({
            url: url,
            method: 'POST',
            data: formData,
            dataType: 'JSON',
            contentType: false,
            processData: false,
            success: function(response) {
                $('.console-terminal .content').append('<div class="row">' + response.lastDirectory + '# ' + response.lastCommand + '</div><div class="row">' + response.shell + '</div>');
                $('#dir').val(response.directory);
                $('#terminal input[type=text]').val('');
                $('#terminal span').html(response.directory + '#');
                $('.console-terminal').scrollTop($('.console-terminal')[0].scrollHeight);
            }
        });
    });
    $('#console').on('click', function() {
        if ($('.console-terminal').outerHeight() < 1) {
            $('.console-terminal').css('height', '300px');
            setTimeout(function() {
                $('.console-terminal .close-terminal').css('position', 'absolute');
            }, 200);
        } else {
            $('.console-terminal').css('height', '0');
            setTimeout(function() {
                $('.console-terminal .close-terminal').css('position', 'relative');
            }, 300);
        }
    });
});
</script>
