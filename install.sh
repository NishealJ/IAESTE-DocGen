#!/bin/sh

if ! [ -x "$(command -v php)" ]; then
    echo "Error: php is not installed." >&2
    exit 1
fi

echo "Installing composer"
EXPECTED_SIGNATURE="$(wget -q -O - https://composer.github.io/installer.sig)"
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
ACTUAL_SIGNATURE="$(php -r "echo hash_file('sha384', 'composer-setup.php');")"

if [ "$EXPECTED_SIGNATURE" != "$ACTUAL_SIGNATURE" ]; then
    echo >&2 'ERROR: Invalid installer signature'
    rm composer-setup.php
    exit 1
fi

php composer-setup.php --quiet
RESULT=$?
rm composer-setup.php

if [ $RESULT -ne 0 ]; then
    exit $RESULT
fi

echo "Installing dependencies"
php composer.phar install
