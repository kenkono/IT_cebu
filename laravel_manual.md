# Laravel project

```
composer create-project --prefer-dist laravel/laravel awesomeblog_app "5.7.*"
```

# Authentication

```
php artisan make:auth
```

# Mysql setting(docker)

`.env`

```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=awesomeblog
DB_USERNAME=root
DB_PASSWORD=GlobalIT@123
```

# fontawesome
```
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
```
ref: https://webdesign-trends.net/entry/8351

# Controller
```
php artisan make:controller UserController
```

# Migration
```
php artisan make:migration create_followers_table --create=followers
```

# Add columns
```
php artisan make:migration add_column_in_users_table --table=users
```

# Questions
User columns  
is_admin  
result  