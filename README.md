# bing
I was able to replicate the screens as the assesments emphasizes on the priority of the front end over the back end
To set up the application, you have to pull the project, create a db and run ph artisan migrate.
Next step is to run the "php artisan db:seed --class=RoleSeeder" to seend roles into the db, before creating users.
I also implemented a pivot table to store multiple users role
Because of the short time and my work schedule i was only able to implement the create user and fetch user routes
Please not, i only worked on the develop branch.
