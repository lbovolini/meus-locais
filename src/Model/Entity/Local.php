<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Local extends Entity 
{
    protected $_accessible = [
        'nome',
        'cep',
        'logradouro',
        'complemento',
        'numero',
        'bairro',
        'uf',
        'cidade',
        'data',
    ];
}