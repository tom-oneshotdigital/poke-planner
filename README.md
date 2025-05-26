# Poké Planner

Poké Planner is a Pokémon Trading Card Game collection planner that helps you manage and organize your card collection.

## Requirements

- PHP 8.2+
- Composer
- Node.js & NPM
- MySQL
- Git

## Features

- Pokémon Trading Card Game collection management
- [Add more features here]

## Installation

1. Clone the repository
```bash 
git clone git@github.com:tom-oneshotdigital/poke-planner.git
cd poke-planner
```

2. Install PHP dependencies
```bash
composer install
```

3. Install JavaScript dependencies
```bash
bash npm install 
```

4. Environment Setup
```bash
cp .env.example .env
php artisan key:generate 
```

5. Configure your `.env` file with your database credentials:
```text
DB_CONNECTION=mysql 
DB_HOST=127.0.0.1 
DB_PORT=3306 
DB_DATABASE=<your-database-name> 
DB_USERNAME=<your-database-username> 
DB_PASSWORD=<your-database-password>
```

6. Run database migrations
```bash
php artisan migrate 
```

7. Build frontend assets
```bash
npm run build
```

8. Start the development server
```bash
php artisan serve 
```

## Features

- Pokémon Trading Card Game collection management
- [Add more features here]


## Development

To watch for changes and automatically rebuild assets during development:
```bash
npm run dev
```

## Contributing
Contributions are welcome! Please feel free to submit a Pull Request.
## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
## Tech Stack
- Laravel v12.14.1
- PHP 8.2
- MySQL
- Tailwind CSS 4.0.7
- Vite
- Axios 1.7.4

## Support
This README provides a comprehensive guide for new users to set up and run the Poké Planner application. It includes:

1. Requirements
2. Step-by-step installation instructions
3. Environment configuration
4. Queue setup (since the project uses database queues)
5. Development instructions
6. License information
7. Tech stack details

You may want to customize it further by:
1. Adding specific features of your application
2. Including any specific configuration requirements
3. Adding contact information or support details
4. Including screenshots or documentation links
5. Adding any project-specific setup steps

Would you like me to modify any section or add more specific information to the README?
