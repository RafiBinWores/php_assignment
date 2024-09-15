# PHP Projects

This repository contains several PHP projects demonstrating various concepts and functionalities. Below are the details for each project included in this repository.

## Projects

### 1. Geometric Shapes Classes

**Description**: A set of PHP classes to represent geometric shapes, including Circle, Rectangle, Square, Triangle, and Parallelogram. Each class includes methods for calculating the area.

### 2. Animal Classes with Polymorphism

**Description**: A set of PHP classes demonstrating polymorphism through animal classes that override a method to make sounds.

### 3. To-Do CRUD Module

**Description**: A simple To-do CRUD (Create, Read, Update, Delete) module built using the Laravel framework.

## Features

-   **Create**: Add new To-do items.
-   **Read**: View the list of To-do items with pagination.
-   **Update**: Edit existing To-do items, including their status (completed or not).
-   **Delete**: Remove To-do items with a confirmation prompt.
-   **Pagination**: Display To-do items in paginated form.

### Requirements

-   PHP (version >= 8.2)
-   MySQL database
-   Apache or Nginx web server
-   Composer (for dependency management)

## Installation

1. **Clone the Repository**

    ```bash
    git clone https://github.com/RafiBinWores/php_assignment
    cd your-repository
    ```

2. **Install Dependencies**

    ```bash
    composer install
    ```

3. **Set Up Environment**

    Copy the `.env.example` file to `.env` and update the database configuration as needed:

    ```bash
    cp .env.example .env
    ```

    Generate the application key:

    ```bash
    php artisan key:generate
    ```

4. **Run Migrations**

    Apply the database migrations:

    ```bash
    php artisan migrate
    ```

5. **Start the Development Server**

    ```bash
    php artisan serve
    ```

    Visit `http://localhost:8000` to view the application.
