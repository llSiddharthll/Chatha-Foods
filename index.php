<?php include "db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<?php $title = 'Chatha Foods' ?>
<?php include './partials/head.php' ?>

<body class="bg-color2">

    <!-- Preloader Start -->
    <?php include './partials/preloader.php' ?>

    <!-- Back To Top Start -->
    <?php include './partials/scroll-up.php' ?>

    <!--<< Mouse Cursor Start >>-->
    <?php include './partials/mouse-cursor.php' ?>

    <!-- Offcanvas Area Start -->
    <?php include './partials/sidebar.php' ?>

    <!-- Header Section Start -->
    <?php include './partials/header.php' ?>

    <!-- Search Area Start -->
    <?php include './partials/search.php' ?>


<!-- Swiper Carousel -->
<div class="swiper mySwiper w-screen lg:h-screen xl:h-[120vh] overflow-hidden">
  <div class="swiper-wrapper">

    <!-- Slide 1 -->
    <div class="swiper-slide">
      <img src="assets/img/hero/c1.png" class="" style="width:100%; height:100%" />
    </div>

    <!-- Slide 2 -->
    <div class="swiper-slide">
      <img src="assets/img/hero/c2.png" class="" style="width:100%; height:100%" />
    </div>

    <!-- Slide 3 -->
    <div class="swiper-slide">
      <img src="assets/img/hero/c3.png" class="" style="width:100%; height:100%" />
    </div>

    <!-- Slide 4 -->
    <div class="swiper-slide">
      <img src="assets/img/hero/c4.png" class="" style="width:100%; height:100%" />
    </div>
    
    <!-- Slide 5 -->
    <div class="swiper-slide">
      <img src="assets/img/hero/c5.png" class="" style="width:100%; height:100%" />
    </div>

  </div>

</div>



    

    <div class="marquee-wrapper style-1 text-slider  my-10 md:my-20">
        <div class="marquee-inner to-left">
            <ul class="marqee-list d-flex">
                <li class="marquee-item style1">
                    <span class="text-slider category text-style" onclick="navigateToSection('products','snacks')">SNACKS</span>
                    <span class="text-slider category text-style" onclick="navigateToSection('products','patties')">PATTIES</span>
                    <span class="text-slider category text-style" onclick="navigateToSection('products','sausages')">SAUSAGES</span>
                    <span class="text-slider category text-style" onclick="navigateToSection('products','cold_cuts')">COLD CUTS</span>
                    <span class="text-slider category text-style" onclick="navigateToSection('products','toppings')">TOPPINGS</span>
                    <span class="text-slider category text-style" onclick="navigateToSection('products','others')">OTHERS</span>
                    <span class="text-slider category text-style" onclick="navigateToSection('products','snacks')">SNACKS</span>
                    <span class="text-slider category text-style" onclick="navigateToSection('products','patties')">PATTIES</span>
                    <span class="text-slider category text-style" onclick="navigateToSection('products','sausages')">SAUSAGES</span>
                    <span class="text-slider category text-style" onclick="navigateToSection('products','cold_cuts')">COLD CUTS</span>
                    <span class="text-slider category text-style" onclick="navigateToSection('products','snacks')">TOPPINGS</span>
                    <span class="text-slider category text-style" onclick="navigateToSection('products','others')">OTHERS</span>
                    <span class="text-slider category text-style" onclick="navigateToSection('products','snacks')">SNACKS</span>
                    <span class="text-slider category text-style" onclick="navigateToSection('products','patties')">PATTIES</span>
                    <span class="text-slider category text-style" onclick="navigateToSection('products','sausages')">SAUSAGES</span>
                    <span class="text-slider category text-style" onclick="navigateToSection('products','cold_cuts')">COLD CUTS</span>
                    <span class="text-slider category text-style" onclick="navigateToSection('products','toppings')">TOPPINGS</span>
                    <span class="text-slider category text-style" onclick="navigateToSection('products','others')">OTHERS</span>
                </li>
            </ul>

        </div>
    </div>


    <!-- Cta section  S T A R T -->
    <section class="my-10 md:my-20">
        <div class="cta-wrapper style1  section-padding">
            <div class="shape1 float-bob-x d-none d-xxl-block"><img src="assets/img/shape/ctaShape1_1.png" alt="shape">
            </div>
            <div class="shape2 float-bob-y d-none d-xxl-block"><img src="assets/img/shape/ctaShape1_2.png" alt="shape">
            </div>
            <div class="shape3 float-bob-y d-none d-xxl-block"><img src="assets/img/shape/ctaShape1_3.png" alt="shape">
            </div>
            <div
                class=" px-6 sm:px-12 lg:px-24 text-center shadow-md rounded-lg flex flex-col gap-4 items-center justify-center">
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
                    Premium Frozen Foods, Crafted with Care
                </h2>
                <p class="text-lg text-white/80 max-w-2xl mx-auto mb-10">
                    With a legacy of excellence, CFPL delivers innovative frozen food solutions tailored for modern kitchens. Our commitment to quality and hygiene makes us a preferred partner for QSRs, HoReCa, and global brands seeking consistency and taste in every bite.
                </p>

                <div class="btn-wrapper wow fadeInUp" data-wow-delay="0.9s">
                    <a class="theme-btn" href="contact.php">GET STARTED<i
                            class="fa-sharp fa-regular fa-arrow-right"></i></a>
                </div>
            </div>

        </div>
    </section>

    <div class="slider-area wow fadeInUp bg-white md:bg-none h-fit p-4  my-10 md:my-20" data-wow-delay="0.5s">
        <div class="swiper clientSliderOne">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32"
                            src="https://www.cfpl.net.in/images/dominos-pizza.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32"
                            src="https://www.cfpl.net.in/images/ccd.png"
                            alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32"
                            src="https://www.cfpl.net.in/images/burger-king.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32"
                            src="https://www.cfpl.net.in/images/subway.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32"
                            src="https://www.cfpl.net.in/images/roll-xpress.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32"
                            src="https://www.cfpl.net.in/images/nik-bakers.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32"
                            src="https://www.cfpl.net.in/images/burger-farm.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32"
                            src="https://www.cfpl.net.in/images/ihop.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32"
                            src="https://www.cfpl.net.in/images/pizzeria.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32"
                            src="https://www.cfpl.net.in/images/burgrill.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32"
                            src="https://www.cfpl.net.in/images/cafe-chocolicious.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32"
                            src="https://www.cfpl.net.in/images/cafeteria.png" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-img text-center"><img class="h-32"
                            src="https://www.cfpl.net.in/images/chills.png" alt="logo">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include './partials/modal.php' ?>


    <!-- Footer Section Start -->
    <?php include './partials/footer.php' ?>

    <!-- all js files -->
    <?php include './partials/script.php' ?>

<script>
  const swiper = new Swiper(".mySwiper", {
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
  });
</script>


</body>

</html>