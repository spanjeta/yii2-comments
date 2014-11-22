NOT READY YET. Please do not use it yet
=============================================


Comments Widget
===============
Comments Widget adds comment box for any view

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist spanjeta/yii2-comments "*"
```

or add

```
"spanjeta/yii2-comments": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, use mitration to install table

```
yii migrate/up --migrationPath=@spanjeta/comments/migrations
```


simply use it in your code by  :

```php
<?=   \spanjeta\comments\CommentsWidget::widget(['model'=>$model]); ?>```
