<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $lastname
 * @property string $firstname
 * @property string $middlename
 * @property string $address
 * @property string $gender
 * @property string $e-mail
 * @property int $contact_num
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $hotel_id
 * @property int $room_id
 * @property int $manager_id
 *
 * @property \App\Model\Entity\Hotel[] $hotels
 * @property \App\Model\Entity\Room[] $rooms
 * @property \App\Model\Entity\Manager[] $managers
 * @property \App\Model\Entity\Admin[] $admin
 */
class Customer extends Entity
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
        'address' => true,
        'gender' => true,
        'e-mail' => true,
        'contact_num' => true,
        'created' => true,
        'modified' => true,
        'hotel_id' => true,
        'room_id' => true,
        'manager_id' => true,
        'hotels' => true,
        'rooms' => true,
        'managers' => true,
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
