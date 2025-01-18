function toggleMenu() {
    const menu = document.getElementById('menu');
    menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
}

fetch('backend/check_login.php')
    .then(response => response.json())
    .then(data => {
        const isLoggedIn = data.isLoggedIn;
        const username = data.username; // Assuming you return the username in the response

        // Show/hide elements based on login status
        if (isLoggedIn) {
            document.getElementById('logout-button').style.display = 'block'; // Show logout button
            document.getElementById('login-link').style.display = 'none';
            document.getElementById('logout-button-sidebar').style.display = 'block'; // Show logout button
            document.getElementById('login-button-sidebar').style.display = 'none';
            document.getElementById('personalized-content').style.display = 'block'; // Show personalized content
            document.getElementById('username').innerText = username; // Display username
        } else {
            document.getElementById('logout-button').style.display = 'none'; // Hide logout button
            document.getElementById('logout-button-sidebar').style.display = 'none';
            document.getElementById('sidebar-side').style.display = 'none'
            document.getElementById('hamburger').style.display = 'none';
            document.getElementById('sidebar').style.display = 'none'
            document.getElementById('personalized-content').style.display = 'none'; // Hide personalized content
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        const hamburger = document.getElementById("hamburger");
        const sidebar = document.getElementById("sidebar");
        const overlay = document.getElementById("overlay"); // If you have an overlay
    
        // Toggle sidebar visibility when hamburger is clicked
        hamburger.onclick = function() {
            sidebar.classList.toggle("active"); // Toggle the active class
            sidebar.style.display = sidebar.style.display === 'block' ? 'none' : 'block'; // Show/hide sidebar
        };
    
        // Close sidebar when overlay is clicked (if applicable)
        if (overlay) {
            overlay.onclick = function() {
                sidebar.style.display = 'none'; // Hide sidebar
                overlay.style.display = 'none'; // Hide overlay
            };
        }
    });


    document.addEventListener('DOMContentLoaded', function() {
        const hamburger = document.getElementById("hamburger");
        const sidebar = document.getElementById("sidebar");
        const mainContent = document.querySelector("main");
    
        // Toggle sidebar visibility when hamburger is clicked
        hamburger.onclick = function() {
            sidebar.classList.toggle("active"); // Toggle the active class
            sidebar.style.display = sidebar.style.display === 'block' ? 'none' : 'block'; // Show/hide sidebar
            mainContent.classList.toggle("sidebar-open"); // Push main content aside
        };
    });

    // document.addEventListener('DOMContentLoaded', function() {
    //     // Fetch user data (including the patient's name)
    //     fetch('backend/check_login.php')
    //         .then(response => response.json())
    //         .then(data => {
    //             const isLoggedIn = data.isLoggedIn;
    //             const username = data.username; // Assuming you return the username in the response
    
    //             if (isLoggedIn) {
    //                 // Update the patient name in the HTML
    //                 document.getElementById('patient-name').innerText = username; // Display username
    //             }
    //         })
    //         .catch(error => console.error('Error fetching user data:', error));
    // });