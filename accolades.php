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



    <?php
    $mainTitle = 'Accolades';
    $Title = 'Home';
    $Title2 = 'Accolades';
    ?>
    <div class="breadcumb-section relative group overflow-hidden">
        <!-- Background Image -->
        <div class="scale-[1.1] group-hover:scale-[1] transition-transform duration-700 breadcumb-wrapper bg-cover bg-center relative" style="background-image: url('./assets/img/banner/CF Factory-2.jpg');">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>

            <!-- Content -->
            <div class="container relative z-10">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content text-white">
                            <?php if (!empty($mainTitle)) : ?>
                                <h1 class="breadcumb-title text-white"><?php echo $mainTitle; ?></h1>
                            <?php endif; ?>
                            <ul class="breadcumb-menu flex gap-2">
                                <?php if (!empty($Title)) : ?>
                                    <li><a href="index.php" class="text-white"><?php echo $Title; ?></a></li>
                                <?php endif; ?>
                                <li class="text-white">/</li>
                                <?php if (!empty($Title2)) : ?>
                                    <li class="active text-red-500"><?php echo $Title2; ?></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-12 max-w-4xl">

        <!-- Quote Section -->
        <blockquote class="text-lg italic text-gray-600 text-start mb-8 border-l-4 border-red-500 pl-4">
            "To the milestones achieved with the help of hard-work, dedication and determination!"
        </blockquote>

        <!-- Certifications Section -->
        <p class="text-gray-700 text-base leading-relaxed" style="margin-bottom: 2rem;">
            Our journey in quality assurance started with HACCP certification and progressed to ISO 22000 in 2012. In 2015, we achieved the GFSI-approved Food Safety certification, FSSC 22000, and as of 2021, we are proudly BRC Issue 9 Certified.
        </p>

        <!-- Picture Placeholder -->
        <div class="relative bg-[url(https://www.cfpl.net.in/images/retail-products-background.jpg)] h-[60vh] md:h-[80vh] flex items-center justify-center text-gray-500 mb-8 rounded-lg">
            <img class="absolute bottom-0 left-1/2 transform -translate-x-1/2 h-52" src="https://www.cfpl.net.in/images/awards.png" alt="">
            <div class="absolute flex gap-2 md:gap-10 top-20 left-1/2 transform -translate-x-1/2 ">
                <img class="h-32 md:h-64" src="https://www.cfpl.net.in/images/frame-1.png" alt="">
                <img class="h-32 md:h-64" src="https://www.cfpl.net.in/images/frame-2.png" alt="">
            </div>
        </div>
    </div>

    <!-- Footer Section Start -->
    <?php include './partials/footer.php' ?>

    <!-- all js files -->
    <?php include './partials/script.php' ?>



</body>

</html>