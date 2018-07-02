tsunagu

データベース演習の延長線で作るSNS

- mysql -uroot

```sql
create database tsunagu;
```

- npm install
- composer install
- cp .env.example .env
- php artisan key:generate
- php artisan migrate
- php artisan db:seed
- `php artisan serve` & `npm run watch`
- http://locahost:8000