<div class="left-side">
    <a href="{{ URL::to('/') }}" class="logo-wrap">
        <img src="{{ url('/img/logo-short.png') }}" alt="Торговый дом УЭТ">
        <span>Торговый дом УЭТ</span>
    </a>
    <div class="contact">
        <h3>Офис продаж</h3>
        <span>{{ $contacts->post_address }}</span>
        <div class="email"><a href="mailto:{{ $contacts->email }}">{{ $contacts->email }}</a></div>
        <div class="phone"><span>Звоните: с 9-00 до 18-00</span><a href="tel:+{{ preg_replace('/[^0-9]/', '', $contacts->phone) }}">{{ $contacts->phone }}</a></div>
        <h3>Склад в Екатеринбурге</h3>
        <span>{{ $contacts->storage_address }}</span>
        <div class="phone"><span>Звоните: с 9-00 до 18-00</span><a href="tel:+{{ preg_replace('/[^0-9]/', '', $contacts->storage_phone) }}">{{ $contacts->storage_phone }}</a></div>
	</div>
</div>
<div class="right-side">
    <nav>
        <ul>
            <li><a href="{{ URL::to('about') }}">О компании</a></li>
            <li><a href="{{ URL::to('customers/howtobuy') }}">Как сделать заказ</a></li>
            <!-- <li><a href="{{ URL::to('shkafy-individualnoi-sborki') }}">Сборка шкафов на заказ</a></li> -->
            <li><a href="{{ URL::to('about/news') }}">Новости ТД УЭТ</a></li>
            <li><a href="{{ URL::to('delivery') }}">Доставка</a></li>
            <!-- <li><a href="https://www.uetel.ru/">Наши услуги</a></li> -->
            <li><a href="{{ URL::to('catalog') }}">Каталог</a></li>
            <li><a href="{{ URL::to('customers/howtopay') }}">Оплата</a></li>
            <li><a href="{{ URL::to('contacts') }}">Контакты</a></li>
            <li><a href="{{ URL::to('about/partners') }}">Наши партнеры</a></li>
            <li><a href="{{ URL::to('customers/warranty') }}">Гарантия</a></li>
		</ul>
    </nav>
    <div class="socials">
		<div class="policy">
			<div><span><a href="{{ URL::to('customers/privacypolicy') }}">Политика защиты и обработки персональных данных</a></span></div>
			<div><span><a href="{{ URL::to('customers/agreement') }}">Согласие на обработку персональных данных</a></span></div>
		</div>
        <div class="links">
            <a href="https://t.me/td_yet" target="_blank" rel="noreferrer"><svg fill="currentColor" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="50px" height="50px"><path d="M25,2c12.703,0,23,10.297,23,23S37.703,48,25,48S2,37.703,2,25S12.297,2,25,2z M32.934,34.375	c0.423-1.298,2.405-14.234,2.65-16.783c0.074-0.772-0.17-1.285-0.648-1.514c-0.578-0.278-1.434-0.139-2.427,0.219	c-1.362,0.491-18.774,7.884-19.78,8.312c-0.954,0.405-1.856,0.847-1.856,1.487c0,0.45,0.267,0.703,1.003,0.966	c0.766,0.273,2.695,0.858,3.834,1.172c1.097,0.303,2.346,0.04,3.046-0.395c0.742-0.461,9.305-6.191,9.92-6.693	c0.614-0.502,1.104,0.141,0.602,0.644c-0.502,0.502-6.38,6.207-7.155,6.997c-0.941,0.959-0.273,1.953,0.358,2.351	c0.721,0.454,5.906,3.932,6.687,4.49c0.781,0.558,1.573,0.811,2.298,0.811C32.191,36.439,32.573,35.484,32.934,34.375z"/></svg></a>
            <!-- <a href="https://vk.com/uralenergotel" target="_blank" rel="noreferrer"><svg aria-hidden="true" data-prefix="fab" data-icon="vk" class="svg-inline--fa fa-vk fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M545 117.7c3.7-12.5 0-21.7-17.8-21.7h-58.9c-15 0-21.9 7.9-25.6 16.7 0 0-30 73.1-72.4 120.5-13.7 13.7-20 18.1-27.5 18.1-3.7 0-9.4-4.4-9.4-16.9V117.7c0-15-4.2-21.7-16.6-21.7h-92.6c-9.4 0-15 7-15 13.5 0 14.2 21.2 17.5 23.4 57.5v86.8c0 19-3.4 22.5-10.9 22.5-20 0-68.6-73.4-97.4-157.4-5.8-16.3-11.5-22.9-26.6-22.9H38.8c-16.8 0-20.2 7.9-20.2 16.7 0 15.6 20 93.1 93.1 195.5C160.4 378.1 229 416 291.4 416c37.5 0 42.1-8.4 42.1-22.9 0-66.8-3.4-73.1 15.4-73.1 8.7 0 23.7 4.4 58.7 38.1 40 40 46.6 57.9 69 57.9h58.9c16.8 0 25.3-8.4 20.4-25-11.2-34.9-86.9-106.7-90.3-111.5-8.7-11.2-6.2-16.2 0-26.2.1-.1 72-101.3 79.4-135.6z"></path></svg></a>
            <a href="https://www.youtube.com/channel/UCAEO89tnU7Fi9lzkZec_aqA" target="_blank" rel="noreferrer"><svg aria-hidden="true" data-prefix="fab" data-icon="youtube" class="svg-inline--fa fa-youtube fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg></a> -->
        </div>
    </div>
</div>
