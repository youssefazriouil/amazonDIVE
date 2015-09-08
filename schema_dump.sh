#!/bin/bash

php bin/console doctrine:schema:update --dump-sql --no-debug
