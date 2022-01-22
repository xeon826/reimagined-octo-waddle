# Usage

Run the following to set up the local development environment.
```bash
git clone https://github.com/xeon826/reimagined-octo-waddle;
cd reimagined-octo-waddle;
composer install;
npm install;
php artisan serve;
npm run watch;
```

# Maps API Key

Follow <a style='color:blue' href='https://developers.google.com/maps/documentation/javascript/get-api-key'>these</a> directions to obtain an API key and ensure that Places, Geolocation, and Map API's are enabled. Copy .env.example to .env and place the key value as right-hand assignment for "MAP_API_KEY".
