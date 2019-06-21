<footer>
    <div class="container">
        <ul class="social-network clearfix">
            <li>
                <a href="https://www.facebook.com/" target="_blank" rel="nofollow">
                    <i class="fab fa-facebook"></i>
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/" target="_blank" rel="nofollow">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
            <li>
                <a href="#" target="_blank" rel="nofollow">
                    <i class="fab fa-telegram"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="container">
        <ul class="footer-menu">
            <li>
                <a href="#">Վերանորոգել</a>
            </li>
            <li>
                <a href="#">Օգնություն</a>
            </li>
            <li>
                <a href="#">Կապ</a>
            </li>
            <li>
                <a href="#">Մեր մասին</a>
            </li>
            <li>
                <a href="#">Դարձիր վարպետ</a>
            </li>
            <li>
                <a href="#">Բլոգ</a>
            </li>
        </ul>
    </div>

    <p class="copy">&copy; <span id="year"></span> ISERVICE</p>
</footer>


<script>

    $(document).ready(function () {
        $(window).on('load', function () {
            $('.opacity_div').css('z-index', '-999');
            $('.opacity_div').css('display', 'none');

        })
    })

    $('.open_menu').click(function () {
        $('.menu').animate({
            right: '0'
        }, 500);

        $('.opacity_div').css('z-index', '222');
        $('.opacity_div').css('display', 'block');
    })

    $('.fas.fa-times').click(function () {
        $('.menu').animate({
            right: '-410'
        }, 500);

        $('.opacity_div').css('z-index', '-999');
        $('.opacity_div').css('display', 'none');

    })

    $(document).ready(function () {
        $('.your-class').slick({
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false
        })
    });
</script>

</body>
</html>