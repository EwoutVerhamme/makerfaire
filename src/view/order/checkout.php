<div class="checkout__wrapper">
    <nav class="nav__big">
        <div class="menu">
            <a class="menu__item" href="index.php"><img class="nav__big--logo" src="
                    ../../assets/img/home/logo_nav.svg"></a>
            <ul class="menu__items">
                <li><a class="menu__item" href="index.php">Maker Faire</a></li>
                <li><a class="menu__item active" href="index.php?page=kit">DIY-pakket</a></li>
                <li><a class="menu__item--highlight" href="index.php?page=tutorial">Tutorial</a>
                </li>
                <ul class="language">
                    <li><a class="language__text active" href="#">NL</a></li>
                    <li><a class="language__text" href="#">/ FR</a></li>
                </ul>

            </ul>
        </div>
    </nav>
    <nav class="nav__wrapper">
        <a class="menu__item" href="index.php"><img class="nav__logo" src="../../assets/img/home/logo_nav.svg"></a>
        <div class="nav">
            <input type="checkbox" class="toggler">
            <div class="hamburger">
                <div></div>
            </div>
            <div class="menu">
                <div>
                    <div>
                        <ul>
                            <li><a class="menu__item" href="index.php">Maker Faire</a></li>
                            <li><a class="menu__item active" href="index.php?page=kit">DIY-pakket</a></li>
                            <li><a class="menu__item--highlight" href="index.php?page=tutorial">Tutorial</a>
                            </li>
                            <ul class="language">
                                <li><a class="language__text active" href="#">NL</a></li>
                                <li><a class="language__text" href="#">/ FR</a></li>
                            </ul>
                        </ul>
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
                        <label class="input__label--wrapper" for="email">
                            <span class="input__label">Email</span>
                            <span class="error"><?php if(!empty($errors['email'])){ echo $errors['email'];} ?></span>
                            <input type="text" id="email" name="email" class="input"
                                value="<?php if(!empty($_POST['email'])){ echo $_POST['email'];} ?>" required />
                        </label>
                    </div>
                    <div class="input__wrapper">
                        <label class="input__label--wrapper" for="first_name">
                            <span class="input__label">Voornaam</span>
                            <span
                                class="error"><?php if(!empty($errors['first_name'])){ echo $errors['first_name'];} ?></span>
                            <input type="text" id="first_name" name="first_name" class="input"
                                value="<?php if(!empty($_POST['first_name'])){ echo $_POST['first_name'];} ?>"
                                required />
                        </label>
                    </div>
                    <div class="input__wrapper">
                        <label class="input__label--wrapper" for="last_name">
                            <span class="input__label">Achternaam</span>
                            <span
                                class="error"><?php if(!empty($errors['last_name'])){ echo $errors['last_name'];} ?></span>
                            <input type="text" id="last_name" name="last_name" class="input"
                                value="<?php if(!empty($_POST['last_name'])){ echo $_POST['last_name'];} ?>" required />
                        </label>
                    </div>

                    <div class="data__wrapper">
                        <h2 class="checkout__title">Leveradres</h2>
                        <div class="input__wrapper">
                            <label class="input__label--wrapper" for="zipcode">
                                <span class="input__label">Postcode</span>
                                <span
                                    class="error"><?php if(!empty($errors['zipcode'])){ echo $errors['zipcode'];} ?></span>
                                <input type="text" id="zipcode" name="zipcode" class="input"
                                    value="<?php if(!empty($_POST['zipcode'])){ echo $_POST['zipcode'];} ?>" required />
                            </label>
                        </div>
                        <div class="input__wrapper">
                            <label class="input__label--wrapper" for="town">
                                <span class="input__label">Gemeente</span>
                                <span class="error"><?php if(!empty($errors['town'])){ echo $errors['town'];} ?></span>
                                <input type="text" id="town" name="town" class="input"
                                    value="<?php if(!empty($_POST['town'])){ echo $_POST['town'];} ?>" required />
                            </label>
                        </div>
                        <div class="input__wrapper">
                            <label class="input__label--wrapper" for="street">
                                <span class="input__label">Straat & nummer</span>
                                <span
                                    class="error"><?php if(!empty($errors['street'])){ echo $errors['street'];} ?></span>
                                <input type="text" id="street" name="street" class="input"
                                    value="<?php if(!empty($_POST['street'])){ echo $_POST['street'];} ?>" required />
                            </label>
                        </div>
                    </div>
                </div>
            </div>


            <div class="checkout__kit checkout__block">

            </div>


            <div class="checkout__payment checkout__block">
                <h2 class="checkout__title">Betaalmethode</h2>
                <div class="checkout__method ">
                    <div class="input__wrapper">
                        <label class="input__label--wrapper" for="cart_name">
                            <span class="input__label">Kaarthouder</span>
                            <span class="error"><?php if(!empty($errors['email'])){ echo $errors['email'];} ?></span>
                            <input type="text" name="" class="input" value="" required />
                        </label>
                    </div>
                    <div class="input__wrapper">
                        <label class="input__label--wrapper" for="cart_name">
                            <span class="input__label">Kaartnummer</span>
                            <span class="error"><?php if(!empty($errors['email'])){ echo $errors['email'];} ?></span>
                            <input type="text" name="" class="input" value="" required />
                        </label>
                    </div>
                    <div class="input__wrapper">
                        <label class="input__label--wrapper" for="cart_name">
                            <span class="input__label">Vervaldatum</span>
                            <span class="error"><?php if(!empty($errors['email'])){ echo $errors['email'];} ?></span>
                            <input type="text" name="" class="input" value="" required />
                        </label>
                    </div>
                    <div class="checkout__total">
                        <p class="checkout__total--title">Totaal</p>
                        <p class="checkout__total--price">€35,00</p>
                    </div>
                </div>
                <button class="button" type="submit">Bestellen</button>
            </div>
        </form>

    </article>