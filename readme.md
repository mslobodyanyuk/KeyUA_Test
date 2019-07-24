A task:
=======
PHP

There are several types of employees: programmer, designer, tester, manager.

1. Each employee is able to do his job in his own way:
- the programmer can: 1) write code, 2) test the code, 3) communicate with the manager
- the designer can: 4) draw, 3) communicate with the manager
- the tester can: 2) test the code, 3) communicate with the manager, 5) set tasks
- the manager can: 5) set tasks

2. In turn, they do not know how:
- programmer: 4) draw 5) set tasks
- designer: 1) write code 2) test code 5) set tasks
- tester: 1) write code 4) draw
- manager: 1) write code 4) draw 2) test code

the task:
- it is necessary to describe the ability of each employee using the principles of the PLO;
- write a console command using symfony (symfony console commands). AT
as a parameter, the team should take the name of the position. Result robots
teams must beat the list of employee skills. For writing logic, use services.
	startup example:
	
		php bin/console company:employee programmer
		
the output should get like:
		
		- code writing
		- code testing
		- communication with manager
		
- also whether the employee can implement certain actions. Example for
implementation:

command:
	
		php bin/console employee:can programmer writeCode						
        result:        
            true
command:
		
		php bin/console employee:can programmer draw				
        result:
            false

Requirements
1. php 7 and up
2. symfony 4
2. Use code style psr-2 https://www.php-fig.org/psr/psr-2/
3. Create a new repository at https://bitbucket.org/ and upload it there.
4. Use composer https://getcomposer.org/


MySQL

1. For a given list of products get the names of all categories in which are presented
products.
	Selection for several products (example: ids = (9, 14, 6, 7, 2)).
2. For a given category get a list of offers of all products from this category.
Each category can have several subcategories.
	Example:
	I select all products from the category computers (id = 2) and subcategories (id = 3 (laptops),
	id = 4 (tablets), id = 5 (hybrids)).
3. For a given list of categories, get the number of unique products in each
categories.
	Selection for several categories (example: ids = (2, 3, 4)).
4. For a given list of categories, get the number of units of each product that
enters the specified categories.
	Selection for several categories (example: ids = (3, 4, 5)).

Note:
The database schema is created independently based on the above requirements. As a result
You must provide a database schema and SQL queries.

Actions on deployment of the project:
=====================================

1. `git clone << project path >>`

2. `сomposer install`

3. configure domain settings:

* ***on Ubuntu( Linux )***

_access to files in a folder something like_

`sudo chmod -R 777 /var/www/SYMFONY/keyua_symf_test.loc` 
	
_create new virtual host files_
	
`sudo cp /etc/apache2/sites-available/test.loc.conf /etc/apache2/sites-available/keyua_symf_test.loc.conf`

_open a new file in the editor with root-rights_
	
`sudo nano /etc/apache2/sites-available/keyua_symf_test.loc.conf`
		
_configure on keyua_test.loc_  
```
Ctrl + O
Enter 
Ctrl + X
```
_enable new virtual hosts_	
	
`sudo a2ensite keyua_symf_test.loc.conf`	
				
_after completion, you must restart Apache for the changes to take effect_

`sudo service apache2 restart`

_or_
				
`sudo systemctl restart apache2`

_edit hosts file_

`sudo nano /etc/hosts`
  
* ***on Windows***
 
`hosts` file, `httpd.conf`.


4. make a new database - keyua_test( utf8_general_ci encoding ) for example 

Or just download a database dump located in the /public folder
( - database dump contains CREATE/USE DATABASE statement):

`keyua_test.sql`


5. database settings in `.env` file:

```php
DB_USER=root
DB_PASS=your_password
DB_DATABASE=keyua_test
DATABASE_URL=mysql://root:your_password@127.0.0.1:3306/keyua_test
```

MySQL

- Database schema and SQL-queries.

Located in the /public folder in a file:

`Database schema and SQL-queries.txt`
	

Useful links:
=============

#### Installing Symfony 4

[Installing Symfony 4](https://www.youtube.com/watch?v=oeKHlBcqTVw)

[How to install symfony with composer?](http://qaru.site/questions/5733370/how-to-install-symfony-with-composer)

[Installing & Setting up the Symfony Framework](https://symfony.com/doc/current/setup.html)

[Download the Symfony client](https://symfony.com/download)

[Symfony Local Web Server](https://symfony.com/doc/current/setup/symfony_server.html)

#### Introduction

[[WebShake] Symfony 4 Framework Course - Part 1](https://coursehunter-club.net/t/webshake-kurs-po-frejmvorku-symfony-4-chast-1/709)

#### .env

[How to set up a database connection in Symfony 4.0.6](https://ru.stackoverflow.com/questions/800693/%D0%9A%D0%B0%D0%BA-%D0%B2-symfony-4-0-6-%D0%BD%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%B8%D1%82%D1%8C-%D0%BF%D0%BE%D0%B4%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%B8%D0%B5-%D0%BA-%D0%B1%D0%B0%D0%B7%D0%B5-%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85)

#### Create Model

[[WebShake] Symfony 4 Framework Course - Part 1](https://coursehunter-club.net/t/webshake-kurs-po-frejmvorku-symfony-4-chast-1/709)

#### Create Repository( queries )

[Databases and the Doctrine ORM](https://symfony.com/doc/current/doctrine.html)

[Databases and Doctrine ORM¶](https://symfony.com.ua/doc/current/doctrine.html)

[How to create custom storage classes¶](https://symfony.com.ua/doc/current/doctrine/repository.html)

#### Create Console Command

[Console Commands](https://symfony.com.ua/doc/current/console.html)

[Creating a CLI Console Command in Symfony 3.4](https://evilinside.ru/sozdanie-konsolnoj-komandy-cli-v-symfony-3-4/#)

[How to issue a console command¶](https://symfony.com.ua/doc/current/console/style-ru.html)

[How to create custom console commands using the Symfony Console component](https://code.tutsplus.com/ru/tutorials/how-to-create-custom-cli-commands-using-the-symfony-console-component--cms-31274)

[How to call a command from the controller¶](https://symfony.com.ua/doc/current/console/command_in_controller.html)

#### Access to Repository WITHOUT Controller

[Connect the repository in the command via DI](https://prnt.sc/og3huq)

#### Service Container

[Service Container¶](https://symfony.com.ua/doc/current/service_container.html#service-container-services-load-example)

[How to set external parameters in the service container¶](https://symfony.com.ua/doc/current/configuration/external_parameters.html)

#### Define Command as a Service

[How to define commands as services¶](https://symfony.com.ua/doc/current/console/commands_as_services.html) 

#### Add your Class to the project 

[Where to put a Class in Symfony](http://yapro.ru/web-master/php/kuda-polojiti-klass-v-symfony.html)

#### CamelCase to Underscore method

[How to find a word in a line with a capital letter?](https://ru.stackoverflow.com/questions/661137/%d0%9a%d0%b0%d0%ba-%d0%b2-%d1%81%d1%82%d1%80%d0%be%d0%ba%d0%b5-%d0%bd%d0%b0%d0%b9%d1%82%d0%b8-%d1%81%d0%bb%d0%be%d0%b2%d0%be-%d1%81-%d0%b1%d0%be%d0%bb%d1%8c%d1%88%d0%be%d0%b9-%d0%b1%d1%83%d0%ba%d0%b2%d1%8b)

[strcspn](https://www.php.net/manual/ru/function.strcspn.php)

[substr](http://www.php.su/functions/?substr)

[implode](https://www.php.net/manual/ru/function.implode.php) 

#### MySQL

[An empty list of IN clause options in MySQL](http://qaru.site/questions/200851/empty-in-clause-parameter-list-in-mysql)