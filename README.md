Create.js with Doctrine ORM
========================

This project is a starting point for building an application with create.js
and the Symfony standard Framework.

Installation
------------

    curl -s http://getcomposer.org/installer | php

    php app/console assetic:dump

Setting up doctrine database

    php app/console doctrine:database:create

    php app/console doctrine:schema:create

PS, I disabled app_dev.php security for now, befor using this project on a
live server enable the security again.

Todo
---
- Creating fixtures for loading some test data
- Adding image via Sonata media / CMF media
