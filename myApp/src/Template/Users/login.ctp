<br><br><br><br><br><br><br><br><br>
<?php $this->set('thisPage', 'login')?>
<div class="container">
<div class="form-group" align="center">
<?= $this->Form->create('login', ['type' => 'post']) ?>
<?= $this->Form->control('username', ['class' => 'form-control', 'style' => 'width:400px']) ?>
<?= $this->Form->control('password', ['class' => 'form-control', 'style' => 'width:400px']) ?>
<br>
<div align = "center">
<?= $this->Form->button('Se connecter', ['class' => 'btn-success']) ?>
</div>
<?= $this->Form->end() ?>
<br><br>
<?= $this->Html->link(
    'Créer un compte',
    '/signup'
);

