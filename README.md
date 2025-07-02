# CS 4720 - Internet Programming Assignments

## Overview
This repository contains my coursework for **CS 4720: Internet Programming** at Kennesaw State University. Assignments are deployed to a KSU-managed Linux server via WinSCP/PuTTY and include:  
- **HTML/CSS/JavaScript** fundamentals  
- **PHP/MySQL** backend development  
- **Social Media App (SMA)** with database integration  

---

## Assignments
### Assignment 1: Linux, HTML, CSS, JavaScript  
- **Objective:** Set up a personal homepage using KSU branding.  
- **Key Tasks:**  
  - Created directories via Linux CLI (`Assign-1-Part1` to `Assign-1-Part4`).  
  - Built static pages (`index.html`, `index-css.html`) with responsive design.  
  - Added JavaScript widgets (e.g., dynamic content).  
- **Files:**  
  - `index.html` (vanilla HTML)  
  - `index-style.css` (external CSS)  
  - `index-js.js` (JavaScript interactivity)  

### Assignment 2: Forms and PHP  
- **Objective:** Process user input via PHP scripts.  
- **Key Tasks:**  
  - Designed order forms (`index.html`) with POST method.  
  - Wrote PHP scripts (`processorder.php`, `process_data.php`) to:  
    - Echo user input.  
    - Append data to `data.txt` (file I/O).  
  - Resolved character encoding issues (UTF-8).  
- **Files:**  
  - `Assign-2-Part1/` to `Assign-2-Part3/` (form variants).  

### Assignment 3: Social Media App (SMA)  
- **Objective:** Deploy a PHP/MySQL social media platform.  
- **Key Tasks:**  
  - Configured MySQL database (`DB_Hangout.txt` schema).  
  - Fixed authentication (`mysql.php` credentials).  
  - Added MIT license attribution ([original project](https://github.com/abhn/simple-php-mysql-project)).  
- **Files:**  
  - `Assign-3A/` (baseline)  
  - `Assign-3B/` (debugged version).

---

## Deployment  
All assignments are hosted on **KSU’s Linux server** (`10.96.50.55`):  
- **Access URLs:**  
  - Homepage: `http://10.96.50.55/netid`  
  - Assignments: `http://10.96.50.55/netid/Assign-[X]-Part[Y]`  
- **Tools Used:**  
  - **WinSCP**: File transfers.  
  - **PuTTY**: Server management (e.g., `chmod`, `vi`).  

---

## License  
- SMA is licensed under **MIT** (derived from [abhn/simple-php-mysql-project](https://github.com/abhn/simple-php-mysql-project)).  
- Coursework © Caroline Varner, 2025.  

---

## 🔍 Notes  
- **Testing:** Fake emails (e.g., `test@test.com`) were used due to server limitations.  
- **Permissions:** Set via `chmod 775` (directories) and `chmod 664` (files).  
