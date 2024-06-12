#!/bin/bash

php artisan migrate

horizon_pid=0

stop_horizon() {
  echo "Stopping horizon..."

  php artisan horizon:terminate

  wait $horizon_pid
  echo "Horizon stopped"

  exit 143
}

echo "Setting traps..."
trap stop_horizon QUIT

exec php /var/www/html/artisan horizon &
horizon_pid=$!
echo "Horizon started with pid: $horizon_pid"
wait $horizon_pid
