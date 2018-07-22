<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Estudante Entity
 *
 * @property int $id
 * @property string $name
 * @property string $apelido
 * @property \Cake\I18n\FrozenDate $data_nascimento
 * @property string $genero
 * @property string $nome_pai
 * @property string $nome_mae
 * @property string $telefone
 * @property string $email
 * @property string $tipo_documento
 * @property string $numero_doc
 * @property int $occupation_id
 * @property string $local_trabalho
 * @property string $foto
 * @property string $comentarios
 *
 * @property \App\Model\Entity\Occupation $occupation
 */
class Estudante extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'apelido' => true,
        'data_nascimento' => true,
        'genero' => true,
        'nome_pai' => true,
        'nome_mae' => true,
        'telefone' => true,
        'email' => true,
        'tipo_documento' => true,
        'numero_doc' => true,
        'occupation_id' => true,
        'local_trabalho' => true,
        'foto' => true,
        'comentarios' => true,
        'occupation' => true
    ];
}
