# Composer/Packagist e PHPunit
### Aulas do curso de desenvolvimento avançado em PHP da Digital Innovation One

[Digital Innovation One](https://web.digitalinnovation.one/)

Aula sobre como utilizar o composer para inicialização de projeto e cadastro de pacote no [Packagist](https://packagist.org/)

E criação de testes unitários como o [PHPunit](https://phpunit.de/)

Comando de inicialização: `composer init`

**Exemplo de uso do pacote criado:**
```php
<?php

require_once 'vendor/autoload.php';

use Lanza\DigitalCep\Search;

$searchCep = new Search();

$result = $searchCep->getAddressFromZipcode('13501613');

print_r($result);
```
