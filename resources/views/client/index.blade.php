@php
    $helps = \App\Models\Help::find(1);
@endphp
@extends('client.layout.layout')
{{-- Заголовок для страницы --}}
@section('title') {{ __('Главная страница') }} @endsection
{{-- Контент для страницы --}}
@section('content')
        <div class="main-page__container container">
            <div class="main-page__wrapper">
                <section class="main-page__about-section about-section">
                    <div class="about-section__inner">
                        <div class="about-section__img">
                            <img src="assets/img/eye-star.jpg" alt="" class="about-section__img-form">
                        </div>
                        <div class="about-section__gradient"></div>
                        <div class="about-section__content">
                            <h1 class="about-section__title">
                                ART
                                <br>SCHOOL
                                <br>FACTORY
                            </h1>
                            <button class="about-section__button">
                                Записаться
                            </button>
                        </div>
                    </div>
                </section>
                <section class="main-page__master master">
                    <div class="master__mon">
                        <img src="assets/img/moment.png" alt="" class="master__img">
                    </div>
                    <div class="master__inner">

                        <div class="master__content">
                            <div class="master__photo">
                                <img src="assets/img/cool-art.jpg" alt="" class="master__photo-form">
                            </div>
                            <div class="master__info">
                                <div class="master__info-blick">
                                    <h2 class="master__info-title">Проводить мастер класс<br>
                                        высококлассный преподователь
                                    </h2>
                                </div>

                                <h2 class="master__info-name">"Кто-то"</h2>
                                <p class="master__info-description">
                                    человек  исскуства граф <br>дизайна неповторимый <br>"кто то"
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="main-page__slide-section slide-section">
                    <div class="slide-section mySwiper">
                        <h2 class="slide-section__title">РАБОТА МАСТЕРА</h2>
                        <div class="slide-section__block"></div>
                        <div class="slide-section__wrapper swiper-wrapper">
                            <div class="slide-section__slide swiper-slide">
                                <img src="assets/img/artem.jpg" alt="" class="slide-section__slide-img">
                            </div>
                            <div class="slide-section__slide swiper-slide">
                                <img src="assets/img/blood-eye.jpg" alt="" class="slide-section__slide-img">
                            </div>
                            <div class="slide-section__slide swiper-slide">
                                <img src="assets/img/black.jpg" alt="" class="slide-section__slide-img">
                            </div>

                        </div>
                        <div class="slide-section__pagination"></div>
                    </div>
                </section>
                <section class="main-page__teach-section teach-section" id="teach">
                    <div class="teach-section__inner">
                        <h2 class="teach-section__title">Чем поможем</h2>
                        <div class="slide-section__block"></div>
                        <div class="teach-section__content">

                            <h4 class="teach-section__name">Мы учим</h4>
                            <p class="teach-section__description">Рисованию 2 д иллюстрации и преподаем множество курсов для прокачки скилла рисованию, а также 3д моделированию и Гейм деву</p>
                        </div>
                        <div class="slide-section__block"></div>
                        <div class="teach-section__content">

                            <h4 class="teach-section__name">На какие компании <br> можете работать</h4>
                            <p class="teach-section__description">После прохождения наших курсов вам будет открыт несколько путей для работы на знаменитые компании. </p>
                        </div>
                        <h3 class="teach-section__totle">С кем работаем</h3>
                        <div class="teach-section__company">
                            <img src="assets/img/cd-project.png" alt="" class="teach-section__img">
                            <img src="assets/img/bandai.png" alt="" class="teach-section__img">
                            <img src="assets/img/Mygames.png" alt="" class="teach-section__img">
                        </div>
                        <div class="slide-section__block"></div>
                    </div>
                </section>
                <section class="main-page__industries industries" id="industries">
                    <div class="industries__inner">
                        <h2 class="industries__title">Отрасли которые можешь научиться:</h2>
                        <div class="slide-section__block"></div>
                        <div class="industries__banner">
                            @forelse($industries as $industry)
                            <div class="industries__content">
                                <div class="industries__form">
                                    <img src="{{ Storage::url($industry->image) }}" alt="" class="industries__form-img">
                                    <div class="industries__form-text">
                                        <h2 class="industries__form-title">{{ $industry->title }}</h2>
                                        <p class="industries__form-description">{{ $industry->description }}</p>
                                    </div>
                                </div>
                                <div class="industries__content-img">
                                    <img src="{{ Storage::url($industry->back_img) }}" alt="" class="industries__img">
                                </div>

                            </div>
                            @empty
                                {{__('Ниче нету')}}
                            @endforelse
{{--                            <div class="industries__content">--}}

{{--                                <div class="industries__form">--}}
{{--                                    <img src="assets/img/3d-home.png" alt="" class="industries__form-img">--}}
{{--                                    <div class="industries__form-text">--}}
{{--                                        <h2 class="industries__form-title">3D МОДЕЛИРОВАНИЕ</h2>--}}
{{--                                        <p class="industries__form-description">3D модинг это отрасль где ты будешь скульптировать модельки в "Blender" и "Zbrush" сможете освоиться в костной анимации, рендере, эффектах и многих в другом, всё что тебе нужно это фантазия и мотивицая целый вагон.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="industries__content-img">--}}
{{--                                    <img src="assets/img/3d-insta.png" alt="" class="industries__img">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="industries__content">--}}

{{--                                <div class="industries__form">--}}
{{--                                    <img src="assets/img/witcher.jpg" alt="" class="industries__form-img">--}}
{{--                                    <div class="industries__form-text">--}}
{{--                                        <h2 class="industries__form-title">GAME DEV</h2>--}}
{{--                                        <p class="industries__form-description">Мы поможем тебе рисовать импортировать свои модельки в Unity которые ты хотел создать лично для себя или для друзей, также зарабатывать на них, курс научит тебя рисовать модельки и создавать открытый мир по больше карт серии игр ГТА, дорисовывать текстурки модельки уж ты точно сможешь.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="industries__content-img">--}}
{{--                                    <img src="assets/img/image.jpg" alt="" class="industries__img">--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </section>
                <section class="main-page__graduates graduates" id="graduates">
                    <div class="graduates__inner mySwiper">
                        <h2 class="graduates__title">РАБОТА НАШИХ ВЫПУСКНИКОВ</h2>
                        <div class="slide-section__block"></div>

                        <div class="graduates__content swiper-wrapper">
                            <div class="slide-section__slide swiper-slide">
                                <img src="assets/img/aqua.jpg" alt="" class="slide-section__slide-img">
                            </div>
                            <div class="slide-section__slide swiper-slide">
                                <img src="assets/img/chel.jpg" alt="" class="slide-section__slide-img">
                            </div>
                            <div class="slide-section__slide swiper-slide">
                                <img src="assets/img/nitik.jpg" alt="" class="slide-section__slide-img">
                            </div>
                            <div class="slide-section__slide swiper-slide">
                                <img src="assets/img/trigan.jpg" alt="" class="slide-section__slide-img">
                            </div>
                            <div class="slide-section__slide swiper-slide">
                                <img src="assets/img/madrid.jpg" alt="" class="slide-section__slide-img">
                            </div>
                        </div>
                        <div class="slide-section__pagination"></div>
                        <div class="slide-section__block"></div>
                    </div>
                </section>
                <section class="main-page__profi profi">
                    <div class="profi__inner">
                        <h2 class="profi__title">ЕСЛИ ВЫ ПРОФИ ТО МОЖЕМ ПОМОЧЬ ТАКЖЕ</h2>
                        <ul class="profi__card">
                            @forelse($profis as $profi)
                            <li class="profi__item">
                                <img src="{{ Storage::url($profi->image) }}" alt="" class="profi__img">
                                <div class="profi__text">
                                    <h3 class="profi__text-title">{{$profi->title}}</h3>
                                    <p class="profi__text-description">{{ $profi->description }}</p>
                                </div>
                            </li>
                            @empty
                                {{__('Ниче нету')}}
                            @endforelse
{{--                            <li class="profi__item">--}}
{{--                                <img src="assets/img/captoon.jpg" alt="" class="profi__img">--}}
{{--                                <div class="profi__text">--}}
{{--                                    <h3 class="profi__text-title">3D Работа</h3>--}}
{{--                                    <p class="profi__text-description">Новые фишки которые вам точно помогут</p>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li class="profi__item">--}}
{{--                                <img src="assets/img/leartes.jpg" alt="" class="profi__img">--}}
{{--                                <div class="profi__text">--}}
{{--                                    <h3 class="profi__text-title">Game Работа</h3>--}}
{{--                                    <p class="profi__text-description">можем дать пару советов для улучшения навыков</p>--}}
{{--                                </div>--}}
{{--                            </li>--}}
                        </ul>
                        <div class="profi__motivation-block">
                            <img src="assets/img/dudes.png" alt="" class="profi__block-img">
                            <div class="profi__motivation">

                            </div>
                        </div>

                        <p class="profi__description">Мы команда преподователей которых обучаем талантливых стундетов чтобы их будущее было яснее белого цвета и они могли жить не волнуясь а типичных проблемах заработка или поиска хобби в своей жизни, мы будем стараться не заскучать на наших курсах и делать её лишь интереснее вступайте в наше огромное семейство будем рады всем желающим</p>
                    </div>
                </section>
            </div>
        </div>
@endsection
