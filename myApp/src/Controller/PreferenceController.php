<?php
/**
 * Created by IntelliJ IDEA.
 * User: Home
 * Date: 17-12-17
 * Time: 16:36
 */

namespace App\Controller;
use App\Model\DAL\MBServiceAgent;
use App\Model\Entity\Recording;


class PreferenceController extends AppController
{
    public function index(){
    }

    public function search(){
        $MBServiceAgent = new MBServiceAgent();
        if ($this->request->is('post') && !empty($this->request->getData('search'))) {
            $artists = array('artist' =>  $this->request->getData('search'));
        }
        if (isset($artists))
        {
            $this->set('recordings', $MBServiceAgent->getMBRecordings($artists));
        }
        $this->render('/preference/index');
    }
}
