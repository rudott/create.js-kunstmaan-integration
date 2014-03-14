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

PS,
- The app_dev.php security is disabled for now, before using this project on a
  live server enable the security again.
- The SCSS files are removed from SiteBundle and only the css file is put in the
  css folder (so no Grunt needed)

Todo
---
- Using CKEditor in Create.js from Kunstmaan? Or pull request @ Kunstmaan for
  updating the version to 4.1
- Documentation for adding RDF-mapping
