document.addEventListener("DOMContentLoaded", () => {
    const tests = [
        "Blood Test - John Doe",
        "X-Ray - Jane Smith",
        "MRI - Michael Johnson"
    ];

    const pendingTests = document.getElementById("pending-tests");

    tests.forEach(test => {
        const li = document.createElement("li");
        li.textContent = test;

        // Add padding to the <li> element
        li.style.padding = "10px";

        // Optionally, add more styles
        li.style.border = "1px solid #ccc"; // Add a border
        li.style.marginBottom = "5px"; // Add margin between items
        li.style.backgroundColor = "#3498db"; // Add a background color

        pendingTests.appendChild(li);
    });
});
