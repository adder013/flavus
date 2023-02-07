<div class="delivery">
    <div class="text">
        <h2>Доставка по России, Казахстану, Беларуси, Киргизии и Армении</h2>
        <p>Торговый дом УЭТ осуществляет доставку товаров по всей России и странам Таможенного Союза. Мы сотрудничаем с заводами напрямую, поэтому оборудование будет доставлено к вам в максимально быстрые сроки минуя транзитные склады. Клиенты в Екатеринбурге могут воспользоваться услугой бесплатной доставки по городу или услугой самовывоза с нашего склада.</p>
        <p>Доставка в другие города осуществляется транспортными компаниями Деловые Линии и DPD, в другие страны - DPD. Если у вас есть предпочтения по отправке груза другой транспортной компанией, пожалуйста предупредите об этом вашего менеджера. Вы можете воспользоваться услугой доставки как до терминала, так и по адресу, в том числе на строящиеся объекты.</p>
    </div>
    @foreach ($deliveryFooter as $country => $deliveryCountry)
        @if ($country == 'Россия')
            <h3>Доставка по России</h3>
            <div class="list">
                @foreach ($deliveryCountry as $letter => $delivery)
                    <ul>
                        <li class="letter">{{ $letter }}</li>
                    @foreach ($delivery as $thisDelivery)
                        <li><a href="{{ URL::to('delivery/'.$thisDelivery->url) }}">{{ $thisDelivery->city }} и {{ $thisDelivery->region }}</a></li>
                    @endforeach
                    </ul>
                @endforeach
            </div>
        @endif
    @endforeach
    @foreach ($deliveryFooter as $country => $deliveryCountry)
        @if ($country == 'Казахстан')
            <h3>Доставка по Казахстану</h3>
            <div class="list">
                @foreach ($deliveryCountry as $letter => $delivery)
                    <ul>
                        <li class="letter">{{ $letter }}</li>
                    @foreach ($delivery as $thisDelivery)
                        <li><a href="{{ URL::to('delivery/'.$thisDelivery->url) }}">{{ $thisDelivery->city }} и {{ $thisDelivery->region }}</a></li>
                    @endforeach
                    </ul>
                @endforeach
            </div>
        @endif
    @endforeach
    @foreach ($deliveryFooter as $country => $deliveryCountry)
        @if ($country == 'Беларусь')
            <h3>Доставка по Беларуси</h3>
            <div class="list">
                @foreach ($deliveryCountry as $letter => $delivery)
                    <ul>
                        <li class="letter">{{ $letter }}</li>
                    @foreach ($delivery as $thisDelivery)
                        <li><a href="{{ URL::to('delivery/'.$thisDelivery->url) }}">{{ $thisDelivery->city }} и {{ $thisDelivery->region }}</a></li>
                    @endforeach
                    </ul>
                @endforeach
            </div>
        @endif
    @endforeach
</div>
