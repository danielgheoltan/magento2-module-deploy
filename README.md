# DG_Deploy

## Install

```
composer config repositories.dg/module-deploy git https://github.com/danielgheoltan/magento2-module-deploy.git
composer require dg/module-deploy:dev-master
php bin/magento setup:upgrade
php bin/magento module:enable DG_Deploy
php bin/magento cache:flush
```

## Remove

```
composer remove dg/module-deploy
php bin/magento cache:flush
```

## Update

```
composer update dg/module-deploy
php bin/magento cache:flush
```
