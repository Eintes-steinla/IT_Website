# English Learning Website

## Project Structure

```
/english-learning-website
│── /assets                 # Chứa tài nguyên tĩnh
│   ├── /css                # Chứa file CSS
│   │   ├── style.css
│   │   ├── reset.css
│   ├── /js                 # Chứa file JavaScript
│   │   ├── main.js
│   ├── /images             # Chứa hình ảnh
│── /config                 # Cấu hình hệ thống
│   ├── config.php          # Kết nối database
│   ├── routes.php          # Điều hướng URL
│   ├── auth.php            # Xử lý đăng nhập, đăng ký
│── /includes               # File tái sử dụng trên nhiều trang
│   ├── header.php          # Header chung
│   ├── footer.php          # Footer chung
│   ├── navbar.php          # Thanh điều hướng
│── /pages                  # Trang chính của website
│   ├── home.php            # 1️⃣ Trang chủ
│   ├── register.php        # 2️⃣ Đăng ký
│   ├── login.php           # 3️⃣ Đăng nhập
│   ├── profile.php         # 4️⃣ Trang cá nhân
│   ├── lessons.php         # 5️⃣ Danh sách bài học
│   ├── lesson-detail.php   # 6️⃣ Chi tiết bài học
│   ├── quiz.php            # 7️⃣ Bài tập trắc nghiệm
│   ├── fill-in.php         # 8️⃣ Bài tập điền từ
│   ├── result.php          # 9️⃣ Kết quả bài tập
│   ├── vocabulary.php      # 🔟 Danh sách từ vựng
│   ├── vocab-detail.php    # 1️⃣1️⃣ Chi tiết từ vựng
│   ├── ranking.php         # 1️⃣2️⃣ Bảng xếp hạng
│   ├── discussion.php      # 1️⃣3️⃣ Bình luận & thảo luận
│   ├── manage-comments.php # 1️⃣4️⃣ Quản lý bình luận
│── /admin                  # Chức năng Admin
│   ├── create-lesson.php   # 1️⃣5️⃣ Tạo bài học
│   ├── edit-lesson.php     # 1️⃣6️⃣ Chỉnh sửa bài học
│   ├── delete-lesson.php   # 1️⃣7️⃣ Xóa bài học
│   ├── manage-users.php    # 1️⃣8️⃣ Quản lý người dùng
│── /user                   # Chức năng liên quan đến người dùng
│   ├── history.php         # 1️⃣9️⃣ Lịch sử học tập
│   ├── support.php         # 2️⃣0️⃣ Hỗ trợ & liên hệ
│── /api                    # API phục vụ dữ liệu động
│   ├── getLessons.php
│   ├── submitQuiz.php
│   ├── getRanking.php
│── index.php               # Trang chủ
│── .htaccess               # Tối ưu URL (nếu cần)
│── db.sql                  # File database
```

## Installation Guide

1. Clone the repository:
   ```sh
   git clone https://github.com/your-repo/english-learning-website.git
   ```
2. Set up your database using `db.sql`.
3. Configure your database connection in `config/config.php`.
4. Start your local PHP server:
   ```sh
   php -S localhost:8000
   ```
5. Open `http://localhost:8000` in your browser.

## Technologies Used

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL

## Features

- User authentication (Login/Register)
- Lesson management
- Interactive quizzes
- Vocabulary learning
- User ranking system
- Admin panel for managing users and lessons

🚀 Happy coding!

```
✅ Backend API – Giao tiếp với frontend (React, Vue, Mobile).
✅ Quản lý database – MySQL, PostgreSQL, MongoDB.
✅ Xác thực & bảo mật – Session, JWT, mã hóa dữ liệu.
✅ Xử lý form, upload file, gửi email.
✅ Thanh toán online (VNPay, PayPal, Stripe).
✅ Caching, tối ưu hiệu suất với Redis, OPcache.
```

# 🎯 Kế hoạch làm website học tiếng Anh trong 1 tháng

## ✅ Tuần 1: Lên kế hoạch & Xây dựng cơ sở hạ tầng

Xác định chức năng chính của website

Đăng ký / đăng nhập
Trang học tập (từ vựng, ngữ pháp, bài tập, kiểm tra)
Diễn đàn hoặc phần bình luận
Hệ thống điểm & xếp hạng
Trang quản trị (nếu có)
Thiết kế giao diện & Điều hướng (UI/UX)

Sử dụng Figma hoặc vẽ sơ đồ trang web
Xây dựng layout chung: Header, Footer, Menu
Xác định màu sắc, font chữ phù hợp với người 10-30 tuổi
Khởi tạo dự án PHP

Tạo folder dự án với cấu trúc chuẩn (public, views, controllers, models, assets)
Kết nối MySQL bằng PDO hoặc MySQLi
Cài đặt Composer (nếu muốn sử dụng thư viện PHP)

## ✅ Tuần 2: Xây dựng các tính năng chính

Xây dựng hệ thống người dùng

Đăng ký, đăng nhập (sử dụng session/cookie)
Cơ sở dữ liệu MySQL: users (id, username, password, email, role, avatar,...)
Trang học tập & bài giảng

Tạo trang danh sách bài học
Chi tiết bài học (có text, hình ảnh, âm thanh nếu có)
Chức năng lưu bài học yêu thích
Trang bài tập & kiểm tra

Trắc nghiệm (A, B, C, D)
Điền từ vào chỗ trống
Hiển thị kết quả sau khi làm bài

## ✅ Tuần 3: Hoàn thiện & Tối ưu

Hệ thống bình luận & diễn đàn

Người dùng có thể bình luận bài học
Trả lời bình luận của nhau
Lọc và hiển thị bình luận mới nhất
Bảng xếp hạng & hệ thống điểm

Cộng điểm sau khi hoàn thành bài tập
Hiển thị bảng xếp hạng người dùng tích cực
Trang quản trị (nếu có)

Thêm, chỉnh sửa, xóa bài học
Quản lý bình luận và người dùng

## ✅ Tuần 4: Kiểm tra, Triển khai & Bảo trì

Kiểm tra toàn bộ hệ thống

Test tất cả tính năng
Kiểm tra lỗi bảo mật (SQL Injection, XSS, CSRF)
Tối ưu tốc độ tải trang

Caching dữ liệu
Tối ưu hình ảnh, nén CSS/JS
Triển khai lên hosting

Sử dụng XAMPP/Laragon để chạy local trước
Deploy lên hosting (Hostinger, InfinityFree hoặc VPS nếu cần)

## 📌 Danh sách trang (Dự kiến 20 trang)

```
1️⃣ Trang chủ
2️⃣ Đăng ký
3️⃣ Đăng nhập
4️⃣ Trang cá nhân
5️⃣ Danh sách bài học
6️⃣ Chi tiết bài học
7️⃣ Bài tập trắc nghiệm
8️⃣ Bài tập điền từ
9️⃣ Kết quả bài tập
🔟 Danh sách từ vựng
1️⃣1️⃣ Chi tiết từ vựng
1️⃣2️⃣ Bảng xếp hạng
1️⃣3️⃣ Bình luận & thảo luận
1️⃣4️⃣ Quản lý bình luận
1️⃣5️⃣ Tạo bài học (Admin)
1️⃣6️⃣ Chỉnh sửa bài học (Admin)
1️⃣7️⃣ Xóa bài học (Admin)
1️⃣8️⃣ Quản lý người dùng (Admin)
1️⃣9️⃣ Lịch sử học tập
2️⃣0️⃣ Hỗ trợ & liên hệ
```
