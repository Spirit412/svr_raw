SVR RAW для Open-Admin ver:1.0.22
=========================

## Установка

```
$ composer require svr/raw

$ php artisan migrate --path=vendor/svr/raw/database/migrations

```
## Добавление пунктов меню.
```
$ php artisan admin:import svr-raw

```

## Usage

[//]: # (See [wiki]&#40;http://open-admin.org/docs/en/extension-helpers&#41;)

License
------------

[//]: # (Licensed under [The MIT License &#40;GPL 3.0&#41;]&#40;LICENSE&#41;.)


## Permission.
Если пермиссий на роуты в БД нет (проверка по слагу), создаются через команду
```
$ php artisan migrate --path=vendor/svr/raw/database/migrations
```
## Seeders.

Пример
```
$ php artisan db:seed --class=Svr\Raw\Seeders\RawSeeders
```

Запустит следующие три сида:
- [FromSelexBeefSeeder.php](database%2Fseeders%2FFromSelexBeefSeeder.php)
- [FromSelexMilkSeeder.php](database%2Fseeders%2FFromSelexMilkSeeder.php)
- [FromSelexSheepSeeder.php](database%2Fseeders%2FFromSelexSheepSeeder.php)

Создаст по 1000 записей в каждой таблице

## Пункты меню
Устанавливаются только если отсутствуют в БД. Проверка по uri. URI должен содержать в начале `raw`

## Установить dev зависимости пакета.

Пример
```
$ composer update svr\raw --dev
```

DEV push new commit, tag 
```
git add . | git commit -m "dev tests 1.0.35" | git tag 1.0.35 | git push -fu origin --all | git push -fu origin --tags
```

Get list tag 
```
git tag
```

