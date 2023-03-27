<?php

namespace Facade;

/**
 * Class ModuloControleClientes
 * @package Facade
 */
class ModuloControleClientes
{
    /**
     * @param string $cpfCliente
     * @return array
     */
    public function buscaCliente(string $cpfCliente): array
    {
        // Simula a busca de um cliente pelo seu CPF.
        return [
            'nome' => 'Pedro Lopes',
            'telefone' => '99999999999',
            'email' => 'pedro.lopes@gmail.com'
        ];
    }
}
