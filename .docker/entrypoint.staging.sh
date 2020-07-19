#!/bin/bash

if [ ! -f ".env" ]; then
  cp /var/www/.env.example /var/www/.env
fi
if [ ! -f ".env.testing" ]; then
  cp /var/www/.env.testing.example /var/www/.env.testing
fi

ls /var/www

php artisan create-databases
