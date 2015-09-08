#!/bin/bash
chown -R ubuntu:www-data *
chmod -R 755 *
chmod -R 777 var/logs/
chmod -R 777 var/cache/
#Zchmod -R 777 web/uploads/
