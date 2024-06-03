DROP DATABASE IF EXISTS student_db;

CREATE DATABASE student_db;

USE student_db;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO students (name, age, email) VALUES
('John Doe', 20, 'john@example.com'),
('Jane Smith', 22, 'jane@example.com'),
('Bob Johnson', 21, 'bob@example.com');

