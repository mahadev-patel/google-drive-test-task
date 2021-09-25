#Task:
Create a Laravel Project:
A. Add CRON JOB scheduler
B. Scheduler should backup the MySQL or MongoDB database & upload it on Google Drive


#Instructions:

1. Take pull project code from Git

2. Go inside project folder And run 'composer update' command to generate vendor folder in your project. Also rename .env.example with .env file.

3. Go schema folder on root and import database organization_employee.sql in your phpmyadmin.

4. Set database name and database credentials in .env file:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=organization_employee
DB_USERNAME=root
DB_PASSWORD=

5. Create Google drive Api Project on google developer console account and get Google drive client_id, client_secret , refresh_token and folder_id by as per following links instructions:

Create Clint ID and Secret:
https://github.com/ivanvermeyen/laravel-google-drive-demo/blob/master/README/1-getting-your-dlient-id-and-secret.md

Getting Refresh Token:
https://github.com/ivanvermeyen/laravel-google-drive-demo/blob/master/README/2-getting-your-refresh-token.md

Getting Folder ID where you want to upload file in a drive folder:
https://github.com/ivanvermeyen/laravel-google-drive-demo/blob/master/README/3-getting-your-root-folder-id.md

6. Check Mysqldump tool is install in your system to take mysql backup. Also get its path and save in .env:

MYSQLDUMP_PATH=c://xampp/mysql/bin/mysqldump.exe

7. Put this Client id , secret and refresh token values in your .env files :

FILESYSTEM_CLOUD=XXXX
GOOGLE_DRIVE_CLIENT_SECRET=XXX
GOOGLE_DRIVE_REFRESH_TOKEN=XXXX
GOOGLE_DRIVE_FOLDER_ID=XXXXX

8. To set cron you need to run following command in terminal:

crontab -e

And set path of cron like this:

* * * * * php /path/to/artisan schedule:run 1>> /dev/null 2>&1
OR
* * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1

If you want to run Job scheduler command directly on command line then run following command:

php artisan database:backup
