<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About This Repo

This is a portfolio-related repository. This repository is built using the [Laravel 10](https://laravel.com/docs/10.x/releases) framework. This repository was not created from scratch by me but I forked it from [Fajuu's GitHub](https://github.com/Fajuu/portofolio_Laravel10.git). The rest I changed some concepts of the backend and some contents of the frontend. 

## Stages of installation :
### Clone Repository
```bash
git clone https://github.com/gabrieladvent/porto-dinamis.git
```

### Setup
1. Run the command in your terminal directory
```bash
composer install
```

2. Generate .env and key
```bash
cp .env.example .env
```

```bash
php artisan key:generate
```

3. Migrate database and seed
```bash
php artisan migrate --seed
```


4. Run Server
```bash
php artisan serve
```

### Enter the admin page
```bash
http://localhost:8000/login
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## HAPPY CODING :) 