<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Managers Model
 *
 * @property \App\Model\Table\CustomersTable|\Cake\ORM\Association\BelongsTo $Customers
 * @property \App\Model\Table\HotelsTable|\Cake\ORM\Association\BelongsTo $Hotels
 * @property \App\Model\Table\AdminTable|\Cake\ORM\Association\HasMany $Admin
 * @property \App\Model\Table\CustomersTable|\Cake\ORM\Association\HasMany $Customers
 * @property \App\Model\Table\HotelsTable|\Cake\ORM\Association\HasMany $Hotels
 *
 * @method \App\Model\Entity\Manager get($primaryKey, $options = [])
 * @method \App\Model\Entity\Manager newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Manager[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Manager|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Manager patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Manager[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Manager findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ManagersTable extends Table
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

        $this->setTable('managers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Hotels', [
            'foreignKey' => 'hotel_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Admin', [
            'foreignKey' => 'manager_id'
        ]);
        $this->hasMany('Customers', [
            'foreignKey' => 'manager_id'
        ]);
        $this->hasMany('Hotels', [
            'foreignKey' => 'manager_id'
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
            ->scalar('username')
            ->maxLength('username', 225)
            ->requirePresence('username', 'create')
            ->notEmpty('username')
            ->add('username', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('password')
            ->maxLength('password', 225)
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->scalar('lastname')
            ->maxLength('lastname', 225)
            ->requirePresence('lastname', 'create')
            ->notEmpty('lastname');

        $validator
            ->scalar('firstname')
            ->maxLength('firstname', 225)
            ->requirePresence('firstname', 'create')
            ->notEmpty('firstname');

        $validator
            ->scalar('middlename')
            ->maxLength('middlename', 225)
            ->requirePresence('middlename', 'create')
            ->notEmpty('middlename');

        $validator
            ->scalar('e-mail')
            ->maxLength('e-mail', 225)
            ->requirePresence('e-mail', 'create')
            ->notEmpty('e-mail');

        $validator
            ->integer('contact_num')
            ->requirePresence('contact_num', 'create')
            ->notEmpty('contact_num');

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        $rules->add($rules->existsIn(['hotel_id'], 'Hotels'));

        return $rules;
    }
}
