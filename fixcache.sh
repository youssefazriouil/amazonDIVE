php bin/console assets:install web --symlink
php bin/console cache:clear --env=prod --no-debug --no-warmup
php bin/console cache:warmup --env=prod
php bin/console cache:clear --env=dev --no-debug --no-warmup
php bin/console cache:warmup --env=dev

