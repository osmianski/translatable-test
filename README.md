# Testing `astrotomic/laravel-translatable` package

An ugly app with a translatable model.

## Installation

Install the project into the `~/projects/translatable-test` directory (the "project directory"):

1. Download and prepare the project files using the following commands:

        cd ~/projects
        git clone git@github.com:osmianski/translatable-test.git
        cd translatable-test
        composer install
        npm install
        php -r "file_exists('.env') || copy('.env.example', '.env');"
        php artisan key:generate --ansi

2. In a separate terminal window, start the Docker containers by running the following commands, and keeping it running there:

        cd ~/projects/translatable-test
        sail up

3. In a separate terminal window, start Vite by running the following commands, and keeping it running there:

        cd ~/projects/translatable-test
        npm run dev

4. Prepare the database:

        cd ~/projects/translatable-test
        sail artisan migrate:fresh

5. Open the home page, <http://127.0.0.1:8000/>.
