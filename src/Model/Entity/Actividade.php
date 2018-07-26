<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Actividade Entity
 *
 * @property int $id
 * @property int $trabalho_id
 * @property string $name
 * @property \Cake\I18n\FrozenDate $inicio
 * @property \Cake\I18n\FrozenDate $fim
 * @property int $duracao
 * @property string $comentarios
 *
 * @property \App\Model\Entity\Trabalho $trabalho
 */
class Actividade extends Entity
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
        'trabalho_id' => true,
        'name' => true,
        'inicio' => true,
        'fim' => true,
        'duracao' => true,
        'comentarios' => true,
        'trabalho' => true
    ];
}
