# Laravel Product Management System

## Overview
This is a simple Laravel-based Product Management System that allows users to create, read, update, and delete (CRUD) products. It includes features like pagination and Tailwind CSS for styling.

## Features
- List all products with pagination
- Create new products
- Edit product details
- Delete products with confirmation
- Responsive UI using Tailwind CSS

## Technologies Used
- **Backend:** Laravel 10 (or latest version)
- **Frontend:** Blade Templating, Tailwind CSS
- **Database:** MySQL (or any preferred DBMS)
- **Authentication:** Laravel Breeze (optional)

## Installation
### 1. Clone the Repository
```bash
 git clone https://github.com/your-username/your-repo.git
 cd your-repo
```

### 2. Install Dependencies
```bash
composer install
npm install  # If using Laravel Mix/Vite
```

### 3. Configure Environment
Copy the `.env.example` file and update the database credentials.
```bash
cp .env.example .env
```

Then edit `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 4. Generate Application Key
```bash
php artisan key:generate
```

### 5. Run Migrations
```bash
php artisan migrate
```

### 6. Seed Database (Optional)
If you have a Product seeder, run:
```bash
php artisan db:seed --class=ProductSeeder
```

### 7. Serve the Application
```bash
php artisan serve
```
Visit `http://127.0.0.1:8000` in your browser.

## Usage
### Create a Product
Navigate to `/products/create` and fill in the details.

### View Products
Visit the homepage to see the list of products.

### Edit a Product
Click **Edit** on a product row to update its details.

### Delete a Product
Click **Delete** on a product row (confirmation required).

## Routes
| Method | URI | Action |
|--------|----------------|----------------|
| GET | `/products` | List all products |
| GET | `/products/create` | Show product creation form |
| POST | `/products` | Store new product |
| GET | `/products/{id}` | Show a single product |
| GET | `/products/{id}/edit` | Show product edit form |
| PUT/PATCH | `/products/{id}` | Update product |
| DELETE | `/products/{id}` | Delete product |

## License
This project is licensed under the MIT License.

## Author
**Your Name**
- GitHub: [your-username](https://github.com/your-username)
- LinkedIn: [Your Profile](https://linkedin.com/in/your-profile)

---
Feel free to update the author details and repository links! 🚀

