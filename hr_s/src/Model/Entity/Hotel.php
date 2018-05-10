<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Hotel Entity
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $e-mail
 * @property int $contact_num
 * @property string $description
 * @property string $images
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $room_id
 * @property int $customer_id
 * @property int $manager_id
 *
 * @property \App\Model\Entity\Room[] $rooms
 * @property \App\Model\Entity\Customer[] $customers
 * @property \App\Model\Entity\Manager[] $managers
 * @property \App\Model\Entity\Admin[] $admin
 */
class Hotel extends Entity
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
        'address' => true,
        'e-mail' => true,
        'contact_num' => true,
        'description' => true,
        'images' => true,
        'created' => true,
        'modified' => true,
        'room_id' => true,
        'customer_id' => true,
        'manager_id' => true,
        'rooms' => true,
        'customers' => true,
        'managers' => true,
        'admin' => true
    ];
}
