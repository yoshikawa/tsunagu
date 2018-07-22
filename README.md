# tsunagu

ツイッターのようなSNSアプリ

### Usage

- `docker-compose up -d`
- `docker exec -it laravel-app bash`
- `composer install`
- `cp .env.example .env`
- `php artisan key:generate`
- `php artisan migrate`
- `php artisan db:seed`
- [http://localhost](http://localhost)にアクセス

#### 開発する際

vue.jsを編集したいときは以下のコマンドで開発可能

- `docker exec -it laravel-app bash`
- `npm install`
- `npm run watch`
