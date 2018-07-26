<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Trabalho Entity
 *
 * @property int $id
 * @property int $proposta_id
 * @property string $estudocaso
 * @property string $geral
 * @property string $especificos
 * @property string $dataentrega
 * @property string $estrutura
 * @property string $obras
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Proposta $proposta
 * @property \App\Model\Entity\Actividade[] $actividades
 */
class Trabalho extends Entity
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
        'proposta_id' => true,
        'estudocaso' => true,
        'geral' => true,
        'especificos' => true,
        'dataentrega' => true,
        'estrutura' => true,
        'obras' => true,
        'created' => true,
        'modified' => true,
        'proposta' => true,
        'actividades' => true
    ];
}
