<?php

use Illuminate\Database\Seeder;

class CustomFieldsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('custom_fields')->delete();
        
        \DB::table('custom_fields')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'categoriesDesc',
                'content' => '<h3>Причины покупать в интернет-магазине Уралэнерготел</h3>
<ul>
<li><strong>Компания ООО "Уралэнерготел" - системный интегратор и поставщик с опытом работы более 10 лет</strong>. В нашем интернет-магазине мы продаём оборудование, которое используем и при реализации наших проектов, проверенное в "полевых" условиях нашими техническими специалистами. У нас в магазине представлено как <a href="https://uralenergotel.ru/brand/uralenergotel/" target="_blank">оборудование собственного производства</a>, так и <a href="https://uralenergotel.ru/about/partners/" target="_blank">оборудование и решения наших партнёров</a>.</li>
<li>Мы являемся партнёрами заводов-производителей и производим оптовые закупки, благодаря этому мы можем предложить наибоеле выгодные цены для покупателей.</li>
<li>Поставки производятся напрямую с заводов, минуя транзитные склады, что означает <strong>максимально быстрые сроки доставки</strong>.</li>
<li>В интернет-магазине Уралэнерготел представлен широкий ассортимент:
<ul>
<li><a href="https://uralenergotel.ru/category/Elektroizmeritelnye-pribory/" target="_blank">электроизмерительных приборов как цифровых, так и стрелочных</a></li>
<li><a href="https://uralenergotel.ru/category/telemechanics/" target="_blank">оборудования для систем телемеханики</a></li>
<li><a href="https://uralenergotel.ru/category/automation/" target="_blank">оборудования автоматизации</a></li>
<li><a href="https://uralenergotel.ru/category/rza/" target="_blank">устройств релейной защиты и автоматики</a></li>
<li><a href="https://uralenergotel.ru/category/accessories-metering/" target="_blank">аксессуаров для систем телемеханики, АСУ ТП и АСКУЭ</a></li>
<li><a href="https://uralenergotel.ru/category/oborudovanie-vl/" target="_blank">индикаторов короткого замыкания ИКЗ на ВЛ</a></li>
<li><a href="https://uralenergotel.ru/category/high_frequency/" target="_blank">оборудования ВЧ-связи, включая ВЧ-заградители и конденсаторы связи</a></li>
<li><a href="https://uralenergotel.ru/category/nizkovoltnye-ustroystva/" target="_blank">низковольтных комплектных устройств</a></li>
<li>шкафов, щитов и стоек для установки оборудования: <a href="https://uralenergotel.ru/category/shell/" target="_blank">с монтажными панелями</a>, <a href="https://uralenergotel.ru/category/cabinets19/" target="_blank">с направляющими 19\'\'</a>, а также <a href="https://uralenergotel.ru/category/shell/termoshkafy/" target="_blank">термошкафов</a></li>
</ul>
</li>
<li><strong>На всех этапах покупки товара вас будет сопровождать менеджер</strong>, который учтёт все ваши пожелания, будет информировать вас о статусе заказа, а также выступит посредником при уточнении характеристик с техническими специалистами.</li>
<li><strong>Вы можете совершать у нас комплексные закупки</strong> от разных производителей под собственные проекты, с доставкой прямо на объект в любую точку России, Армении, Казахстана, Кыргызстана и Беларуси.</li>
<li>У нас можете заказать <strong><a href="https://uralenergotel.ru/shkafy-individualnoi-sborki/" target="_blank">шкафы индивидуальной сборки</strong></a> по вашей спецификации, включая <a href="https://uralenergotel.ru/shkafy-individualnoi-sborki/tm-i-askue/" target="_blank">шкафы телемеханики</a>, <a href="https://uralenergotel.ru/shkafy-individualnoi-sborki/ibp/" 
target="_blank">гарантированного питания и ИБП</a>, <a href="https://uralenergotel.ru/shkafy-individualnoi-sborki/shkafy-svyazi/" target="_blank">связи, а также серверные шкафы</a> и <a 
href="https://uralenergotel.ru/shkafy-individualnoi-sborki/nku/" target="_blank">НКУ</a>.</li>
<li><strong>Уралэнерготел – интегратор технических решений</strong>. Вы можете заказать услуги установки, монтажа, пусконаладки, сервисного обслуживания прямо у нас.	</li>
</ul>
<h3>Условия доставки</h3>
<p>Минимальная стоимость заказа составляет 10 000 рублей, все цены в интернет-магазине Уралэнерготел представлены с учётом НДС.</p>
<p>Мы <a href="https://uralenergotel.ru/customers/delivery/" target="_blank">доставим ваш заказ</a> по Екатеринбургу, а также любой транспортной компанией в любую точку России, Армении, Казахстана, Беларуси и Кыргызстана, как до терминала, так и по адресу, в том числе на строящиеся объекты и любые труднодоступные районы. Доставка до терминала в Екатеринбурге бесплатная.</p><p>Если вы хотите забрать товар самостоятельно, то вы можете воспользоваться услугой <a href="https://uralenergotel.ru/contacts/samovyvoz/" target="_blank">самовывоза из пункта выдачи</a>.</p>',
                'created_at' => '2018-09-11 03:50:19',
                'updated_at' => '2018-10-19 05:42:01',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'metrics',
                'content' => '<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
(function (d, w, c) {
(w[c] = w[c] || []).push(function() {
try {
w.yaCounter37582800 = new Ya.Metrika2({
id:37582800,
clickmap:true,
trackLinks:true,
accurateTrackBounce:true,
webvisor:true,
trackHash:true,
ecommerce:"dataLayer"
});
} catch(e) { }
});

var n = d.getElementsByTagName("script")[0],
s = d.createElement("script"),
f = function () { n.parentNode.insertBefore(s, n); };
s.type = "text/javascript";
s.async = true;
s.src = "https://mc.yandex.ru/metrika/tag.js";

if (w.opera == "[object Opera]") {
d.addEventListener("DOMContentLoaded", f, false);
} else { f(); }
})(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/37582800" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,\'script\',\'https://www.google-analytics.com/analytics.js\',\'ga\');

ga(\'create\', \'UA-86417424-1\', \'auto\');
ga(\'send\', \'pageview\');
</script>
<!-- End Google Analytics -->
<!--LiveInternet counter--><script type="text/javascript">
new Image().src = "//counter.yadro.ru/hit?r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";h"+escape(document.title.substring(0,150))+
";"+Math.random();</script><!--/LiveInternet-->',
                'created_at' => '2018-09-11 03:50:19',
                'updated_at' => '2018-10-09 16:40:55',
            ),
        ));
        
        
    }
}