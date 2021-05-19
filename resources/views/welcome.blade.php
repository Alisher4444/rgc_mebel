<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-186255363-1"></script>
    <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
        <script type="text/javascript">
            var map;

            DG.then(function () {
                map = DG.map('map', {
                    center: [54.98, 82.89],
                    zoom: 13
                });

                DG.marker([54.98, 82.89]).addTo(map).bindPopup('Вы кликнули по мне!');
            });
        </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-186255363-1');
        gtag('config', 'AW-473983289');
    </script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(70436914, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/70436914" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    <!-- Event snippet for Звонок с сайта conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
        function gtag_report_conversion(url) {
            var callback = function() {
                if (typeof(url) != 'undefined') {
                    window.location = url;
                }
            };
            gtag('event', 'conversion', {
                'send_to': 'AW-473983289/PeleCO745_ABELnSgeIB',
                'event_callback': callback
            });
            return false;
        }
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Изготовление мебели на заказ </title>
    <meta name="description" content="Производство мебели на заказ любой сложности. Шкафы, кухни, гардеробы, прихожие, мебель для спальни, гостинные, офисная мебель, horeca, мебель для ванной. Европейские материалы и фурнитура.">
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <link rel="shortcut icon" href="img/main/.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css?anticache=1">
    <link rel="stylesheet" href="css/bootstrap.min.css?anticache=1">
    <link rel="stylesheet" href="css/animate.css?anticache=1">
    <link rel="stylesheet" href="slick/slick.css?anticache=1">
    <link rel="stylesheet" href="slick/slick-theme.css?anticache=1">
    <link rel="stylesheet" href="css/style.css?anticache=1">
    <script>
        function buildTable(index) {
            var popupTitle = document.getElementById('popup__title');
            var popupText = document.getElementById('popup__text');
            var popupImg = document.getElementById('popup__img');
            var popupBlockImg = document.getElementById('popup-block__img');


            var myArray = [{
                    'title': 'Шкафы',
                    'text': 'Шкаф в современности самая распространённая мебель. Если приглядеться детальнее, то кухня состоит из множества шкафов. Для изготовления шкафов мы используем только лучшие материалы из Европы и Азии. Мы изготавливаем распашные шкафы, шкаф-купе любой сложности и размеров. Для большей вместительности можем добавить антресоль. Подобрав оттенки фасадов, мы выгодно подчеркнём интерьер вашего дома, комнаты или офиса - любого жилого помещения.',
                    'img': ' <div><img src="img/services/item-1.png"></div>',
                    'block': '<img src="img/services/shkaphy/1.jpg"> <img src="img/services/shkaphy/2.jpg"> <img src="img/services/shkaphy/3.jpg">'
                },

                {
                    'title': 'Кухни',
                    'text': 'Кухня — это любимое место каждого человека в доме. Большое количество времени мы проводим именно в нем. Мы изготавливаем кухонные гарнитуры по индивидуальным размерам и габаритам или по эскизам клиента. При заказе мебели у нас мы спроектируем 3D визуализацию будущей кухни. Подберем фасадную часть мебели и фурнитуру в зависимости от бюджета. Мы воплотим в реальность любую вашу мечту!',
                    'img': ' <div><img src="img/services/item-2.png"><div>',
                    'block': '<img src="img/services/kuhni/1.jpg"> <img src="img/services/kuhni/2.jpg"> <img src="img/services/kuhni/3.jpg">',
                    'slider': '<img src="img/services/kuhni/1.jpg" alt="">'
                },

                {
                    'title': 'Гардеробные',
                    'text': 'Для лишней одежды или одежды не по сезону – в большинстве случаев складываются на балконе или в больших вместительных шкафах. Но каждая хояин\хозяйка в глубине души мечтает о большом и вместительном гардеробе. Мы изготавливаем гардеробные системы любой сложности и любых размеров. Продумаем доступность каждой позиции вещи или одежды для складирования и ее извлечения.',
                    'img': ' <div><img src="img/services/item-3.png"><div>',
                    'block': '<img src="img/services/garderob/1.jpg">'
                },

                {
                    'title': 'Прихожие',
                    'text': 'Обычно квартира или дом начинается с прихожей мебели. В новой прихожей ваши гости могут увидеть красивую и удобную мебель. Прихожая может состоять из нескольких позиций – Шкаф с крючками для верхней одежды, комод со средствами ухода за обувью, обувница с низким полками для кроссовок и туфлей и с высокой полкой для сапог и ботинок. Профессиональное изготовление шкафов для прихожих, обувниц от производителя.',
                    'img': ' <div><img src="img/services/item-4.png"><div>',
                    'block': '<img src="img/services/prihozhi/1.jpg"> <img src="img/services/prihozhi/2.jpg"> <img src="img/services/prihozhi/3.jpg">'
                },

                {
                    'title': 'Спальни',
                    'text': 'Спальный гарнитур — это личное пространство каждой семьи, для интерьера спальной комнаты важна каждая деталь. Необходим удобный и вместительный шкаф-купе, большая и удобная кровать с мягким и упругим матрасом, прикроватные комоды для складывания мелких принадлежностей и размещения на них светильников. Вы можете доверить изготовление спального гарнитура именно нам, имея большой опыт в производстве удобной и практичной мебели.',
                    'img': ' <div><img src="img/services/item-5.png"><div>',
                    'block': '<img src="img/services/spalny/1.jpg"> <img src="img/services/spalny/2.jpg"> <img src="img/services/spalny/3.jpg">'
                },

                {
                    'title': 'Гостиные',
                    'text': 'Аккуратная и современная гостиная предоставит вам удобство по вечерам за просмотром любимого фильма или сериала, или любимой настольной игры вместе с детьми или внуками. Гостиная вмещает в себя большое количество мебели: шкафов, стенок, подставки под TV, дивана и т.д. Рады предложить наши услуги по изготовлению мебели на заказ для гостиных любой сложности. Наши дизайнеры подберут сочетаемый цветовой оттенок фасадов мебели с интерьером комнаты, стен и потолков.',
                    'img': ' <div><img src="img/services/item-6.png"><div>',
                    'block': '<img src="img/services/gostiny/1.jpg"> <img src="img/services/gostiny/2.jpg"> <img src="img/services/gostiny/3.jpg">'
                },

                {
                    'title': 'Офисная мебель',
                    'text': 'Для офисов важно выглядеть представительно и респектабельно в глазах своих клиентов. Где вся бумажная макулатура надежно и конфиденциально спрятана в шкафах, а рабочие столы помогают своей функциональностью при консультации покупателей. Дизайн офисной мебели привлечет внимание ваших потенциальных клиентов, покажет деловой стиль с выгодно практичным интерьером вашего офиса. Офисная мебель может быть многофункциональной и гармоничной вместе с нами – мы изготавливаем мебель любой сложности и комплектации.',
                    'img': ' <div><img src="img/services/item-7.png"><div>',
                    'block': '<img src="img/services/office/1.jpg"> <img src="img/services/office/2.jpg"> <img src="img/services/office/3.jpg">'
                },

                {
                    'title': 'Horeca',
                    'text': 'Для кафе и ресторанов ценно первое впечатление своих клиентов и ощущение уютности как дома, кроме высокой кухни и напитков, живой музыки и танцпола – необходима современная кухня, столы и стулья для гостей, большая и вместительная барная стойка, добротные шкафы для хранения дорогих вин. Это и многое другое мы можем изготовить в кратчайшие сроки. Наши дизайнеры помогут с планировкой и будущей расстановкой всей необходимой мебели.',
                    'img': ' <div><img src="img/services/item-8.png"><div>',
                    'block': '<img src="img/services/horeca/1.jpg">'
                },

                {
                    'title': 'Ванная',
                    'text': 'Для ванных комнат подойдет не вся мебель, обычно там очень влажно. Для изготовления мебели для ванных комнат мы используем специальные материалы, которые продержаться долгое время и не потеряют свой эстетичный внешний вид спустя годы и годы своего служения. Мы изготавливаем столешницы под мойку, шкафы с банными принадлежностями с фасадами отталкивающими влагу.',
                    'img': ' <div><img src="img/services/item-9.png"><div>',
                    'block': '<img src="img/services/vannaya/1.jpg"> <img src="img/services/vannaya/2.jpg">'
                }
            ]
            popupTitle.innerText = myArray[index].title;
            popupText.innerText = myArray[index].text;
            popupImg.innerHTML = myArray[index].img;
            popupBlockImg.innerHTML = myArray[index].block;




        };



        function servicesSliderClick(index) {
            var servicesSlider = document.querySelectorAll('.services-slider');
            var popupImg = document.getElementById("popup-block__img");

            servicesSlider[index].style.display = "block";


        };
    </script>

    <meta name="google-site-verification" content="mbYheZVbK_W2BwKgUcPibqc1eCwXO4oR3mNkFra4e8g" />
</head>

<body>

    <header class="header">
        <div class="main__logo wow fadeInUp" data-wow-delay=0.1s>
            <a href="#"><img src="img/rgc.svg"/></a>
        </div>
        <div class="header-block">
           
            <a href="mailto:mebel@rgc.kz" class="header-block__mail">mebel@rgc.kz</a>
            <!-- /.header-block__mail -->
            <div class="header-contacts">
                <a href="tel:+77082111846" class="header-contacts__img">
                         <img src="img/header/icon.png" alt="Icon">
                    </a>
                <a href="tel:+77024200175" onclick="return gtag_report_conversion ('tel:+77024200175')" class="header-contacts__number">+7 702 420 01 75;</a>
                <a href="tel:+77024200175" onclick="return gtag_report_conversion ('tel:+77024200175')" class="header-contacts__number">+7 702 420 01 75</a>
            </div>
            
            <!-- /.header-contacts -->
        </div>
        <div class="main__logo wow fadeInUp" data-wow-delay=0.1s>
            <a href="tel:++77024200175" style="padding: 10px; background-color: #DB4540; border-radius: 2px;">Позвонить</a>
        </div>
        <!-- /.header-block -->
    </header>
    <!-- /.header -->

    <main class="main">
        <div class="container main-wrapper">
            <div class="main__logo wow fadeInUp" data-wow-delay=0.1s>
                <a href="#"><img src="img/rgc.svg"/></a>
            </div>
            <!-- /.main__img -->
            <h1 class="main__title wow fadeInUp" data-wow-delay=0.5s>Изготовление мебели на заказ</h1>
            <!-- /.main__title -->

            <form action="thanks.php" method="POST" class="form main-form">
                <input type="tel" name="tel" value="+7" class="form__number" required pattern="(\+7|8)?[0-9]{10}">
                <input type="submit" value="Отправить заявку" class="form__button">
            </form>
            <!-- /.form main-form -->
            <div class="main__text">
                &nbsp;&nbsp;&nbsp;&nbsp;
                Мы гарантируем высокое качество и доступные цены по г. Алматы, при подаче заявки вы получите бесплатный индивидуальный выезд на замер прямо сейчас!
            </div>
            <!-- /.main__text -->
        </div>
        <!-- /.container -->
    </main>
    <!-- /.main -->
    <section id="advantages" class="feature">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="feature-item">
                        <div class="feature-item__img wow fadeInUp" data-wow-delay=0.2s>
                            <img src="img/feature/icon-1.svg" alt="Icon-1">
                        </div>
                        <!-- /.feature-item__img -->
                        <div class="feature-item__text">
                            Качественное и отлаженное производство
                        </div>
                        <!-- /.feature-item__text -->
                    </div>
                    <!-- /.feature-item -->
                </div>
                <!-- /.col-12 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="feature-item">
                        <div class="feature-item__img wow fadeInUp" data-wow-delay=0.4s>
                            <img src="img/feature/icon-2.svg" alt="Icon-2">
                        </div>
                        <!-- /.feature-item__img -->
                        <div class="feature-item__text">
                            Мы даем гарантию на нашу мебель от 1 года до 10 лет
                        </div>
                        <!-- /.feature-item__text -->
                    </div>
                    <!-- /.feature-item -->
                </div>
                <!-- /.col-12 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="feature-item">
                        <div class="feature-item__img wow fadeInUp" data-wow-delay=0.6s>
                            <img src="img/feature/icon-3.svg" alt="Icon-3">
                        </div>
                        <!-- /.feature-item__img -->
                        <div class="feature-item__text">
                            Бесплатный выезд замерщика на дом
                        </div>
                        <!-- /.feature-item__text -->
                    </div>
                    <!-- /.feature-item -->
                </div>
                <!-- /.col-12 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="feature-item">
                        <div class="feature-item__img wow fadeInUp" data-wow-delay=0.8s>
                            <img src="img/feature/icon-4.svg" alt="icon-4">
                        </div>
                        <!-- /.feature-item__img -->
                        <div class="feature-item__text">
                            Бесплатная доставка и сборка заказа
                        </div>
                        <!-- /.feature-item__text -->
                    </div>
                    <!-- /.feature-item -->
                </div>
                <!-- /.col-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.feature -->
    <div class="product-overlay">
        <div class="product-popup">
            <div class="product__header">
                <div class="product-close popup-close ">&times;</div>
                <div class="product__img">

                </div>
            </div>
            <form action="thanks.php" method="POST" class="form  product-form">
                <input type="text" name="name" placeholder="Имя" class="form__number form__user" required>
                <input type="tel" name="tel" value="+7" class="product__tel form__number" required pattern="(\+7|8)?[0-9]{10}">
                <input type="submit" value="Отправить заявку" class="form__button">
            </form>
        </div>
    </div>
    <!-- /.product-overlay -->
    <section id="company" class="product">
        <div class="container product-wrapper">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <h2 class="product__title wow fadeInLeft" data-wow-delay=0.3s>Наша мебель, наша гордость!</h2>
                    <!-- /.product__title -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-lg-6">
                    <p class="product__descrip">
                        Отношение к изготовлению мебели как к искусству и делом всей своей жизни. Наша главная цель сделать довольным каждого нашего клиента и в долгосрочном перспективе стать лучшими друзьями. Вся наша изготовленная мебель – наша гордость! Миссия компании domain
                        стать полезными в ситуациях замены мебельных гарнитур или обставлении мебели в новом доме, офисе или любом другом помещении. На каждую позицию мебели мы предоставляем щедрую гарантию от 1 года до 10 лет. А также при заказе более
                        1 позиции мебели вы можете рассчитывать на небольшую скидку.
                    </p>
                    <!-- /.product_descrip -->
                    <button class="form__button product__button">Отправить заявку</button>
                    <!-- /.product__button -->
                </div>
                <!-- /.col-->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.product -->
    <section id="services" class="services">
        <h2 class="services__title">Наши услуги</h2>
        <!-- /.services__title -->
        <div class="container services-wrap">
            <div class="services-item wow fadeInDown" data-wow-delay=0.2s onclick="buildTable(0); servicesSliderClick(0)">
                <div class="services__img">
                    <img src="img/services/item-1.png" alt="Image">
                </div>
                <!-- /.services__img -->
                <div class="services__text"> Шкафы</div>
                <!-- /.services__text -->
              
            </div>
            <div class="services-item wow fadeInDown" data-wow-delay=0.3s onclick="buildTable(1); servicesSliderClick(1)">
                <div class="services__img">
                    <img src="img/services/item-2.png" alt="Image">
                </div>
                <!-- /.services__img -->
                <div class="services__text">Кухни</div>
                <!-- /.services__text -->
             
            </div>
            <div class="services-item wow fadeInDown" data-wow-delay=0.4s onclick="buildTable(2); servicesSliderClick(2)">
                <div class="services__img">
                    <img src="img/services/item-3.png" alt="Image">
                </div>
                <!-- /.services__img -->
                <div class="services__text">Гардеробные</div>
                <!-- /.services__text -->
             
            </div>

            <div class="services-item wow fadeInDown" data-wow-delay=0.5s onclick="buildTable(3); servicesSliderClick(3)">
                <div class="services__img">
                    <img src="img/services/item-4.png" alt="Image">
                </div>
                <!-- /.services__img -->
                <div class="services__text">Прихожие</div>
                <!-- /.services__text -->
              
            </div>
            <div class="services-item wow fadeInDown" data-wow-delay=0.6s onclick="buildTable(4); servicesSliderClick(4)">
                <div class="services__img">
                    <img src="img/services/item-5.png" alt="Image">
                </div>
                <!-- /.services__img -->
                <div class="services__text">Спальни</div>
                <!-- /.services__text -->
              
            </div>

            <div class="services-item wow fadeInDown" data-wow-delay=0.7s onclick="buildTable(5); servicesSliderClick(5)">
                <div class="services__img">
                    <img src="img/services/item-6.png" alt="Image">
                </div>
                <!-- /.services__img -->
                <div class="services__text">Гостинные</div>
                <!-- /.services__text -->
              
            </div>
            <div class="services-item wow fadeInDown" data-wow-delay=0.8s onclick="buildTable(6); servicesSliderClick(6)">
                <div class="services__img">
                    <img src="img/services/item-7.png" alt="Image">
                </div>
                <!-- /.services__img -->
                <div class="services__text">Офисная мебель</div>
                <!-- /.services__text -->
              
            </div>
            <div class="services-item wow fadeInDown" data-wow-delay=0.9s onclick="buildTable(7); servicesSliderClick(7)">
                <div class="services__img">
                    <img src="img/services/item-8.png" alt="Image">
                </div>
                <!-- /.services__img -->
                <div class="services__text">Horeca</div>
                <!-- /.services__text -->
             
            </div>
            <div class="services-item wow fadeInDown" data-wow-delay=1s onclick="buildTable(8); servicesSliderClick(8)">
                <div class="services__img">
                    <img src="img/services/item-9.png" alt="Image">
                </div>
                <!-- /.services__img -->
                <div class="services__text">Ванная</div>
                <!-- /.services__text -->
           
            </div>
        </div>
        <!-- /.container -->
    </section>
    <!-- /.services -->
    <div class="overlay">
        <div class="popup" id="popup">
            <div class="popup-close">&times;</div>
            <div id="popup__img" class="popup__img">

            </div>
            <h3 class="popup__title" id="popup__title"></h3>
            <p class="popup__text" id="popup__text"></p>
            <div class="popup-block__img" id="popup-block__img"></div>
            <div class="popup__subtitle">Закажи прямо сеичас!</div>
            <form action="thanks.php" method="POST" class="form popup-form">
                <input type="tel" name="tel" value="+7" class="form__number" required pattern="(\+7|8)?[0-9]{10}">
                <input type="submit" value="Отправить заявку" class="form__button">
            </form>
        </div>
    </div>
    <!-- /.overlay -->

    <section id="furnitures" class="tabs">
        <div class="nav-tabs">
            <a href="#" data-tab="1" class="nav-tab active first">Материал</a>
            <a href="#" data-tab="2" class="nav-tab second">Фурнитура</a>
        </div>
        <div class="tab-content" id="tab-content">

            <div class="container">
                <div data-tab-content="1" class="tab-pane active">
                    <div class="tab-pane__title">
                        Для изготовления мебели мы используем только качественные материалы из Европы и Азии. Работаем с несколькими дистрибьюторами по доставке ЛДСП, МДФ и столешниц вы всегда можете рассчитывать на качество материала!
                    </div>
                    <div class="tab-pane__list">
                        ЛДСП (Россия, Польша и Австрия)
                    </div>
                    <div class="tab-pane__list">
                        МДФ (пленка, краска, шпон) (Италия, Турция)
                    </div>
                    <div class="tab-pane__list">
                        Мдф (акрил) (Турция, Корея)
                    </div>
                    <div class="tab-pane__list">
                        Столешницы (ЛДСП - постформинг, искусственный камень, массив дерева
                    </div>
                </div>
                <div data-tab-content="2" class="tab-pane">
                    <div class="tab-pane__title">
                        Для более долгого использования мебели необходимо устанавливать механизмы высокого качества. Мы работаем только с передовыми и современными компаниями по производству фурнитуры с мировым признанием.
                    </div>
                    <div class="tab-pane__list">
                        Навесы (Россия, Корея, Турция, Германия, Австрия)
                    </div>
                    <div class="tab-pane__list">
                        Ручки (Россия, Корея, Турция, Германия, Австрия)
                    </div>
                    <div class="tab-pane__list">
                        Выдвижные системы (Россия, Турция, Германия, Австрия)
                    </div>
                    <div class="tab-pane__list">
                        Подъемные механизмы (Россия, Корея, Германия, Австрия)
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!-- /.tabs -->
    <section id="scheme" class="scheme">
        <h2 class="scheme__title">Схема работы</h2>
        <div class="scheme-wrap">
            <div class="scheme-item wow fadeInLeft" data-wow-delay=0.4s>
                <div class="scheme-item__number">1</div>
                <div class="scheme-item__img">
                    <!-- <img src="img/scheme/scheme-img.png" alt="Icon"> -->
                </div>
                <span class="scheme-item__text">
                              Предварительный расчет по почте или телефону
                         </span>
            </div>
            <div class="line"></div>


            <div class="scheme-item wow fadeInLeft" data-wow-delay=0.6s>
                <div class="scheme-item__number">2</div>
                <div class="scheme-item__img">
                    <!-- <img src="img/scheme/scheme-img.png" alt="Icon"> -->
                </div>
                <span class="scheme-item__text">
                              Квалифицированный замер дизайнера
                         </span>
            </div>
            <div class="line"></div>


            <div class="scheme-item wow fadeInLeft" data-wow-delay=0.8s>
                <div class="scheme-item__number">3</div>
                <div class="scheme-item__img">
                    <!-- <img src="img/scheme/scheme-img.png" alt="Icon"> -->
                </div>
                <span class="scheme-item__text">
                              Заключение договора
                         </span>
            </div>
            <div class="line"></div>


            <div class="scheme-item wow fadeInLeft" data-wow-delay=1s>
                <div class="scheme-item__number">4</div>
                <div class="scheme-item__img">
                    <!-- <img src="img/scheme/scheme-img.png" alt="Icon"> -->
                </div>
                <span class="scheme-item__text">
                              Изготовление мебели от 7 дней
                         </span>
            </div>
            <div class="line"></div>
            <div class="scheme-item wow fadeInLeft" data-wow-delay=1.2s>
                <div class="scheme-item__number">5</div>
                <div class="scheme-item__img">
                    <!-- <img src="img/scheme/scheme-img.png" alt="Icon"> -->
                </div>
                <span class="scheme-item__text">
                              Бесплатная доставка и установка мебели
                         </span>
            </div>
        </div>
    </section>
    <section class="clients">
        <h2 class="clients__title">Наши партнеры</h2>
        <!-- /.clients__title -->
        <div class="clients-wrap">


            <div class="clients-item">
                <img src="img/clients/item-1.png" alt="clients-image">
            </div>
            <!-- /.clients-item -->

            <div class="clients-item">
                <img src="img/clients/item-2.png" alt="clients-image">
            </div>
            <!-- /.clients-item -->
            <div class="clients-item">
                <img src="img/clients/item-3.png" alt="clients-image">
            </div>
            <!-- /.clients-item -->

            <div class="clients-item">
                <img src="img/clients/item-4.png" alt="clients-image">
            </div>
            <!-- /.clients-item -->


            <div class="clients-item">
                <img src="img/clients/item-5.png" alt="clients-image">
            </div>
            <!-- /.clients-item -->

            <div class="clients-item">
                <img src="img/clients/item-6.png" alt="clients-image">
            </div>
            <!-- /.clients-item -->

            <div class="clients-item">
                <img src="img/clients/item-7.png" alt="clients-image">
            </div>
            <!-- /.clients-item -->


        </div>
        <!-- /.container -->
    </section>
    <!-- /.clients -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-6">
                    <h2 class="portfolio__title">Некоторые <br> наши работы</h2>
                    <!-- /.portfolio__title -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-lg-6">
                    <p class="portfolio__descrip">
                        Отправь заявку наши менеджеры обязательно свяжуться с вами
                    </p>
                    <!-- /.portfolio_descrip -->
                    <form action="thanks.php" method="POST" class="form portfolio-form">
                        <input type="tel" name="tel" value="+7" class="form__number wow fadeInLeft" data-wow-delay=0.4s required pattern="(\+7|8)?[0-9]{10}">
                        <input type="submit" value="Отправить заявку" class="form__button wow fadeInRight" data-wow-delay=0.4s>
                    </form>
                    <!-- /.form portfolio-form -->
                </div>
                <!-- /.col-->
            </div>
            <!-- /.row -->
            <div class="slider">
                <div class="slider-item btn" data-toggle="modal" data-target="#exampleModal">
                    <img src="img/slider/slider-img-6.jpg" alt="Slider-image">
                </div>
                <div class="slider-item btn" data-toggle="modal" data-target="#exampleModal">
                    <img src="img/slider/slider-img-7.jpg" alt="Slider-image">
                </div>
                <div class="slider-item btn" data-toggle="modal" data-target="#exampleModal">
                    <img src="img/slider/slider-img-8.jpg" alt="Slider-image">
                </div>
                <div class="slider-item btn" data-toggle="modal" data-target="#exampleModal">
                    <img src="img/slider/slider-img-9.jpg" alt="Slider-image">
                </div>
                <div class="slider-item btn" data-toggle="modal" data-target="#exampleModal">
                    <img src="img/slider/slider-img-10.jpg" alt="Slider-image">
                </div>
                <div class="slider-item btn" data-toggle="modal" data-target="#exampleModal">
                    <img src="img/slider/slider-img-11.jpg" alt="Slider-image">
                </div>
                <div class="slider-item btn" data-toggle="modal" data-target="#exampleModal">
                    <img src="img/slider/slider-img-12.jpg" alt="Slider-image">
                </div>
                <div class="slider-item btn" data-toggle="modal" data-target="#exampleModal">
                    <img src="img/slider/slider-img-13.jpg" alt="Slider-image">
                </div>
            </div>
        </div>
        <!-- /.container -->
    </section>
    <!-- /.portfolio -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="modal-close close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="img/slider/slider-img-6.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/slider/slider-img-7.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/slider/slider-img-8.jpg" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/slider/slider-img-9.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/slider/slider-img-10.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/slider/slider-img-11.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/slider/slider-img-12.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/slider/slider-img-13.jpg" alt="Second slide">
                            </div>

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <h3 class="footer__title">Контактные данные</h3>
            <div class="row">
            <!-- /.footer__title -->
            <div class="col-md-6">
            <div class="footer-contacts">
                <div class="footer__addr">
                    <span>Мебель RGC</span>
                    <span>Казахстан, г. Алматы,</span>
                    <span>адрес ул.Ырысты 46/2 </span>
					<span></span>

                </div>
                <!-- /.footer__addr -->
                <div class="footer__number">
                    <a href="mailto:mebel@rgc.kz">mebel@rgc.kz</a>
                    <a href="tel:+77024200175" onclick="return gtag_report_conversion ('tel:+77082111846')">+7 702 420 01 75</a>
                    <a href="tel:+77024200175" onclick="return gtag_report_conversion ('tel:+77082111846')">+7 702 420 01 75</a>
                </div>
                <!-- /.footer__number -->
            </div>

            </div>
            <!-- /.footer-contacts -->
            <div class="col-md-6">

                <div id="map" style="width:500px; height:400px"></div>
            </div>
            </div>
        </div>
        <!-- /.container -->

        <div class="footer-block">
            <span>© TAP GLOBAL</span>

            <a href="https://www.rgc.kz/">

               </a>
        </div>
    </footer>
    <!-- /.footer -->

    <div class="call wow bounce" data-wow-delay=0.8s>
        <a href="https://wa.me/+77024200175">
               <img src="img/whatsapp.png" alt="Позвонить">
          </a>
    </div>
    <!-- /.call -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- <script
     src="https://code.jquery.com/jquery-1.12.4.min.js"
     integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
     crossorigin="anonymous"></script> -->
    <script src="js/bootstrap.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script src="js/main.js?anticache=1"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script>
        $('.carousel').carousel();
        $('#myModal').modal('hide');
    </script>
</body>

</html>