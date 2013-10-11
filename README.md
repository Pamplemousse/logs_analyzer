Logs_analyzer
=============

A log analyzer for the Ingesup's SEO courses.


## Création d'une base de données
sudo apt-get install mongodb mongodb-dev

mongo

use logs_analyzer;

## Installation de l'extension pour php

sudo apt-get install pecl

sudo pecl install mongo

// Penser à rajouter extension=mongo.so dans php.ini
