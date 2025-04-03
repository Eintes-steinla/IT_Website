<?php

namespace Admin;

require_once __DIR__ . '/../connect.php';

use Connect\Connection;
use mysqli;
use mysqli_result;
use mysqli_stmt;

class User
{
    private $conn;
    private $username;
    private $email;
    private $password;
    private $isAdmin;

    public function __construct(mysqli $conn, $username, $email, $password, $isAdmin = 0)
    {
        $this->conn = $conn;
        $this->username = $username;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        $this->isAdmin = $isAdmin;
    }

    // Lấy username người dùng
    public function getUsername()
    {
        return $this->username ?? '';
    }

    // Lấy email người dùng
    public function getEmail()
    {
        return $this->email ?? '';
    }

    // Lấy id người dùng
    public function getUserId()
    {
        $sql = "SELECT user_id FROM users WHERE email = ? OR username = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $this->email, $this->username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {
            return $row['id'];
        }
        return null; // Return null if user not found
    }

    // lấy quyền admin của người dùng từ cơ sở dữ liệu
    public function getIsAdmin()
    {
        $sql = "SELECT is_admin FROM users WHERE email = ? OR username = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $this->email, $this->username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {
            return $row['is_admin'];
        }
        return 0; // Return 0 if user not found
    }

    // Kiểm tra xem username hoặc email đã tồn tại chưa
    public function checkUserExists()
    {
        $sql = "SELECT email, username FROM users WHERE email = ? OR username = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $this->email, $this->username);
        $stmt->execute();
        $result = $stmt->get_result();

        $errors = [];
        while ($row = $result->fetch_assoc()) {
            if ($row['email'] === $this->email) {
                $errors[] = "Email already exists";
            }
            if ($row['username'] === $this->username) {
                $errors[] = "Username already exists";
            }
        }

        return empty($errors) ? false : json_encode(["error" => implode(" & ", $errors)]);
    }

    public function checkUserNotExists()
    {
        $sql = "SELECT email, username FROM users WHERE email = ? OR username = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $this->email, $this->username);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->num_rows > 0;
    }

    // Tạo user mới nếu chưa tồn tại
    public function createUser()
    {
        // Kiểm tra xem user có tồn tại chưa
        $error = $this->checkUserExists();
        if ($error) {
            return $error; // Nếu đã tồn tại, trả về lỗi
        }

        $sql = "INSERT INTO users (username, email, user_password, is_admin)
                VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param(
            "sssi",
            $this->username,
            $this->email,
            $this->password,
            $this->isAdmin
        );

        return $stmt->execute() ? true : "Lỗi khi thêm người dùng!";
    }

    public function verifyLogin($password)
    {
        $sql = "SELECT user_password FROM users WHERE email = ? OR username = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $this->email, $this->username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {
            // Return true if password matches, false otherwise
            return !password_verify($password, $row['user_password']);
        }
        return true; // Return true if no user found (will show incorrect password)
    }
}
class Courses
{
    private $conn;
    private $courseName;
    private $description;

    public function __construct(mysqli $conn, $courseName, $description)
    {
        $this->conn = $conn;
        $this->courseName = $courseName;
        $this->description = $description;
    }

    public function createCourse()
    {
        $sql = "INSERT INTO courses (course_name, courses_description)
                VALUES (?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param(
            "ss",
            $this->courseName,
            $this->description
        );
        return $stmt->execute() ? true : "Error creating course!";
    }

    public function getCourse($courseId)
    {
        $sql = "SELECT * FROM courses WHERE course_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $courseId);
        $stmt->execute();
        return $stmt->get_result();
    }

    public function updateCourse($courseId)
    {
        $sql = "UPDATE courses SET course_name = ?, description = ?
                WHERE course_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param(
            "ssi",
            $this->courseName,
            $this->description,
            $courseId
        );
        return $stmt->execute();
    }

    public function deleteCourse($courseId)
    {
        $sql = "DELETE FROM courses WHERE course_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $courseId);
        return $stmt->execute();
    }
}

class SelectAll
{
    public static function selectAll($table, $dbname = "webphp")
    {
        $validTables = ["users", "courses"]; // Danh sách bảng hợp lệ
        if (!in_array($table, $validTables)) {
            die("Bảng không hợp lệ!");
        }

        $conn = Connection::connect($dbname);
        $sql = "SELECT * FROM `$table`"; // Thêm dấu ` để tránh lỗi cú pháp nếu bảng có ký tự đặc biệt
        return $conn->query($sql);
    }
}
