### Features

- Images are uploaded via a form, and are stored in the database
- An API endpoint retrives all uploades from the database
- The frontend calls the API, and displays all images


### Setup

- `composer update`
- `cp .env.example .env` and fill
- `php artisan migrate`
- `php artisan key:generate`
