<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UsersPreferredTitles Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\RecordingsTable|\Cake\ORM\Association\BelongsTo $Recordings
 *
 * @method \App\Model\Entity\UsersPreferredTitle get($primaryKey, $options = [])
 * @method \App\Model\Entity\UsersPreferredTitle newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UsersPreferredTitle[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UsersPreferredTitle|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UsersPreferredTitle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UsersPreferredTitle[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UsersPreferredTitle findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersPreferredTitlesTable extends Table
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

        $this->setTable('users_preferred_titles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'users_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Recordings', [
            'foreignKey' => 'recording_id',
            'joinType' => 'INNER'
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
        $rules->add($rules->existsIn(['users_id'], 'Users'));
        $rules->add($rules->existsIn(['recording_id'], 'Recordings'));

        return $rules;
    }
}
