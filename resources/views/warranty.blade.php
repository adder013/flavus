@extends('layouts.master')

@section('content')
<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('/') }}"><span itemprop="name">Главная</span></a>
        <meta itemprop="position" content="1">
        <span>|</span>
    </div>
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('customers') }}"><span itemprop="name">Покупателям</span></a>
        <meta itemprop="position" content="2">
        <span>|</span>
    </div>
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('customers/warranty') }}"><span itemprop="name">Гарантия</span></a>
        <meta itemprop="position" content="3">
        <span>|</span>
    </div>
</div>
<div class="warranty-wrap">
    <h1>Гарантия</h1>
    <div class="order">
        <div class="img-wrap"><img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}" data-src="{{ url('/img/static/warranty.svg') }}" alt="Гарантия"></div>
        <div class="info">
            <p>Гарантийный срок на оборудование, купленное в торговом доме УЭТ, соответствует гарантийным срокам, предоставляемым на этот тип товара Поставщиком или производителем</p>
            <div class="greetings">Гарантийному ремонту подлежит оборудование, которое:</div>
            <ul>
                <li>Было приобретено у Поставщика.</li>
                <li>Использовалось с соблюдением условий эксплуатации.</li>
                <li>Не содержит следов несанкционированного вскрытия (ремонта).</li>
                <li>Не имеет механических повреждений, дефектов, возникших в результате ненадлежащих условый транспортировки или хранения.</li>
            </ul>
            <p>В случае выхода из строя оборудования, подлежащего гарантийному ремонту, в установленный гарантийный срок, Покупатель/Дилер обращается в сервисный центр Поставщика/Производителя и заполняет специальную форму-заявку на осуществление гарантийного ремонта.</p>
            <p>В случае необходимости осуществления гарантийного ремонта оборудования срок ремонта определяется в соответствии с правилами, установленными производителем без учета сроков транспортировки неисправного оборудования в адрес сервис-центра производителя и обратно.</p>
            <p>Отремонтированное оборудование доставляется вместе с очередной партией поставляемого оборудования или иным образом по соглашению сторон.</p>
            <div class="suggestion">Вы всегда сможете с нами связаться и получить<br>подробную консультацию по телефону:</div>
            <a class="call" href="tel:+{{ preg_replace('/[^0-9]/', '', $contacts->phone) }}">{{ $contacts->phone }}</a>
            <div class="work_hours">Звоните: с 09:00 до 18:00</div>
        </div>
    </div>
</div>
<script>
    var bLazy = new Blazy();
</script>
@endsection
