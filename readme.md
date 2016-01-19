# Laravel scaffolder extension example 
[![Software License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](LICENSE)

## Installation

1. Add the package to your composer.json
    ```json
    ...
    "mpaleo/scaffolder-extension": "dev-master",
    ...
    ```
    
2. Update
    ```bash
    composer update
    ```
    
3. Add the service provider to the providers array in `{laravel-root}\config\app.php`
    ```php
    ...
    ScaffolderExtension\ScaffolderExtensionServiceProvider::class,
    ...
    ```
    
### License
The scaffolder extension package is licensed under the [MIT license](http://opensource.org/licenses/MIT)