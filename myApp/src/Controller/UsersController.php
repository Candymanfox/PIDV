<?php
/**
 * Created by IntelliJ IDEA.
 * User: Home
 * Date: 15-10-17
 * Time: 16:02
 */

namespace App\Controller;


use Cake\Routing\Route\Route;
use Cake\Routing\Router;

class UsersController extends AppController
{

    public function login(){
        if ($this->request->is('post')) {
            $user = $this->Auth->identify(); // si on a une base de données
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Flash->error(__("Nom d'utilisateur ou mot de passe incorrect"), [
                    'key' => 'auth'
                ]);
            }
        }
    }
    public function signup(){
        if ($this->request->is('post')){
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('L\'user a été sauvegardé'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('L\'user n\'a pas été sauvegardé. Merci de réessayer.'));
            }
        }
    }
}
