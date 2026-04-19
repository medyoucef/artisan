#!/bin/sh
set -e

cd /var/www

echo "Waiting for MySQL..."
until php -r "
\$host = getenv('DB_HOST') ?: 'db';
\$port = getenv('DB_PORT') ?: 3306;
\$user = getenv('DB_USERNAME') ?: 'root';
\$pass = getenv('DB_PASSWORD') ?: '';
\$db   = getenv('DB_DATABASE') ?: '';
try {
    new PDO(\"mysql:host=\$host;port=\$port;dbname=\$db\", \$user, \$pass);
    exit(0);
} catch (Exception \$e) {
    exit(1);
}
"; do
  sleep 2
done

if [ ! -f /var/www/vendor/autoload.php ]; then
  echo "Installing Composer dependencies..."
  composer install
fi

mkdir -p /var/www/storage/logs /var/www/bootstrap/cache
chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
chmod -R 775 /var/www/storage /var/www/bootstrap/cache

if ! grep -q '^APP_KEY=base64:' .env 2>/dev/null; then
  echo "Generating APP_KEY..."
  php artisan key:generate --force
fi

php artisan optimize:clear || true
php artisan storage:link || true

exec "$@"