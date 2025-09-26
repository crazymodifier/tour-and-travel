# 🌍 Tour & Travel Booking System in PHP – YouTube Tutorial Series in Hindi with source code

A complete beginner-friendly project to build a **Tour & Travel Booking Website** using **Core PHP**, **MySQL**, **SCSS**, and **Gulp**. This series walks you through every step to create a real-world booking system with an admin dashboard, user management, bookings, and frontend automation.

---

## 🎯 Project Highlights

- User & Admin registration and login system  
- Travel package CRUD (Create, Read, Update, Delete)  
- Booking system with date selection and status tracking  
- Image upload and validation  
- Contact form with PHPMailer integration  
- Search, filter, and pagination  
- SCSS for modular and maintainable styles  
- Gulp automation for compiling SCSS and live reload  
- Deployment on free web hosting  

---

## 📁 Playlist Structure 

### 🧱 MODULE 1: Setup & Introduction
| EP  | Title                         | Description                                           |
|-----|-------------------------------|-----------------------------------------------------|
| 01  | Project Overview & Demo       | Full walkthrough of the final travel booking website. |
| 02  | XAMPP Setup & Project Structure | Install XAMPP, create project folders, and initial setup. |

### 🗃️ MODULE 2: Database Design
| EP  | Title                      | Description                                              |
|------|----------------------------|----------------------------------------------------------|
| 03   | Create MySQL Tables & Relationships | Design users, admins, packages, bookings, and messages tables. |

### 🎨 MODULE 3: SCSS + Gulp Setup
| EP  | Title                      | Description                                              |
|------|----------------------------|----------------------------------------------------------|
| 04   | SCSS Setup & Folder Structure | Organize stylesheets using SCSS partials and variables.  |
| 05   | Automate with Gulp          | Set up Gulp tasks to compile SCSS, minify CSS, and enable live reload. |

### 🔐 MODULE 4: User System
| EP  | Title                      | Description                                              |
|------|----------------------------|----------------------------------------------------------|
| 06   | User Registration          | Build registration form with validations and password hashing. |
| 07   | User Login & Logout        | Implement secure login sessions and logout.              |

### 🏞️ MODULE 5: Travel Packages
| EP  | Title                      | Description                                              |
|------|----------------------------|----------------------------------------------------------|
| 08   | Admin: Add Package         | Add travel packages with images, titles, and prices.     |
| 09   | Admin: Edit & Delete Package | Enable admin to update and remove packages.               |
| 10   | User: Display Packages     | Display packages to users with a responsive UI.          |

### 📆 MODULE 6: Booking System
| EP  | Title                      | Description                                              |
|------|----------------------------|----------------------------------------------------------|
| 11   | Booking a Package          | Allow users to book travel packages with date selection. |
| 12   | View Bookings (Admin & User) | Show bookings list with statuses for both admin and users. |

### 📊 MODULE 7: Admin Dashboard
| EP  | Title                      | Description                                              |
|------|----------------------------|----------------------------------------------------------|
| 13   | Admin Login & Dashboard UI | Secure admin login and dashboard overview.                |
| 14   | Manage Users & Bookings    | Admin tools to manage users and bookings statuses.       |

### 🌟 MODULE 8: Extra Features
| EP  | Title                      | Description                                              |
|------|----------------------------|----------------------------------------------------------|
| 15   | Contact Form + PHPMailer   | Create contact page sending emails using PHPMailer.      |
| 16   | Search & Filters           | Add search and filter options for travel packages.       |
| 17   | Pagination on Packages Page | Implement pagination for long package lists.              |

### 🔒 MODULE 9: Security + Optimization
| EP  | Title                      | Description                                              |
|------|----------------------------|----------------------------------------------------------|
| 18   | Input Validation & Security | Sanitize inputs, prevent SQL injection, and secure sessions. |
| 19   | Performance Optimization   | Optimize images, caching, and lazy loading techniques.    |

### 🚀 MODULE 10: Hosting & Wrap-Up
| EP  | Title                      | Description                                              |
|------|----------------------------|----------------------------------------------------------|
| 20   | Hosting on Free Server     | Deploy the project on free web hosting platforms.         |
| 21   | Final Review & GitHub Code | Review features and share GitHub repo with source code.   |

---

## 🛠️ Tools & Technologies

- **PHP 7+** (Core PHP)  
- **MySQL** with phpMyAdmin  
- **HTML5**, **SCSS**, **Bootstrap 5**  
- **Gulp** (Task automation: SCSS compile, minify, live reload)  
- **PHPMailer** (Email handling)  
- **Node.js** (Required for Gulp)  
- Local Development: **XAMPP** or **WAMP**  
- Editor: **VS Code**, **Sublime Text**, or similar  

---

## 📂 Project Folder Structure

```bash
travel-booking/
├── admin/                  # Admin panel files
├── user/                   # User panel files (registration, login, bookings)
├── scss/                   # SCSS stylesheets
│   ├── _variables.scss
│   ├── _buttons.scss
│   ├── _layout.scss
│   └── main.scss
├── css/                    # Compiled CSS files (auto-generated by Gulp)
│   └── main.min.css
├── gulpfile.js             # Gulp task definitions
├── includes/               # PHP includes (header, footer, db connection)
├── assets/                 # Images, JS, fonts
├── contact.php             # Contact form page
├── index.php               # Homepage & packages listing
└── config.php              # Configuration (DB connection etc.)
```
## ⚙️ Gulp Setup & Usage

### Features
- SCSS compilation to CSS with minification  
- BrowserSync for live-reloading during development  
- Watcher for changes in SCSS and PHP files  

### How to Set Up Gulp

1. Install Node.js from https://nodejs.org  
2. Install Gulp CLI globally:

## 📝 Database Tables Overview

- **users** — user accounts and credentials  
- **admins** — admin users  
- **packages** — travel packages information  
- **bookings** — user bookings with status  
- **messages** — contact form submissions  

---

## 💡 Future Enhancements

- Payment gateway integration (Stripe, Razorpay)  
- User reviews and ratings system  
- Google Maps API integration for locations  
- PDF booking confirmation and invoices  

---

## 📦 License

This project is released for **educational purposes**.  
Feel free to modify, share, and use the project with appropriate credit.
