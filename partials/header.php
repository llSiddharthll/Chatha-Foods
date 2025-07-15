<!-- Desktop Header -->
<header class="hidden lg:block shadow-sm shadow-black/50">
    <nav class="bg-white text-black flex justify-between p-4 items-center gap-2">
        <div>
            <a href="<?= BASE_URL ?>index"><img class="h-12 w-64" src="./assets/img/icon/chattalogo.png" alt="Chatha Foods Logo"></a>
        </div>
        <ul class="flex flex-wrap gap-4 items-center">
            <li><a class="navigation-link hover:text-red-500" href="<?= BASE_URL ?>index">Home</a></li>
            <li class="relative" onclick="toggleDropdown('dropdown-menu')">
                <a class="navigation-link" href="#">About Us <i class="ms-2 fas fa-plus"></i></a>
                <div id="dropdown-menu" style="width: 10rem;" class="menu-drop absolute left-0 top-full mt-2 transition-all duration-300 max-h-0 overflow-hidden bg-gradient-to-b from-red-500 to-red-400 rounded shadow-lg z-50">
                    <a href="<?= BASE_URL ?>about" class="block px-4 py-2 text-red-100 hover:bg-white hover:rounded-t hover:border-t hover:text-black transition-colors">Our Story</a>
                    <a href="<?= BASE_URL ?>our-journey" class="block px-4 py-2 text-red-100 hover:bg-white hover:rounded-b hover:border-b hover:text-black transition-colors">Our Journey</a>
                </div>
            </li>
            <li class="relative" onclick="toggleDropdown('dropdown-q-menu')">
                <a class="navigation-link" href="<?= BASE_URL ?>quality-assurance">Quality Management </a>
                <!--<i class="ms-2 fas fa-plus"></i>-->
                <!--<div id="dropdown-q-menu" class="menu-drop absolute left-0 top-full mt-2 min-w-64 transition-all duration-300 max-h-0 overflow-hidden bg-gradient-to-b from-red-500 to-red-400 rounded shadow-lg z-50">-->
                <!--    <a href="<?= BASE_URL ?>quality-assurance" class="block px-4 py-2 text-red-100 hover:bg-white hover:rounded-t hover:border-t hover:text-black transition-colors">Quality Assurance</a>-->
                <!--    <a href="<?= BASE_URL ?>accolades" class="block px-4 py-2 text-red-100 hover:bg-white hover:text-black transition-colors">Certifications & Awards</a>-->
                <!--    <a href="<?= BASE_URL ?>customers" class="block px-4 py-2 text-red-100 hover:bg-white hover:rounded-b hover:border-b hover:text-black transition-colors">Our Customers</a>-->
                <!--</div>-->
            </li>
            <li><a class="navigation-link hover:text-red-500" href="<?= BASE_URL ?>process-and-infrastructure">Process and Infrastructure</a></li>
            <li><a class="navigation-link hover:text-red-500" href="<?= BASE_URL ?>products">Products</a></li>
            <li><a class="navigation-link hover:text-red-500" href="<?= BASE_URL ?>investors">Investors</a></li>
            <li><a class="navigation-link hover:text-red-500" href="<?= BASE_URL ?>blogs">Blogs</a></li>
            <li><a class="navigation-link hover:text-red-500" href="<?= BASE_URL ?>contact">Contact</a></li>
            <li>
                <a href="<?= BASE_URL ?>customization-pro">
                    <button class="customization-pro relative rounded-lg text-lg">
                        Customization Pro
                        <span class="sparkle sparkle-1"></span>
                        <span class="sparkle sparkle-2"></span>
                        <span class="sparkle sparkle-3"></span>
                    </button>
                </a>
            </li>
        </ul>
    </nav>
</header>

<!-- Mobile Header -->
<header class="flex lg:hidden items-center justify-between p-4">
    <div><img class="h-8 sm:h-10" src="./assets/img/icon/chattalogo.png" alt=""></div>
    <div id="menu-open-btn"><i class="text-2xl fa-solid fa-bars"></i></div>
    <div class="fixed border-l border-t border-gray-500 top-0 right-0 bg-white text-black h-screen z-50 transform translate-x-full transition-all duration-700" id="sidebar">
        <div class="flex flex-col items-center">
            <div class="flex gap-4 p-4 bg-white items-center">
                <button id="close-open-btn"><i class="text-red-500 text-2xl fa-regular fa-circle-right"></i></button>
                <img class="h-10" src="./assets/img/icon/chattalogo.png" alt="">
            </div>
            <div class="flex flex-col items-center justify-between w-full p-4 bg-red-500 text-white">
                <div><i class="fa-regular fa-clock me-2"></i> 09:00 am - 06:00 pm</div>
                <div class="font-semibold uppercase">Processed & Frozen Food</div>
                <div class="flex gap-4 items-center">
                    <a href="https://www.facebook.com/chathafoods.official" target="_blank"><i class="text-white text-xl fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/chathafoods.official/" target="_blank"><i class="text-white text-xl fa-brands fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/chatha-foods/" target="_blank"><i class="text-white text-xl fa-brands fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        <ul class="flex flex-col flex-wrap gap-3 items-start w-full p-4">
            <li><a class="navigation-link hover:text-red-500" href="<?= BASE_URL ?>index">Home</a></li>
            <li class="relative" onclick="toggleDropdown('dropdown-m-menu')">
                <a class="navigation-link" href="#">About Us <i class="ms-2 fas fa-plus"></i></a>
                <div id="dropdown-menu" class="menu-drop absolute left-0 top-full mt-2 min-w-32 transition-all duration-300 max-h-0 overflow-hidden bg-gradient-to-b from-red-500 to-red-400 rounded shadow-lg z-50">
                    <a href="<?= BASE_URL ?>about" class="block px-4 py-2 text-red-100 hover:bg-white hover:rounded-t hover:border-t hover:text-black transition-colors">About Us</a>
                    <a href="<?= BASE_URL ?>our-journey" class="block px-4 py-2 text-red-100 hover:bg-white hover:rounded-b hover:border-b hover:text-black transition-colors">Our Journey</a>
                </div>
            </li>
            <li class="relative" onclick="toggleDropdown('dropdown-m-q-menu')">
                <a class="navigation-link" href="<?= BASE_URL ?>quality-assurance">Quality Management </a>
                <!--<div id="dropdown-m-q-menu" class="menu-drop absolute left-0 top-full mt-2 min-w-64 transition-all duration-300 max-h-0 overflow-hidden bg-gradient-to-b from-red-500 to-red-400 rounded shadow-lg z-50">-->
                <!--    <a href="<?= BASE_URL ?>quality-assurance" class="block px-4 py-2 text-red-100 hover:bg-white hover:rounded-t hover:border-t hover:text-black transition-colors">Quality Assurance</a>-->
                <!--    <a href="<?= BASE_URL ?>accolades" class="block px-4 py-2 text-red-100 hover:bg-white hover:text-black transition-colors">Certifications & Awards</a>-->
                <!--    <a href="<?= BASE_URL ?>customers" class="block px-4 py-2 text-red-100 hover:bg-white hover:rounded-b hover:border-b hover:text-black transition-colors">Our Customers</a>-->
                <!--</div>-->
            </li>
            <li><a class="navigation-link hover:text-red-500" href="<?= BASE_URL ?>process-and-infrastructure">Process and Infrastructure</a></li>
            <li><a class="navigation-link hover:text-red-500" href="<?= BASE_URL ?>products">Products</a></li>
            <li><a class="navigation-link hover:text-red-500" href="<?= BASE_URL ?>investors">Investors</a></li>
            <li><a class="navigation-link hover:text-red-500" href="<?= BASE_URL ?>blogs">Blogs</a></li>
            <li><a class="navigation-link hover:text-red-500" href="<?= BASE_URL ?>contact">Contact</a></li>
            <li>
                <a href="<?= BASE_URL ?>customization-pro">
                    <button class="customization-pro relative rounded-lg text-lg">
                        Customization Pro
                        <span class="sparkle sparkle-1"></span>
                        <span class="sparkle sparkle-2"></span>
                        <span class="sparkle sparkle-3"></span>
                    </button>
                </a>
            </li>
        </ul>
    </div>
</header>

<!-- Dropdown Logic -->
<script>
  window.addEventListener('click', function (e) {
    document.querySelectorAll('[id^="dropdown-"]').forEach(dropdown => {
      const trigger = dropdown.parentElement.querySelector('a');
      if (!trigger.contains(e.target) && !dropdown.contains(e.target)) {
        dropdown.classList.remove('dropdown-open');
        dropdown.classList.add('max-h-0', 'overflow-hidden');
      }
    });
  });

  function toggleDropdown(id) {
    const dropdown = document.getElementById(id);
    document.querySelectorAll('[id^="dropdown-"]').forEach(el => {
      if (el.id !== id) {
        el.classList.remove('dropdown-open');
        el.classList.add('max-h-0', 'overflow-hidden');
      }
    });
    dropdown.classList.toggle('dropdown-open');
    dropdown.classList.toggle('max-h-0');
    dropdown.classList.toggle('overflow-hidden');
  }
</script>

