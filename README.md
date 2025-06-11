# 🌸 Vrindavan Trip Registration Portal

A dynamic **PHP + MySQL** based web application that allows users to register for a spiritual trip to Vrindavan. The project includes a responsive frontend and a backend integration using **XAMPP**, making it an ideal beginner-level full-stack project.

## 🚀 Features

- 📝 Collects participant details like name, age, gender, email, phone, and additional notes.
- 🗃️ Submits and stores form data in a **MySQL database** using **PHP**.
- ✅ Displays a success confirmation message after form submission.
- 🎨 Designed using responsive **HTML5 + CSS3**, with custom fonts and background styling.
- 📦 Easy to run locally using **XAMPP Server**.

## 📂 Project Structure

vrindavan-trip-form/
├── index.php # Main backend file
├── style.css # CSS for styling the form
├── bg2.jpg # Background image for aesthetic appeal
├── index.js # (Optional) JS for enhancements
└── README.md # This file


## 🛠️ Tech Stack

- **Frontend:** HTML5, CSS3, Google Fonts
- **Backend:** PHP 7+
- **Database:** MySQL (via phpMyAdmin)
- **Local Server:** XAMPP

## 🧪 How to Run Locally

1. ✅ Install [XAMPP](https://www.apachefriends.org/index.html)
2. 📁 Copy the project folder to `C:\xampp\htdocs\vrindavan-trip-form`
3. ▶️ Start **Apache** and **MySQL** from the XAMPP Control Panel
4. 🌐 Visit [http://localhost/vrindavan-trip-form](http://localhost/vrindavan-trip-form) in your browser
5. 🛠️ In `phpMyAdmin`, create a database named `trip` and run this SQL to create the table:

```sql
CREATE TABLE `trip` (
  `sno` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) NOT NULL,
  `age` INT NOT NULL,
  `gender` VARCHAR(10) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `phone` VARCHAR(20) NOT NULL,
  `other` TEXT,
  `dt` DATETIME DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
);


