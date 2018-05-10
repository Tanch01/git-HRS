<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Manager Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $lastname
 * @property string $firstname
 * @property string $middlename
 * @property string $e-mail
 * @property int $contact_num
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $customer_id
 * @property int $hotel_id
 *
 * @property \App\Model\Entity\Customer[] $customers
 * @property \App\Model\Entity\Hotel[] $hotels
 * @property \App\Model\Entity\Admin[] $admin
 */
class Manager extends Entity
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
        'username' => true,
        'password' => true,
        'lastname' => true,
        'firstname' => true,
        'middlename' => true,
        'e-mail' => true,
        'contact_num' => true,
        'created' => true,
        'modified' => true,
        'customer_id' => true,
        'hotel_id' => true,
        'customers' => true,
        'hotels' => true,
        'admin' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
