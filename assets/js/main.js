const user = document.getElementById("user");
const ul = user.querySelector("ul");

user.addEventListener("click", (event) => {
  event.stopPropagation(); // Ngăn chặn sự kiện click lan ra ngoài
  ul.classList.toggle("hidden");
});

// Khi click ra ngoài phần tử #user, ẩn ul
document.addEventListener("click", (event) => {
  if (!user.contains(event.target)) {
    ul.classList.add("hidden");
  }
});

const hamburger = document.getElementById("hamburger");
const mobileMenu = document.getElementById("mobile-menu");
hamburger.addEventListener("click", () => {
  mobileMenu.classList.toggle("hidden");
});

// ! dark light mode
const toggleButton = document.getElementById("themeToggle");
const themeLink = document.getElementById("theme-style");

// ? fix -------------------------------
// Kiểm tra chế độ đã lưu trước đó trong Local Storage
const savedTheme = localStorage.getItem("theme");

if (savedTheme) {
  themeLink.href = savedTheme;
}

toggleButton.addEventListener("click", () => {
  if (
    themeLink.getAttribute("href") === "./assets/css/darkmode.css" &&
    toggleButton.checked == true
  ) {
    themeLink.href = "./assets/css/lightmode.css";
    localStorage.setItem("theme", "lightmode.css");
  } else {
    themeLink.href = "./assets/css/darkmode.css";
    localStorage.setItem("theme", "./assets/css/darkmode.css");
  }
});
