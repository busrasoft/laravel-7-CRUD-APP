# Laravel 7 CURD App
1. Create a Laravel 7 project
2. Database Configuration
3. Make Model & Migration
4. Make Controller
5. Define Routes
6. Make Views
# 1) Crate a Laravel 7 Project

- laravel new 7_CRUD_APP
- php artisan serve
# 2) Database Configuration
- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=7_CRUD_APP
- DB_USERNAME=root
- DB_PASSWORD=
# 3) Make model & migration
- php artisan make:model Contact -m
- database\migrations\2020_05_05_135004_create_contacts_table.php
-  Schema::create('contacts', function (Blueprint $table) {
-            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->timestamps();
        });
- php artisan migrate
- \7_CRUD_APP\app\Contact.php
- protected $fillable = ['name', 'email', 'phone'];

# 4) Make Controller
- php artisan make:controller ContactController
- I add CRUD fonctions
# 5) Define Routes
- \routes\web.php
- Route::resource('contact', 'ContactController');
# 6) Make Views
- composer require laravelcollective/html
- Create index.blade.php 
- Create create.blade.php 
- Create edit.blade.php 
- Create index.blade.php 

# Mail Send With Contact Us
- adds route
Route::get('contact-us', 'ContactUsController@index');
Route::post('contact-us', 'ContactUsController@contactUs');

- create mail model =  php artisan make:mail ContactUs
- create controller =  php artisan make:controller ContactUsController
- create email folder and 2 blade file = emails/contact-us.blade.php and emails/contactEmail.blade.php
- php artisan config:cache
 