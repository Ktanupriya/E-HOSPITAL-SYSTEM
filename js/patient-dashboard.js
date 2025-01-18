document.addEventListener("DOMContentLoaded", () => {
    setTimeout(() => {
        document.getElementById("appointment-date").textContent = "Dec 5, 2024, 10:00 AM";
        document.getElementById("outstanding-bills").textContent = "150";
    }, 1000);
});


document.addEventListener('DOMContentLoaded', function() {
    // Fetch user data (including the patient's name)
    fetch('../backend/check_login.php')
        .then(response => response.json())
        .then(data => {
            const isLoggedIn = data.isLoggedIn;
            const username = data.username; // Assuming you return the username in the response

            if (isLoggedIn) {
                // Update the patient name in the HTML
                document.getElementById('patient-name').innerText = username; // Display username
            }
        })
        .catch(error => console.error('Error fetching user data:', error));
});