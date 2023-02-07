@extends('layouts.master')

@section('content')
    <section id="vacancies">
        <h1 class="heading">
            Наши вакансии
            <a class="back-button" href="{{ URL::to('/about/vacancies') }}">
                <img src="/img/static/arrow-left.png" alt="Стрелка назад">
            </a>
        </h1>
        <div class="header">
            <h2 class="vacancy-name">
                @if (basename(URL::current()) === 'active-sales-manager')
                    Активный менеджер по продажам
                @elseif (basename(URL::current()) === 'sales-manager')
                    Менеджер по продажам
                @elseif (basename(URL::current()) === 'content-manager')
                    Контент менеджер
                @endif
            </h2>
        </div>
        @if (basename(URL::current()) === 'active-sales-manager')
            <section class="description">
                <div>
                    <p>Требуемый опыт работы: не&nbsp;требуется</p>
                    <p>Полная занятость, полный день</p>
                </div>
                <div>
                    <h3>Ваша работа:</h3>
                    <ul>
                        <li>
                            работа с&nbsp;клиентами. Ведь многие компании не&nbsp;знают, что хотят с&nbsp;нами работать,
                            поэтому
                            их&nbsp;нужно найти и&nbsp;позвонить;
                        </li>
                        <li>сопроводить клиента до&nbsp;завершения реализации;</li>
                        <li>выстраивание партнерских отношений с&nbsp;клиентами.</li>
                    </ul>
                </div>
                <div>
                    <h3>Критерии для выбора:</h3>
                    <ul>
                        <li>умение правильно говорить;</li>
                        <li>умение доносить свои мысли и&nbsp;вести переговоры;</li>
                        <li>умение запоминать, анализировать и&nbsp;понимать информацию;</li>
                        <li>умение ответственно выполнять задачи;</li>
                        <li>преимуществом будет, если есть опыт работы с&nbsp;клиентами, в&nbsp;сфере энергетики
                            и&nbsp;водоснабжения.</li>
                    </ul>
                </div>
                <div>
                    <h3>Что дает компания ТД&nbsp;УЭТ:</h3>
                    <ul>
                        <li>официальное трудоустройство;</li>
                        <li>стабильность в&nbsp;системе мотивации (оклад + %);</li>
                        <li>
                            обучение по&nbsp;продукции, а&nbsp;так&nbsp;же все возможности для развития и&nbsp;обучения,
                            поддержка
                            руководителя на&nbsp;всех этапах продаж;
                        </li>
                        <li>дружный коллектив, разнообразная и&nbsp;интересная корпоративная жизнь;</li>
                        <li>удобный, комфортный и&nbsp;современный офис&nbsp;&mdash; ул. Малышева, 164.</li>
                    </ul>
                </div>
            </section>
        @elseif (basename(URL::current()) === 'content-manager')
            <section class="description">
                <div>
                    <h3>Ваша работа:</h3>
                    <ul>
                        <li>Заполнение, редактирование страниц сайта;</li>
                        <li>Загрузка баннеров, размещение и обработка изображений;</li>
                        <li>Работа с административной частью сайта по корректировке текстового материала;</li>
                        <li>Размещение товаров на агрегаторах (тематических маркетплейсах).</li>
                    </ul>
                </div>
                <div>
                    <h3>Критерии для выбора:</h3>
                    <ul>
                        <li>Базовые навыки работы в Microsoft office, Photoshop/Corel;</li>
                        <li>Внимательность и усидчивость, чтобы быстрее вникнуть в рабочие процессы;</li>
                        <li>Готовность работать в команде и нести ответственность за результат.</li>
                    </ul>
                </div>
                <div>
                    <h3>Условия:</h3>
                    <ul>
                        <li>Официальное трудоустройство;</li>
                        <li>Возможность творческой реализации;</li>
                        <li>Обучение работе в программах и администрировании Интернет-магазина;</li>
                        <li>Дружный коллектив, разнообразная и&nbsp;интересная корпоративная жизнь;</li>
                        <li>Удобный, комфортный и&nbsp;современный офис&nbsp;&mdash; ул. Малышева, 164.</li>
                    </ul>
                </div>
            </section>
            @elseif (basename(URL::current()) === 'sales-manager')
            <section class="description">
                <div>
                    <p>Требуемый опыт работы: 1&ndash;3 года</p>
                    <p>Полная занятость, полный день</p>
                </div>
                <div>
                    <h3>Обязанности:</h3>
                    <ul>
                        <li>
                            Ведение переговоров с&nbsp;Клиентами (работа с&nbsp;действующей клиентской базой
                            и&nbsp;привлечение новых Клиентов);
                        </li>
                        <li>Выставление счетов и&nbsp;коммерческих предложений;</li>
                        <li>Сопровождение клиента до&nbsp;завершения реализации;</li>
                    </ul>
                </div>
                <div>
                    <h3>Требования:</h3>
                    <ul>
                        <li>Опыт работы в&nbsp;сфере продаж (опыт активных продаж в&nbsp;сфере В2В желательно);</li>
                        <li>Образование высшее;</li>
                        <li>Навык ведения переговоров;</li>
                        <li>Техническая грамотность, широкий кругозор;</li>
                        <li>Активность, позитивность, желание и&nbsp;готовность развиваться и&nbsp;обучаться.</li>
                    </ul>
                </div>
                <div>
                    <h3>Условия:</h3>
                    <ul>
                        <li>Официальное трудоустройство;</li>
                        <li>Стабильная и прозрачная система мотивации (оклад + % от продаж);</li>
                        <li>
                            Обучение по&nbsp;продукции, а&nbsp;также все возможности для развития и&nbsp;обучения, поддержка
                            руководителя на&nbsp;всех этапах продаж;
                        </li>
                        <li>Дружный коллектив, разнообразная и&nbsp;интересная корпоративная жизнь;</li>
                        <li>Удобный, комфортный и&nbsp;современный офис&nbsp;&mdash; ул. Малышева, 164.</li>
                    </ul>
                </div>
            </section>
        @endif
        <a href="mailto:{{ $contacts->email }}" class="send-resume-btn">
            <img src="/svg/mail.svg">Откликнуться
        </a>
        </figure>
        {{-- <div class="form">
            <h3 class="form-heading">Откликнуться на вакансию</h3>
            <form method="POST" action="/send-resume">
                <div class="column">
                    <input type="text" autocomplete="On" placeholder="Ваше имя:">
                    <input type="text" autocomplete="On" placeholder="Ваша фамилия:">
                    <input type="email" autocomplete="On" placeholder="Электронная почта:">
                    <div class="attachment">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43 43">
                            <path fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="2"
                                d="M32 19.1L21.3 29.8s-4.1 4.3-8.2.2 0-8.1 0-8.1L24 11s2.8-2.1 5.5.5.3 5.4.3 5.4L21 25.7s-2 1.7-3.5.2-.1-3.5-.1-3.5l7.3-7.3" />
                        </svg>
                        <label for="file-upload">Прикрепить файл</label>
                        <input class="hidden" type="file" id="file-upload">
                    </div>
                    <label class="agreement" for="agreement">
                        <input type="checkbox" id="agreement" required>
                        Согласен с обработкой персональных данных
                    </label>
                </div>
                <div class="column">
                    <textarea name="message" maxlength="255" placeholder="Ваше сообщение"></textarea>
                    <button class="submit" type="submit" href="mailto:{{ $contacts->email }}">
                        <img src="/svg/mail.svg">
                        Отправить резюме
                    </button>
                </div>
            </form>
        </div> --}}
    </section>
@endsection
