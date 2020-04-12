# Maldoninho-Routes
* SIMPLE CLASS TO ROUTING THE APPLICATION USING URLS TO DRIVE THE USER INTERFACE.
* FREE TO USE.

## Reequire the ROUTES class

```php
require("Routes.php");
```

### DEFINE THE CONST ROUTES TO ACCESS THE DEFAULT ROUTES INTO THE CLASS
 
 ```php
define("ROUTES",
        [
            "language" => "",         // DEFINE DEFAULT LANGUAGE
            "controller" => "",       // DEFINE DEFAULT CONTROLLER
            "action" => "",           // DEFINE DEFAULT ACTION
            "admin.controller" => "", // DEFINE DEFAULT ADMIN CONTROLLER
            "admin.action" => ""      // DEFINE DEFAULT ADMIN ACTION
        ]
);
```

### CALL THE CLASS

```php
Routes::getRoutes(ROUTERS);
```

### IT'S RETURN A ARRAY LAKE

```php
[
	[language] =>     // DEFINED DEFAULT LANGUAGE OR LANGUAGE GIVED IN THE URL
	[admin] =>        // LIKE GIVED IN THE URL -  ITS RETURN A BOOLEAN VALUE TRUE OR FALSE
	[controller] =>   // DEFINED DEFAULT CONTROLLER OR CONTROLLER GIVED IN THE URL
	[action] =>       // DEFINED DEFAULT ACTION OR ACTION GIVED IN THE URL
	[id] =>           // TAKE ONLY NUMERIC VALUE GIVED IN THE URL AFTER THE ACTION 
	[params] => Array // RETURN THE PARAMS JUST IF GIVED IN THE URL
		(
			[0] => p1
			[1] => p2
			[2] => p3
			[3] => p4
		)
];
 ```
 
### Requirements

DB requires PHP 5.2 or greater.

## License

DB is released under the [MIT] https://opensource.org/licenses/mit-license.php license.