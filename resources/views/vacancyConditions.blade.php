@extends('layouts.master')

@section('content')
    <section id="vacancies">
        <h1 class="heading">Работа у&nbsp;нас</h1>
        <div class="links">
            <a href="{{ URL::to('/about/vacancies') }}">Вакансии</a>
            <a href="{{ URL::to('/about/vacancies/conditions') }}" class="active">Условия работы</a>
        </div>
        <div class="masonry">
            <img src="/img/static/vacancies/grid/1.jpg">
            <img src="/img/static/vacancies/grid/2.jpg">
            <img src="/img/static/vacancies/grid/3.jpg">
            <div class="block-cell">
                <h2>Комфортный современный офис</h2>
                <p>Просторный и&nbsp;современный офис в&nbsp;стиле Лофт.</p>
                <p>Установлены кондиционеры во&nbsp;всех кабинетах.</p>
                <p>Удобные рабочие места.</p>
                <p>Уютая кухня.</p>
            </div>
            <img src="/img/static/vacancies/grid/4.jpg">
            <img src="/img/static/vacancies/grid/5.jpg">

            <div class="block-row">
                <img src="/img/static/vacancies/grid/payment.jpg">
                <div>
                    <h2>Стабильная оплата</h2>
                    <p>Заработная плата выплачивается стабильно 2&nbsp;раза в&nbsp;месяц, без задержек.</p>
                    <p>Официальная часть, бонусы, премии.</p>
                </div>
            </div>

            <img src="/img/static/vacancies/grid/6.jpg">
            <img class="block-tall" src="/img/static/vacancies/grid/7.jpg">
            <div class="block-cell">
                <h2>Яркая корпоративная жизнь</h2>
                <p>У&nbsp;нас очень насыщенная корпоративная жизнь.</p>
                <p>Вместе отмечаем все праздники, ходим в&nbsp;походы, участвуем в&nbsp;играх, активно проводим время.</p>
            </div>
            <img src="/img/static/vacancies/grid/8.jpg">
            <img src="/img/static/vacancies/grid/9.jpg">
            <img src="/img/static/vacancies/grid/10.jpg">
            <img class="block-tall" src="/img/static/vacancies/grid/11.jpg">
            <img src="/img/static/vacancies/grid/12.jpg">
            <div class="block-cell">
                <h2>Спортивные мероприятия</h2>
                В&nbsp;компании проводятся матчи по&nbsp;настольному теннису, настольному хоккею, футболу,
                а&nbsp;так&nbsp;же участвуем в&nbsp;марафонах, сплавах, велопрогулках
            </div>
            <img src="/img/static/vacancies/grid/13.jpg">

            <div class="block-row">
                <img src="/img/static/vacancies/grid/training.jpg">
                <div>
                    <h2>Обучение и&nbsp;карьерный рост</h2>
                    <p>
                        Предусмотрено обучение как во&nbsp;время рабочего процесса (наставничество), так и&nbsp;после него
                        (конференции, семинары, курсы).
                    </p>
                    <p>Вас ждет карьерный рост и&nbsp;разноплановые задачи</p>
                </div>
            </div>
        </div>
        <div class="resume-wrapper">
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
                <p>Задайте вопрос менеджеру по&nbsp;персоналу</p>
                <a class="phone" href="tel:{{ $contacts->phone }}">{{ $contacts->phone }}</a>
                <a class="email" href="mailto:{{ $contacts->email }}">Отправить резюме</a>
            </div>
        </div>
    </section>
@endsection
