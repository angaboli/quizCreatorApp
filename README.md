# Project : surveyCreator
=========================

#### AUTEURS: NGABONZIZA Aimé @angaboli | DOUMBIA Faciqui

Description
===========
This web application will be for creating and managing questions and calculating the result at the end of the questionnaire.

Chronology
==========

* Need
* Environment
* Developement
* Recipe
* Production

Platform
--------
* Apache Server
* MySQL
* php7

Planning
========
```
.
|__Need -> 30/03
    |__Environment -> 30/03
        |__Development -> 01/04
            |__Recipe -> 15/04
                |__Production 17/04

```

Arborescence du Projet
======================
```

C:.
│   .gitignore
│   README.md
│
├───app
│   │   App.php
│   │   Autoloader.php
│   │
│   ├───controller
│   │   │   AppController.php
│   │   │   QuestionsController.php
│   │   │   UsersController.php
│   │   │
│   │   └───admin
│   │           AppController.php
│   │           QuestionsController.php
│   │
│   ├───entity
│   │       QuestionEntity.php
│   │
│   ├───table
│   │       QuestionTable.php
│   │       TypeTable.php
│   │       UserTable.php
│   │
│   └───views
│       ├───admin
│       │   └───questions
│       │           edit.php
│       │           index.php
│       │
│       ├───questions
│       │       index.php
│       │
│       ├───templates
│       │       admin.php
│       │       default.php
│       │
│       └───users
│               login.php
│
├───config
│       config.php
│
├───core
│   │   Autoloader.php
│   │   Config.php
│   │
│   ├───auth
│   │       DBAuth.php
│   │
│   ├───controller
│   │       Controller.php
│   │
│   ├───database
│   │       Database.php
│   │       MysqlDatabase.php
│   │
│   ├───entity
│   │       Entity.php
│   │
│   ├───html
│   │       BootstrapForm.php
│   │       Form.php
│   │
│   └───table
│           Table.php
│
├───nbproject
│   │   project.properties
│   │   project.xml
│   │
│   └───private
│           config.properties
│           private.properties
│           private.xml
│
├───public
│   │   .buildpath
│   │   .project
│   │   index.php
│   │
│   ├───css
│   └───js
└───quiz

```
UML
===
![](model.png)