@extends('dashboard.layouts.main')

@section('content')
<div id="app"></div>
<div class="system-wrap">
    <div class="system-info">
        <div class="info-block">
            <img src="{{ url('/svg/system/ubuntu.svg') }}" alt="Ubuntu" />
            <div class="name">Операционная система</div>
            <div class="version">{{ $version->ubuntu }}</div>
        </div>
        <div class="info-block">
            <img src="{{ url('/svg/system/mysql.svg') }}" alt="MySQL" />
            <div class="name">MySQL</div>
            <div class="version">{{ $version->mysql }}</div>
        </div>
        <div class="info-block">
            <img src="{{ url('/svg/system/nginx.svg') }}" alt="NGINX" />
            <div class="name">NGINX</div>
            <div class="version">{{ $version->nginx }}</div>
        </div>
        <div class="info-block">
            <img src="{{ url('/svg/system/php.svg') }}" alt="PHP" />
            <div class="name">PHP</div>
            <div class="version">{{ $version->php }}</div>
        </div>
        <div class="info-block">
            <img src="{{ url('/svg/system/java.svg') }}" alt="Java" />
            <div class="name">Java</div>
            <div class="version">{{ $version->java }}</div>
        </div>
        <div class="info-block">
            <img src="{{ url('/svg/system/elasticsearch.svg') }}" alt="ElasticSearch" />
            <div class="name">ElasticSearch</div>
            <div class="version">{{ $version->elasticsearch }}</div>
        </div>
        <div class="info-block">
            <img src="{{ url('/svg/system/laravel.svg') }}" alt="Laravel" />
            <div class="name">Laravel</div>
            <div class="version">{{ $version->laravel }}</div>
        </div>
    </div>
    <div class="commands">
        <button onclick="sysCommand(1)" type="button"><i class="fas fa-chess-queen"></i><span>Создать Elasticsearch Index</span></button>
        <button onclick="sysCommand(2)" type="button"><i class="fas fa-recycle"></i><span>Очистить Elasticsearch Index</span></button>
        <button onclick="sysCommand(3)" type="button"><i class="fas fa-database"></i><span>Очистить БД</span></button>
        <button onclick="sysCommand(4)" type="button"><i class="fas fas fa-clock"></i><span>Очистить кэш</span></button>
    </div>
    <h2 class="header"><i class="fas fa-info-circle"></i> Помощь</h2>
    <div class="help">
        <div class="question">Необходимые PHP модули</div>
        <div class="answer">
            <p>На сайте используются некоторые модули, которые могут быть не установлены по умолчанию в PHP. Чтобы установить их, используйте команды:</p>
            <pre class="code">sudo apt install php7.2-common</pre>
            <pre class="code">sudo apt install php-mbstring</pre>
            <pre class="code">sudo apt install php7.2-gd</pre>
            <pre class="code">sudo apt install php-imagick</pre>
        </div>
        <div class="question">Установка Java</div>
        <div class="answer">
            <p>Сайт использует систему поиска ElasticSearch, для которой требуется наличие Java. Подойдет одна из библиотек Oracle JVM или OpenJDK.</p>
            <p>Текущая версия ElasticSearch требует наличия Oracle JVM 1.8u60+ или Oracle JVM 10. Либо, если выбрано OpenJDK, то IcedTea OpenJDK 1.8.0.111+ или OpenJDK 10. Подробнее о поддерживаемых версиях Java можно посмотреть <a href="https://www.elastic.co/support/matrix#matrix_jvm" target="_blank">здесь</a>.</p>
            <p>Возьмем за основу более простую в установке версию OpenJDK 10/11. При установке OpenJDK через данную команду до 01.09.2018 будет установлена версия OpenJDK 10, при установке датой позднее - версия OpenJDK 11. О поддержке OpenJDK 11 ElasticSearch неизвестно. Скорее всего потребуется обновить и сам ES.</p>
            <pre class="code">sudo apt install openjdk-11-jdk</pre>
            <p>И, на всякий случай, Java 10:</p>
            <pre class="code">sudo add-apt-repository ppa:linuxuprising/java</pre>
            <pre class="code">sudo apt update</pre>
            <pre class="code">sudo apt install oracle-java10-installer</pre>
        </div>
        <div class="question">Установка ElasticSearch</div>
        <div class="answer">
            <p>Перед установкой установите Java и выполните следующие команды, чтобы убедиться, что установка и запуск пройдут успешно:</p>
            <pre class="code">sudo sysctl -w vm.max_map_count=262144</pre>
            <pre class="code">sudo apt-get install apt-transport-https</pre>
            <pre class="code">sudo apt-get install php-curl</pre>
            <p>Существует несколько способов установить ES: "zip/tar.gz, deb, rpm и docker". Рекомендуемый - zip/tar.gz, но по непонятным причинам он попросту зависает при запуске. Поэтому рассмотрим установку через Debian Package (deb).</p>
            <p>Сначала скачаем и установим публиный ключ для ES:</p>
            <pre class="code">sudo wget -qO - https://artifacts.elastic.co/GPG-KEY-elasticsearch | sudo apt-key add -</pre>
            <p>Сохраняем путь к репозиторию в /etc/apt/sources.list.d/elastic-6.x.list:</p>
            <pre class="code">sudo echo "deb https://artifacts.elastic.co/packages/6.x/apt stable main" | sudo tee -a /etc/apt/sources.list.d/elastic-6.x.list</pre>
            <p>Устанавливаем сам ElasticSearch:</p>
            <pre class="code">sudo apt-get update && sudo apt-get install elasticsearch</pre>
            <p>Перезагружаем systemctl:</p>
            <pre class="code">sudo /bin/systemctl daemon-reload</pre>
            <p>Теперь вносим в systemctl сервис ES для авто-запуска при загрузке:</p>
            <pre class="code">sudo /bin/systemctl enable elasticsearch.service</pre>
            <p>Производим первоначальный запуск:</p>
            <pre class="code">sudo systemctl start elasticsearch.service</pre>
        </div>
    </div>
</div>
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function sysCommand(job) {
    var url = '/sysCommands';
    $.ajax({
        url: url,
        method: 'POST',
        data: {
            command: job,
        },
        dataType: 'JSON',
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
};
$(document).ready(function() {
    $('.help').accordion({
         collapsible: true,
         active : 'none',
         heightStyle: "content"
    });
});
</script>
@endsection
