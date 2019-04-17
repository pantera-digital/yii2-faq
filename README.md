# yii2-faq
FAQ (frequently asked questions) module for Yii2


## Установка
Предпочтительно через composer:
```
composer require pantera-digital/yii2-faq "@dev"
```
Или добавьте в composer.json
```
"pantera-digital/yii2-faq": "@dev"
```
и выполните команду
```
composer update
```

## Миграции
```
php yii migrate/up --migrationPath=@pantera/faq/migrations
```

## Frontend 
```
'modules' => [
    'faq' => [
        'class' => \pantera\faq\Module::class,
    ],
],
```

## Backend 
```
'modules' => [
    'faq' => [
        'class' => \pantera\faq\admin\Module::class,
    ],
],
```
