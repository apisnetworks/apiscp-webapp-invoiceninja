APP_NAME="Invoice Ninja"
APP_ENV={{ $mode ?? 'production' }}
APP_KEY=
APP_DEBUG={{ empty($dev) ? 'false' : 'true' }}
APP_URL="{{ $proto }}{{ $uri }}"

LOG_CHANNEL=stack

DB_CONNECTION="{{ $dbtype ?? 'mysql' }}"
DB_HOST="{{ $dbhost ?? 'localhost' }}"
DB_PORT=3306
DB_DATABASE="{{ $dbname }}"
DB_USERNAME="{{ $dbuser }}"
DB_PASSWORD="{{ $dbpassword }}"

DEMO_MODE=false

BROADCAST_DRIVER=log
LOG_CHANNEL=stack
CACHE_DRIVER=file
QUEUE_CONNECTION=database
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=sendmail
MAIL_HOST=localhost
MAIL_PORT=25
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="{{ $email }}"
MAIL_FROM_NAME="Self Hosted User"

POSTMARK_API_TOKEN=
REQUIRE_HTTPS=false

GOOGLE_MAPS_API_KEY=
ERROR_EMAIL=
TRUSTED_PROXIES=

NINJA_ENVIRONMENT=selfhost

#options - snappdf / phantom / hosted_ninja
PDF_GENERATOR=hosted_ninja

PHANTOMJS_KEY='a-demo-key-with-low-quota-per-ip-address'
PHANTOMJS_SECRET=secret

UPDATE_SECRET="{{ $secret ?? \Opcenter\Auth\Password::generate(10) }}"

DELETE_PDF_DAYS=60
DELETE_BACKUP_DAYS=60

COMPOSER_AUTH='{"github-oauth": {"github.com": "$@{{ secrets.GITHUB_TOKEN }}"}}'

GOOGLE_PLAY_PACKAGE_NAME=
APPSTORE_PASSWORD=

MICROSOFT_CLIENT_ID=
MICROSOFT_CLIENT_SECRET=
MICROSOFT_REDIRECT_URI=

APPLE_CLIENT_ID=
APPLE_CLIENT_SECRET=
APPLE_REDIRECT_URI=

NORDIGEN_SECRET_ID=
NORDIGEN_SECRET_KEY=