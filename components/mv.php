<link rel="preload stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.5.4/dist/css/splide.min.css" as="style" crossorigin>
<link rel="preload stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.5.4/dist/css/splide-core.min.css" as="style" crossorigin>

<section class="mv_section">
    <div class="mv_wrapper">
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="splide_info_container">
                            <div class="splide__img">
                                <img src="assets/svg/slide1.jpg" alt="">
                            </div>
                            <div class="slide__info">
                                <h1>Horn of the Ancient</h1>
                                <a href="sale_market.php">Buy it now</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="splide_info_container">
                            <div class="splide__img">
                                <img src="assets/svg/slide2.jpg" alt="">
                            </div>
                            <div class="slide__info">
                                <h1>Silver Crest of Radiant</h1>
                                <a href="sale_market.php">Buy it now</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<script src="assets/js/splide.min.js" async></script>

<script type="module">
    var splide = new Splide('.splide', {
        type: 'loop',
        perPage: 1,
        autoplay: true,
        arrows: false,
        speed: 500,
        width: '100%'
    });

    splide.mount();
</script>