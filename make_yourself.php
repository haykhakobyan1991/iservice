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

            <h1 class="title">ՎԵՐԱՆՈՐՈԳԵՔ ՄԵԶ ՀԵՏ</h1>
            <div class="connection">
                <form action="">
                    <input class="w-100" type="name" placeholder="name">
                    <input class="w-100" type="email" placeholder="email">
                    <input class="w-100" type="number" placeholder="number">
                    <input class="w-100" type="text" placeholder="text">
                    <textarea class="tarea" name="" id="" cols="30" rows="10" placeholder="message"></textarea>
                </form>
                <div class="butto_wrapper">
                    <button class="button">Ուղարկել</button>
                </div>
            </div>

        </div>

    </div>

    <!-- </div> -->
    <!-- </div> -->


<?php
include "footer.php";
?>