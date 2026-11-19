# EventsApp – Event Planning Platform

A Laravel 10 RESTful API backend for an event-planning platform that helps users discover services, organize events, manage bookings, and interact with event-related content.

## Overview

EventsApp is a backend system designed to support an event-planning application. It provides APIs for user authentication, event management, service discovery, bookings, favorites, ratings, comments, and administrative operations.

The platform covers different event-related services, including venues, food, decorations, music, cars, and dress and makeup services.

## Features

### User Authentication and Profile Management
- User registration and login.
- Token-based authentication using Laravel Sanctum.
- User logout and account management.
- User profile retrieval and editing.
- Protected routes for authenticated users.

### Event Management
- Create and update user events.
- Book event tickets.
- Manage events in the user's cart and personal event list.
- Browse recent and previous events.
- View event details and related information.

### Service Discovery
- Browse event-related services and categories.
- Search for services and retrieve matching results.
- Explore venues, catering, decorations, music, cars, and dress and makeup services.
- Retrieve service details and addresses.

### Favorites and Ratings
- Add and remove favorite services.
- Retrieve saved favorite items.
- Submit ratings for different service categories and events.

### Posts and Comments
- Create, update, and delete posts.
- Add, update, and delete comments.
- Retrieve comments related to posts and events.

### Chatbot and Recommendations
- Keyword-based question analysis and FAQ retrieval.
- Search for relevant services based on user queries.
- Provide event-related suggestions based on extracted preferences, such as event type, budget, number of guests, food, and music.

### Admin Management
- Create, update, and delete service records.
- Manage events and service categories.
- View users, suppliers, and event statistics.
- Manage user accounts and event visibility.

## Technologies Used

- PHP 8.1+
- Laravel 10
- MySQL / MariaDB
- Laravel Sanctum
- Eloquent ORM
- RESTful API
- Composer
- JavaScript and Vite

## Project Structure

```text
EventsApp/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   └── Middleware/
│   ├── Models/
│   └── Providers/
├── bootstrap/
├── config/
├── database/
│   ├── migrations/
│   ├── factories/
│   └── seeders/
├── public/
├── resources/
├── routes/
│   ├── api.php
│   └── web.php
├── tests/
├── composer.json
├── composer.lock
├── package.json
└── artisan
```

## Installation and Setup

### 1. Clone the repository

```bash
git clone YOUR_REPOSITORY_URL
cd EventsApp
```

### 2. Install PHP dependencies

```bash
composer install
```

### 3. Configure environment variables

Create your environment file:

```bash
cp .env.example .env
```

Configure your database connection and other environment settings in the `.env` file.

### 4. Generate the application key

```bash
php artisan key:generate
```

### 5. Run database migrations

```bash
php artisan migrate
```

To populate the database with the available seed data, you can optionally run:

```bash
php artisan db:seed
```

### 6. Start the development server

```bash
php artisan serve
```

The API will be available at:

```text
http://127.0.0.1:8000/api
```

## API Routes

The API routes are defined in:

```text
routes/api.php
```

The project includes public endpoints for authentication, service discovery, and searching, as well as protected endpoints for authenticated users and administrators.

## Notes

- The `.env` file contains local environment configuration and should never be committed to the repository.
- Install dependencies using Composer rather than uploading the `vendor` directory.
- Database configuration must be completed before running migrations.

---

**Project:** EventsApp – Event Planning Platform  
**Backend Framework:** Laravel 10  
**Type:** RESTful API Backend
