<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="ASSETS/slick/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="ASSETS/slick/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="CSS/slider.css">
    <link rel="stylesheet" type="text/css" href="CSS/styles.css">
    <link rel="stylesheet" type="text/css" href="CSS/responsive.css">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <title>Piękne Wnętrza</title>
</head>
<body>

<!--<div class="container">-->

<div class="mobile-menu-container" id="mobile-menu">
    <div class="mobile-menu-logo">
        <img src="IMG/logo_piekne_wnetrza_RGB_logo%20color_black.svg" alt="logo" class="mobile-menu-logo__img" id="mobile-logo">
    </div>

    <div class="mobile-menu-icon-close" id="mobile-close">
        <i class="fa fa-times mobile-icon-close" aria-hidden="true"></i>
    </div>

    <div class="mobile-menu-center">
        <a href="#main" class="mobile-menu-center__link">Strona Główna</a>
        <a href="#about" class="mobile-menu-center__link">O Nas</a>
        <a href="#our-clients" class="mobile-menu-center__link">Nasi klienci</a>
        <a class="mobile-menu-center__another-link" id="dane-firmy-btn">Dane firmy</a>
        <a class="mobile-menu-center__link" id="mobile-contact">Kontakt</a>
    </div>
</div>

<div class="dane-firmy-mobile" id="dane-firmy-mobile">
    <div class="mobile-menu-logo">
        <img src="IMG/logo_piekne_wnetrza_RGB_logo%20color_black.svg" alt="logo" class="mobile-menu-logo__img" id="mobile-logo">
    </div>

    <div class="mobile-menu-icon-close" id="mobile-back-to-menu">
        <i class="fa fa-angle-left mobile-icon-close" aria-hidden="true"></i>
    </div>

    <div class="mobile-menu-center">
        <div class="dane-firmy">
            <h2 class="dane-firmy__title">Dane firmy</h2>
        </div>
        <span class="dane-firmy__text">Piękne Wnętrza</span>
        <span class="dane-firmy__text">Marcin Janik</span>
        <span class="dane-firmy__text">NIP: 712-006-40-06</span>
        <span class="dane-firmy__text">tel.: 603-395-860</span>
        <span class="dane-firmy__text">Email:<span class="show-email" id="show-email">pokaz email</span></span>
    </div>
</div>

<nav class="header" id="mainNav">
    <div class="logo-container">
        <img src="IMG/logo_piekne_wnetrza_RGB_logo%20color_black.svg" alt="logo" class="logo" id="logo">
    </div>

    <ul class="navigation">
        <li class="navigation__item">
            <a href="#main" class="navigation__a">Strona Główna</a>
        </li>
        <li class="navigation__item">
            <a href="#about" class="navigation__a">O Nas</a>
        </li>
        <li class="navigation__item">
            <a href="#our-clients" class="navigation__a">Nasi klienci</a>
        </li>
        <li class="navigation__item">
            <a class="navigation__a" id="contact">Kontakt</a>
        </li>
        <li class="navigation__item navigation__item--last">
            <span class="navigation__phone">
                <i class="fa fa-phone navigation__phone-icon" aria-hidden="true"></i>
                603-395-860
            </span>
        </li>
    </ul>

    <div class="mobile-menu-icon" id="hamburger-menu">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </div>

<!--    <ul class="mobile-nav" id="mobile-nav">-->
<!--        <li class="mobile-nav__item">-->
<!--            <a href="#main" class="mobile-nav__a">Strona Główna</a>-->
<!--        </li>-->
<!--        <li class="mobile-nav__item">-->
<!--            <a href="#about" class="mobile-nav__a">O Nas</a>-->
<!--        </li>-->
<!--        <li class="mobile-nav__item">-->
<!--            <a href="#scope" class="mobile-nav__a">Zakres Usług</a>-->
<!--        </li>-->
<!--        <li class="mobile-nav__item">-->
<!--            <a href="#contactForm" class="mobile-nav__a">Kontakt</a>-->
<!--        </li>-->
<!--    </ul>-->
</nav>

<section class="main" id="main">
    <button class="mobile-menu" id="mobile-menu"><i class="fa fa-bars" aria-hidden="true"></i></button>
    <div class="main__overlay">
        <div class="image-container">
            <div class="image" id="image"></div>
        </div>
    </div>
    <h1 class="main__text">Bo liczą się wnętrza <span class="main__text--bold">Piękne Wnętrza</span></h1>
</section>
<section class="container">
    <div class="features" id="about">
        <div class="title-container">
            <h2 class="title__h2 title__h2--no-margin">Stawiamy na <span
                        class="title__h2--bold">jakość</span></h2>
        </div>

        <div class="features-container">
            <div class="features__item features__item--left">
                <i class="fa fa-handshake-o" aria-hidden="true"></i>
                <h3 class="features__item-title">Jesteśmy stabilną firmą</h3>
                <p class="features__item-desc">
                    Firma Piękne Wnętrza istnieje na lubelskim rynku już od ponad 15 lat. W tym czasie zdążyliśmy zdobyć
                    zaufanie i uznanie setek klientów. Do każdej realizacji podchodzimy indywidualnie, traktując ją jako
                    kolejne
                    wyzwanie, którego efekt świadczy o nas i naszych kompetencjach. Stawiamy przede wszystkim na jakość
                    wykonania i zadowolenie klienta.
                </p>
            </div>

            <div class="features__item">
                <i class="fa fa-comments" aria-hidden="true"></i>
                <h3 class="features__item-title">Słuchamy i rozumiemy klienta</h3>
                <p class="features__item-desc">
                    Współpracę rozpoczynamy od pełnego zrozumienia potrzeb, celów i preferencji klienta tak, aby
                    stworzone
                    przez
                    nas wizje w pełni spełniały oczekiwania i satysfakcjonowały zleceniodawcę.
                    Tworzymy wnętrza z pasją i smakiem, jednocześnie funkcjonalne i praktyczne.
                </p>
            </div>

            <div class="features__item features__item--right">
                <i class="fa fa-truck" aria-hidden="true"></i>
                <h3 class="features__item-title">Oferujemy szeroki zakres usług</h3>
                <p class="features__item-desc">
                    W zakresię naszych usług znajdują się instalacje elektryczne
                    instalacje wodno-kanalizacyjne,
                    zabudowy karton gips,
                    biały montaż,
                    łazienki,
                    sufity podwieszane,
                    wykończenia scian,
                    wykończenia podłóg i wiele innych...
                </p>
            </div>
        </div>
    </div>

    <div class="recommendations" id="our-clients">
        <div class="title-container title-container--recommendation">
            <h2 class="title__h2 title__h2--second" id="about">Dołącz do
                <span class="title__h2--bold title__h2--bold-second">naszych klientów</span>
            </h2>
        </div>

        <div class="recommendations-container">
            <div class="slider">
                <div class="slide">
                    <div class="slide-left">
                        <div class="slide-title">
                        <span class="slide__name">
                        <span class="slide__name--decoration">Terca</span>  - Adam Dec
                    </span>
                        </div>
                        <p class="slide__desc">
                            Solidny partner w interesach od lat. Polecam
                        </p>
                        <a class="slide__anchor" href="http://terca.lublin.pl" target="_blank">TERCA.LUBLIN.PL</a>
                    </div>
                    <div class="slide-right">
                        <img class="slide__img" src="IMG/terca-logo.png">
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-left">
                        <div class="slide-title">
                        <span class="slide__name">
                        <span class="slide__name--decoration">Mazumi</span>  - Tomasz Michalowski
                    </span>
                        </div>
                        <p class="slide__desc">
                            Firma godna polecenia. Ludzie zaangazowani i z pasja.
                        </p>
                        <a class="slide__anchor" href="http://mazumi.pl" target="_blank">MAZUMI.PL</a>
                    </div>
                    <div class="slide-right">
                        <img class="slide__img" src="IMG/mazumi-logo.png">
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-left">
                        <div class="slide-title">
                        <span class="slide__name">
                        <span class="slide__name--decoration">Marzena Rzewuska</span>
                    </span>
                        </div>
                        <p class="slide__desc">
                            Pan Marcin Janik to wysokiej klasy glazurnik. Zajmowal sie wykonczeniem mojego domu, wykonal
                            to na najwyzszym poziomie. Polecam
                        </p>
                    </div>
                    <div class="slide-right">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gallery">
        <div class="slider2">
            <div class="slide gallery-photo gallery-photo--1"></div>
            <div class="slide gallery-photo gallery-photo--2"></div>
            <div class="slide gallery-photo gallery-photo--3"></div>
        </div>
    </div>

    <div class="gallery-bottom"></div>

</section>


<section class="footer" id="footer">

    <div class="footer-top">

        <div class="form-container">
            <h3 class="form-container__title">Kontakt</h3>
            <h4 class="form-container__desc">Masz pytania? Napisz do nas!</h4>
            <form id="contact" class="contact-form" action="contactform.php" method="POST"
                  enctype="multipart/form-data">
                <div class="contact-form__field">
                    <!--                <label class="contact-form__label">Imię i nazwisko*</label>-->
                    <input name="name" id="name" type="text" tabindex="1" placeholder="Imię*" autofocus
                           class="contact-form__input">
                    <span class="error-info" id="error-name">Brak imienia i nazwiska</span>
                </div>
                <div class="contact-form__field">
                    <!--                <label class="contact-form__label">Adres e-mail*</label>-->
                    <input name="email" id="email" type="email" tabindex="2" placeholder="E-mail*"
                           class="contact-form__input">
                    <span class="error-info" id="error-email">Brak adresu e-mail</span>
                </div>
                <div class="contact-form__field">
                    <!--                <label class="contact-form__label">Temat*</label>-->
                    <input name="subject" id="subject" tabindex="3" placeholder="Temat*" class="contact-form__input">
                    <span class="error-info" id="error-subject">Brak tematu</span>
                </div>
                <div class="contact-form__field">
                    <!--                <label class="contact-form__label">Nr telefonu</label>-->
                    <input name="phone" id="phone" type="number" tabindex="4" placeholder="Nr telefonu"
                           class="contact-form__input">
                </div>
                <div class="contact-form__field contact-form__textarea-container">
                    <!--                <label class="contact-form__label">Wiadomość*</label>-->
                    <textarea name="message" id="message" tabindex="5" placeholder="Wiadomość*"
                              class="contact-form__message"></textarea>
                    <span class="error-info" id="error-message">Pole wiadomość nie może być puste</span>
                </div>
                <div class="contact-form__field invisible">
                    <input name="invisible" id="invisible" class="invisible">
                </div>
                <!--            <div class="contact-form__field contact-form__textarea-container contact-form__btn-container--checkbox">-->
                <!--                <input type="checkbox" name="checkbox" id="checkbox" onClick="document.getElementById('contact-submit').disabled = !this.checked">-->
                <!--                <label class="contact-form__label"><a href="../policy.html#rodo" class="contact-form__anchor">Klauzula RODO*</a></label>-->
                <!--            </div>-->
                <div class="contact-form__btn-container contact-form__btn-container--career">
                    <button name="submit" type="submit" id="contact-submit" class="contact-form__btn"
                            data-submit="...Sending" disabled>Wyślij
                    </button>
                    <p class="form-message" id="form-message"></p>
                </div>
            </form>

        </div>

        <div class="info-container">
            <h3 class="info-container__title">Dane firmy</h3>
            <span class="info-container__text info-container__text--first">Piękne Wnętrza</span>
            <span class="info-container__text">Marcin Janik</span>
            <span class="info-container__text">NIP: 712-006-40-06</span>
            <span class="info-container__text"><i class="fa fa-phone info-container__icon" aria-hidden="true"></i>tel.: 603-395-860</span>
            <span class="info-container__text">
            <i class="fa fa-envelope info-container__icon" aria-hidden="true"></i>
            <a href="mailto:marcin.janik@op.pl" class="info-container__a">marcin.janik@op.pl</a>
        </span>
        </div>

    </div>


    <div class="footer-end">
        <div class="copyright">
            <p class="copyright__link copyright__link--first">Copyright &copy; <span id="year"></span> Piękne Wnętrza - All Right Reserved</p>
            <p class="copyright__link copyright__link--last">Projekt i wykonanie - Krzysztof Janik</p>
        </div>
    </div>
</section>


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script type="text/javascript" src="assets/slick/slick/slick.min.js"></script>
<script type="text/javascript" src="JS/slider.js"></script>
<script type="text/javascript" src="JS/menu.js"></script>
<script type="text/javascript" src="JS/images.js"></script>
</body>
</html>