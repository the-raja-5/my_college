CREATE DATABASE IF NOT EXISTS mewar_college CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE mewar_college;
CREATE TABLE IF NOT EXISTS users(id INT AUTO_INCREMENT PRIMARY KEY,name VARCHAR(100) NOT NULL,email VARCHAR(150) NOT NULL UNIQUE,mobile VARCHAR(20) NOT NULL UNIQUE,password VARCHAR(255) NOT NULL,created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);
CREATE TABLE IF NOT EXISTS courses(id INT AUTO_INCREMENT PRIMARY KEY,course_name VARCHAR(50) NOT NULL UNIQUE,full_name VARCHAR(150) NOT NULL,duration VARCHAR(50),eligibility TEXT,fee VARCHAR(100),description TEXT);
CREATE TABLE IF NOT EXISTS faculty(id INT AUTO_INCREMENT PRIMARY KEY,course_id INT NOT NULL,name VARCHAR(150) NOT NULL,designation VARCHAR(100),qualification TEXT,FOREIGN KEY(course_id) REFERENCES courses(id) ON DELETE CASCADE);
CREATE TABLE IF NOT EXISTS contact_messages(id INT AUTO_INCREMENT PRIMARY KEY,name VARCHAR(100) NOT NULL,email VARCHAR(150) NOT NULL,mobile VARCHAR(20),message TEXT NOT NULL,created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);
CREATE TABLE IF NOT EXISTS password_reset(id INT AUTO_INCREMENT PRIMARY KEY,user_id INT NOT NULL,otp_hash VARCHAR(255) NOT NULL,expires_at DATETIME NOT NULL,created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,FOREIGN KEY(user_id) REFERENCES users(id) ON DELETE CASCADE);
CREATE TABLE IF NOT EXISTS admins(id INT AUTO_INCREMENT PRIMARY KEY,name VARCHAR(100) NOT NULL,email VARCHAR(150) NOT NULL UNIQUE,password VARCHAR(255) NOT NULL);
INSERT IGNORE INTO courses(course_name,full_name,duration,eligibility,fee,description) VALUES
('BCA','Bachelor of Computer Applications','3 years / 6 semesters','12th pass; verify current institute rules','As published by institute','Computer applications, programming, software development and web development.'),
('BBA','Bachelor of Business Administration','3 years','10+2; source page states 45% General/OBC and 40% SC/ST','Contact institute','Business management and administration.'),
('BCOM','Bachelor of Commerce','3 years','Verify current institute rules','Source page states approx. ₹40,000/year for affiliated institute','Accounting, finance, taxation and business law.'),
('BSC','Bachelor of Science (Mathematics)','3 years','Source page states 45% in PCM','Source page states approx. ₹35,000/year','Mathematics with analytical and problem-solving focus.');
-- Demo admin: email admin@mewar.local / password password
INSERT IGNORE INTO admins(name,email,password) VALUES('Administrator','admin@mewar.local','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llCq7vQW7d2q5J8f9Qw2u');
