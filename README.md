Logs_analyzer
=============

A log analyzer for the Ingesup's SEO courses.


## Install MongoDB and create new database
<!--- http://stackoverflow.com/questions/9757925/upgrade-mongodb -->
> sudo apt-key adv --keyserver keyserver.ubuntu.com --recv 7F0CEB10

> sudo echo "deb http://downloads-distro.mongodb.org/repo/ubuntu-upstart dist 10gen" >> /etc/apt/sources.list.d/10gen.list

> sudo apt-get update

> sudo apt-get install mongodb-10gen

> mongo

> use logs_analyzer;

## Install php extension

> sudo apt-get install php-pear

> sudo pecl install mongo

Add the following to your php.ini file :
> extension=mongo.so

## Import csv into DB (with .csv file in UTF-8 !)
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
