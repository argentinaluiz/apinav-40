#!/bin/bash

echo "3"
if [ ! -f ".env" ]; then
    echo "5"
  cp /var/www/.env.example /var/www/.env
fi
if [ ! -f ".env.testing" ]; then
    echo "6"
  cp /var/www/.env.testing.example /var/www/.env.testing
fi
echo "10"
php artisan create-databases
