## About Car Rental Management System

##
#Introduction
The purpose of this application is to allow car rental businesses to make online reservation for their customers. This application uses laravel, MySQL, Javascript. UI is powered by Bootstrap

##Setting up dev Environment
1. Create database from project directory
2. run composer install
3. npm install
4. Requirements
you will need to make sure your server meets the following requirements:
    PHP >= 7.1.3
    OpenSSL PHP Extension
    PDO PHP Extension
    Mbstring PHP Extension
    Tokenizer PHP Extension
    XML PHP Extension
    Ctype PHP Extension
    JSON PHP Extension
5.  Apache

Laravel includes a public/.htaccess file that is used to provide URLs without the index.php front controller in the path. Before serving Laravel with Apache, be sure to enable the mod_rewrite module so the .htaccess file will be honored by the server.

If the .htaccess file that ships with Laravel does not work with your Apache installation, try this alternative:

Options +FollowSymLinks
RewriteEngine On

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^ index.php [L]

6. php artisan migrate --seed (this will seed database with dummy data)
7. php artisan serve
8.  Test login
   normal user [test@gmail.com,
                password123]
         Admin[Admintest@gmail.com
                password123 ]   

## web artisan

Built-in web artisan [Laravel for web artisan](https://github.com/laravel/laravel")






#Authors
-Arjun Yugalkumar Lucknauth 