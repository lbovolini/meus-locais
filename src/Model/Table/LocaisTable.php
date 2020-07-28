<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class LocaisTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('Locais');
        $this->setPrimaryKey('id');
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->nonNegativeInteger('id')
            ->requirePresence('nome')
            ->notEmptyString('nome', 'Por favor preencha este campo')
            ->requirePresence('cep')
            ->notEmptyString('cep', 'Favor informar o CEP para a consulta')
            ->requirePresence('logradouro')
            ->notEmptyString('logradouro', 'Por favor preencha este campo')
            ->requirePresence('complemento')
            ->notEmptyString('complemento', 'Por favor preencha este campo')
            ->requirePresence('numero')
            ->notEmptyString('numero', 'Por favor preencha este campo')
            ->requirePresence('bairro')
            ->notEmptyString('bairro', 'Por favor preencha este campo')
            ->requirePresence('uf')
            ->notEmptyString('uf', 'Por favor preencha este campo')
            ->requirePresence('cidade')
            ->notEmptyString('cidade', 'Por favor preencha este campo')
            ->requirePresence('data')
            ->notEmptyDate('data', 'Por favor preencha este campo');

        return $validator;
    }
}