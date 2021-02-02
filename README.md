# Composer e PHPunit
### Aulas do curso de desenvolvimento avançado em PHP da Digital Innovation One

[Digital Innovation One](https://web.digitalinnovation.one/)

**Exemplo de uso:**
```php
<?php

require_once 'vendor/autoload.php';

use Lanza\DigitalCep\Search;

$searchCep = new Search();

$result = $searchCep->getAddressFromZipcode('13501613');

print_r($result);
```
