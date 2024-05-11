#!/bin/sh

echo "🚀 Starting Horizon container '$HOSTNAME'..."
php /var/www/html/artisan horizon &
HORIZON_PID=$!
echo "Horizon started with PID: $HORIZON_PID"

stop_horizon() {
  echo "⏬ Received signal: $1, shutting down Horizon..."
  php /var/www/html/artisan horizon:terminate

  # Wait for the Horizon process to exit
  wait $HORIZON_PID

  echo "🛑 Horizon service in container '$HOSTNAME' has been shutdown."
  exit 0
}

# Catch signals: INT (Ctrl+C), TERM (kill), HUP (hangup), and QUIT
trap 'stop_horizon INT' INT
trap 'stop_horizon TERM' TERM
trap 'stop_horizon HUP' HUP
trap 'stop_horizon QUIT' QUIT

# This wait ensures the script itself does not exit until Horizon process is done
wait $HORIZON_PID