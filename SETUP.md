- **Install Composer**
  - composer install
 
- **Add Credentials**
  - DB_CONNECTION
  - DB_DATABASE
  - DB_USERNAME
  - DB_PASSWORD
  - GOOGLE_CLIENT_ID
  - GOOGLE_SECRET_ID
  - GOOGLE_REDIRECT_URL
  - RAZOR_KEY
  - RAZOR_SECRET
 
- **Migrate Database**
  - php artisan migrate
 
- **If String length Error:- Set database type InnoDB**
  - config/database.php
    'mysql' => ['engine' => 'InnoDB']

- **Add Default Data**
  - php artisan db:seed
 
- **Run the project**
  - php artisan serve
