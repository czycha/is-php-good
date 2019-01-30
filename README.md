is-php-good
===

Run this function to check if PHP is good.

## Installation

```
composer require czycha/is-php-good
```

## Usage

```php
<?php
  require_once __DIR__ . '/vendor/autoload.php';

  if (!IsPHP\Good::check()) {
    // Show mercy
    exit;
  }
```

## License

MIT © James Anthony Bruno