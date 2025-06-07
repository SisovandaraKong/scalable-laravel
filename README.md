# Laravel handle scale API

A simple RESTful API built with Laravel to create and list products with many users.

## Features

- Create a new product with `name` and `price`
- List all products
- JSON responses with clear success and error messages
- Input validation on product creation
- No caching — always fetches fresh data

## Requirements

- PHP >= 8.x  
- Composer  
- Laravel 11.x  
- MySQL or any supported database  

## Installation

- composer install

## Copy .env.example to .env and configure your database connection:

- cp .env.example .env

## Generate application key:

- php artisan key:generate

## Run database migrations:

- php artisan migrate

## Serve the application locally:

- php artisan serve

## API Endpoints

- URL: /api/products

## Clone the repository:

   ```bash
   git clone https://github.com/yourusername/laravel-product-api.git
   cd laravel-product-api
