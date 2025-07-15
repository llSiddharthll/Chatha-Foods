<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = 'Chatha Foods Journey'; ?>
    <?php include './partials/head.php'; ?>
    <style>
        #lottie-animation {
    width: 100%;
    height: 1800px;
}
@media (max-width: 768px) {
    #lottie-animation {
        height: 900px;
    }
}

    </style>
    
</head>

<body class="bg-color2">

    <!-- Preloader -->
    <?php include './partials/preloader.php'; ?>
    <?php include './partials/scroll-up.php'; ?>
    <?php include './partials/mouse-cursor.php'; ?>
    <?php include './partials/sidebar.php'; ?>
    <?php include './partials/header.php'; ?>
    <?php include './partials/search.php'; ?>

    <?php
    $mainTitle = '';
    $Title = '';
    $Title2 = '';
    ?>
    <div class="breadcumb-section relative group overflow-hidden">
        <div class="scale-[1.1] group-hover:scale-[1] transition-transform duration-700 breadcumb-wrapper bg-cover bg-center relative" style="background-image: url(https://www.cfpl.net.in/images/slide-1-cf.jpg);">
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            <div class="container relative z-10">
                <div class="row">
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Lottie Animation Section -->
    <div id="lottie-animation"></div>

 <script>
  const lottieContainer = document.getElementById('lottie-animation');
  const animation = lottie.loadAnimation({
    container: lottieContainer,
    renderer: 'svg',
    loop: false,
    autoplay: false,
    path: 'Website.json'
  });

  window.addEventListener('scroll', () => {
    const containerTop = lottieContainer.offsetTop;
    const containerHeight = lottieContainer.offsetHeight;
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    const windowHeight = window.innerHeight;

    // Calculate progress only when in view
    if (scrollTop + windowHeight >= containerTop && scrollTop <= containerTop + containerHeight) {
      const scrollInSection = scrollTop + windowHeight - containerTop;
      const totalScrollable = windowHeight + containerHeight;
      const progress = Math.min(scrollInSection / totalScrollable, 1); // Clamp between 0–1
      const frame = progress * animation.totalFrames;
      animation.goToAndStop(frame, true);
    }
  });
</script>


    <!-- Footer -->
    <?php include './partials/footer.php'; ?>

    <!-- Scripts -->
    <?php include './partials/script.php'; ?>

</body>

</html>
