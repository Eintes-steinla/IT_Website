<?php
session_start();
// xoa email cua ng dung
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // nhan nut logout  
    if (isset($_POST['logout'])) {
        if (isset($_SESSION['email'])) {
            unset($_SESSION['email']);

            header("Location: ./pages/login.php");
            exit();
        }
    }
}
?>
<!-- Navbar Section -->
<nav id="nav-bar" class="top-0 z-50 fixed shadow-md w-full h-16 transition-all duration-900 ease-in-out">
    <script>
        window.addEventListener("scroll", function() {
            let nav = document.getElementById("nav-bar");
            let scrollPosition = window.scrollY || document.documentElement.scrollTop;

            if (scrollPosition >= 100) {
                nav.classList.add("bg-nav");
            } else {
                nav.classList.remove("bg-nav");
            }
        });
    </script>
    <!-- * star -->
    <div class="bg-stars stars--small"></div>
    <div class="bg-stars stars--medium"></div>
    <div class="bg-stars stars--large"></div>

    <div class="px-4 w-full h-full">
        <div class="flex justify-between items-center md:space-x-4 h-full">
            <!-- logo, link -->
            <div class="flex items-center gap-4">
                <!-- logo -->
                <div>
                    <a href="#">
                        <img
                            src="../assets/images/logo/logo.png"
                            alt="deku"
                            class="w-[44px] min-w-[44px]">
                    </a>
                </div>
                <!-- dropdown -->
                <div class="hidden lg:block">
                    <ul class="flex items-center text-title uppercase text-nowrap">
                        <li class="group relative hover-bg-title px-2 py-1 rounded transition-all duration-200 ease-in-out">
                            <a href="#" class="font-[exo2-bold]">courses</a>
                            <div class="group-hover:block hidden z-50 absolute bg-transparent -ml-2 pt-3">
                                <ul class="space-y-2 bg-dropdown px-2 py-2 rounded text-dropdown normal-case">
                                    <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">Course for Beginners</a></li>
                                    <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">College Entrance Prep</a></li>
                                    <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">English for Professionals</a></li>
                                    <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">TOEIC 700+</a></li>
                                    <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">IELTS 7.0+</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="group relative hover-bg-title px-2 py-1 rounded transition-all duration-200 ease-in-out">
                            <a href="#" class="font-[exo2-bold]">self-learning</a>
                            <div class="group-hover:block hidden z-50 absolute bg-transparent -ml-2 pt-3">
                                <ul class="space-y-2 bg-dropdown px-2 py-2 rounded text-dropdown normal-case">
                                    <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">Basic Grammar</a></li>
                                    <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">Advanced Grammar</a></li>
                                    <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">Grammar for Speaking</a></li>
                                    <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">Grammar for Writing</a></li>
                                    <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">Tenses Mastery</a></li>
                                    <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">Common Grammar Mistakes</a></li>
                                    <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">English Sentence Structure</a></li>
                                    <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">Parts of Speech</a></li>
                                    <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">Conditional Sentences</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="group relative hover-bg-title px-2 py-1 rounded transition-all duration-200 ease-in-out">
                            <a href="#" class="font-[exo2-bold]">news</a>
                            <div class="group-hover:block hidden z-50 absolute bg-transparent -ml-2 pt-3">
                                <ul class="space-y-2 bg-dropdown px-2 py-2 rounded text-dropdown normal-case">
                                    <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">Basic Vocabulary</a></li>
                                    <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">Advanced Vocabulary</a></li>
                                    <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">Everyday Vocabulary</a></li>
                                    <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">Business Vocabulary</a></li>
                                    <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">Academic Vocabulary</a></li>
                                    <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">Phrasal Verbs</a></li>
                                    <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">Collocations</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="group relative hover-bg-title px-2 py-1 rounded transition-all duration-200 ease-in-out">
                            <a href="#" class="font-[exo2-bold]">roadmaps</a>
                        </li>
                        <li class="hover-bg-title px-2 py-1 rounded transition-all duration-200 ease-in-out">
                            <a href="#" class="font-[exo2-bold]">contact</a>
                        </li>
                    </ul>
                </div>
                <div class="lg:hidden px-2 py-1">
                    <a href="#"
                        class="font-[exo2-extrabold] text-title uppercase text-nowrap">
                        Bao Minh
                    </a>
                </div>
            </div>
            <!-- search -->
            <div class="hidden sm:block relative w-1/4">
                <form action="../pages/course.php" method="get">
                    <input
                        placeholder="Search..."
                        class="peer block bg-input px-4 pr-[48px] border border-[#8a2be2] invalid:focus:border-error-500 invalid:border-error-500 focus:border-transparent hover:border-brand-500-secondary- rounded-[8px] focus:outline-1 focus:outline-primary focus:ring-0 w-full h-[35px] overflow-ellipsis overflow-hidden text-normal text-sm text-nowrap appearance-none"
                        id="search"
                        name="search"
                        type="text" />
                    <label
                        class="rtl:peer-focus:left-auto peer-focus:z-10 peer-focus:px-2 peer-focus:top-2 peer-placeholder-shown:-z-10 peer-placeholder-shown:top-1/2 top-2 z-10 absolute data-[disabled]:bg-gray-50-background- px-2 rounded text-[14px] text-normal text-primary peer-focus:text-primary focus:invalid:text-error-500 peer-invalid:text-error-500 leading-[150%] scale-75 peer-focus:scale-75 peer-placeholder-shown:scale-100 origin-[0] -translate-y-[1.2rem] rtl:peer-focus:translate-x-1/4 peer-focus:-translate-y-[1.2rem] peer-placeholder-shown:-translate-y-1/2 duration-300 transform start-1"
                        for="search">
                        Searching...
                    </label>
                    <button type="submit" class="top-1.5 right-3 absolute active:scale-95 transition-all duration-100 ease-in-out cursor-pointer">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill=""
                            viewBox="0 0 24 24"
                            height="24"
                            width="24"
                            class="icon">
                            <path
                                d="M10.979 16.8991C11.0591 17.4633 10.6657 17.9926 10.0959 17.9994C8.52021 18.0183 6.96549 17.5712 5.63246 16.7026C4.00976 15.6452 2.82575 14.035 2.30018 12.1709C1.77461 10.3068 1.94315 8.31525 2.77453 6.56596C3.60592 4.81667 5.04368 3.42838 6.82101 2.65875C8.59833 1.88911 10.5945 1.79039 12.4391 2.3809C14.2837 2.97141 15.8514 4.21105 16.8514 5.86977C17.8513 7.52849 18.2155 9.49365 17.8764 11.4005C17.5979 12.967 16.8603 14.4068 15.7684 15.543C15.3736 15.9539 14.7184 15.8787 14.3617 15.4343C14.0051 14.9899 14.0846 14.3455 14.4606 13.9173C15.1719 13.1073 15.6538 12.1134 15.8448 11.0393C16.0964 9.62426 15.8261 8.166 15.0841 6.93513C14.3421 5.70426 13.1788 4.78438 11.81 4.34618C10.4412 3.90799 8.95988 3.98125 7.641 4.55236C6.32213 5.12348 5.25522 6.15367 4.63828 7.45174C4.02135 8.74982 3.89628 10.2276 4.28629 11.6109C4.67629 12.9942 5.55489 14.1891 6.75903 14.9737C7.67308 15.5693 8.72759 15.8979 9.80504 15.9333C10.3746 15.952 10.8989 16.3349 10.979 16.8991Z"></path>
                            <rect
                                transform="rotate(-49.6812 12.2469 14.8859)"
                                rx="1"
                                height="10.1881"
                                width="2"
                                y="14.8859"
                                x="12.2469"></rect>
                        </svg>
                    </button>
                </form>
            </div>
            <!-- user -->
            <div class="flex items-center gap-4">
                <!-- From Uiverse.io by Type-Delta -->
                <label
                    for="themeToggle"
                    class="themeToggle st-sunMoonThemeToggleBtn"
                    type="checkbox">
                    <input type="checkbox" id="themeToggle" class="themeToggleInput" />
                    <svg
                        width="18"
                        height="18"
                        viewBox="0 0 20 20"
                        fill=""
                        stroke="none"
                        class="icon">
                        <mask id="moon-mask">
                            <rect x="0" y="0" width="20" height="20" fill="white"></rect>
                            <circle cx="11" cy="3" r="8" fill="black"></circle>
                        </mask>
                        <circle
                            class="sunMoon"
                            cx="10"
                            cy="10"
                            r="8"
                            mask="url(#moon-mask)"></circle>
                        <g>
                            <circle class="sunRay sunRay1" cx="18" cy="10" r="1.5"></circle>
                            <circle class="sunRay sunRay2" cx="14" cy="16.928" r="1.5"></circle>
                            <circle class="sunRay sunRay3" cx="6" cy="16.928" r="1.5"></circle>
                            <circle class="sunRay sunRay4" cx="2" cy="10" r="1.5"></circle>
                            <circle class="sunRay sunRay5" cx="6" cy="3.1718" r="1.5"></circle>
                            <circle class="sunRay sunRay6" cx="14" cy="3.1718" r="1.5"></circle>
                        </g>
                    </svg>
                </label>
                <!-- noti -->
                <button class="hidden md:block">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="26"
                        height="26"
                        fill=""
                        class="hover:scale-105 active:scale-95 transition-all duration-200 ease-in-out cursor-pointer icon bi bi-bell-fill"
                        viewBox="0 0 16 16">
                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901" />
                    </svg>
                </button>
                <!-- user -->
                <div id="user-container" class="relative">
                    <button id="user" class="hidden md:block z-50 active:scale-95 transition-all duration-200 ease-in-out cursor-pointer">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="26"
                            height="26"
                            fill=""
                            class="bi bi-person-circle icon"
                            viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>
                    </button>

                    <ul id="dropdown-menu" class="hidden right-0 z-50 absolute space-y-2 bg-dropdown mt-3 px-2 py-2 rounded font-[exo2-bold] text-dropdown text-left normal-case text-nowrap">
                        <li class="border-r-2 border-b-2 rounded hover-dropdown">
                            <a href="../pages/login.php" class="block px-2 py-1 w-full">Log in</a>
                        </li>
                        <li class="border-r-2 border-b-2 rounded hover-dropdown">
                            <a href="../pages/sign-up.php" class="block px-2 py-1 w-full">Sign up</a>
                        </li>
                        <li class="bg-red-700 hover:bg-red-600 border-r-2 border-red-400 border-b-2 rounded">
                            <form action="index.php" method="post"><button type="submit" name="logout" class="block px-2 py-1 w-full cursor-pointer">Log out</button></form>
                        </li>
                    </ul>
                </div>
                <script>
                    const userContainer = document.getElementById("user-container");
                    const userButton = document.getElementById("user");
                    const dropdownMenu = document.getElementById("dropdown-menu");

                    userButton.addEventListener("click", (event) => {
                        event.stopPropagation(); // Ngăn chặn sự kiện click lan ra ngoài
                        dropdownMenu.classList.toggle("hidden");
                    });

                    // Khi click ra ngoài user-container, ẩn dropdown
                    document.addEventListener("click", (event) => {
                        if (!userContainer.contains(event.target)) {
                            dropdownMenu.classList.add("hidden");
                        }
                    });
                </script>
                <!-- menu -->
                <label class="md:hidden block hamburger">
                    <input type="checkbox" id="hamburger">
                    <svg viewBox="0 0 32 32">
                        <path class="line-top-bottom line" d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22"></path>
                        <path class="line" d="M7 16 27 16"></path>
                    </svg>
                </label>
            </div>
        </div>
    </div>
    <!-- mobile nav -->
    <div
        id="mobile-menu"
        style="height: calc(100vh - 64px);"
        class="hidden md:hidden left-0 z-40 absolute bg-main p-4 w-full">
        <!-- dropdown -->
        <div class="">
            <ul class="space-y-2 text-normal uppercase text-nowrap">
                <li class="group relative hover-bg-title px-2 py-1 rounded transition-all duration-200 ease-in-out">
                    <a href="#" class="font-[exo2-bold]">courses</a>
                    <div class="group-hover:block hidden z-50 absolute bg-transparent -ml-2 pt-3">
                        <ul class="space-y-2 bg-dropdown px-2 py-2 rounded text-dropdown normal-case">
                            <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">Course for Beginners</a></li>
                            <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">College Entrance Prep</a></li>
                            <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">English for Professionals</a></li>
                            <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">TOEIC 700+</a></li>
                            <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">IELTS 7.0+</a></li>
                        </ul>
                    </div>
                </li>
                <li class="group relative hover-bg-title px-2 py-1 rounded transition-all duration-200 ease-in-out">
                    <a href="#" class="font-[exo2-bold]">grammar</a>
                    <div class="group-hover:block hidden z-50 absolute bg-transparent -ml-2 pt-3">
                        <ul class="space-y-2 bg-dropdown px-2 py-2 rounded text-dropdown normal-case">
                            <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">Basic Grammar</a></li>
                            <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">Advanced Grammar</a></li>
                            <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">Grammar for Speaking</a></li>
                            <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">Grammar for Writing</a></li>
                            <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">Tenses Mastery</a></li>
                            <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">Common Grammar Mistakes</a></li>
                            <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">English Sentence Structure</a></li>
                            <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">Parts of Speech</a></li>
                            <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">Conditional Sentences</a></li>
                        </ul>
                    </div>
                </li>
                <li class="group relative hover-bg-title px-2 py-1 rounded transition-all duration-200 ease-in-out">
                    <a href="#" class="font-[exo2-bold]">vocabulary</a>
                    <div class="group-hover:block hidden z-50 absolute bg-transparent -ml-2 pt-3">
                        <ul class="space-y-2 bg-dropdown px-2 py-2 rounded text-dropdown normal-case">
                            <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">Basic Vocabulary</a></li>
                            <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">Advanced Vocabulary</a></li>
                            <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">Everyday Vocabulary</a></li>
                            <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">Business Vocabulary</a></li>
                            <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">Academic Vocabulary</a></li>
                            <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">Phrasal Verbs</a></li>
                            <li class="border-r-2 border-b-2 rounded hover-dropdown"><a href="" class="block px-2 py-1 w-full">Collocations</a></li>
                        </ul>
                    </div>
                </li>
                <li class="group relative hover-bg-title px-2 py-1 rounded transition-all duration-200 ease-in-out">
                    <a href="#" class="font-[exo2-bold]">library</a>
                </li>
                <li class="hover-bg-title px-2 py-1 rounded transition-all duration-200 ease-in-out">
                    <a href="#" class="font-[exo2-bold]">join us</a>
                </li>
            </ul>
        </div>
        <!-- user -->
        <div class="mt-4 border-color border-t-2">
            <div class="flex justify-between items-center py-2">
                <!-- user -->
                <div class="flex items-center space-x-2">
                    <button class="p-2 hover:scale-105 active:scale-95 transition-all duration-200 ease-in-out cursor-pointer">
                        <a href="#">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="26"
                                height="26"
                                fill="#d4dfff"
                                class="bi bi-person-circle"
                                viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                            </svg>
                        </a>
                    </button>
                    <div class="space-y-1">
                        <span class="block text-normal text-sm leading-none">Bao Minh</span>
                        <span class="block text-note text-xs leading-none">baominh@gmail.com</span>
                    </div>
                </div>
                <!-- noti -->
                <button class="p-2 hover:scale-105 active:scale-95 transition-all duration-200 ease-in-out cursor-pointer">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="26"
                        height="26"
                        fill="#d4dfff"
                        class="bi bi-bell-fill"
                        viewBox="0 0 16 16">
                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901" />
                    </svg>
                </button>
            </div>
            <div>
                <ul class="space-y-2 text-normal uppercase text-nowrap">
                    <li class="group relative hover-bg-title px-2 py-1 rounded transition-all duration-200 ease-in-out">
                        <a href="../pages/login.php" class="font-[exo2-bold]">Log in</a>
                    </li>
                    <li class="hover-bg-title px-2 py-1 rounded transition-all duration-200 ease-in-out">
                        <a href="../pages/sign-up.php" class="font-[exo2-bold]">Sign up</a>
                    </li>
                    <li class="hover-bg-title px-2 py-1 rounded transition-all duration-200 ease-in-out">
                        <a href="#" class="font-[exo2-bold]">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</nav>