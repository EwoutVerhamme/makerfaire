<video id="video"></video>
<div class="popup__wrapper">
    <h1 class="hidden">Maker Faire Tutorial</h1>
    <div class="popup">
        <div class="popup__info--wrapper">
            <div class="popup__text">
                <p class="popup__title">
                    Hebt u al het materiaal?
                </p>
                <p class="popup__subtext">
                    Het is belangrijk dat u al het materiaal hebt om van start te gaan met deze tutorial. Indien u nog
                    niet over al het materiaal beschikt kunt u een DIY-kit bestellen of de materiaallijst raadplegen.
                </p>
            </div>
            <div class="popup__buttons">
                <button id="material" class="button__outline intro__tutorial--button button1">Welk
                    materiaal?</button>
                <button id="letsgo" class="button intro__tutorial--button button2">Ja, let's begin!</button>
            </div>

            <p class="handtrack">Handtracking laden...</p>
            <p class="nohandtrack"></p>


        </div>
    </div>
</div>

<header class="header">
    <div class="nav__big">
        <div class="menu">
            <a class="menu__item" href="index.php"><img class="nav__big--logo" src="
                    ../../assets/img/home/logo_nav.svg" alt="Logo Maker Faire"></a>
            <ul class="menu__items">
                <li><a class="menu__item active" href="index.php">Maker Faire</a></li>
                <li><a class="menu__item" href="index.php?page=kit">DIY-pakket</a></li>
                <li><a class="menu__item--highlight" href="index.php?page=tutorial">Tutorial</a>
                </li>
                <li><a class="language__text active" href="#">NL</a></li>
                <li><a class="language__text" href="#">/ FR</a></li>
            </ul>
        </div>
    </div>
    <div class="nav__wrapper">
        <a class="menu__item" href="index.php"><img class="nav__logo" src="../../assets/img/home/logo_nav.svg"
                alt="Logo Maker Faire"></a>
        <div class="nav">
            <div class="nav">
                <input type="checkbox" class="toggler">
                <div class="hamburger">
                    <div></div>
                </div>
                <div class="menu">
                    <div>
                        <div>
                            <ul>
                                <li><a class="menu__item active" href="index.php">Maker Faire</a></li>
                                <li><a class="menu__item" href="index.php?page=kit">DIY-pakket</a></li>
                                <li><a class="menu__item--highlight" href="index.php?page=tutorial">Tutorial</a>
                                </li>

                                <li><a class="language__text active" href="#">NL</a></li>
                                <li><a class="language__text" href="#">/ FR</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__info">
        <h2 class="header__title">Dragracewagen tutorial</h2>
        <p class="header__subtext subtext">
            Welkom bij de tutorial! Hierin helpen we je om een échte dragracewagen te bouwen. Het is belangrijk <span
                class="span">alles
                aandachtig te lezen</span> en er je eigen inbreng aan te geven! </p>
        <div class="button__wrapper">
            <button id="start" class="button intro__tutorial--button">Start de tutorial</button>
        </div>
        <div class="indicators">
            <div class="indicator">
                <img height="80" src="../../assets/img/tutorial/time.svg" alt="Time indicator" class="indicator__img">
                <p class="indicator__text">3 uur</p>
            </div>
            <div class="indicator">
                <img height="81" src="../../assets/img/tutorial/difficulty.svg" alt="Moeilijkheidsgraad"
                    class="indicator__img">
                <p class="indicator__text">moeilijk</p>
            </div>
        </div>
        <picture>
            <source media="(max-width: 360px)" srcset="../../assets/img/tutorial/landing_320.png">
            <source media="(max-width: 678px)" srcset="../../assets/img/tutorial/landing_mobile.png">
            <source media="(max-width: 1023px)" srcset="../../assets/img/tutorial/landing_1024.png">
            <img alt="Landings pagina attributen" src="../../assets/img/tutorial/landing_1024.png">
        </picture>
    </div>
</header>

<div class="steps__wrapper">
    <div class="steps__menu">
        <ul class="steps__menu--items">
            <li><a class="steps__menu--item back" href="index.php?page=tutorial">Verlaat de tutorial</a></li>
            <li class="steps__menu--item tip">Vraag tips</li>
        </ul>
    </div>
    <section class="step">
        <h2 class="hidden">Landingspagina</h2>
        <div class="step__wrapper">
            <div class="step__left">
                <div class="step__intro">
                    <img src="../../assets/img/tutorial/plc.png" alt="Tutorial titel" class="step__title">
                    <p class="step__subtext"> </p>
                </div>
                <div class="step__button--wrapper">
                    <button id="btnStepImg0" class="button__outline show__img--button">Toon
                        tekening</button>
                    <button id="btnStep0" class="button tutorial__button">De body</button>
                </div>
            </div>
            <div class="step__right">
                <div class="lottie__container" id="lottie-container"></div>
                <img src="../../assets/img/tutorial/plc.png" alt="Tutorial uitleg foto" class="step__right--img">
                <div class="lottie__container--mobile"></div>
            </div>
        </div>
    </section>
    <div id="lottie__fun" class="lottie__fun">
    </div>
    <div class="step__indicators">
        <div id="0" class="step__indicator ">
            <div id="0" class="mobile__buttons indicatorMobile0"></div>
            <div id="0" class="step__indicator--wrapper">
                <p id="0" class="step__indicator--number indicator0">1</p>
                <p id="0" class="step__indicator--text">schets</p>
            </div>
        </div>
        <div id="1" class="step__indicator">
            <div id="1" class="mobile__buttons indicatorMobile1"></div>
            <div id="1" class="step__indicator--wrapper">
                <p id="1" class="step__indicator--number indicator1">2</p>
                <p id="1" class="step__indicator--text">body
                </p>
            </div>
        </div>
        <div id="2" class="step__indicator">
            <div id="2" class="mobile__buttons indicatorMobile2"></div>
            <div id="2" class="step__indicator--wrapper">
                <p id="2" class="step__indicator--number indicator2">3</p>
                <p id="2" class="step__indicator--text">aandrijving</p>
            </div>
        </div>
        <div id="3" class="step__indicator">
            <div id="3" class="mobile__buttons indicatorMobile3"></div>
            <div id="3" class="step__indicator--wrapper">
                <p id="3" class="step__indicator--number indicator3">4</p>
                <p id="3" class="step__indicator--text">wielen</p>
            </div>
        </div>
        <div id="4" class="step__indicator">
            <div id="4" class="mobile__buttons indicatorMobile4"></div>
            <div id="4" class="step__indicator--wrapper">
                <p id="4" class="step__indicator--number indicator4">5</p>
                <p id="4" class="step__indicator--text">testen</p>
            </div>
        </div>
    </div>
</div>