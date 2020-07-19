#!/bin/bash

chmod -R 777 /var/www/storage && chmod -R 777 /var/www/bootstrap/cache

if [ "$DEPLOY_ENV" = "staging" ]; then
    if [ ! -f ".env" ]; then
        cp /var/www/.env.example /var/www/.env
    fi
    if [ ! -f ".env.testing" ]; then
        cp /var/www/.env.testing.example /var/www/.env.testing
    fi
fi

for i in {1..50};
do
    php artisan migrate
    if [ $? -eq 0 ]
    then
        echo "Migrated"
        break
    else
        echo "Not migrated, retry again..."
        sleep 1
    fi
done
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