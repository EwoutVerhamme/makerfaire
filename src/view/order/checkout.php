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
    <h3 class="checkout__title">Bestellen</h3>
    <form action="index.php?page=checkout" method="post" class="checkout-form">
    <input type="hidden" name="action" value="insertOrder">

    <div class="checkout__info">
        <div class="data__wrapper">
            <h2 class="checkout__title">Gegevens</h2>
            <div class="input__wrapper">
                <label for="email">
                    <span class="input__label">Email</span>
                    <span class="error"><?php if(!empty($errors['email'])){ echo $errors['email'];} ?></span>
                    <input type="text" id="email" name="email" class="input" value="<?php if(!empty($_POST['email'])){ echo $_POST['email'];} ?>" required  />
                </label>
            </div>
            <div class="input__wrapper">
                <label for="first_name">
                    <span class="input__label">Voornaam</span>
                    <span class="error"><?php if(!empty($errors['first_name'])){ echo $errors['first_name'];} ?></span>
                    <input type="text" id="first_name" name="first_name" class="input" value="<?php if(!empty($_POST['first_name'])){ echo $_POST['first_name'];} ?>" required  />
                </label>
            </div>
            <div class="input__wrapper">
                <label for="last_name">
                    <span class="input__label">Achternaam</span>
                    <span class="error"><?php if(!empty($errors['last_name'])){ echo $errors['last_name'];} ?></span>
                    <input type="text" id="last_name" name="last_name" class="input" value="<?php if(!empty($_POST['last_name'])){ echo $_POST['last_name'];} ?>" required  />
                </label>
            </div>
        </div>

        <div class="data__wrapper">
            <h2 class="checkout__title">Leveradres</h2>
            <div class="input__wrapper">
                <label for="zipcode">
                    <span class="input__label">Postcode</span>
                    <span class="error"><?php if(!empty($errors['zipcode'])){ echo $errors['zipcode'];} ?></span>
                    <input type="text" id="zipcode" name="zipcode" class="input" value="<?php if(!empty($_POST['zipcode'])){ echo $_POST['zipcode'];} ?>" required  />
                </label>
            </div>
            <div class="input__wrapper">
                <label for="town">
                    <span class="input__label">Gemeente</span>
                    <span class="error"><?php if(!empty($errors['town'])){ echo $errors['town'];} ?></span>
                    <input type="text" id="town" name="town" class="input" value="<?php if(!empty($_POST['town'])){ echo $_POST['town'];} ?>" required  />
                </label>
            </div>
            <div class="input__wrapper">
                <label for="street">
                    <span class="input__label">Straat & nummer</span>
                    <span class="error"><?php if(!empty($errors['street'])){ echo $errors['street'];} ?></span>
                    <input type="text" id="street" name="street" class="input" value="<?php if(!empty($_POST['street'])){ echo $_POST['street'];} ?>" required  />
                </label>
        </div>
    </div>
<button class="button" type="submit">Bestellen</button>

        <div class="checkout__payment"></div>
        <div class="checkout__kit"></div>
    </form>

</article>


