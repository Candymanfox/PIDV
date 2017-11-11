<?php

/**
 * Created by IntelliJ IDEA.
 * User: Home
 * Date: 15-10-17
 * Time: 14:21
 */

App::uses('AppModel', 'Model');

class User extends AppModel
{
    public $name = 'User';
    public $validate = array(
        'firstname' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'Veuillez entrer un prénom.'
            )
        ),
        'lastname' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'Veuillez entrer un nom.'
            )
        ),
        'username' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'Veuillez entrer un nom d\'utilisateur'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'Veuillez entrer un mot de passe'
            )
        ),
    );
}
