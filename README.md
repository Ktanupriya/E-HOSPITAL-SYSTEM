# E-HOSPITAL-SYSTEM

# E-Hospital System

## Overview
The E-Hospital System is a web application designed to manage hospital operations, including patient registration, appointment scheduling, billing, and more. This project is built using PHP, HTML, CSS, and JavaScript, and it runs on the XAMPP server.

## Prerequisites
- XAMPP installed on your local machine.
- A web browser to access the application.

## How to Download the Project
1. Clone the repository from GitHub:
   ```bash
   git clone https://github.com/yourusername/e-hospital-system.git
   ```
2. Navigate to the project directory:
   ```bash
   cd e-hospital-system
   ```

## Setting Up the Database
1. Open XAMPP Control Panel and start the Apache and MySQL services.
2. Open your web browser and go to `http://localhost/phpmyadmin`.
3. Click on the "Databases" tab.
4. Create a new database named `e_hospital`.
5. Import the SQL file to create the necessary tables:
   - Click on the newly created database.
   - Click on the "Import" tab.
   - Choose the `e-hospital.sql` file located in the `database` directory of the project.
   - Click "Go" to execute the import.

### Tables to be Created
The following tables should be created in the `e_hospital` database:

1. **users**
   - `user_id` INT AUTO_INCREMENT PRIMARY KEY
   - `username` VARCHAR(50) NOT NULL
   - `password` VARCHAR(255) NOT NULL
   - `email` VARCHAR(100) NOT NULL
   - `role` ENUM('patient', 'doctor', 'admin') NOT NULL

2. **appointments**
   - `appointment_id` INT AUTO_INCREMENT PRIMARY KEY
   - `patient_id` INT NOT NULL
   - `doctor_id` INT NOT NULL
   - `appointment_date` DATETIME NOT NULL
   - `status` ENUM('scheduled', 'completed', 'canceled') NOT NULL

3. **billing**
   - `billing_id` INT AUTO_INCREMENT PRIMARY KEY
   - `patient_id` INT NOT NULL
   - `amount` DECIMAL(10, 2) NOT NULL
   - `billing_date` DATETIME NOT NULL
   - `status` ENUM('paid', 'unpaid') NOT NULL

4. **prescriptions**
   - `prescription_id` INT AUTO_INCREMENT PRIMARY KEY
   - `patient_id` INT NOT NULL
   - `doctor_id` INT NOT NULL
   - `medication` TEXT NOT NULL
   - `date_issued` DATETIME NOT NULL

## How the Project Works
- The application consists of several pages, including:
  - **Login Page**: Users can log in to access their accounts.
  - **Registration Page**: New users can register for an account.
  - **Dashboard**: After logging in, users can access various functionalities based on their roles (patient, doctor, admin).
  - **Appointment Management**: Users can schedule and manage appointments.
  - **Billing**: Users can view and manage billing information.

## How to Open the Project
1. Ensure that the Apache and MySQL services are running in XAMPP.
2. Open your web browser and navigate to `http://localhost/E-HOSPITAL SYSTEM/index.html` to access the application.

## Conclusion
This README provides a basic overview of the E-Hospital System project, including setup instructions and how to use the application. For further details, please refer to the project documentation or contact the project maintainer.

