# Bibliothèque Laravel

## Description
Bibliothèque Laravel is a web application built using the Laravel framework. It provides functionalities for managing a collection of books, including creating, reading, updating, and deleting book entries. The application also features event broadcasting and logging capabilities.

## Features
- **Book Management**: Create, read, update, and delete books.
- **Event Broadcasting**: Real-time updates using Laravel's event broadcasting system.
- **Logging**: Custom log entries are created for each book event, storing relevant information in the database.

## Installation
1. Clone the repository:
   ```
   git clone <repository-url>
   ```
2. Navigate to the project directory:
   ```
   cd bibliotheque_laravel
   ```
3. Install dependencies:
   ```
   composer install
   ```
4. Set up your `.env` file and configure your database settings.
5. Run migrations:
   ```
   php artisan migrate
   ```

## Usage
- Start the local development server:
  ```
  php artisan serve
  ```
- Access the application at `http://localhost:8000`.

## Contributing
Contributions are welcome! Please open an issue or submit a pull request for any enhancements or bug fixes.

## License
This project is licensed under the MIT License.
