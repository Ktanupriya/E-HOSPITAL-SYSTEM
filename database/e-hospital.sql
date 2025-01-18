-- CREATE DATABASE e_hospital;

-- USE e_hospital;

-- -- Users Table
-- CREATE TABLE users (
--     user_id INT AUTO_INCREMENT PRIMARY KEY,
--     username VARCHAR(50) NOT NULL,
--     password VARCHAR(255) NOT NULL,
--     role ENUM('admin', 'doctor', 'patient', 'lab', 'pharmacy', 'billing') NOT NULL
-- );

-- -- Appointments Table
-- CREATE TABLE appointments (
--     appointment_id INT AUTO_INCREMENT PRIMARY KEY,
--     patient_id INT NOT NULL,
--     doctor_id INT NOT NULL,
--     appointment_date DATETIME NOT NULL,
--     status ENUM('scheduled', 'completed', 'cancelled') NOT NULL
-- );

-- -- Prescriptions Table
-- CREATE TABLE prescriptions (
--     prescription_id INT AUTO_INCREMENT PRIMARY KEY,
--     patient_id INT NOT NULL,
--     doctor_id INT NOT NULL,
--     prescription_text TEXT NOT NULL
-- );

-- -- Billing Table
-- CREATE TABLE billing (
--     bill_id INT AUTO_INCREMENT PRIMARY KEY,
--     patient_id INT NOT NULL,
--     amount DECIMAL(10, 2) NOT NULL,
--     status ENUM('paid', 'unpaid') NOT NULL
-- );

-- -- Reports Table
-- CREATE TABLE reports (
--     report_id INT AUTO_INCREMENT PRIMARY KEY,
--     patient_id INT NOT NULL,
--     report_details TEXT NOT NULL,
--     created_at DATETIME DEFAULT CURRENT_TIMESTAMP
-- );


-- LOAD DATA INFILE 'path_to_kaggle_file.csv'
-- INTO TABLE users
-- FIELDS TERMINATED BY ',' ENCLOSED BY '"'
-- LINES TERMINATED BY '\n'
-- IGNORE 1 ROWS
-- (username, password, email, role);
