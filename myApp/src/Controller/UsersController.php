<?php
/**
 * Created by IntelliJ IDEA.
 * User: Home
 * Date: 15-10-17
 * Time: 16:02
 */

namespace App\Controller;

use App\Model\Entity\Recording;
use Cake\Event\Event;
use Cake\Routing\Route\Route;
use Cake\Routing\Router;

class UsersController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['add', 'logout']);

    }
    public function login(){
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__("Nom d'utilisateur ou mot de passe incorrect"), [
                //'key' => 'auth'
            ]);

        }
    }
    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
    public function add(){
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {

            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__("L'utilisateur a été sauvegardé."));
                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__("Impossible d'ajouter l'utilisateur."));
        }
        $this->set('user', $user);
    }
    public function edit(){
        $user = $this->Users->get($this->Auth->user('id'));
        if ($this->request->is('put')){
            $user = $this->Users->patchEntity($user, $this->request->getData() );
            if ($this->Users->save($user)) {
                $this->Flash->success(__("L'utilisateur a été modifié."));
                $this->Auth->setUser($user);
                return $this->redirect(['action' => 'edit']);
            }
            $this->Flash->error(__("Impossible d'ajouter l'utilisateur."));
        }
        $this->set('user', $user);
    }
    public function addUserPreferedTitle(){
        $user = $this->Users->get($this->Auth->user('id'));
        if ($this->request->is('post')){
            var_dump($this->request->getData());


        }
    }
}

