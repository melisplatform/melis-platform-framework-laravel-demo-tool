# melis-platform-framework-laravel-demo-tool

This module provides a simple tool displaying a list of data from the third party framework Laravel.

### Prerequisites
This module requires ``melisplatform/melis-platform-frameworks`.
It will automatically be done when using composer.

### Installing
```
composer require melisplatform/melis-platform-framework-laravel-demo-tool
```

### Configuration
This module is also configured to access the Laravel framework inside the directory of ``/thirdparty`` by just adding the data to the array inside config/module.config.php file:
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
``index.php`` file.

## Authors

* **Melis Technology** - [www.melistechnology.com](https://www.melistechnology.com/)

See also the list of [contributors](https://github.com/melisplatform/melis-core/contributors) who participated in this project.


## License

This project is licensed under the OSL-3.0 License - see the [LICENSE.md](LICENSE.md) file for details