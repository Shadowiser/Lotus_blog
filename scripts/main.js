// login_register
const tabs = document.querySelectorAll(".tab-btn");
const boxes = document.querySelectorAll(".form-box");

tabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    const target = tab.dataset.target;

    tabs.forEach((t) => t.classList.remove("active"));
    boxes.forEach((b) => b.classList.remove("active"));

    tab.classList.add("active");
    document.getElementById(target).classList.add("active");
  });
});
