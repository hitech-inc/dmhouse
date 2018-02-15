
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=1200"/>
    <title>Dream House - Ремонт под ключ</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/css/normalize.css"/>
    <link rel="stylesheet" type="text/css" href="/css/main.min.css"/>
    <link rel="stylesheet" type="text/css" href="/css/styles.css"/>

    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <!-- Google Tag Manager -->
    <!-- End Google Tag Manager -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5GRRK7Q"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="wrapper">

    <header class="header">
        <div class="wrapper">
            <a href="/" class="header__logo">
                <img src="/img/logo.png" alt="" style="margin-top: 200px; height: 225px;">
                <!-- <span>Ремонт и отделка «под ключ»</span> -->
            </a>

            <div class="header__contact">
                <a href="tel:+78122431187" class="header__phone">+7 (775) 273-45-38</a>
                <span>Будем рады Вашему звонку</span>
            </div>
        </div>
    </header>

    <main>

        <div class="home">
            <div class="wrapper">
                <div class="home__container">
                    <h1 class="home__title">Профессиональный<br>ремонт Вашей квартиры,<br>дома, офиса «под ключ» в городе Шымкент</h1>
                    <p class="home__subtitle">точно в срок с гарантией 12 месяцев</p>
                </div>

                <form class="home__calc" action="/request" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="rtype" value="calculator">
                    <input type="hidden" name="ltype" value="Запрос на калькуляцию">
                    <input type="hidden" name="thx" value="#thx1">

                    <h3 class="home__ttl">Рассчитайте<br> точную стоимость ремонта</h3>
                    <select name="object_type">
                        <option></option>
                        <option value="Квартира">Квартира</option>
                        <option value="Дом">Дом</option>
                        <option value="Офис">Офис</option>
                        <option value="Комерческое помещение">Комерческое помещение</option>
                        <option value="Другой объект">Другой объект</option>
                    </select>
                    <select name="object_area">
                        <option></option>
                        <option value="до 30 м2">до 30 м2</option>
                        <option value="от 30 до 50 м2">от 30 до 50 м2</option>
                        <option value="от 50 до 70 м2">от 50 до 70 м2</option>
                        <option value="от 70 до 100 м2">от 70 до 100 м2</option>
                        <option value="от 100 до 150 м2">от 100 до 150 м2</option>
                        <option value="от 150 до 200 м2">от 150 до 200 м2</option>
                        <option value="свыше 200 м2">свыше 200 м2</option>
                    </select>
                    <select name="repair_type">
                        <option></option>
                        <option value="Под ключ">"Под ключ"</option>
                        <option value="Чистовой">Чистовой</option>
                        <option value="Черновой">Черновой</option>
                        <option value="Частичный">Частичный</option>
                    </select>
                    <textarea name="comment" placeholder="Сроки ремонта и Ваш комментарий"></textarea>
                    <a href="#calc" class="popup-link btn btn_dark">Рассчитать стоимость</a>
                    <p class="home__text">Не успеем - вернем деньги!</p>
                </form>
            </div>
        </div>

        <div class="why">
            <h2 class="why__title">Почему ремонт лучше заказывать<br>в компании «Dream House»?</h2>
            <div class="wrapper">
                <div class="why__item"><img src="/img/icon-01.png" alt="">
                    <h4 class="why__ttl">Точные сроки</h4>
                    <p class="why__text">Сделаем ремонт в срок - <br>или бесплатно</p>
                </div>
                <div class="why__item"><img src="/img/icon-02.png" alt="">
                    <h4 class="why__ttl">Гарантия</h4>
                    <p class="why__text">На все виды работ - <br>гарантия 12 месяцев</p>
                </div>
                <div class="why__item"><img src="/img/icon-03.png" alt="">
                    <h4 class="why__ttl">Высокое качество</h4>
                    <p class="why__text">В наших бригадах - <br>только профессионалы своего дела</p>
                </div>
                <div class="why__item"><img src="/img/icon-04.png" alt="">
                    <h4 class="why__ttl">«Под ключ»</h4>
                    <p class="why__text">От голых стен <br>до новоселья</p>
                </div>
            </div>
        </div>
        
        <div class="action">
            <div class="wrapper">
                <h2 class="action__title">
                    Специальное<br>
                    предложение для Вас -<br>
                    просчет сметы Бесплатно!
                </h2>
                <p class="action__text">Мы прекрасно понимаем, как сложно бывает определиться - какой именно ремонт Вам нужен<br>и сколько он должен стоить.</p>
                <p class="action__text">На что лучше потратить деньги - на перепланировку гостинной или на переоборудование<br>ванной? Постелить ковролин или линолеум? Установить пластиковые окна или металлическую<br>дверь? А может быть - и то, и другое, но сэкономить на выравнивании стен?</p>
                <p class="action__text">Чтобы Вам не приходилось ломать голову, наш специалист сделает для Вас несколько вариантов сметы - <br>с разным составом работ, разными материалами, разными сроками... А Вам остается только выбрать вариант, который подходит под все Ваши пожелания!</p>
                <img src="/img/pic-01.png" alt="" class="action__question">
            </div>
        </div>

        <div class="call">
            <div class="wrapper">
                <h2 class="call__title">Закажите замер - это бесплатно!</h2>
                <form class="call__form" action="/request" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="rtype" value="zamer">
                    <input type="hidden" name="ltype" value="Запрос на замер">
                    <input type="hidden" name="thx" value="#thx1">
                    <input type="tel" name="phone" placeholder="+7 (___) ___-__-__">
                    <button class="btn" type="submit">Заказать замер</button>
                </form>
                <div class="call__tooltip tooltip">

                    <div class="tooltip__data">
                        <h4 class="tooltip__title">Почему качественный просчет сметы так важен?</h4>
                        <p class="tooltip__text">Именно на этапе замера и расчета сметы закладывается успех будущего ремонта. От того, насколько верно рассчитаны объемы материалов зависят сроки и стоимость работ. Если заказать меньший объем, то в работах возникнет пауза, а Вам придется доплачивать за материалы. А излишки Вы оплачиваете из своего кармана, хоть они Вам и не нужны.</p>
                        <p class="tooltip__text">Наши специалисты обращают особое внимание на точность сметы. Благодаря этому мы гарантируем, что сроки работ и смета останутся неизменными, а лишних материалов приобретено не будет.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="quality">
            <div class="wrapper">
                <h2 class="quality__title">Оцените качество нашей работы своими глазами - <br>посмотрите на фотографии сделанных нами ремонтов</h2>
                <div class="quality__container">
                    <div class="quality__item">
                        <a href="/img/photo/1/1.JPG" class="zoom" data-fancybox="gallery_1"><div class="quality__border"><img src="/img/photo/1.png" alt=""></div></a>
                        <a href="/img/photo/1/2.JPG" class="zoom" data-fancybox="gallery_1"></a>
                        <a href="/img/photo/1/3.JPG" class="zoom" data-fancybox="gallery_1"></a>
                        <a href="/img/photo/1/4.JPG" class="zoom" data-fancybox="gallery_1"></a>
                        <a href="/img/photo/1/5.JPG" class="zoom" data-fancybox="gallery_1"></a>

                        <span class="quality__address">Проспект Тауке-Хана</span>
                    </div>
                    <div class="quality__item">
                        <a href="/img/photo/2/1.JPG" class="zoom" data-fancybox="gallery_2"><div class="quality__border"><img src="/img/photo/2.png" alt=""></div></a>
                        <a href="/img/photo/2/2.JPG" class="zoom" data-fancybox="gallery_2"></a>
                        <a href="/img/photo/2/3.JPG" class="zoom" data-fancybox="gallery_2"></a>
                        <a href="/img/photo/2/4.JPG" class="zoom" data-fancybox="gallery_2"></a>
                        <a href="/img/photo/2/5.JPG" class="zoom" data-fancybox="gallery_2"></a>
                        <a href="/img/photo/2/6.JPG" class="zoom" data-fancybox="gallery_2"></a>
                        <a href="/img/photo/2/7.JPG" class="zoom" data-fancybox="gallery_2"></a>
                        <a href="/img/photo/2/8.JPG" class="zoom" data-fancybox="gallery_2"></a>

                        <span class="quality__address">Улица Байтурсынова</span>
                    </div>
                    <div class="quality__item">
                        <a href="/img/photo/3/1.JPG" class="zoom" data-fancybox="gallery_3"><div class="quality__border"><img src="/img/photo/3.png" alt=""></div></a>
                        <a href="/img/photo/3/2.JPG" class="zoom" data-fancybox="gallery_3"></a>
                        <a href="/img/photo/3/3.JPG" class="zoom" data-fancybox="gallery_3"></a>
                        <a href="/img/photo/3/4.JPG" class="zoom" data-fancybox="gallery_3"></a>
                        <a href="/img/photo/3/5.JPG" class="zoom" data-fancybox="gallery_3"></a>
                        <a href="/img/photo/3/6.JPG" class="zoom" data-fancybox="gallery_3"></a>
                        <a href="/img/photo/3/7.JPG" class="zoom" data-fancybox="gallery_3"></a>
                        <a href="/img/photo/3/8.JPG" class="zoom" data-fancybox="gallery_3"></a>
                        <a href="/img/photo/3/9.JPG" class="zoom" data-fancybox="gallery_3"></a>
                        <a href="/img/photo/3/10.JPG" class="zoom" data-fancybox="gallery_3"></a>
                        <a href="/img/photo/3/11.JPG" class="zoom" data-fancybox="gallery_3"></a>
                        <a href="/img/photo/3/12.JPG" class="zoom" data-fancybox="gallery_3"></a>
                        <a href="/img/photo/3/13.JPG" class="zoom" data-fancybox="gallery_3"></a>
                        <a href="/img/photo/3/14.JPG" class="zoom" data-fancybox="gallery_3"></a>
                        <a href="/img/photo/3/15.JPG" class="zoom" data-fancybox="gallery_3"></a>
                        <a href="/img/photo/3/16.JPG" class="zoom" data-fancybox="gallery_3"></a>
                        <a href="/img/photo/3/17.JPG" class="zoom" data-fancybox="gallery_3"></a>
                        <a href="/img/photo/3/18.JPG" class="zoom" data-fancybox="gallery_3"></a>

                        <span class="quality__address">Микрорайон Нурсат</span>
                    </div>
                    <div class="quality__item">
                        <a href="/img/photo/res1.jpg" class="zoom" data-fancybox="gallery_4"><div class="quality__border"><img src="/img/photo/res1.jpg" alt="" style="width: 497px;"></div></a>
                        <a href="/img/photo/res2.jpg" class="zoom" data-fancybox="gallery_4"></a>
                        <a href="/img/photo/res3.jpg" class="zoom" data-fancybox="gallery_4"></a>
                        <!-- <a href="/img/photo/4/4.JPG" class="zoom" data-fancybox="gallery_4"></a>
                        <a href="/img/photo/4/5.JPG" class="zoom" data-fancybox="gallery_4"></a>
                        <a href="/img/photo/4/6.JPG" class="zoom" data-fancybox="gallery_4"></a>
                        <a href="/img/photo/4/7.JPG" class="zoom" data-fancybox="gallery_4"></a>
                        <a href="/img/photo/4/8.JPG" class="zoom" data-fancybox="gallery_4"></a>
                        <a href="/img/photo/4/9.JPG" class="zoom" data-fancybox="gallery_4"></a>
                        <a href="/img/photo/4/10.JPG" class="zoom" data-fancybox="gallery_4"></a>
                        <a href="/img/photo/4/11.JPG" class="zoom" data-fancybox="gallery_4"></a> -->

                        <span class="quality__address">Проспект Республики</span>
                    </div>
                </div>

                <div class="quality__box">
                    <div class="quality__container">
                        <div class="quality__item">
                            <a href="/img/photo/5/1.JPG" class="zoom" data-fancybox="gallery_1"><div class="quality__border"><img src="/img/photo/5.png" alt=""></div></a>
                            <a href="/img/photo/5/2.JPG" class="zoom" data-fancybox="gallery_1"></a>
                            <a href="/img/photo/5/3.JPG" class="zoom" data-fancybox="gallery_1"></a>
                            <a href="/img/photo/5/4.JPG" class="zoom" data-fancybox="gallery_1"></a>
                            <a href="/img/photo/5/5.JPG" class="zoom" data-fancybox="gallery_1"></a>
                            <a href="/img/photo/5/6.JPG" class="zoom" data-fancybox="gallery_1"></a>
                            <a href="/img/photo/5/7.JPG" class="zoom" data-fancybox="gallery_1"></a>
                            <a href="/img/photo/5/8.JPG" class="zoom" data-fancybox="gallery_1"></a>
                            <a href="/img/photo/5/9.JPG" class="zoom" data-fancybox="gallery_1"></a>
                            <a href="/img/photo/5/10.JPG" class="zoom" data-fancybox="gallery_1"></a>

                            <span class="quality__address">Улица Иляева</span>
                        </div>
                        <div class="quality__item">
                            <a href="/img/photo/6/1.JPG" class="zoom" data-fancybox="gallery_2"><div class="quality__border"><img src="/img/photo/6.png" alt=""></div></a>
                            <a href="/img/photo/6/2.JPG" class="zoom" data-fancybox="gallery_2"></a>
                            <a href="/img/photo/6/3.JPG" class="zoom" data-fancybox="gallery_2"></a>
                            <a href="/img/photo/6/4.JPG" class="zoom" data-fancybox="gallery_2"></a>
                            <a href="/img/photo/6/5.JPG" class="zoom" data-fancybox="gallery_2"></a>
                            <a href="/img/photo/6/6.JPG" class="zoom" data-fancybox="gallery_2"></a>
                            <a href="/img/photo/6/7.JPG" class="zoom" data-fancybox="gallery_2"></a>
                            <a href="/img/photo/6/8.JPG" class="zoom" data-fancybox="gallery_2"></a>
                            <a href="/img/photo/6/9.JPG" class="zoom" data-fancybox="gallery_2"></a>

                            <span class="quality__address">Улица Желтоксан</span>
                        </div>
                        <!-- <div class="quality__item">
                            <a href="/img/photo/3/1.JPG" class="zoom" data-fancybox="gallery_3"><div class="quality__border"><img src="/img/photo/3.png" alt=""></div></a>
                            <a href="/img/photo/3/2.JPG" class="zoom" data-fancybox="gallery_3"></a>
                            <a href="/img/photo/3/3.JPG" class="zoom" data-fancybox="gallery_3"></a>
                            <a href="/img/photo/3/4.JPG" class="zoom" data-fancybox="gallery_3"></a>
                            <a href="/img/photo/3/5.JPG" class="zoom" data-fancybox="gallery_3"></a>
                            <a href="/img/photo/3/6.JPG" class="zoom" data-fancybox="gallery_3"></a>
                            <a href="/img/photo/3/7.JPG" class="zoom" data-fancybox="gallery_3"></a>
                            <a href="/img/photo/3/8.JPG" class="zoom" data-fancybox="gallery_3"></a>
                            <a href="/img/photo/3/9.JPG" class="zoom" data-fancybox="gallery_3"></a>
                            <a href="/img/photo/3/10.JPG" class="zoom" data-fancybox="gallery_3"></a>
                            <a href="/img/photo/3/11.JPG" class="zoom" data-fancybox="gallery_3"></a>
                            <a href="/img/photo/3/12.JPG" class="zoom" data-fancybox="gallery_3"></a>
                            <a href="/img/photo/3/13.JPG" class="zoom" data-fancybox="gallery_3"></a>
                            <a href="/img/photo/3/14.JPG" class="zoom" data-fancybox="gallery_3"></a>
                            <a href="/img/photo/3/15.JPG" class="zoom" data-fancybox="gallery_3"></a>
                            <a href="/img/photo/3/16.JPG" class="zoom" data-fancybox="gallery_3"></a>
                            <a href="/img/photo/3/17.JPG" class="zoom" data-fancybox="gallery_3"></a>
                            <a href="/img/photo/3/18.JPG" class="zoom" data-fancybox="gallery_3"></a>

                            <span class="quality__address">Улица Горская</span>
                        </div>
                        <div class="quality__item">
                            <a href="/img/photo/4/1.JPG" class="zoom" data-fancybox="gallery_4"><div class="quality__border"><img src="/img/photo/4.png" alt=""></div></a>
                            <a href="/img/photo/4/2.JPG" class="zoom" data-fancybox="gallery_4"></a>
                            <a href="/img/photo/4/3.JPG" class="zoom" data-fancybox="gallery_4"></a>
                            <a href="/img/photo/4/4.JPG" class="zoom" data-fancybox="gallery_4"></a>
                            <a href="/img/photo/4/5.JPG" class="zoom" data-fancybox="gallery_4"></a>
                            <a href="/img/photo/4/6.JPG" class="zoom" data-fancybox="gallery_4"></a>
                            <a href="/img/photo/4/7.JPG" class="zoom" data-fancybox="gallery_4"></a>
                            <a href="/img/photo/4/8.JPG" class="zoom" data-fancybox="gallery_4"></a>
                            <a href="/img/photo/4/9.JPG" class="zoom" data-fancybox="gallery_4"></a>
                            <a href="/img/photo/4/10.JPG" class="zoom" data-fancybox="gallery_4"></a>
                            <a href="/img/photo/4/11.JPG" class="zoom" data-fancybox="gallery_4"></a>

                            <span class="quality__address">Улица Наставников</span>
                        </div> -->
                    </div>
                </div>

                <a href="#" class="quality__more">Больше наших ремонтов</a>

                <div class="quality__tooltip tooltip">

                    <div class="tooltip__data">
                        <h3 class="tooltip__title">Как отличить качественный ремонт<br> по фотографиям?</h3>

                        <p class="tooltip__text">Самое главное при оценке ремонта по фотографиям - отсечь постановочные кадры. При ремонте абсолютно «вылизанная» фотография сделанная на высоком профессиональном уровне - большая редкость. Ведь график сбивать нельзя, а лишний человек на объекте мешает рабочим. Так что не верьте абсолютной чистоте и идеально выставленному свету: это не ремонт, а постановка.</p>
                        <p class="tooltip__text">Второе, на что нужно обратить внимание при оценке качества ремонта - это состояние поверхностей. Они должны быть абсолютно ровными! Стены, пол, потолок... Углы также должны быть прямыми (если, конечно, дизайн-проектом не предусмотрено иное решение).</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="economy">
            <div class="coins" data-depth="0.2"><img src="/img/coins.png" alt=""></div>
            <div class="wrapper">
                <h2 class="economy__title">Почему на ремонте не стоит экономить?</h2>

                <p class="economy__subtitle">Найти тех, кто готов сделать Вам недорогой ремонт, не так уж и сложно.<br>Но получится ли на таком ремонте сэкономить? Давайте посмотрим.</p>

                <div class="economy__container">
                    <div class="economy__element">
                        <h3 class="economy__ttl"><span>Мастер<br> (или команда мастеров)</span></h3>

                        <h4 class="economy__ttl2">Плюсы</h4>
                        <ul class="economy__list">
                            <li class="economy__item">Низкая начальная стоимость услуг.</li>
                            <li class="economy__item">Вам может повезти - и Вы найдете действительно классного специалиста.</li>
                        </ul>

                        <h4 class="economy__ttl2">Минусы</h4>
                        <ul class="economy__list">
                            <li class="economy__item">Вам может не повезти - и попадется очень плохой специалист.</li>
                            <li class="economy__item">Только предоплата.</li>
                            <li class="economy__item">Нет точного расчета стоимости материалов - приходится то докупать материалы, то избавляться<br> от лишних.</li>
                            <li class="economy__item">Сроки работ соблюдаются в 1 случае из 100.</li>
                            <li class="economy__item">Если мастер заболел - работы встали.</li>
                            <li class="economy__item">Весь контроль за качеством работ - на Вас.</li>
                            <li class="economy__item">Никакой гарантии нет - после финального расчета мастера Вы можете больше никогда не увидеть.</li>
                        </ul>

                        <h4 class="economy__ttl2">Итого</h4>
                        <p class="economy__text">При начале работ цены кажутся самыми выгодными.</p>
                        <p class="economy__text">После окончания ремонта выясняется, что Вы не только переплатили, но еще и потратили море времени и нервов, недочеты, которые Вы вовремя не заметили, никто исправлять не собирается, а на новом линолеуме в коридоре лежат 5 мешков с цементом, от которых теперь нужно как-то избавиться.</p>
                    </div>

                    <div class="economy__element">
                        <h3 class="economy__ttl"><span>Специализированная<br> фирма</span></h3>

                        <h4 class="economy__ttl2">Плюсы</h4>
                        <ul class="economy__list">
                            <li class="economy__item">Все специалисты проходят строгий отбор. Фирма заботится о своей репутации и следит за своими сотрудниками.</li>
                            <li class="economy__item">Работы оплачиваются по факту выполнения очередного этапа - никакой предоплаты.</li>
                            <li class="economy__item">Точный расчет объема материала, который требуется для проведения работ. Никаких излишков, никаких простоев. Все как в аптеке.</li>
                            <li class="economy__item">Строгое соблюдение заявленных сроков. Возврат денег в случае их нарушения.</li>
                            <li class="economy__item">Всегда есть возможность заменить заболевшего работника - в компании не одна бригада.</li>
                            <li class="economy__item">За качество работ отвечает компания, Вам достаточно просто принять работу у мастера.</li>
                            <li class="economy__item">Гарантия - 12 месяцев. Любые обнаруженные недочеты устраняются за счет компании.</li>
                        </ul>

                        <h4 class="economy__ttl2">Минусы</h4>
                        <ul class="economy__list">
                            <li class="economy__item">При выборе подрядчика стоимость работ кажется завышенной, так как в нее включены все необходимые работы и точный объем требуемых материалов.</li>
                        </ul>

                        <h4 class="economy__ttl2">Итого</h4>
                        <p class="economy__text">Строгое соблюдение сроков, высокое качество, конкурентная итоговая стоимость работ.</p>
                        <p class="economy__text">Вариант для тех, кто не гонится за сиюминутной экономией в ущерб собственным интересам.</p>
                    </div>

                    <div class="economy__element">
                        <h3 class="economy__ttl"><span>Специализированная<br> фирма</span></h3>

                        <h4 class="economy__ttl2">Плюсы</h4>
                        <ul class="economy__list">
                            <li class="economy__item">Можно найти компанию с привлекательной стоимостью услуг. И есть шанс, что при этом качество работ будет достойным.</li>
                            <li class="economy__item">Встречаются хорошие специалисты, действительно хорошо знающие свое дело.</li>
                            <li class="economy__item">В основном, выдерживают близкие к заявленным сроки выполнения работ.</li>
                            <li class="economy__item">Если в компании несколько мастеров одного профиля, то можно заменить выбывшего работника.</li>
                            <li class="economy__item">Есть возможность исправить допущенные при работе недостатки.</li>
                        </ul>

                        <h4 class="economy__ttl2">Минусы</h4>
                        <ul class="economy__list">
                            <li class="economy__item">Несоблюдение сроков, низкое качество работ, лишние материалы...</li>
                            <li class="economy__item">И, конечно, необходимость самостоятельно следить за качеством выполнения работ.</li>
                        </ul>

                        <h4 class="economy__ttl2">Итого</h4>
                        <p class="economy__text">Лотерея. Можно найти как отличных работников, делающих по-настоящему качественный ремонт, так и раздолбаев, после которых все придется переделывать заново.</p>
                        <p class="economy__text">Если Вы не боитесь рискнуть и хотите сэкономить - попробуйте обратиться в небольшую компанию. Это может оказаться по-настоящему выгодным вариантом. Но про гарантию и возврат денег можете забыть.</p>
                    </div>
                </div>

                <img src="/img/pig.png" alt="" class="economy__pig">

                <div class="economy__tooltip tooltip">

                    <div class="tooltip__data">
                        <h3 class="tooltip__title">Получится ли сэкономить, если делать ремонт<br> самостоятельно?</h3>
                        <p class="tooltip__text">Стоимость работ при самостоятельном ремонте будет минимальной. Если считать, что Ваше время ничего не стоит. И нервы тоже бесплатные. И здоровье. И что Вы один можете выполнить обязанности пяти мастеров - от электрика до штукатура. Если Вы понимаете, что все это для Вас важно и ценно, а навыков не хватает, то лучше обратиться к профессионалам.</p>
                        <p class="tooltip__text">Не забудьте учесть, что сэкономить на материалах при самостоятельном ремонте Вам не удастся - у ремонтных компаний большие скидки в строительных магазинах, которых у Вас, скорее всего, нет.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="design">
            <div class="wrapper">
                <h2 class="design__title">Вы хотите, чтобы Ваша квартира была<br> уникальной и непохожей на другие?</h2>
                <p class="design__subtitle">Тогда Вам нужен дизайн-проект</p>
                <p class="design__text">Дизайн-проект - это возможность сделать Вашу квартиру<br> не просто уникальной, а приспособленной именно под Ваши<br> вкусы и потребности.</p>
                <p class="design__text">Наши дизайнеры учтут при разработке проекта все Ваши<br> пожелания, а также посоветуют Вам, как сделать Ваш дом<br> максимально эргономичным и удобным для жизни.</p>
                <p class="design__text">У Вас маленькие дети, которые не дают Вам спать по утрам?<br> Добавим дополнительную звукоизоляцию на пол и стены.<br> Любите лежать на кровати с ноутбуком? Добавим розетку<br> рядом.Постоянно работаете на компьютере? Учтем,<br> установим стибилизатор напряжения и бесперебойник.</p>
                <p class="design__text">Казалось бы, это все мелочи... Но вспомнили ли Вы о них,<br>когда планировали ремонт? А ведь именно из таких мелочей<br>и складывается комфорт вашей повседневной жизни.</p>
                <img src="/img/pic-03.png" alt="" class="design__pic">
            </div>

            <div class="wrapper">
                <h2 class="design__title design__title_center">Что включает дизайн-проект?</h2>
                <div class="design__container">
                    <div class="design__element">
                        <ul class="design__list">
                            <li class="design__item">- Составление тех/задания;</li>
                            <li class="design__item">- Обмерочный план;</li>
                            <li class="design__item">- План перепланировки;</li>
                            <li class="design__item">- План пола;</li>
                            <li class="design__item">- План мебели;</li>
                            <li class="design__item">- План электрики;</li>
                            <li class="design__item">- План потолков;</li>
                            <li class="design__item">- План светового оборудования;</li>
                        </ul>
                    </div>
                    <div class="design__element">
                        <ul class="design__list">
                            <li class="design__item">- План демонтажа;</li>
                            <li class="design__item">- План монтажа;</li>
                            <li class="design__item">- Развертка санузлов с раскладкой<br> плитки;</li>
                            <li class="design__item">- План размещения дверей;</li>
                            <li class="design__item">- Развертка встроенных шкафов<br> и гардеробных;</li>
                            <li class="design__item">- 3D визуализация помещения;</li>
                            <li class="design__item">- Варианты перепланировки;</li>
                        </ul>
                    </div>
                    <div class="design__element">
                        <ul class="design__list">
                            <li class="design__item">- План теплых полов;</li>
                            <li class="design__item">- План разверток;</li>
                            <li class="design__item">- Чертежи проектируемых<br> декоративных изделий;</li>
                            <li class="design__item">- Развертки основных помещений;</li>
                            <li class="design__item">- Покраска стен и поклейка обоев;</li>
                            <li class="design__item">- Экспликация помещений;</li>
                            <li class="design__item">- Спецификации материалов;</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="call">
            <div class="wrapper">
                <h2 class="call__title">Сделайте свою жизнь комфортнее</h2>
                <p class="call__subtitle">Закажите дизайн-проект для Вашей квартиры</p>
                <form class="call__form" action="/request" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="rtype" value="design">
                    <input type="hidden" name="ltype" value="Заказать дизайн-проект">
                    <input type="hidden" name="thx" value="#thx1">
                    <input type="tel" name="phone" placeholder="+7 (___) ___-__-__">
                    <button class="btn" type="submit">Заказать дизайн-проект</button>
                </form>
            </div>
        </div>

        <div class="target">
            <div class="wrapper">
                <h2 class="target__title">Наша цель - сделать для Вас ремонт праздником,<br> а не стихийным бедствием</h2>
                <p class="target__text">Все работы контролируются нашими мастерами и отделом качества. При этом Вы можете<br> в любой момент приехать и своими глазами посмотреть, как продвигается Ваш ремонт.</p>
                <p class="target__text">Мы отчитываемся перед Вами по всем затратам, а также постоянно сообщаем Вам о ходе<br> работ и о выполненных этапах</p>

                <div class="target__container">
                    <div class="target__item">
                        <img src="/img/icon-05.png" alt="">
                        <span class="target__number">1</span>
                        <h4 class="target__ttl">Вы оставляете<br> заявку</h4>
                    </div>
                    <div class="target__item">
                        <img src="/img/icon-06.png" alt="">
                        <span class="target__number">2</span>
                        <h4 class="target__ttl">Мы приезжаем к<br> Вам и делаем замер</h4>
                    </div>
                    <div class="target__item">
                        <img src="/img/icon-07.png" alt="">
                        <span class="target__number">3</span>
                        <h4 class="target__ttl">Рассчитываем полную<br> смету и заключаем договор</h4>
                    </div>
                    <div class="target__item">
                        <img src="/img/icon-08.png" alt="">
                        <span class="target__number">4</span>
                        <h4 class="target__ttl">Выполняем работы<br> (с фотофиксацией)</h4>
                    </div>
                    <div class="target__item">
                        <img src="/img/icon-09.png" alt="">
                        <span class="target__number">5</span>
                        <h4 class="target__ttl">Вы принимаете<br> объект</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="logos">
            <div class="wrapper">
                <h2 class="logos__title">Заказывая ремонт у нас, Вы экономите<br> на строительных материалах</h2>
                <div class="logos__container">
                    <div class="logos__item"><img src="/img/logos/1.png" alt=""></div>
                    <div class="logos__item"><img src="/img/logos/5.png" alt="" style="height: 120px"></div>
                    <div class="logos__item"><img src="/img/logos/2.png" alt=""></div>
                    <div class="logos__item"><img src="/img/logos/4.png" alt=""></div>
                    <div class="logos__item"><img src="/img/logos/3.png" alt=""></div>
                </div>
                <div class="logos__tooltip tooltip">

                    <div class="tooltip__data">
                        <h3 class="tooltip__title">Почему Вы экономите, когда покупаете материалы через строительную компанию?</h3>
                        <p class="tooltip__text">У нас есть скидки во всех магазинах, с которыми мы сотрудничаем, а также максимальные скидочные карты.</p>
                        <p class="tooltip__text">Кроме того, наши специалисты проконсультируют Вас, какие материалы лучше приобрести, чтобы не переплачивать за более дорогие аналоги. А за счет точно рассчитанной сметы Вы приобретете ровно столько материалов, сколько потребуется для Вашего ремонта.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="price">
            <div class="wrapper">
                <h2 class="price__title">ВЫПОЛНИМ РЕМОНТ ЛЮБОЙ СЛОЖНОСТИ</h2>

                <div class="price__container">
                    <!-- <img src="/img/magazine.png" alt=""> -->

                    

                    <div class="design__container remont">
                        <div class="design__element ">
                            <h2>Косметический ремонт</h2>
                            <ul class="design__list">
                                <li class="design__item">- Замена обоев;</li>
                                <li class="design__item">- Покрытие пола;</li>
                                <li class="design__item">- Замена плинтуса;</li>
                                <li class="design__item">- Выравнивание откосов;</li>
                                <li class="design__item">- Замена дверной коробки;</li>
                                <li class="design__item">- Ремонт освещения;</li>
                                <li class="design__item">- Уборка и вынос мусора;</li>
                                <li class="design__item">
                                    <a href="#calc" class="popup-link btn btn_dark">Рассчитать стоимость</a>
                                </li>
                            </ul>
                        </div>
                        <div class="design__element ">
                            <h2>Капитальный ремонт</h2>
                            <ul class="design__list">
                                <li class="design__item">- Выравнивание стен;</li>
                                <li class="design__item">- Выравнивание пола;</li>
                                <li class="design__item">- Укладка ламината и т.д.;</li>
                                <li class="design__item">- Устройство потолков;</li>
                                <li class="design__item">- Демонтаж и устройство оконных и дверных проемов, перегородок;</li>
                                <li class="design__item">- Монтаж электросетей, системы водоснабжения, систем отопления;</li>
                                <li class="design__item">- Уборка и вынос мусора;</li>
                                <li class="design__item">
                                    <a href="#calc" class="popup-link btn btn_dark">Рассчитать стоимость</a>
                                </li>
                            </ul>
                        </div>
                        <div class="design__element ">
                            <h2>Евро ремонт</h2>
                            <ul class="design__list">
                                <li class="design__item">- Выравнивание стен;</li>
                                <li class="design__item">- Выравнивание пола;</li>
                                <li class="design__item">- Укладка ламината и т.д.;</li>
                                <li class="design__item">- Устройство потолков;</li>
                                <li class="design__item">- Демонтаж и устройство оконных и дверных проемов, перегородок;</li>
                                <li class="design__item">- Монтаж электросетей, системы водоснабжения, систем отопления;</li>
                                <li class="design__item">- Уборка и вынос мусора;</li>
                                <li class="design__item">- Эксклюзивные материалы;</li>
                                <li class="design__item">- Нестандартные планировочные решения;</li>
                                <li class="design__item">- Эксклюзивный дизайн-проект;</li>
                                <li class="design__item">
                                    <a href="#calc" class="popup-link btn btn_dark">Рассчитать стоимость</a>
                                </li>
                            </ul>
                        </div>
                        <div class="design__element ">
                            <h2>Ремонт премиум класса</h2>
                            <ul class="design__list">
                                <li class="design__item">- Выравнивание стен;</li>
                                <li class="design__item">- Выравнивание пола;</li>
                                <li class="design__item">- Укладка ламината и т.д.;</li>
                                <li class="design__item">- Устройство потолков;</li>
                                <li class="design__item">- Демонтаж и устройство оконных и дверных проемов, перегородок;</li>
                                <li class="design__item">- Монтаж электросетей, системы водоснабжения, систем отопления;</li>
                                <li class="design__item">- Уборка и вынос мусора;</li>
                                <li class="design__item">- Эксклюзивные материалы;</li>
                                <li class="design__item">- Нестандартные планировочные решения;</li>
                                <li class="design__item">- Установка аквариума, джакузи, сауны и т.д.;</li>
                                <li class="design__item">- Система умный дом;</li>
                                <li class="design__item">- Зимний сад;</li>
                                <li class="design__item">- Художественная ковка;</li>
                                <li class="design__item">- Укладка декоративного камня;</li>
                                <li class="design__item">
                                    <a href="#calc" class="popup-link btn btn_dark">Рассчитать стоимость</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="reviews">
            <div class="wrapper">
                <h2 class="reviews__title">Лучшая награда за нашу работу - это отзывы<br> наших благодарных клиентов</h2>
                <div class="reviews__carousel owl-carousel">
                    <a href="/img/reviews/1.jpg" class="zoom"><img src="/img/reviews/1.jpg" alt=""></a>
                    <a href="/img/reviews/2.jpg" class="zoom"><img src="/img/reviews/2.jpg" alt=""></a>
                    <a href="/img/reviews/3.jpg" class="zoom"><img src="/img/reviews/3.jpg" alt=""></a>
                    <a href="/img/reviews/1.jpg" class="zoom"><img src="/img/reviews/1.jpg" alt=""></a>
                    <a href="/img/reviews/2.jpg" class="zoom"><img src="/img/reviews/2.jpg" alt=""></a>
                    <a href="/img/reviews/3.jpg" class="zoom"><img src="/img/reviews/3.jpg" alt=""></a>
                    <a href="/img/reviews/1.jpg" class="zoom"><img src="/img/reviews/1.jpg" alt=""></a>
                    <a href="/img/reviews/2.jpg" class="zoom"><img src="/img/reviews/2.jpg" alt=""></a>
                    <a href="/img/reviews/3.jpg" class="zoom"><img src="/img/reviews/3.jpg" alt=""></a>
                </div>

                <!-- <div class="reviews__vk owl-carousel">
                    <img src="/img/reviews/vk.png" alt="">
                    <img src="/img/reviews/vk-1.png" alt="">
                    <img src="/img/reviews/vk-2.png" alt="">
                    <img src="/img/reviews/vk-3.png" alt="">
                    <img src="/img/reviews/vk-4.png" alt="">
                    <img src="/img/reviews/vk-5.png" alt="">
                </div> -->
            </div>
        </div>

        <div class="map">
            <h2 class="map__title">Отремонтированные нами квартиры<br> можно найти по всему городу Шымкент</h2>
            <div id="map"></div>
        </div>

        <!-- <div class="call">
            <div class="wrapper">
                <h2 class="call__title">Сейчас мы ремонтируем 4 квартиры -<br>запишитесь на экскурсию в ближайшую к Вам</h2>
                <form class="call__form">
                    <input type="hidden" name="ltype" value="Записаться на экскурсию">
                    <input type="hidden" name="thx" value="#thx1">
                    <input type="tel" name="phone" placeholder="+7 (___) ___-__-__">
                    <button class="btn" type="submit">Записаться на экскурсию</button>
                </form>
            </div>
        </div> -->

        <div class="docs">
            <div class="wrapper">
                <h2 class="docs__title">Мы имеем высшее строительное образование<br>и мы постоянно обучаемся для профессионального решения ваших задач</h2>

                <div class="docs__container">
                    <a href="/img/docs/1.jpg" class="docs__item zoom"><img src="/img/docs/1.jpg" alt="" style="width: 300px"></a>
                    <a href="/img/docs/2.jpg" class="docs__item zoom"><img src="/img/docs/2.jpg" alt="" style="width: 300px"></a>
                    <a href="/img/docs/3.jpg" class="docs__item zoom"><img src="/img/docs/3.jpg" alt="" style="width: 300px"></a>
                </div>

                <!-- <div class="docs__sample">
                    <a href="/img/docs/sample-1.png" class="zoom" data-fancybox="docs">Образец договора</a>
                    <a href="/img/docs/sample-2.png" class="zoom" data-fancybox="docs"></a>
                    <a href="/img/docs/sample-3.png" class="zoom" data-fancybox="docs"></a>
                    <a href="/img/docs/sample-4.png" class="zoom" data-fancybox="docs"></a>
                </div> -->
            </div>
        </div>

        <!-- <div class="dir">
            <div class="wrapper">
                <img src="/img/dir.png" alt="">
                <div class="dir__recourse">
                    <h2 class="dir__title">Обращение генерального<br> директора</h2>

                    <p class="dir__text">Мы не всегда понимаем, какое важное значение в нашей жизни играет ремонт наших жилищ. А ведь именно дома мы проводим больше всего времени.</p>
                    <p class="dir__text">Плохой ремонт - это наше плохое настроение. Плохой сон, плохое самочувствие, плохое здоровье. Это наши нервы и наше время, которое мы тратим, чтобы привести квартиру в порядок.</p>
                    <p class="dir__text">Хороший ремонт позволяет избежать всех этих проблем. Поэтомумоя задача, как директора компании "СтройДом СПб" - это всегда делать качественные ремонты.</p>
                    <p class="dir__text">Для этого я набираю на работу лучших мастеров, организую тщательный контроль их работы, внимательно слежу за тем, чтобы у них всегда все было хорошо.</p>
                    <p class="dir__text">Все это я делаю для того, чтобы все хорошо было и у Вас. Поэтому я всегда рад получать Ваши отзывы на мой личный электронный адрес -<a href="mailto:sergey.vasilenko.stroydomspb@yandex.ru">sergey.vasilenko.stroydomspb@yandex.ru</a>. Я отвечаю на<br> ваши письма каждый будний день</p>

                    <img src="/img/sign.png" alt="" class="dir__sign">

                    <p class="dir__name">Генеральный директор компании "СтройДом СПб"<br><b>Василенко Сергей Олегович</b></p> 
                </div>
            </div>
        </div>-->

        <div class="why">
            <h2 class="why__title">Почему ремонт лучше заказывать<br>в компании «Dream House»?</h2>
            <div class="wrapper">
                <div class="why__item"><img src="/img/icon-01.png" alt="">
                    <h4 class="why__ttl">Точные сроки</h4>
                    <p class="why__text">Сделаем ремонт в срок - <br>или бесплатно</p>
                </div>
                <div class="why__item"><img src="/img/icon-02.png" alt="">
                    <h4 class="why__ttl">Гарантия</h4>
                    <p class="why__text">На все виды работ - <br>гарантия 12 месяцев</p>
                </div>
                <div class="why__item"><img src="/img/icon-03.png" alt="">
                    <h4 class="why__ttl">Высокое качество</h4>
                    <p class="why__text">В наших бригадах - <br>только специалисты</p>
                </div>
                <div class="why__item"><img src="/img/icon-04.png" alt="">
                    <h4 class="why__ttl">«Под ключ»</h4>
                    <p class="why__text">От голых стен <br>до новоселья</p>
                </div>
            </div>
        </div>

        <div class="call">
            <div class="wrapper">
                <h2 class="call__title">Начать ремонт очень просто -<br> укажите Ваш номер телефона, и мы Вам перезвоним</h2>
                <form class="call__form" action="/request" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="rtype" value="remont">
                    <input type="hidden" name="ltype" value="Начать ремонт">
                    <input type="hidden" name="thx" value="#thx1">
                    <input type="tel" name="phone" placeholder="+7 (___) ___-__-__">
                    <button class="btn" type="submit">Начать ремонт</button>
                </form>
            </div>
        </div>


    </main>

    <footer class="footer">
        <div class="wrapper">

            <div class="footer__info">
                <p>
                    Компания "Dream House"<br>
                    город Шымкент<br>
                    микрорайн Нурсат, дом 13<br>
                </p>

                <!-- <a href="#policy" class="popup-link">Политика конфиденциальности</a> -->

            </div>

            <div class="footer__phone">
                <a href="tel:+77752734538" class="footer__phone">+7 (775) 273-45-38</a><br>
                <span>Звоните, и мы ответим на все Ваши вопросы</span>
            </div>

            <div class="footer__logo">
                <img src="/img/logo.png" alt="" style="height: 225px;">
                <!-- <span>Ремонт и отделка "под ключ"</span> -->

                <!-- <p class="footer__zolle">Работает по технологии <a href="http://zolle.ru" target="_blank">zolle</a></p> -->
            </div>

        </div>
    </footer>

</div>

<div class="popup-wrapper">
    <div class="popup-container">

        <!-- <div id="download" class="popup">
            <a href="#" class="close"></a>

            <div class="popup-inner">
                <p class="popup__text">Введите ваш номер телефона,<br>Мы перезвоним Вам!</p>

                <form class="popup__form">
                    <input type="hidden" name="ltype" value="Скачать прайс">
                    <input type="hidden" name="thx" value="#thx2">
                    <input type="tel" name="phone" placeholder="+7 (___) ___-__-__">
                    <button type="submit" class="btn">Скачать прайс-лист</button>
                </form>
            </div>
        </div> -->

        <div id="calc" class="popup">
            <a href="#" class="close"></a>

            <div class="popup-inner">
                <p class="popup__text">Укажите Ваш контактный телефон -<br>получите расчет стоимости Вашего<br> заказа в течение 5 минут</p>

                <form class="popup__form" action="/request" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="rtype" value="price">
                    <input type="hidden" name="ltype" value="Рассчитать стоимость">
                    <input type="hidden" name="thx" value="#thx1">
                    <input type="tel" name="phone" placeholder="+7 (___) ___-__-__">
                    <button type="submit" class="btn">Рассчитать стоимость</button>
                </form>
            </div>
        </div>

        <div id="thx1" class="popup">
            <a href="#" class="close"></a>

            <div class="popup-inner"><p class="popup__text">Ваша заявка принята!<br> С Вами свяжется первый<br>освободившийся оператор.</p></div>
        </div>

        <div id="thx2" class="popup">
            <a href="#" class="close"></a>

            <div class="popup-inner"><p class="popup__text">Спасибо Вам<br>за проявленный интерес!</p></div>
        </div>

    </div>
</div>

<script type="text/javascript" src="/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="/js/jquery.maskedinput.min.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<link rel="stylesheet" href="/css/owl.carousel.min.css">
<link rel="stylesheet" href="/css/owl.theme.default.min.css">
<script src="/js/owl.carousel.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>

<script type="text/javascript" src="/js/common.js"></script>


<!-- RedHelper -->
<script id="rhlpscrtg" type="text/javascript" charset="utf-8" async="async" 
    src="https://web.redhelper.ru/service/main.js?c=dmhouse">
</script> 
<!--/Redhelper -->


<!-- Google Analytics -->
<script>
window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
ga('create', 'UA-114185836-1', 'auto');
ga('send', 'pageview');
</script>
<script async src='https://www.google-analytics.com/analytics.js'></script>
<!-- End Google Analytics -->


</body>
</html>
