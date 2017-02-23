#!/bin/bash

sudo chmod -R ugo+rwx app/cache
php app/console assets:install --symlink web
php app/console cache:clear --env=prod
php app/console cache:clear --env=dev
sudo rm -rf cache/prod/*
sudo rm -rf cache/dev/*
sudo chmod -R ugo+rwx app/cache
