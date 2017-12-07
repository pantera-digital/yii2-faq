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

## Миграции
```
php yii migrate/up --migrationPath=@pantera/faq/migrations
```

## Frontend 
```
'modules' => [
    'subscribe' => [
        'class' => \pantera\faq\Module::className(),
    ],
],
```

## Backend 
```
'modules' => [
    'subscribe' => [
        'class' => \pantera\faq\admin\Module::className(),
    ],
],
```
