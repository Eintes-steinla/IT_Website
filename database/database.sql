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
    course_name VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    description TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    instructor VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    start_date DATE NOT NULL,
    STATUS ENUM('active', 'inactive') DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

SELECT *
FROM users;