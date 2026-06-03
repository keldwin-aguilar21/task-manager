# Task Management System

A simple task management application built with Laravel, Blade, SQLite, and Laravel Breeze.

## Features

* User Authentication (Login / Logout)
* Dashboard with task statistics
* Task Management (Create, Read, Update, Delete)
* User Profile Management
* External API Integration (Star Wars API)
* Unit Tests using PHPUnit

---

## Requirements

* PHP 8.2+
* Composer
* Node.js & NPM

---

## Installation

### 1. Clone the Repository

```bash
git clone https://github.com/keldwin-aguilar21/task-manager.git
cd task-manager
```
### 2. Install Dependencies

```bash
composer install
npm install
```

### 3. Create Environment File

```bash
cp .env.example .env
```

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Configure Database

Update `.env`:

```env
DB_CONNECTION=sqlite
```

### 6. Run Database Migrations and Seeders

```bash
php artisan migrate --seed
```

### 7. Build Frontend Assets

```bash
npm run build
```

### 8. Run the Application

```bash
php artisan serve
```

Open:

```text
http://127.0.0.1:8000
```

---

## Demo Account

| Field    | Value                                   |
| -------- | --------------------------------------- |
| Email    | [admin@test.com](mailto:admin@test.com) |
| Password | password                                |

---

## Running Tests

```bash
php artisan test
```

---

## Application Screens

### Dashboard

* Total Tasks
* Completed Tasks
* Pending Tasks

### Task Management

* View Tasks
* Create Task
* Edit Task
* Delete Task

### Profile

* Update Profile Information
* Change Password

### Star Wars API Integration

* Fetches character data from SWAPI
* Demonstrates external API consumption

---

## Tech Stack

| Technology     | Purpose             |
| -------------- | ------------------- |
| Laravel 12     | Backend Framework   |
| Blade          | Frontend Templating |
| SQLite         | Database            |
| Laravel Breeze | Authentication      |
| PHPUnit        | Unit Testing        |
| Vite           | Asset Bundling      |

---

## Project Structure

```text
app/
├── Http/
│   └── Controllers/
├── Models/
├── Tests/

resources/
└── views/

routes/
└── web.php

database/
├── migrations/
└── seeders/
```

---

## Checklist

* [x] Authentication
* [x] Dashboard
* [x] CRUD Operations
* [x] Profile Management
* [x] API Integration
* [x] Unit Tests
* [x] SQLite Database
* [x] README Documentation

---

## Author

Keldwin
