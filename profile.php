<?php
include 'header.php';
?>

    <style>
        .main-container {
            display: none;
        }
        .active_container {
            display: block;
        }
    </style>

    <header class="main-header">
        <div class="container">
            <a href="index.php">
                <img class="logo" src="img/logo.jpg">
            </a>

            <ul class="main-nav">
                <li style="color: black">+374 60 51 11 55</li>
                <li><a href="profile.php" style="text-decoration: none; color: #000;">Hayk Hakobyan</a></li>
                <li><a href="registration.php"><i style="color: black" class="fas fa-sign-in-alt"></i></a></li>
                <li class="open_menu"><i style="color: black" class="fas fa-bars"></i></li>
            </ul>
        </div>
    </header>

    <div class="repaer container">
        <h2>ՊՐՈՖԻԼ</h2>
    </div>

    <div class="container">
        <ul class="tabs">
            <li class="tab_1" >Անձնական տվյալներ</li>
            <li class="tab_2" >Պատվերներ</li>
        </ul>
    </div>


        <div class="main-container container1 active_container">
            <div class="w-100">

                <div class="connection">
                    <form action="">
                        <input class="w-100" type="name" placeholder="Անուն Ազգանուն">
                        <input class="w-100" type="email" placeholder="Երևան">
                        <input class="w-100" type="email" placeholder="" value="haikhakobyan2@gmail.com">
                        <input class="w-100" type="number" placeholder="+37455278124">
                        <input class="w-100" type="password" placeholder="Գաղտնաբառ">
                        <input class="w-100" type="password" placeholder="Հաստատել գաղտնաբառը">
                    </form>
                    <div class="butto_wrapper">
                        <button class="button">Պահպանել</button>
                    </div>
                </div>

            </div>

        </div>


    <div class="main-container container2">
        <div class="w-100">

            <div class="connection ">
               <h2 class="no_orders">Պատվերներ չունեք</h2>
            </div>

        </div>

    </div>


<script>
    $(document).ready(function () {
        $(".main-container").each(function () {
            if($(this).hasClass('active_container')) {
                $(this).css('display', 'block');
            }
        })

        $('.tab_1').click(function () {
            $('.container1').fadeIn();
            $('.container2').fadeOut();
        })

        $('.tab_2').click(function () {
            $('.container1').fadeOut();
            $('.container2').fadeIn();
        })
    });
</script>


<?php
include "footer.php";
?>