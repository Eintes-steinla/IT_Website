-- Tạo database với bộ mã UTF-8
CREATE DATABASE IF NOT EXISTS webphp CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Chọn database
USE webphp;

-- Tạo bảng users với định dạng utf8mb4
CREATE TABLE users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL UNIQUE,
    email VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL UNIQUE,
    user_password VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    is_admin TINYINT(1) DEFAULT 0,
    register_date DATETIME DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users (username, email, user_password, is_admin)
VALUES (
        'admin',
        'admin@gmail.com',
        'hashed_password_1',
        1
    );

DELETE FROM users;

ALTER TABLE users AUTO_INCREMENT = 1;

-- Tạo bảng courses với định dạng utf8mb4
CREATE TABLE courses (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL UNIQUE,
    course_image VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci UNIQUE,
    course_description TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO courses (course_name, course_image, course_description)
VALUES (
        'HTML',
        '../assets/images/icons/HTML.svg',
        'Create your first website with HTML, the building blocks of the web and dive into the world of web development.'
    ),
    (
        'CSS',
        '../assets/images/icons/CSS.svg',
        'Learn to use CSS selectors and properties to stylize your HTML pages with colors, fonts, sizing, layouts, and more!'
    ),
    (
        'JavaScript',
        '../assets/images/icons/JavaScript.svg',
        'Learn variables, loops, functions, and events to start building interactive web apps with the programming language of the web – JavaScript!'
    ),
    (
        'TailwindCSS',
        '../assets/images/icons/TailwindCSS-Light.svg',
        'Learn to use Tailwind CSS, a utility-first CSS framework that provides low-level utility classes to build custom designs.'
    ),
    (
        'ReactJS',
        '../assets/images/icons/React-Light.svg',
        'Get introduced to React, an open-source JavaScript-based web development library originally created at Facebook. Learn to code React with Codédex -- for free!'
    ),
    (
        'PHP',
        '../assets/images/icons/PHP-Light.svg',
        'Learn the basics of PHP, a popular general-purpose scripting language that is especially suited to web development.'
    ),
    (
        'NodeJS',
        '../assets/images/icons/NodeJS-Light.svg',
        'Node.js is a JavaScript runtime built on Chrome V8 JavaScript engine. Node.js uses an event-driven, non-blocking I/O model that makes it lightweight and efficient.'
    ),
    (
        'MySQL',
        '../assets/images/icons/MySQL-Light.svg',
        'MySQL is an open-source relational database management system. MySQL is a fast, reliable, scalable, and easy-to-use database server.'
    ),
    (
        'C',
        '../assets/images/icons/C.svg',
        'MySQL is an open-source relational database management system. MySQL is a fast, reliable, scalable, and easy-to-use database server.'
    ),
    (
        'C++',
        '../assets/images/icons/CPP.svg',
        'MySQL is an open-source relational database management system. MySQL is a fast, reliable, scalable, and easy-to-use database server.'
    ),
    (
        'Java',
        '../assets/images/icons/Java-Light.svg',
        'MySQL is an open-source relational database management system. MySQL is a fast, reliable, scalable, and easy-to-use database server.'
    ),
    (
        'C#',
        '../assets/images/icons/CS.svg',
        'MySQL is an open-source relational database management system. MySQL is a fast, reliable, scalable, and easy-to-use database server.'
    ),
    (
        'Python',
        '../assets/images/icons/Python-Light.svg',
        'MySQL is an open-source relational database management system. MySQL is a fast, reliable, scalable, and easy-to-use database server.'
    ),
    (
        'Swift',
        '../assets/images/icons/Swift.svg',
        'MySQL is an open-source relational database management system. MySQL is a fast, reliable, scalable, and easy-to-use database server.'
    ),
    (
        'Go',
        '../assets/images/icons/GoLang.svg',
        'MySQL is an open-source relational database management system. MySQL is a fast, reliable, scalable, and easy-to-use database server.'
    ),
    (
        'Ruby',
        '../assets/images/icons/Ruby.svg',
        'MySQL is an open-source relational database management system. MySQL is a fast, reliable, scalable, and easy-to-use database server.'
    ),
    (
        'Dart',
        '../assets/images/icons/Dart-Light.svg',
        'MySQL is an open-source relational database management system. MySQL is a fast, reliable, scalable, and easy-to-use database server.'
    );

INSERT INTO courses (course_name, course_image, course_description)
VALUES (
        'C',
        '../assets/images/icons/C.svg',
        'MySQL is an open-source relational database management system. MySQL is a fast, reliable, scalable, and easy-to-use database server.'
    );

-- Bảng liên kết giữa users và courses
CREATE TABLE user_courses (
    user_id INT UNSIGNED NOT NULL,
    course_id INT UNSIGNED NOT NULL,
    enrollment_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (user_id, course_id),
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (course_id) REFERENCES courses(id) ON DELETE CASCADE
);

SELECT *
FROM users;