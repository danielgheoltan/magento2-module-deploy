# DG Deploy

## Introduction

Sets all themes to physical before deploying static view files.

## Install

```
composer require danielgheoltan/magento2-module-deploy
php bin/magento setup:upgrade
php bin/magento module:enable DG_Deploy
php bin/magento cache:flush
```

## Remove

```
composer remove danielgheoltan/magento2-module-deploy
php bin/magento cache:flush
```

## Update

```
composer update danielgheoltan/magento2-module-deploy
php bin/magento cache:flush
```
