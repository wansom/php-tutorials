<body>
    <section>
            <div id="containerSlider">
                <div id="slidingImage"> <img src="src/assets/img/img1.png" alt="image1"> </div>
                <div id="slidingImage"> <img src="src/assets/img/img2.png" alt="image2"> </div>
                <div id="slidingImage"> <img src="src/assets/img/img3.png" alt="image3"> </div>
                <div id="slidingImage"> <img src="src/assets/img/img4.png" alt="image4"> </div>
            </div>
    </section>
</body>
    <!-- <script src=“https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js”></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script>
        $(document).ready(function()
        {
        $('#containerSlider').slick({
            dots: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            });
        });
    </script>