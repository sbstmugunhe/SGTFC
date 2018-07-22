<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Areaspesquisa Entity
 *
 * @property int $id
 * @property string $name
 * @property string $descricao
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\Tema[] $temas
 */
class Areaspesquisa extends Entity
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
        'descricao' => true,
        'created' => true,
        'temas' => true
    ];
}