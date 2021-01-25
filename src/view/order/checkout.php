<div class="checkout__wrapper">
    <nav class="nav__big">
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
    </nav>
    <nav class="nav__wrapper">
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
    </nav>
    <article class="checkout">
        <h3 class="checkout__title--big">Bestellen</h3>
        <form action="index.php?page=checkout" method="post" class="checkout__form">
            <input type="hidden" name="action" value="insertOrder">
            <div class="checkout__info checkout__block">
                <div class="data__wrapper">
                    <h2 class="checkout__title">Gegevens</h2>
                    <div class="input__wrapper">
                        <label class="input__label--wrapper" for="first_name">
                            <span class="input__label">Voornaam</span>
                            <input type="text" id="first_name" name="first_name" class="input"
                                value="<?php if(!empty($_POST['first_name'])){ echo $_POST['first_name'];} ?>"
                                required />
                            <span
                                class="error"><?php if(!empty($errors['first_name'])){ echo $errors['first_name'];} ?></span>
                        </label>
                    </div>
                    <div class="input__wrapper">
                        <label class="input__label--wrapper" for="last_name">
                            <span class="input__label">Achternaam</span>
                            <input type="text" id="last_name" name="last_name" class="input"
                                value="<?php if(!empty($_POST['last_name'])){ echo $_POST['last_name'];} ?>" required />
                            <span
                                class="error"><?php if(!empty($errors['last_name'])){ echo $errors['last_name'];} ?></span>
                        </label>
                    </div>
                    <div class="input__wrapper">
                        <label class="input__label--wrapper" for="email">
                            <span class="input__label">Email</span>
                            <input type="text" id="email" name="email" class="input"
                                value="<?php if(!empty($_POST['email'])){ echo $_POST['email'];} ?>" required />
                            <span class="error"><?php if(!empty($errors['email'])){ echo $errors['email'];} ?></span>
                        </label>
                    </div>

                    <div class="data__wrapper">
                        <h2 class="checkout__title">Leveradres</h2>
                        <div class="input__wrapper">
                            <label class="input__label--wrapper" for="zipcode">
                                <span class="input__label">Postcode</span>
                                <input type="text" id="zipcode" name="zipcode" class="input"
                                    value="<?php if(!empty($_POST['zipcode'])){ echo $_POST['zipcode'];} ?>" required />
                                <span
                                    class="error"><?php if(!empty($errors['zipcode'])){ echo $errors['zipcode'];} ?></span>
                            </label>
                        </div>
                        <div class="input__wrapper">
                            <label class="input__label--wrapper" for="town">
                                <span class="input__label">Gemeente</span>
                                <input type="text" id="town" name="town" class="input"
                                    value="<?php if(!empty($_POST['town'])){ echo $_POST['town'];} ?>" required />
                                <span class="error"><?php if(!empty($errors['town'])){ echo $errors['town'];} ?></span>
                            </label>
                        </div>
                        <div class="input__wrapper">
                            <label class="input__label--wrapper" for="street">
                                <span class="input__label">Straat & nummer</span>
                                <input type="text" id="street" name="street" class="input"
                                    value="<?php if(!empty($_POST['street'])){ echo $_POST['street'];} ?>" required />
                                <span
                                    class="error"><?php if(!empty($errors['street'])){ echo $errors['street'];} ?></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="checkout__payment checkout__block">
                <h2 class="checkout__title">Betaalmethode</h2>
                <div class="checkout__method ">
                    <div class="input__wrapper">
                        <label class="input__label--wrapper">
                            <span class="input__label">Kaarthouder</span>
                            <input type="text" class="input" required />
                            <span class="error"><?php if(!empty($errors['email'])){ echo $errors['email'];} ?></span>
                        </label>
                    </div>
                    <div class="input__wrapper">
                        <label class="input__label--wrapper">
                            <span class="input__label">Kaartnummer</span>
                            <input type="text" class="input" required />
                            <span class="error"><?php if(!empty($errors['email'])){ echo $errors['email'];} ?></span>
                        </label>
                    </div>
                    <div class="input__wrapper">
                        <label class="input__label--wrapper">
                            <span class="input__label">Vervaldatum</span>
                            <input type="text" class="input" required />
                            <span class="error"><?php if(!empty($errors['email'])){ echo $errors['email'];} ?></span>
                        </label>
                    </div>
                    <div class="checkout__total">
                        <p class="checkout__total--text">Totaal</p>
                        <p class="checkout__total--text">€35,00</p>
                    </div>
                    <div class="order__button--wrapper">
                        <button class="button order__button" type="submit">Bestellen</button>
                    </div>
                </div>


                <div class="checkout__kit checkout__block">

                </div>
            </div>
        </form>

    </article>
</div>