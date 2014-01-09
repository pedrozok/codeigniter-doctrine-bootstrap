CDB - Introduction
============

CodeIgniter + Doctrine + Bootstrap kick starts the web development process by including both Doctine ORM and Twitter Bootstrap into Codeigniter. 

Included:
---------

- Codeigniter 2.1.4

- Doctrine 2.4

- Twitter Bootstrap 3.0.3

- jQuery 2.0.3

- Added .htaccess and enabled mod_rewrite

- Doctrine library autoloaded in Codeigniter config.php

Instalation & Usage
===================

For instalation, deploy the entire project folder into your server root.


Change the base_url in /application/config/config.php to match your server settings.
**Example: for 'http://localhost/site/' change the base_url to 'localhost/site'.**


This project is bundled with apache2 mod_rewrite, check if your server has this module enabled or disable this feature.


The only controller included in this bundle is the **welcome** controller that loads the **bootstrap** view.
Deleting those files, the rest of the bundle is vanilla clean, only the necessary Libs have been included and nothing more has been added.


The folder **application/models/Entity** will store all the Entities/Classes created using Doctrine Annotation, to reference these entities from your controllers use the namespace **'Entity\'** and the name of the Class next to the namespace.
**Example: $user = new Entity\User;**

If you want to change the Entity default folder and/or the Namespace change de settings in the file application/libraries/Doctrine.php.


For more info of usage please refer to the frameworks documentation:


- http://ellislab.com/codeigniter/user-guide
- http://docs.doctrine-project.org/en/latest/tutorials/getting-started.html
- http://getbootstrap.com/getting-started


License
=======

Under the MIT licence.

Author
======

**@pedro_zok**

- zok@quobits.com