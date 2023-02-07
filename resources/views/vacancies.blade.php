@extends('layouts.master')

@section('content')
    <section id="vacancies">
        <h1 class="heading">Работа у&nbsp;нас</h1>
        <div class="links">
            <a href="{{ URL::to('/about/vacancies') }}" class="active">Вакансии</a>
            <a href="{{ URL::to('/about/vacancies/conditions') }}">Условия работы</a>
        </div>
        <div class="vacancies-wrapper">
            <div class="vacancies">
                <a href="{{ URL::to('/about/vacancies/active-sales-manager') }}">
                    Активный менеджер по&nbsp;продажам
                    <svg aria-hidden="true" data-prefix="fas" data-icon="chevron-right"
                        class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512">
                        <path fill="currentColor"
                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                        </path>
                    </svg>
                </a>
                <a href="{{ URL::to('/about/vacancies/sales-manager') }}">
                    Менеджер по продажам
                    <svg aria-hidden="true" data-prefix="fas" data-icon="chevron-right"
                        class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512">
                        <path fill="currentColor"
                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                        </path>
                    </svg>
                </a>
                <a href="{{ URL::to('/about/vacancies/content-manager') }}">
                    Контент менеджер
                    <svg aria-hidden="true" data-prefix="fas" data-icon="chevron-right"
                        class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512">
                        <path fill="currentColor"
                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                        </path>
                    </svg>
                </a>
            </div>
            <div class="sidebar">
                <h2>Как работают в&nbsp;ТД&nbsp;УЭТ</h2>
                <p>
                    Динамика, с&nbsp;которой развиваются наши сотрудники, позволяет нам предоставлять качественный сервис
                    нашим клиентам и&nbsp;успешно работать с&nbsp;крупными производственными компаниями.
                </p>
                <p>
                    Поэтому основной критерий при найме на&nbsp;работу&nbsp;&mdash; способность обучаться, развивать свои
                    навыки и&nbsp;накапливать опыт, а&nbsp;так&nbsp;же внимательность к&nbsp;деталям
                    и&nbsp;клиентоориентированность.
                </p>
                <figure class="send-resume">
                    <h3>Хотите у&nbsp;нас работать?</h3>
                    <p>
                        Мы&nbsp;всегда рады встретить в&nbsp;своих рядах амбициозных профессиональных сотрудников!
                    </p>
                    <a href="mailto:{{ $contacts->email }}">
                        <img src="/svg/mail.svg">
                        Откликнуться
                    </a>
                </figure>
                <div class="contact">
                    <p>Задайте вопрос менеджеру по персоналу</p>
                    <a class="phone" href="tel:{{ $contacts->phone }}">{{ $contacts->phone }}</a>
                    <a class="email" href="mailto:{{ $contacts->email }}">Отправить резюме</a>
                </div>
            </div>
        </div>
    </section>
@endsection
