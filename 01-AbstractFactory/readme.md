# Abstract Factory
Abstract Factory is a creational design pattern that lets you produce families of related objects without specifying their concrete classes.

# Problem 
We want to make a ORM(Object relational mapping) that supports both Mysql and MongoDB. Class in ORM == Table in Mysql == Collection in Mongo. And Also, Attributes of class in ORM == column in Mysql == Field in Mongo; So we want to convert that Mongo and Mysql interface into ORM, with out changing the core. We assumed that mongo and mysql interface are provided by official and so this can't change. 

# Run
Generate Autoload File
```
composer dump-autoload
```
Run index.py inside of src folder. 
```
php src/index.php
```