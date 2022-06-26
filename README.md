# Learny - Sevima Hackathon App
## Description
A learning management application that will make it easier for instructors/teachers to manage their learning content

## Requirements
- PHP >= 8
- MySQL

## Setup & Installation
Clone this project
```bash
git clone https://github.com/irsyadulibad/sevima
cd sevima
```

Install all dependencies
```bash
composer install
```

Setup Laravel
```bash
cp .env.example .env
php artisan key:generate
php artisan storage:link
```

Import Database
```bash
mysql -u {USERNAME} -p{PASSWORD} < learny.sql
```

Run the Application and Enjoy the Journey :)
```bash
php artisan serve
```

## Getting Started
- Login as admin with
    ```yaml
    url: /admin/login
    email: admin@gmail.com
    password: admin123
    ```
- Login as student with
    ```yaml
    url: /student/login
    email: student@gmail.com
    password: student123
    ```

### Credits
- [Github @irsyadulibad](https://github.com/irsyadulibad)
- [Facebook @irsyadulibad.dev](https://facebook.com/irsyadulibad.dev)
- [LinkedIn @irsyadulibad](https://linkedin.com/in/irsyadulibad)
