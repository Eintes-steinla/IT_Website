<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $search = isset($_GET['search']) ? trim($_GET['search']) : '';
    $search = strtolower($search);
}

$courses = [
    [
        "name" => "cpp",
        "title" => "C++ Programming",
        "description" => "C++ is a general-purpose programming language created by Bjarne Stroustrup as an extension of the C programming language, or 'C with Classes'. The language has expanded significantly over time, and modern C++ now has object-oriented, generic, and functional features in addition to facilities for low-level memory manipulation.",
        "image" => "../assets/images/courses/cpp.png",
        "price" => 100,
        "rating" => 4.5,
        "author" => "Bao Minh",
        "lessons" => 50,
        "duration" => 10,
        "level" => "Beginner",
    ],
    [
        "name" => "java",
        "title" => "Java Programming",
        "description" => "Java is a class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible. It is a general-purpose programming language intended to let application developers write once, run anywhere (WORA), meaning that compiled Java code can run on all platforms that support Java without the need for recompilation.",
        "image" => "../assets/images/courses/java.png",
        "price" => 150,
        "rating" => 4.7,
        "author" => "Bao Minh",
        "lessons" => 60,
        "duration" => 12,
        "level" => "Intermediate",
    ],
    [
        "name" => "python",
        "title" => "Python Programming",
        "description" => "Python is an interpreted, high-level and general-purpose programming language. Python's design philosophy emphasizes code readability with its notable use of significant indentation. Its language constructs and object-oriented approach aim to help programmers write clear, logical code for small and large-scale projects.",
        "image" => "../assets/images/courses/py.png",
        "price" => 200,
        "rating" => 4.9,
        "author" => "Bao Minh",
        "lessons" => 70,
        "duration" => 14,
        "level" => "Advanced",
    ],
    [
        "name" => "javascript",
        "title" => "JavaScript Programming",
        "description" => "JavaScript is a versatile programming language primarily used for web development. It enables interactive web pages and is an essential part of web applications.",
        "image" => "../assets/images/courses/js.png",
        "price" => 120,
        "rating" => 4.6,
        "author" => "Bao Minh",
        "lessons" => 55,
        "duration" => 11,
        "level" => "Intermediate",
    ],
    [
        "name" => "php",
        "title" => "PHP Development",
        "description" => "PHP is a server-side scripting language designed specifically for web development. It powers many popular websites and content management systems.",
        "image" => "../assets/images/courses/php.png",
        "price" => 130,
        "rating" => 4.4,
        "author" => "Bao Minh",
        "lessons" => 45,
        "duration" => 9,
        "level" => "Beginner",
    ],
    [
        "name" => "ruby",
        "title" => "Ruby Programming",
        "description" => "Ruby is a dynamic, object-oriented programming language focused on simplicity and productivity. It's known for its elegant syntax.",
        "image" => "../assets/images/courses/ruby.png",
        "price" => 140,
        "rating" => 4.3,
        "author" => "Bao Minh",
        "lessons" => 40,
        "duration" => 8,
        "level" => "Intermediate",
    ],
    [
        "name" => "swift",
        "title" => "Swift iOS Development",
        "description" => "Swift is Apple's programming language for iOS, macOS, watchOS, and tvOS app development. Learn to build native Apple applications.",
        "image" => "../assets/images/courses/swift.png",
        "price" => 180,
        "rating" => 4.8,
        "author" => "Bao Minh",
        "lessons" => 65,
        "duration" => 13,
        "level" => "Advanced",
    ],
    [
        "name" => "golang",
        "title" => "Go Programming",
        "description" => "Go is an open source programming language developed by Google. It's known for its efficiency and support for concurrent programming.",
        "image" => "../assets/images/courses/golang.png",
        "price" => 160,
        "rating" => 4.5,
        "author" => "Bao Minh",
        "lessons" => 48,
        "duration" => 10,
        "level" => "Intermediate",
    ],
    [
        "name" => "rust",
        "title" => "Rust Programming",
        "description" => "Rust is a systems programming language focused on safety, concurrency, and performance. Perfect for low-level system development.",
        "image" => "../assets/images/courses/rust.png",
        "price" => 170,
        "rating" => 4.7,
        "author" => "Bao Minh",
        "lessons" => 52,
        "duration" => 11,
        "level" => "Advanced",
    ],
    [
        "name" => "kotlin",
        "title" => "Kotlin Android Development",
        "description" => "Kotlin is a modern programming language that makes developers happier. Official programming language for Android development.",
        "image" => "../assets/images/courses/kotlin.png",
        "price" => 145,
        "rating" => 4.6,
        "author" => "Bao Minh",
        "lessons" => 58,
        "duration" => 12,
        "level" => "Intermediate",
    ]
];

// Tìm kiếm khóa học
// $found_courses = [];
foreach ($courses as $course) {
    if (strtolower($course['name']) === $search) {
        echo "<h2>{$course['title']}</h2>";
        echo "<p>{$course['description']}</p>";
        echo "<p>Author: {$course['author']}</p>";
        echo "<p>Price: {$course['price']}$</p>";
        echo "<p>Rating: {$course['rating']}</p>";
        echo "<p>Lessons: {$course['lessons']}</p>";
        echo "<img src='{$course['image']}' alt='{$course['title']}' width='200'><br>";
        break; // Dừng khi tìm thấy 1 khóa học phù hợp
    }
}

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
    <title>course</title>
</head>

<body class="h-full font-[exo2-regular]">
    <!-- 
    <div class="">
        <div>
            <img src="../assets/images/courses/cpp.png" alt="logo" class="w-[100px] h-[100px]">
        </div>

        <div>
            <h2 class="font-bold text-2xl">C++ Programming</h2>
            <p class="text-lg line-clamp-3">C++ is a general-purpose programming language created by Bjarne Stroustrup as an extension of the C programming language, or 'C with Classes'. The language has expanded significantly over time, and modern C++ now has object-oriented, generic, and functional features in addition to facilities for low-level memory manipulation.</p>
            <div class="flex justify-between">
                <p class="text-lg">Price: $$value[3]</p>
                <p class="text-lg">Rating: $value[4]</p>
            </div>
        </div>

        <div>
            <div class="flex justify-between">
                <p class="text-lg">Author: $value[5]</p>
                <p class="text-lg">Lessons: $value[6]</p>
                <p class="text-lg">Duration: $value[7] weeks</p>
                <p class="text-lg">Level: $value[8]</p>
            </div>
        </div>
    </div> -->

</body>

</html>