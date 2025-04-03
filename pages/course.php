<?php
require_once __DIR__ . '/../connect.php';
require_once __DIR__ . '/admin.php';

use Connect\Connection;

use Admin\SelectAll;

$selectAll = new SelectAll();

$tableCourses = $selectAll->selectAll("courses");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/css/output.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/darkmode.css">

    <!-- * favicon -->
    <link rel="icon" sizes="57x57" href="../assets/images/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="../assets/images/favicon/apple-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="../assets/images/favicon/apple-icon-precomposed.png">
    <link rel="apple-touch-icon" sizes="57x57" href="../assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="36x36" href="../assets/images/favicon/android-icon-36x36.png">
    <link rel="icon" type="image/png" sizes="48x48" href="../assets/images/favicon/android-icon-48x48.png">
    <link rel="icon" type="image/png" sizes="72x72" href="../assets/images/favicon/android-icon-72x72.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/images/favicon/android-icon-96x96.png">
    <link rel="icon" type="image/png" sizes="144x144" href="../assets/images/favicon/android-icon-144x144.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/images/favicon/favicon-96x96.png">
    <link rel="manifest" href="../assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../assets/images/favicon/ms-icon-70x70.png">
    <meta name="msapplication-TileImage" content="../assets/images/favicon/ms-icon-144x144.png">
    <meta name="msapplication-TileImage" content="../assets/images/favicon/ms-icon-150x150.png">
    <meta name="msapplication-TileImage" content="../assets/images/favicon/ms-icon-310x310.png">
    <meta name="theme-color" content="#ffffff">
    <title>Courses</title>
</head>

<body class="bg-main h-full font-[exo2-regular]">
    <section>
        <!-- * star -->
        <div class="bg-stars stars--small"></div>
        <div class="bg-stars stars--medium"></div>
        <div class="bg-stars stars--large"></div>

        <!-- starball -->
        <div
            class="-z-1 absolute flex gap-15 md:gap-35 w-full h-full overflow-hidden">
            <span class="blur-[4.5px] star" style="--i: 31"></span>
            <span class="blur-[4.5px] star" style="--i: 12"></span>
            <span class="blur-[4.5px] star" style="--i: 57"></span>
            <span class="blur-[4.5px] star" style="--i: 93"></span>
            <span class="blur-[4.5px] star" style="--i: 23"></span>
            <span class="blur-[4.5px] star" style="--i: 70"></span>
            <span class="blur-[4.5px] star" style="--i: 6"></span>
        </div>

        <div class="mt-[64px] overflow-hidden">
            <!-- Nút điều hướng -->
            <div class="flex justify-evenly items-center h-[50px]">
                <button
                    id="prev-courses"
                    class="bg-input rounded-lg hover:scale-110 active:scale-100 duration-300 cursor-pointer">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="45px"
                        height="45px"
                        viewBox="0 0 24 24"
                        class="stroke-[#bfa3ff]">
                        <path
                            stroke-linejoin="round"
                            stroke-linecap="round"
                            stroke-width="1.5"
                            d="M11 6L5 12M5 12L11 18M5 12H19"></path>
                    </svg>
                </button>

                <div class="font-[exo2-extrabold] text-title text-3xl leading-none">
                    Courses
                </div>

                <button
                    id="next-courses"
                    class="bg-input rounded-lg rotate-180 hover:scale-110 active:scale-100 duration-300 cursor-pointer">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="45px"
                        height="45px"
                        viewBox="0 0 24 24"
                        class="stroke-[#bfa3ff]">
                        <path
                            stroke-linejoin="round"
                            stroke-linecap="round"
                            stroke-width="1.5"
                            d="M11 6L5 12M5 12L11 18M5 12H19"></path>
                    </svg>
                </button>
            </div>

            <!-- Carousel -->
            <div
                id="carousel-courses"
                style="transform: translateX(0%)"
                class="flex justify-evenly items-center h-[calc(100vh-114px)] transition-transform duration-500">
                <?php foreach ($tableCourses as $row): ?>
                    <!-- Card -->
                    <div
                        class="group peer left-0 peer-hover:left-5 relative flex-shrink-0 space-y-5 bg-gradient-to-br from-[#251c40] to-[#432e75] shadow-[-1rem_0_3rem_#00000044] hover:shadow-lg hover:text-shadow-[2px_2px_8px_#6e5b94] mx-20 sm:mx-4 p-5 rounded-lg w-[calc(1*100%-160px)] sm:w-[calc(1/2*100%-32px)] md:w-[calc(1/3*100%-32px)] lg:w-[calc(25%-32px)] min-w-40 h-fit peer-hover:rotate-x-[-15deg] peer-hover:rotate-y-[10deg] transition-all hover:translate-y-[-15px] duration-400 ease-out peer-hover:transform">
                        <div class="flex justify-between items-center">
                            <!-- * title -->
                            <div
                                class="relative font-[exo2-bold] text-normal text-2xl truncate">
                                <?= $row['course_name'] ?>
                            </div>
                            <!-- * wish list -->
                            <div
                                class="relative w-[27px] min-w-[27px] h-[27px] active:scale-90 transition-all duration-300">
                                <input
                                    class="z-20 absolute opacity-0 w-full h-full cursor-pointer"
                                    type="checkbox"
                                    name="wish-list" />
                                <div class="flex justify-center items-center w-full h-full">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="absolute fill-pink-600"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z"></path>
                                    </svg>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="hidden absolute fill-pink-600 animate-like-filled"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z"></path>
                                    </svg>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="hidden absolute fill-pink-600 stroke-2 stroke-pink-600 animate-like-celebrate"
                                        height="100"
                                        width="100">
                                        <polygon points="10,10 20,20"></polygon>
                                        <polygon points="10,50 20,50"></polygon>
                                        <polygon points="20,80 30,70"></polygon>
                                        <polygon points="90,10 80,20"></polygon>
                                        <polygon points="90,50 80,50"></polygon>
                                        <polygon points="80,80 70,70"></polygon>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <!-- * description -->
                        <div class="flex justify-center">
                            <img src="<?= $row['course_image'] ?>" alt="img" />
                        </div>
                        <!-- * move -->
                        <div class="flex mx-auto w-fit">
                            <button
                                class="bg-[#4a2f7c] hover:bg-[#8a4ff8] hover:shadow-[0px_0px_20px_rgba(157,71,255,0.5),0px_5px_5px_-1px_rgba(163,58,233,0.25),inset_4px_4px_8px_rgba(219,175,255,0.5),inset_-4px_-4px_8px_rgba(137,19,216,0.35)] px-3 py-1 border-none rounded-lg font-[exo2-bold] text-[#d4dfff] hover:text-white active:scale-95 transition-all duration-300 ease-in-out cursor-pointer">
                                <a href="course-detail.php?id=<?= $row['course_name'] ?>" class="">Preview</a>
                            </button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <script>
            const carousel = document.getElementById("carousel-courses");
            const slides = document.querySelectorAll("#carousel-courses > div");
            const prevBtn = document.getElementById("prev-courses");
            const nextBtn = document.getElementById("next-courses");

            let visibleSlides = getVisibleSlides(); // Số lượng slide hiển thị mỗi trang
            let totalSlides = slides.length;
            let totalPages = Math.ceil(totalSlides / visibleSlides);
            let currentPage = 0;

            function getVisibleSlides() {
                if (window.innerWidth <= 640) return 1; // Mobile: 1 item
                if (window.innerWidth <= 768) return 2; // Tablet: 2 item
                if (window.innerWidth <= 1024) return 3; // Medium screen: 3 item
                return 4; // Desktop: 4 item
            }

            function updateCarousel() {
                visibleSlides = getVisibleSlides();
                totalPages = Math.ceil(totalSlides / visibleSlides);

                const translateX = -currentPage * 100; // Nhảy từng trang
                carousel.style.transform = `translateX(${translateX}%)`;
            }

            // Nút Next
            nextBtn.addEventListener("click", () => {
                if (currentPage < totalPages - 1) {
                    currentPage++;
                } else {
                    currentPage = 0; // Quay lại đầu
                }
                updateCarousel();
            });

            // Nút Prev
            prevBtn.addEventListener("click", () => {
                if (currentPage > 0) {
                    currentPage--;
                } else {
                    currentPage = totalPages - 1; // Quay về cuối
                }
                updateCarousel();
            });

            // Add keyboard event listener
            document.addEventListener("keydown", (event) => {
                switch (event.key) {
                    case "ArrowLeft":
                        prevBtn.click();
                        break;
                    case "ArrowRight":
                        nextBtn.click();
                        break;
                }
            });

            // Swipe trên mobile
            let startX = 0;
            carousel.addEventListener("touchstart", (e) => {
                startX = e.touches[0].clientX;
            });

            carousel.addEventListener("touchend", (e) => {
                let endX = e.changedTouches[0].clientX;
                if (startX - endX > 50) nextBtn.click(); // Vuốt trái -> Next
                if (endX - startX > 50) prevBtn.click(); // Vuốt phải -> Prev
            });

            // Resize cập nhật lại layout
            window.addEventListener("resize", updateCarousel);
            updateCarousel();
        </script>
    </section>
</body>

</html>