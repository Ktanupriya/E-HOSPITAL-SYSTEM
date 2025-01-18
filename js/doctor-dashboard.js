document.addEventListener("DOMContentLoaded", () => {
    const appointments = [
        "John Doe - 10:00 AM",
        "Jane Smith - 11:00 AM",
        "Michael Johnson - 12:00 PM"
    ];

    const appointmentList = document.getElementById("appointment-list");
    appointments.forEach(appointment => {
        const li = document.createElement("li");
        li.textContent = appointment;
        appointmentList.appendChild(li);
    });
});
