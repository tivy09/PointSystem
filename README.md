## Introduction
- This is a human resources system. There are three kinds of users in the system, which are administrators, managers and employees.

## Special place
- There is a sign-in system, which uses face recognition to check in.

## Pictures Display

### Home Pages
![home](https://user-images.githubusercontent.com/68195502/110073175-e76c7a80-7db9-11eb-8d47-cfcb158a532c.png)

------------

This is Project home pages. When the users first enter the system, he will first arrive at this page. This page will display some information about the company. When the user in an outsider or an employee who does not have a login account, the word login will be displayed in the upper right corner. 

### User Manual

![user](https://user-images.githubusercontent.com/68195502/110073173-e5a2b700-7db9-11eb-83f7-f74ba63bddbc.jpg)

------------

User manual. At first, users can learn from the user manual if they use the system. The user manual has different interfaces for general users and company users. Figure 1.2 is the user's manual for general users.

### User Home Pages(Admin)
![homepages](https://user-images.githubusercontent.com/68195502/110073651-afb20280-7dba-11eb-8591-a8115224f739.jpg)

------------

User home page. There are three kinds of home pages here, which are HR Admin. Because their work and authority are different, there will be different interfaces. The robot in the lower right corner can guide you to various places.

### Job Controller
![jobController](https://user-images.githubusercontent.com/68195502/110073183-e9363e00-7db9-11eb-9c90-44d48e2eb353.jpg)

------------

HR Admin can create the job to be interviewed here. Create the job to be interviewed by working place and Job Type List. When the Number of Worker is already 0, the work will not appear in the selected place. (Figure 2.6)

### Manager Evaluation
![evadutoionjob](https://user-images.githubusercontent.com/68195502/110073174-e63b4d80-7db9-11eb-934e-d44d9f268297.jpg)

------------

When the employee enrolment the task, it will be displayed and let the manager evaluate. After the manager evaluates, it automatic will send an email to the employee.  

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
