// // ! dark light mode
// const toggleButton = document.getElementById("themeToggle");
// const themeLink = document.getElementById("theme-style");

// // ? fix -------------------------------
// // Kiểm tra chế độ đã lưu trước đó trong Local Storage
// const savedTheme = localStorage.getItem("theme");

// if (savedTheme) {
//   themeLink.href = savedTheme;
// }

// toggleButton.addEventListener("click", () => {
//   if (
//     themeLink.getAttribute("href") === "./assets/css/darkmode.css" &&
//     toggleButton.checked == true
//   ) {
//     themeLink.href = "./assets/css/lightmode.css";
//     localStorage.setItem("theme", "lightmode.css");
//   } else {
//     themeLink.href = "./assets/css/darkmode.css";
//     localStorage.setItem("theme", "./assets/css/darkmode.css");
//   }
// });
