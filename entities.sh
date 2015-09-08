#!/bin/bash
php bin/console doctrine:generate:entities DiveFrontBundle:$1
./cache_clear.sh
