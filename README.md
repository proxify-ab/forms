# forms
Forms to improve onboarding of developers

#Install
php artisan migrate or php artisan migrate:refresh (to reinstall)
php artisan db:seed

#Usage
1) Go to Admin area: http://127.0.0.1:8000/nova/ (email: admin@mail.com, pwd: 123456)
2) Select "Forms" and create new one. Use "form1view" for "Link" field
3) Go to URL: http://127.0.0.1:8000/nova/form/1 (email: user@mail.com, pwd: 123456)

#Form view
Location: /resources/views/forms/form1view.blade.php