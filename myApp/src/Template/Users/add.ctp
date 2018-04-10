<?php $this->set('thisPage', 'login'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <?= $this->Form->create($user) ?>
            <div class="top-margin">
                <?= $this->Flash->render() ?>
                <?= $this->Form->control('lastname', ['class' => 'form-control']) ?>
            </div>
            <div class="top-margin">
                <?= $this->Form->control('firstname', ['class' => 'form-control']) ?>
            </div>
            <div class="top-margin">
                <?= $this->Form->control('username', ['class' => 'form-control']) ?>
            </div>
            <div class="top-margin">
                <?= $this->Form->control('password', ['class' => 'form-control']) ?>
            </div>
            <div class="top-margin">
                <div align = "center">
                    <?= $this->Form->button('S\'enregistrer', ['class' => 'btn-success']) ?>
                </div>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
</div>
