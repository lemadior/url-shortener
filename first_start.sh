#!/bin/sh

if [ ! -e "/usr/bin/docker-compose" ] || [ ! -e "/usr/bin/docker-compose" ]; then
    echo "\n'docker-compose' command wasn't found!\n Please install it and try again"
    exit 1
fi

sudo /usr/bin/chown -R 1000:33 $(pwd) || exit 1

docker-compose up -d

php_container_running=$(docker ps | grep '[-_]app');

if [ ! -z "$php_container_running" ]; then
    echo -n "Composer update..."
    /usr/bin/docker exec -it app composer install >/dev/null;

    if [ $? -ne 0 ] ; then
        echo "Some error occurred!"
        exit 1
    else
        echo 'Ok';
    fi
fi

echo "Generate application key"
/usr/bin/docker exec -it app php artisan key:generate --ansi || exit 1

echo "done."

echo "NOTE: don't forget to add username and password to the '.env' file"
echo "      after this do command 'docker exec -it app php artisan migrate --seed'"
echo

exit 0
