#!/bin/bash


    

if [ "$DEPLOY_ENV" = "staging" ]; then
    if [ ! -f ".env" ]; then
        cp /var/www/.env.example /var/www/.env
    fi
    if [ ! -f ".env.testing" ]; then
        cp /var/www/.env.testing.example /var/www/.env.testing
    fi
    php artisan create-databases
fi

php artisan migrate
# turn on bash's job control
set -m

# Start the primary process and put it in the background
php-fpm &

# Start the helper process
nginx -g 'daemon off;' 

# the my_helper_process might need to know how to wait on the
# primary process to start before it does its work and returns


# now we bring the primary process back into the foreground
# and leave it there
fg %1