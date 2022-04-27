# RCD Tests

This website uses Codeception to run acceptance tests

## Installation

- Composter is required to install Codeception

```bash
composer require "codeception/codeception" --dev
```

## Setup

```bash
php vendor/bin/codecept bootstrap
#This creates configuration file codeception.yml and tests directory and default test suites.

php vendor/bin/codecept generate:cest acceptance First
#Generate your first acceptance test. Acceptance tests emulate behavior of a real user visiting your site.
```
- Please make sure your local development server is running.  Put application URL into:  tests/acceptance.suite.yml 

```php
actor: AcceptanceTester
modules:
    enabled:
        - PhpBrowser:
            url: https://radfordchilddevelopment.com
        - \Helper\Acceptance       
```

## Run Tests

```bash
php vendor/bin/codecept run --steps
```

## Resources
- https://codeception.com/quickstart
- https://getcomposer.org/
