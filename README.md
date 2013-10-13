Logs_analyzer
=============

A log analyzer for the Ingesup's SEO courses.


## Install MongoDB and create new database
> sudo apt-get install mongodb mongodb-dev

> mongo

> use logs_analyzer;

## Install php extension

> sudo apt-get install pecl

> sudo pecl install mongo

Add the following to your php.ini file :
> extension=mongo.so

## Import csv into DB
php -c /etc/php5/apache2/php.ini import.php

## Some usefull commands for mongo CLI
Connect to the mongo CLI
> mongo

Use logs_analyzer database
> use logs_analyzer;

Count objects in 'logs' collection
> db.logs.count()

List objects in 'logs' collection
> db.logs.find()

Remove all objects in 'logs' collection
> db.logs.remove()
