<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Recording Entity
 *
 * @property int $id
 * @property string $mb_recordingid
 * @property string $label
 * @property int $artists_id
 *
 * @property \App\Model\Entity\Artist $artist
 * @property \App\Model\Entity\UsersPreferredTitle[] $users_preferred_titles
 */
class Recording extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'mb_recordingid' => true,
        'label' => true,
        'artists_id' => true,
        'artist' => true,
        'users_preferred_titles' => true
    ];
}
