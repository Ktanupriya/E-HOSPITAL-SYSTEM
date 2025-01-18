document.addEventListener("DOMContentLoaded", () => {
    // Simulate fetching data
    setTimeout(() => {
        document.getElementById("user-count").textContent = "150";
        document.getElementById("report-count").textContent = "12";
    }, 1000);
});


function toggleMenu() {
    const menu = document.getElementById('menu');
    menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
}

