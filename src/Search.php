<?php

namespace Lanza\DigitalCep;

class Search
{
    private $url = 'https://viacep.com.br/ws/';

    /**
     * Pega o endereço a partir de um cep informado.
     *
     * @param  string $zipcode
     * @return array
     */
    public function getAddressFromZipcode(string $zipCode): array
    {
        // Tudo que não for número vai ser removido.
        $zipCode = preg_replace('/[^0-9]im/', '', $zipCode);

        $get = file_get_contents($this->url . $zipCode . "/json");

        return (array) json_decode($get);
    }
}
