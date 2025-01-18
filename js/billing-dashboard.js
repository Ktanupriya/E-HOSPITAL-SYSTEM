document.addEventListener("DOMContentLoaded", () => {
    const payments = [
        "John Doe - $120",
        "Jane Smith - $250",
        "Michael Johnson - $180"
    ];

    const pendingPayments = document.getElementById("pending-payments");
    payments.forEach(payment => {
        const li = document.createElement("li");
        li.textContent = payment;
        pendingPayments.appendChild(li);
    });
});
