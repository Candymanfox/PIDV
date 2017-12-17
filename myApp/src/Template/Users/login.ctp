<?php $this->set('thisPage', 'login');?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <?= $this->Flash->render() ?>
            <?= $this->Form->create('login', ['type' => 'post']) ?>
            <div class="top-margin">
                <?= $this->Form->control('username', ['class' => 'form-control']) ?>
            </div>
            <div class="top-margin">
                <?= $this->Form->control('password', ['class' => 'form-control']) ?>
            </div>
            <br>
            <div align = "center">
                <?= $this->Form->button('Se connecter', ['class' => 'btn-success']) ?>
            </div>
            <?= $this->Form->end() ?>
            <br><br>
            <div align = "center">
                <?= $this->Html->link(
                    'Créer un compte',
                    '/users/add'
                ); ?>
            </div>
        </div>
    </div>
</div>

