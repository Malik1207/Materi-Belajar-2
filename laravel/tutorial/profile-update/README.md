# WEB-APP

Web-App adalah aplikasi berbasis web yang dibuat dengan framework Laravel. Aplikasi ini dibuat sebagai hasil tutorial pembelajaran.

## Instalasi

```
git clone git@github.com:cafeteriaid/web-app.git
cd web-app
copy .env.example .env
composer install
php artisan key:generate
php artisan storage:link
```

### Buat database web-app

```
mysql -u root -p
create database webapp_db;
quit
```

### Edit file .env

```
APP_NAME=Web-app

...

DB_DATABASE=webapp_db
DB_USERNAME=root //sesuaikan dengan username database
DB_PASSWORD=root //sesuaikan dengan password database
```

### Migrate

```
php artisan migrate
```

### Jalankan server

```
php artisan serve
```

Buka di `localhost:8080` di browser

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
