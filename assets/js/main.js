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
