document.addEventListener("DOMContentLoaded", () => {
    const items = [
        "Paracetamol - 10 units",
        "Aspirin - 5 units",
        "Amoxicillin - 2 units"
    ];

    const lowStock = document.getElementById("low-stock");

    items.forEach(item => {
        const li = document.createElement("li");
        li.textContent = item;

        // Add padding to the <li> element
        li.style.padding = "10px";

        // Optionally, add more styles
        li.style.border = "1px solid #ccc"; // Add a border
        li.style.marginBottom = "5px"; // Add margin between items
        li.style.backgroundColor = "#3498db"; // Add a background color

        lowStock.appendChild(li);
    });
});