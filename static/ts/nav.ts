document.addEventListener("DOMContentLoaded", () => {
  const burgerBtn = window.document.getElementById("burgerBtn");
  const navTabs = window.document.getElementById("navTabs");

  if (burgerBtn !== null) {
    burgerBtn.addEventListener("click", () => {
      if (navTabs !== null) {
        const isOpen = navTabs.classList.toggle("open");
        burgerBtn.textContent = isOpen ? "✕" : "☰";
      }
    });
  }
});
