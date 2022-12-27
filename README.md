To initiate and test this repo. Follow the steps in sequence.

1. Clone the repository
2. Create a new {.env} file from {.env.example} file. Or simply rename {.env.example} file to {.env}
3. To install composer packages: Run=> composer install
4. To generate a new application key: Run=> php artisan key:generate
5. To migrate users: Run=> php artisan migrate --database=user --path=database/migrations/user
6. To migrate admins: Run=> php artisan migrate --database=admin --path=database/migrations/admin --seed
7. To install NPM packages: Run=> npm i
8. To build live assets for frontend: Run=> npm run dev
9. To start server: Run=> php artisan serve
10. Open browser to test the running app at: http://localhost:8000 

This is just the basic skelton to add multi-guard-auth. Add the final auth and foront-end as per requirements.
