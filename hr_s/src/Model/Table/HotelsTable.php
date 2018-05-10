<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Hotels Model
 *
 * @property \App\Model\Table\RoomsTable|\Cake\ORM\Association\BelongsTo $Rooms
 * @property \App\Model\Table\CustomersTable|\Cake\ORM\Association\BelongsTo $Customers
 * @property \App\Model\Table\ManagersTable|\Cake\ORM\Association\BelongsTo $Managers
 * @property \App\Model\Table\AdminTable|\Cake\ORM\Association\HasMany $Admin
 * @property \App\Model\Table\CustomersTable|\Cake\ORM\Association\HasMany $Customers
 * @property \App\Model\Table\ManagersTable|\Cake\ORM\Association\HasMany $Managers
 * @property \App\Model\Table\RoomsTable|\Cake\ORM\Association\HasMany $Rooms
 *
 * @method \App\Model\Entity\Hotel get($primaryKey, $options = [])
 * @method \App\Model\Entity\Hotel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Hotel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Hotel|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Hotel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Hotel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Hotel findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class HotelsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('hotels');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Rooms', [
            'foreignKey' => 'room_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Managers', [
            'foreignKey' => 'manager_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Admin', [
            'foreignKey' => 'hotel_id'
        ]);
        $this->hasMany('Customers', [
            'foreignKey' => 'hotel_id'
        ]);
        $this->hasMany('Managers', [
            'foreignKey' => 'hotel_id'
        ]);
        $this->hasMany('Rooms', [
            'foreignKey' => 'hotel_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 225)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('address')
            ->maxLength('address', 225)
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->scalar('e-mail')
            ->maxLength('e-mail', 225)
            ->requirePresence('e-mail', 'create')
            ->notEmpty('e-mail');

        $validator
            ->integer('contact_num')
            ->requirePresence('contact_num', 'create')
            ->notEmpty('contact_num');

        $validator
            ->scalar('description')
            ->maxLength('description', 225)
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->scalar('images')
            ->maxLength('images', 225)
            ->requirePresence('images', 'create')
            ->notEmpty('images');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['room_id'], 'Rooms'));
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        $rules->add($rules->existsIn(['manager_id'], 'Managers'));

        return $rules;
    }
}
