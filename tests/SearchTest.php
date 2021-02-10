<?php

use PHPUnit\Framework\TestCase;
use Lanza\DigitalCep\Search;

class SearchTest extends TestCase
{
    /**
     * @dataProvider dataTest
     */
    public function testGetAddressFromZipcodeDefaultUsage(string $input, array $expected): void
    {
        $result = new Search;
        $result = $result->getAddressFromZipcode($input);

        $this->assertEquals($expected, $result);
    }

    /**
     * Coleção para teste em casos diferentes.
     *
     * @return array
     */
    public function dataTest(): array
    {
        return [
            "Endereço Praça da Sé" => [
                "01001000",
                [
                    "cep" => "01001-000",
                    "logradouro" => "Praça da Sé",
                    "complemento" => "lado ímpar",
                    "bairro" => "Sé",
                    "localidade" => "São Paulo",
                    "uf" => "SP",
                    "ibge" => "3550308",
                    "gia" => "1004",
                    "ddd" => "11",
                    "siafi" => "7107",
                ]
                ],
            "Endereço Qualquer" => [
                "13501613",
                [
                    "cep" => "13501-613",
                    "logradouro" => "Avenida 61",
                    "complemento" => "",
                    "bairro" => "Jardim Itapuã",
                    "localidade" => "Rio Claro",
                    "uf" => "SP",
                    "ibge" => "3543907",
                    "gia" => "5873",
                    "ddd" => "19",
                    "siafi" => "6979",
                ]
            ]
        ];
    }
}
