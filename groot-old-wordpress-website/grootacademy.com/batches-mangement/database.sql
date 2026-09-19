CREATE DATABASE IF NOT EXISTS it_training_institute;

USE it_training_institute;

-- Faculty Table
CREATE TABLE IF NOT EXISTS faculty (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    subject VARCHAR(100),
    email VARCHAR(100),
    phone VARCHAR(15)
);

-- Batch Table
CREATE TABLE IF NOT EXISTS batch (
    id INT AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(100) NOT NULL,
    instructor_id INT,
    start_date DATE,
    duration_in_months INT,
    FOREIGN KEY (instructor_id) REFERENCES faculty(id)
);

-- Batch Timing Table
CREATE TABLE IF NOT EXISTS batch_timing (
    id INT AUTO_INCREMENT PRIMARY KEY,
    batch_id INT,
    day_of_week ENUM('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'),
    start_time TIME,
    end_time TIME,
    FOREIGN KEY (batch_id) REFERENCES batch(id)
);
