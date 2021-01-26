# Human Resource Management System
Human Resource Management System is a combination of systems and processes that connect human resource management and information technology through HRMS software.

Each module performs a separate function within the HRMS that helps with information gathering or tracking. HRMS modules can assist with:
1. Employee Management
2. Leave Management
3. Attendance Management
4. Team Management
5. Asset/Resource Management 

## Contribution for the project

    1. Fork it
    2. Create your feature branch (git checkout -b my-new-feature)
    3. Make your changes
    4. Run the tests, adding new ones for your own code if necessary (phpunit)
    5. Commit your changes (git commit -am 'Added some feature')
    6. Push to the branch (git push origin my-new-feature)
    7. Create new Pull Request

## Requirement

1. PHP version 5.6+
2. [PHP Mcrypt](http://php.net/manual/en/book.mcrypt.php)
3. [PHP Mysql](http://php.net/manual/en/ref.pdo-mysql.php)
4. [Composer](https://getcomposer.org/)
5. [mbstring](http://php.net/manual/en/mbstring.installation.php)
6. [dom extention](http://php.net/manual/en/dom.setup.php)

## How can I support developers ?
* Star our GitHub repo :star:
* Create pull requests, submit bugs, suggest new features or documentation updates :wrench:
* Hire us for your next project :heart:

## Installation

It is preferred to have git setup installed on your local system.

If you have git on your local, run git clone https://github.com/aminulbinnoor/lara-hrm.git 
Once downloaded/cloned go to the project directory on terminal/command line and run composer install or composer.phar install

Once composer is installed, run migration: 

    php artisan migrate

After migration, run the database seeder: 

    php artisan db:seed
    
Once done migrating and seeding you will have default user:

    email: test@demo.com
    password: 123456
     
  
