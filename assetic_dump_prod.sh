#!/bin/bash
./cache_clear.sh
php app/console assetic:dump --env=prod --no-debug
