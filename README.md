# forms
Forms to improve onboarding of developers

# Install
- php composer.phar install or composer install
- create database
- copy ".env.example" to ".env"
- edit ".env" (set database access information)
- php artisan key:generate
- php artisan migrate or php artisan migrate:refresh (to reinstall)
- php artisan db:seed
- in case of possibility to edit "FormBuilder" field component:
   - cd nova-components/FormBuilder
   - npm install
   - npm run watch or npm run dev or npm run prod during / after work with "FormBuilder"
- php artisan serve

# Usage
1) Go to Admin area: http://127.0.0.1:8000/nova/ (email: admin@mail.com, pwd: 123456)
2) Select "Forms" and create new one. Use "form1view" for "Link" field
3) Go to URL: http://127.0.0.1:8000/nova/form/{FormID} (email: user@mail.com, pwd: 123456)

# Form view
Location: /resources/views/forms/form1view.blade.php
