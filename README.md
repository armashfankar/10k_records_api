# Technical Test - 10K Records API 

REST API which will read 10K records at a time from MySQL or MongoDB database & return them as JSON. 
API RTT(Round trip time) should as minimum as possible. 

This is the codebase for the module, which has one interface:

## Getting started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

Here's a basic setup:

* Apache2
* PHP 7 - All the code has been tested against PHP 7.4.3
* Mysql (5.x), running locally
* Composer 2.0.8

* The module is written in the [Laravel](https://laravel.com/), and 
uses the [Blade](https://laravel.com/docs/8.x/blade) templating system.

 
### Installing

1. Clone the repository:
    ```shell script
    git clone https://github.com/armashfankar/10k_records_api.git

    ```

2. Install the requirements for the repository using the `composer`:
   ```shell script
    cd 10k_records_api/
    composer install
    
    ```

3. Copy `.env.example` to create `.env` file:
    ```shell script
    cp .env.example .env
    
    ```

4. Configure Database `.env` file:
    
    1. Database
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=10k_records
    DB_USERNAME=root
    DB_PASSWORD=


5. Create MySQL Database:
     ```shell script
    mysql -u root -p

    create database 10k_records;
    
    ```

6. Generate key for `.env` file:
    ```shell script
    php artisan key:generate
    
    ```

7. Migrate database & seed 10k records:
    ```shell script
    php artisan migrate
    php artisan db:seed
    ```

8. Run / Execute:
    ```shell script
    php artisan serve
    
    ```

9. Open browser:
    ```
    http://localhost:8000
    ````
   
    