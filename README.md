# ISBN Bundle

This bundle can be used to generate a valid ISBN and Validate is a given ISBN is valid. 

## How to use

1. Create an empty symfony project or Open an existing symfony project
2. Add the following lines to the composer.json
    ```
     [...]
        "require" : {
            [...]
            "testdemo/isbnbundle" : "dev-master"
        },
        "repositories" : [{
            "type" : "vcs",
            "url" : "https://github.com/diyajohn/ISBNBundle.git"
        }],
     [...]
     
    ```
3. Update composer to install the bundle.
    ```
    php composer.phar update testdemo/isbnbundle
    
    or
    
    composer update testdemo/isbnbundle
    
    ```
4. Update app/AppKernel.php to register the bundle
    ```
    new TestDemo\ISBNBundle\ISBNBundle(),
    
    ```

## Example usage

```
use TestDemo\ISBNBundle\Services\ISBNService;

$ISBNService = new ISBNService();

$isValid = $ISBNService->isValidISBN('0-1234-5678-9');

$isbn = $ISBNService->generateISBN();

```

## Testing 

The bundle uses PHPunit.

1. Install PHPUnit (via composer install; composer --dev update )
2. Run

```
php bin/phpunit src/TestDemo/ISBNBundle/Tests/Services/ISBNServiceTest.php

```