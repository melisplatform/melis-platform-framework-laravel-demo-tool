# melis-platform-framework-laravel-demo-tool

This module provides a simple tool that display a list of data that request from a third party framework
which is Laravel.

### Prerequisites
This module requires melisplatform/melis-platform-frameworks in order to have this module running.
This will automatically be done when using composer.

### Installing
```
composer require melisplatform/melis-platform-framework-laravel-demo-tool
```

### Configuration
This module also configured to access the Laravel framework inside directory of /thirdparty
By just adding this data to the array inside config/module.coonfig.php file:
```
return [
  'third-party-framework' => [
     'index-path' => [
        '/mylaravel/public/index.php'
     ]
   ],
   ...
]
```
the application will determine the execution of the third party by providing the Path of the 
index.php file.
