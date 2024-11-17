## Installation 
Make sure you have environment setup properly. You will need MySQL, PHP8.1, Node.js and composer.

### Install Laravel Website + API
01. Download the project (or clone using GIT)
02. Copy `.env.example` into `.env` and configure database credentials
03. Go to the project's root directory using terminal
04. Run `composer install`
05. Set the encryption key by executing `php artisan key:generate --ansi`
06. Run migrations `php artisan migrate --seed`
07. Start local server by executing `php artisan serve`
08. Open new terminal and go to the project root directory
09. Run `npm install`
10. Run `npm run dev` to start vite server for Laravel frontend

### Install Vue.js Admin Panel
01. Go to `backend` folder
02. Run `npm install`
03. Copy `backend/.env.example` into `backend/.env`
04. Make sure `VITE_API_BASE_URL` key in `backend/.env` is set to your Laravel API host (Default: http://localhost:8000)
05. Run `npm run dev`
06. Open Vue.js Admin Panel in browser and login with
    ```
    email:admin@example.com
    password:admin123
    ```
