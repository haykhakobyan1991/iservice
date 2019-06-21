<?php
include 'header.php';
?>

    <!-- <div class="wrapper"> -->
    <!-- <div class="owerlay"> -->
    <header class="main-header">
        <div class="container">
            <a href="index.php">
                <img class="logo" src="img/logo.jpg">
            </a>

            <ul class="main-nav">
                <li style="color: black">+374 60 51 11 55</li>
                <li><a href="registration.php"><i style="color: black" class="fas fa-sign-in-alt"></i></a></li>
                <li class="open_menu"><i style="color: black" class="fas fa-bars"></i></li>
            </ul>
        </div>
    </header>

    <div class="main-container">
        <div class="w-100">
            <div class="enter">
                <h1 class="title">Մուտք</h1>
                <div class="login">
                    <form action="">
                        <input class="w-100" type="email" placeholder="email">
                        <input class="w-100" type="password" placeholder="password">
                    </form>
                    <div class="remember txc">Մոռացել եք գաղտնաբառը</div>
                    <div style="width: 100%;text-align: center;">
                        <button style="display: inline-block;" class="button">Մուտք</button>
                    </div>

                </div>
            </div>


            <div class="d-none">
                <div class="pass">
                    <i class="fas fa-long-arrow-alt-left"></i> Մուտք
                </div>
                <form action="">
                    <input class="w-100" type="email" placeholder="email">
                </form>

                <button class="button">Վերականգնել</button>
            </div>

            <div class="btn txc">Գրանցվել</div>

            <div class="signin">
                <h1 class="title">Գրանցվել</h1>
                <form action="">
                    <input class="w-100" type="name" placeholder="name">
                    <input class="w-100" type="email" placeholder="email">
                    <input class="w-100" type="number" placeholder="number">
                    <input class="w-100" type="password" placeholder="password">
                    <input class="w-100" type="password" placeholder=" repeat password">
                </form>
                <div style="width: 100%;text-align: center;">
                    <button style="display: inline-block;" class="button">Գրանցվել</button>
                </div>
            </div>

        </div>

    </div>

    <!-- </div> -->
    <!-- </div> -->


<?php
include "footer.php";
?>