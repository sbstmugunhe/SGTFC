<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Proposta Entity
 *
 * @property int $id
 * @property string $name
 * @property int $areaspesquisa_id
 * @property string $descricao
 * @property bool $estado
 * @property bool $situacao
 * @property string $parecer
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $updated
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Areaspesquisa $areaspesquisa
 */
class Proposta extends Entity
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
        'areaspesquisa_id' => true,
        'descricao' => true,
        'estado' => true,
        'situacao' => true,
        'parecer' => true,
        'created' => true,
        'updated' => true,
        'modified' => true,
        'areaspesquisa' => true
    ];
}
