## Introduction
- This is a human resources system. There are three kinds of users in the system, which are administrators, managers and employees.

## Special place
- There is a sign-in system, which uses face recognition to check in.

## How to use

- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__ and edit database credentials there
- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate --seed__ (it has some seeded data for your testing)
- That's it: launch the main URL. 
- Admin's credentials: __admin@admin.com__ - __password__
- Manager's credentials: __Manager1@Manager1.com__ - __password__
- Employee's credentials: __Employee1@Employee1.com__ - __password__
