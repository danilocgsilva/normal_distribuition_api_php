#!/bin/bash

composer install -d /var/www

service apache2 start

while :
do
    sleep 1000
done
