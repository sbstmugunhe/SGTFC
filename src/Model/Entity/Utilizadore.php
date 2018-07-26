<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Utilizadore Entity
 *
 * @property int $id
 * @property string $primeiro_nome
 * @property string $ultimo_nome
 * @property string $username
 * @property string $email
 * @property int $grupo_id
 * @property string $passkey
 * @property \Cake\I18n\FrozenTime $timeout
 * @property string $password
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Grupo $grupo
 * @property \App\Model\Entity\Curso[] $cursos
 */
class Utilizadore extends Entity
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
        'primeiro_nome' => true,
        'ultimo_nome' => true,
        'username' => true,
        'email' => true,
        'grupo_id' => true,
        'passkey' => true,
        'timeout' => true,
        'password' => true,
        'created' => true,
        'modified' => true,
        'grupo' => true,
        'cursos' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($value)
    {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($value);
    }
}
