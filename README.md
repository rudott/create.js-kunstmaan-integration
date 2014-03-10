Create.js with Doctrine ORM and Kunstmaan
=========================================

This project is a starting point for building an application with
create.js, the Symfony standard Framework and the Kunstmaan bundles

After login with admin/admin (default in fixtures) you can edit
the website in front-end. Notice: for now only edit text.

Installation
------------

    curl -s http://getcomposer.org/installer | php

    composer.phar install

Setting up doctrine database

    app/console doctrine:database:create

    app/console doctrine:schema:create

Loading Kunstmaan fixtures

    app/console doctrine:fixtures:load

Loading front-end assets

    app/console assets:install web
    app/console assetic:dump

URL to admin

    http://......./en/admin

URL to frontend

    http://......./en/

PS, I disabled app_dev.php security for now, befor using this project on a
live server enable the security again.

Todo
---
- Using CKEditor in Create.js from Kunstmaan
- Using Kunstmaan media bundle
- Documentation for adding RDF-mapping
