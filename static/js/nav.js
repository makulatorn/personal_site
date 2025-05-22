document.addEventListener('DOMContentLoaded', () => {
    const burgerBtn = document.getElementById('burgerBtn');
    const navTabs = document.getElementById('navTabs');

    burgerBtn.addEventListener('click', () => {
        const isOpen = navTabs.classList.toggle('open');
        burgerBtn.textContent = isOpen ? '✕' : '☰';
    });
});
