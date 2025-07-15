<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = 'Chatha Foods'; ?>
    <?php include './partials/head.php'; ?>
    <style>
        /* Base Styles */
        .brand-logo {
            height: 64px;
            width: 64px;
            object-fit: contain;
        }

        .content-box {
            background: #ffffff60;
            padding: 1.5rem;
            border-left-width: 4px;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 40vw;
        }

        .breadcumb-title {
            font-size: 2rem;
        }

        .breadcumb-menu a {
            text-decoration: underline;
        }

        /* Timeline Container */
        .timeline-container {
            position: relative;
            padding: 4rem 2rem;
        }

        .timeline-items {
            display: flex;
            flex-direction: column;
            gap: 2rem;
            position: relative;
            z-index: 10;
        }

        /* Timeline Items */
        .timeline-item {
            display: flex;
            align-items: center;
            width: 100%;
        }

        .timeline-item.left {
            flex-direction: row;
        }

        .timeline-item.right {
            flex-direction: row-reverse;
        }

        .timeline-item .content-box {
            flex: 1;
            margin-left: 2rem;  
            margin-right: 2rem;
        }

        /* SVG Base Styles */
        #timeline-path {
            position: absolute;
            left: 10%; /* instead of 50% */
            transform: none; /* remove translateX(-50%) */
            top: 0;
            z-index: 0;
            height: 2350px;
            width: auto;
        }


        /* Certifications Grid */
        .certifications-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(80px, 1fr));
            gap: 1rem;
            justify-items: center;
        }

        /* Responsive Adjustments for max-width: 768px */
        @media (max-width: 768px) {
            .timeline-container {
                padding: 2rem 1rem;
            }

            .timeline-item {
                flex-direction: column !important;
                text-align: center !important;
            }

            .timeline-item img,
            .timeline-item .content-box {
                margin: 0 auto;
                text-align: center;
            }

            .timeline-item .content-box {
                margin-top: 0.5rem;
                max-width: 100%;
                margin-left: 0;
                margin-right: 0;
                padding: 0.75rem;
            }

            .brand-logo {
                height: 40px;
                width: 40px;
            }

            .breadcumb-title {
                font-size: 1.25rem;
            }

            .text-6xl {
                font-size: 2.5rem;
            }

            #timeline-path {
                height: 2250px;
                display: none;
            }

            .certifications-grid {
                grid-template-columns: repeat(auto-fit, minmax(60px, 1fr));
            }

            .certification-item img {
                height: 40px;
                width: 40px;
            }

            .certification-item p {
                font-size: 0.75rem;
            }
        }
    </style>
</head>

<body class="bg-color2">

    <!-- Preloader Start -->
    <?php include './partials/preloader.php'; ?>

    <!-- Back To Top Start -->
    <?php include './partials/scroll-up.php'; ?>

    <!-- Mouse Cursor Start -->
    <?php include './partials/mouse-cursor.php'; ?>

    <!-- Offcanvas Area Start -->
    <?php include './partials/sidebar.php'; ?>

    <!-- Header Section Start -->
    <?php include './partials/header.php'; ?>

    <!-- Search Area Start -->
    <?php include './partials/search.php'; ?>

    <?php
    $mainTitle = 'About Us';
    $Title = 'Home';
    $Title2 = 'About Us';
    ?>
    <div class="breadcumb-section relative group overflow-hidden">
        <div class="scale-[1.1] group-hover:scale-[1] transition-transform duration-700 breadcumb-wrapper bg-cover bg-center relative" style="background-image: url(https://www.cfpl.net.in/images/slide-1-cf.jpg);">
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
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

    <div class="text-gray-900">
        <div class="wave-bg"></div>
        <div class="relative max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <h1 class="text-6xl font-extrabold text-center mb-12 bg-clip-text text-transparent bg-gradient-to-r from-red-600 to-red-800 tracking-tight">
                OUR JOURNEY: PAST & PRESENT
            </h1>
            <div class="timeline-container">
                <svg class="" id="timeline-path" viewBox="0 0 200 2500" preserveAspectRatio="xMidYMid meet">
                    <path id="mainPath"
                        d="M100 50 Q160 150 100 250 Q40 350 100 450 Q160 550 100 650 Q40 750 100 850 Q160 950 100 1050 Q40 1150 100 1250 Q160 1350 100 1450 Q40 1550 100 1650 Q160 1750 100 1850 Q40 1950 100 2050 Q160 2150 100 2250 Q40 2350 100 2450"
                        stroke="url(#pathGradient)"
                        stroke-width="50" fill="none" stroke-linecap="round" />
                    <defs>
                        <linearGradient id="pathGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" style="stop-color:#ef4444;stop-opacity:1" />
                            <stop offset="100%" style="stop-color:#b91c1c;stop-opacity:1" />
                        </linearGradient>
                    </defs>
                    <polygon id="arrowHead" points="60,2450 100,2500 140,2450" fill="#b91c1c" stroke="#fff" stroke-width="2" />
                    <g class="food-icon" id="food1">
                        <svg x="80" y="250" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#f97316" stroke-width="2">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                        </svg>
                    </g>
                    <g class="food-icon" id="food2">
                        <svg x="60" y="900" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2">
                            <path d="M12 2a10 10 0 0 0-10 10c0 5.5 4.5 10 10 10s10-4.5 10-10A10 10 0 0 0 12 2zm0 18c-4.4 0-8-3.6-8-8s3.6-8 8-8 8 3.6 8 8-3.6 8-8 8z" />
                            <path d="M12 6v6l4 2" />
                        </svg>
                    </g>
                    <g class="food-icon" id="food3">
                        <svg x="120" y="1500" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#eab308" stroke-width="2">
                            <path d="M4 4h16v16H4z" />
                            <path d="M4 10h16M10 4v16" />
                        </svg>
                    </g>
                </svg>

                <div class="timeline-items">
                    <?php
                    $timelineData = [
                        [
                            'position' => 'left',
                            'images' => [
                                ['src' => 'assets/img/timeline/t1.png', 'alt' => 'Indian Army'],
                                ['src' => 'assets/img/timeline/t2.png', 'alt' => 'ITC'],
                                ['src' => 'assets/img/timeline/t3.png', 'alt' => 'India']
                            ],
                            'borderColor' => 'red-500',
                            'textColor' => 'red-600',
                            'year' => '1998 – 2000',
                            'description' => 'Constructed the Plant to process ready-to-eat retorted meat & poultry products.<br>Started supplies to ITC Kitchens of India and the Indian Army through distributor: Sugar & Spice.'
                        ],
                        [
                            'position' => 'right',
                            'images' => [
                                ['src' => 'assets/img/timeline/t4.png', 'alt' => 'subway'],
                            ],
                            'borderColor' => 'green-500',
                            'textColor' => 'green-600',
                            'year' => '2000 – 2005',
                            'description' => 'Commenced R&D for chilled & frozen meat & poultry products.<br>Started working towards development of products for the SUBWAY brand.'
                        ],
                        [
                            'position' => 'left',
                            'images' => [
                                ['src' => 'assets/img/timeline/t5.png', 'alt' => 'Domino’s Pizza']
                            ],
                            'borderColor' => 'blue-500',
                            'textColor' => 'blue-600',
                            'year' => '2005 – 2007',
                            'description' => 'Started supplying to Domino’s Pizza in 2007 with Pepperoni followed by other pizza toppings.<br>Growth with Domino’s and Subway brands in terms of volume grew exponentially.'
                        ],
                        [
                            'position' => 'right',
                            'images' => [
                                ['src' => 'assets/img/timeline/t6.png', 'alt' => 'Chills'],
                                ['src' => 'assets/img/timeline/t7.png', 'alt' => 'Cafe Coffee Day'],
                                ['src' => 'assets/img/timeline/t8.png', 'alt' => 'Donuts'],
                                ['src' => 'assets/img/timeline/t9.png', 'alt' => 'Papa Jones']
                            ],
                            'borderColor' => 'purple-500',
                            'textColor' => 'purple-600',
                            'year' => '2007 – 2012',
                            'description' => 'Phase of rigorous R&D work to develop products for B2B and Retail sectors.<br>Acquired brands like Chillis, Cafe Coffee Day, Dunkin Donuts, Papa John’s Pizza, and more during this stage.'
                        ],
                        [
                            'position' => 'left',
                            'images' => [
                                ['src' => 'assets/img/timeline/t10.png', 'alt' => 'Burger King'],
                                ['src' => 'assets/img/timeline/t11.png', 'alt' => 'Burger Singh'],
                                ['src' => 'assets/img/timeline/t12.png', 'alt' => 'Nik Bakers']
                            ],
                            'borderColor' => 'orange-500',
                            'textColor' => 'orange-600',
                            'year' => '2012 – 2018',
                            'description' => 'With R&D and Food Safety Systems being our forte, we acquired additional B2B brands across India like Burger King, Burger Singh, Nik Bakers...'
                        ],
                        [
                            'position' => 'right',
                            'images' => [
                                ['src' => 'assets/img/timeline/t13.png', 'alt' => 'hyper pure'],
                                ['src' => 'assets/img/timeline/t14.png', 'alt' => 'Movie Max'],
                                ['src' => 'assets/img/timeline/t15.png', 'alt' => 'cinneline'],
                                ['src' => 'assets/img/timeline/t16.png', 'alt' => 'chinese wok'],
                                ['src' => 'assets/img/timeline/t17.png', 'alt' => 'srs']
                            ],
                            'borderColor' => 'cyan-500',
                            'textColor' => 'cyan-600',
                            'year' => '2018 – 2022',
                            'description' => 'Organic growth in volumes & brands for frozen products grew at >2x.<br>We augmented our portfolio with upcoming brands like WOK Express, Zomato HyperPure, OLA foods, Cineline, SRS Cinemas during this phase.'
                        ],
                        [
                            'position' => 'left',
                            'images' => [
                                ['src' => 'assets/img/timeline/t19.png', 'alt' => 'kfc'],
                                ['src' => 'assets/img/timeline/t21.png', 'alt' => 'Taco Bell'],
                                ['src' => 'assets/img/timeline/t20.png', 'alt' => 'rbi'],
                                ['src' => 'assets/img/timeline/t22.png', 'alt' => 'tim hortons'],
                                ['src' => 'assets/img/timeline/t23.png', 'alt' => 'popoyes']
                            ],
                            'borderColor' => 'red-500',
                            'textColor' => 'red-600',
                            'year' => '2023 – 2024',
                            'description' => 'Commenced R&D for brands like YUM (KFC, Taco Bell), RBI brands (Tim Hortons, Burger King, Popeye’s), Fine Dine Restaurants (Pizza Express, Blue Tokai, Third Wave Coffee) and further processed RTE/RTC like Rice Bowls Concept & Sweet Snacks like Empanadas.'
                        ],
                        [
                            'position' => 'right',
                            'images' => [],
                            'borderColor' => 'green-500',
                            'textColor' => 'green-700',
                            'year' => '2025',
                            'description' => 'Started construction of a new plant for ready-to-eat vegetarian products.'
                        ]
                    ];


                    foreach ($timelineData as $index => $item) {
                        $alignmentClass = $item['position'];
                        $textAlignClass = $item['position'] === 'left' ? '' : 'text-right';
                        echo '<div class="timeline-item ' . $alignmentClass . '" data-pos="' . $index . '">';
                        // Empty div to maintain layout balance (replacing original image container)
                        echo '<div class="w-16"></div>'; // Spacer to align with original structure
                        echo '<div class="content-box border-' . $item['borderColor'] . ' ' . $textAlignClass . '">';
                        echo '<h2 class="text-2xl sm:text-3xl font-bold text-' . $item['textColor'] . '">' . $item['year'] . '</h2>';
                        echo '<p class="text-xs sm:text-sm mt-2 text-gray-700">' . $item['description'] . '</p>';
                        echo '<div class="flex flex-wrap gap-2 mt-4 ' . ($item['position'] === 'left' ? 'justify-start' : 'justify-end') . '">';
                        foreach ($item['images'] as $image) {
                            echo '<img src="' . $image['src'] . '" class="rounded border-4 border-white shadow-lg brand-logo" alt="' . $image['alt'] . '">';
                        }
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>

            <!-- Certifications Section -->
            <div class="mt-16 certifications-grid">
                <div class="certification-item text-center">
                    <img src="assets/img/timeline/t24.png" class="mx-auto rounded h-16" alt="HACCP">
                    <p class="text-xs mt-3 font-medium text-gray-600">2005-2012</p>
                </div>
                <div class="certification-item text-center">
                    <img src="assets/img/timeline/t25.png" class="mx-auto rounded h-16" alt="FSSAI">
                    <p class="text-xs mt-3 font-medium text-gray-600">2007-2012</p>
                </div>
                <div class="certification-item text-center">
                    <img src="assets/img/timeline/t26.png" class="mx-auto rounded h-16" alt="ISO">
                    <p class="text-xs mt-3 font-medium text-gray-600">2007-2012</p>
                </div>
                <div class="certification-item text-center">
                    <img src="assets/img/timeline/t27.png" class="mx-auto rounded h-16" alt="BRC">
                    <p class="text-xs mt-3 font-medium text-gray-600">2012-2018</p>
                </div>
                <div class="certification-item text-center">
                    <img src="assets/img/timeline/t28.png" class="mx-auto rounded h-16" alt="FDA">
                    <p class="text-xs mt-3 font-medium text-gray-600">2012-2018</p>
                </div>
                <div class="certification-item text-center">
                    <img src="assets/img/timeline/t29.png" class="mx-auto rounded h-16" alt="BRC A+">
                    <p class="text-xs mt-3 font-medium text-gray-600">2018-2022</p>
                </div>
                <div class="certification-item text-center">
                    <img src="assets/img/timeline/t30.png" class="mx-auto rounded h-16" alt="Green Cert">
                    <p class="text-xs mt-3 font-medium text-gray-600">2018-2022</p>
                </div>
                <div class="certification-item text-center">
                    <img src="assets/img/timeline/t31.png" class="mx-auto rounded h-16" alt="Green Cert">
                    <p class="text-xs mt-3 font-medium text-gray-600">2018-2022</p>
                </div>
                <div class="certification-item text-center">
                    <img src="assets/img/timeline/t32.png" class="mx-auto rounded h-16" alt="Green Cert">
                    <p class="text-xs mt-3 font-medium text-gray-600">2018-2022</p>
                </div>
                <div class="certification-item text-center">
                    <img src="assets/img/timeline/t33.png" class="mx-auto rounded h-16" alt="Green Cert">
                    <p class="text-xs mt-3 font-medium text-gray-600">2018-2022</p>
                </div>
                <div class="certification-item text-center">
                    <img src="assets/img/timeline/t34.png" class="mx-auto rounded h-16" alt="Green Cert">
                    <p class="text-xs mt-3 font-medium text-gray-600">2018-2022</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section Start -->
    <?php include './partials/footer.php'; ?>

    <!-- all js files -->
    <?php include './partials/script.php'; ?>

    <!-- Animation Scripts -->
    <script>
        gsap.registerPlugin(ScrollTrigger);
        const path = document.getElementById("mainPath");
        const arrow = document.getElementById("arrowHead");
        const pathLen = path.getTotalLength();

        path.style.strokeDasharray = pathLen;
        path.style.strokeDashoffset = pathLen;

        gsap.to(path, {
            strokeDashoffset: 0,
            ease: "none",
            scrollTrigger: {
                trigger: path,
                start: "top top",
                end: "bottom bottom",
                scrub: 1,
            }
        });

        gsap.to({
            progress: 0
        }, {
            progress: 1,
            ease: "none",
            scrollTrigger: {
                trigger: path,
                start: "top top",
                end: "bottom bottom",
                scrub: 1,
                onUpdate: self => {
                    const prog = self.progress;
                    const length = prog * pathLen;
                    const pos = path.getPointAtLength(length);
                    arrow.setAttribute("transform", `translate(${pos.x - 100}, ${pos.y - 2450})`);
                }
            }
        });

        // Animate timeline items
        const timelineItems = document.querySelectorAll('.timeline-item');
        gsap.utils.toArray(timelineItems).forEach((item, index) => {
            gsap.fromTo(item, {
                opacity: 0,
                y: 30
            }, {
                opacity: 1,
                y: 0,
                duration: 0.8,
                delay: index * 0.1,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: item,
                    start: "top 85%",
                    end: "bottom 15%",
                    toggleActions: "play none none reverse",
                }
            });
        });

        // Animate food icons
        gsap.utils.toArray('.food-icon').forEach((icon, idx) => {
            gsap.to(icon, {
                y: -10,
                rotation: 3,
                repeat: -1,
                yoyo: true,
                duration: 1.5 + idx * 0.3,
                ease: "sine.inOut"
            });
        });

        // Animate background wave
        gsap.to('.wave-bg', {
            backgroundPosition: "100px 100px",
            ease: "none",
            scrollTrigger: {
                trigger: ".wave-bg",
                start: "top top",
                end: "bottom bottom",
                scrub: 2,
            }
        });
    </script>
</body>

</html>