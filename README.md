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
