
#  TAI

TAI will be the first Arabic food-sharing website. TAI connects people and allows them to share the food excess so the surplus food and other items won’t be a waste and thrown away. Our main goal is to reduce food waste. 
https://www.youtube.com/watch?v=jIbfAxD7mf8&ab_channel=TAI

## Author

- [@AbdallahAlhajeid](https://github.com/Abdallah-Alhajeid)


## Tech Stack

**Client:** HTML, CSS, SASS,JS,BOOTSTRAP

**Server:** PHP, LARAVEL, MYSQL, XAMPP



## Run Locally

Clone the project

```bash
  git clone https://github.com/Abdallah-Alhajeid/Masterpiece-Abdallah_Alhajeid
```

Go to the project directory

```bash
  cd tai
```

Install dependencies

```bash
  composer install
```
Create a copy of  .env file

```bash
cp .env.example .env
```
Generate an app encryption key
```bash
php artisan key:generate
```
Create an empty database on mysql for our application called:
```bash
tai
```

Migrate the database

```bash
 php artisan migrate
```

Start the project :)

```bash
  php artisan serve
```

  
## License

[![MIT License](https://img.shields.io/apm/l/atomic-design-ui.svg?)](https://github.com/tterb/atomic-design-ui/blob/master/LICENSEs)


  
