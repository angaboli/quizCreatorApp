# Project : surveyCreator
=========================

#### AUTEUR: NGABONZIZA Aimé @angaboli 

Description
===========
This web application is a system to create questionnaire and managing theme including there questions, then calculate the result at the end of the questionnaire.


Platform
--------
* Apache Server
* MySQL
* php7

Commment récuper le projet 
==========================
* Lancer le terminal de commande
* Entrer la commande suivante :
    $ git@github.com:angaboli/quizCreatorApp.git


Arborescence du Projet
======================
```

├───app
│   ├───controller
│   │   └───admin
│   ├───entity
│   ├───table
│   └───views
│       ├───admin
│       │   ├───dashboard
│       │   ├───questions
│       │   ├───results
│       │   └───surveys
│       ├───questionnaires
│       ├───questions
│       ├───templates
│       └───users
├───config
├───core
│   ├───auth
│   ├───controller
│   ├───database
│   ├───entity
│   ├───html
│   └───table
└───public
    ├───css
    ├───images
    ├───js
    │   └───demo
    └───vendor
        ├───bootstrap
        │   ├───js
        │   └───scss
        │       ├───mixins
        │       ├───utilities
        │       └───vendor
        ├───chart.js
        ├───datatables
        ├───fontawesome-free
        │   ├───css
        │   ├───js
        │   ├───less
        │   ├───scss
        │   ├───sprites
        │   ├───svgs
        │   │   ├───brands
        │   │   ├───regular
        │   │   └───solid
        │   └───webfonts
        ├───jquery
        └───jquery-easing


```

Comment démarrer ce projet
==========================

* Lancer votre serveur Apache
* Placer vous dans le repertoire config pour configurer la connection a la base de donnée.
* Dans votre navigateur, placer vous dans la repertoire public pour démarer l'application : 
    localhost//surveyCreator/public/index.php

* Pour lancer l'administration et gérer les questionnaire :
    localhost//surveyCreator/public/index.php?admin.index
