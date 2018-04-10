<?php $this->set('thisPage', 'profile');?>

<div class="container">
    <h2>Mon profil musical</h2>
    <p>Veuillez remplir le champ avec un nom d'artiste pour choisir vos chansons préférées.</p>

    <div class="row">
        <div class="col-md-6">
            <!--Formulaire-->
            <?= $this->Form->create(null, ['url' =>'/preference/search']);?>
            <?=$this->Flash->render();?>
            <?= $this->Form->control('search', ['label' => 'Recherche par artiste : ', 'type' => 'text', 'required'=>true, 'class' => 'form-control'])?>
            <div class="text-right">
                <?= $this->Form->submit('Chercher des titres') ?>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
    <div class="row top-margin">
        <div class="col-md-6">
            <?php if (isset($recordings)):?>
            <table class="table">
                <tr>
                    <th>Titre</th>
                    <th>Sélection</th>
                </tr>
                <?php foreach($recordings as $recording): ?>
                    <tr>
                        <td width="100%"><?=$recording->getTitle()?></td>
                        <td>
                        <div class="hidden">
                            <?= $this->Form->create(null, ['url' => '/users/addUserPreferedTitle']); ?>
                            <?= $this->Flash->render(); ?>
                            <?= $this->Form->input('mb_recordingid', ['value' => $recording->getId()]);?>
                            <?= $this->Form->input('label', ['value' => $recording->getTitle()]);?>
                            <?= $this->Form->input('artists_id', ['value' => $recording->getArtistID()]);?>
                        </div>
                            <?= $this->Form->submit('Ajouter aux favoris', ['class' => 'btn-success'])?>
                            <?= $this->Form->end()?>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </table>
        </div>
        <?php endif ?>
    </div>
</div>
