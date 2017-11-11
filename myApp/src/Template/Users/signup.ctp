<br><br><br><br><br><br><br><br><br>
<?php $this->set('thisPage', 'login'); ?>
<div class="container">
<div class="form-group" align="center">
<?= $this->Form->create('signup', ['type' => 'post']) ?>
<?= $this->Form->control('nom', ['class' => 'form-control']) ?>
<?= $this->Form->control('prenom', ['class' => 'form-control']) ?>
<?= $this->Form->control('username', ['class' => 'form-control', 'style' => 'width:400px']) ?>
<?= $this->Form->control('password', ['class' => 'form-control', 'style' => 'width:400px']) ?>
<br>
<div align = "center">
<?= $this->Form->button('S\'enregistrer', ['class' => 'btn-success']) ?>
</div>
<?= $this->Form->end() ?>
</div>
</div>
