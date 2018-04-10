<?php
/**
 * Created by IntelliJ IDEA.
 * User: Home
 * Date: 22-01-18
 * Time: 14:43
 */

namespace App\Model\DAL;

use Guzzle\Http\Client;
use MusicBrainz\Filters\ArtistFilter;
use MusicBrainz\Filters\RecordingFilter;
use MusicBrainz\HttpAdapters\GuzzleHttpAdapter;
use MusicBrainz\MusicBrainz;
class MBServiceAgent
{
        public function connect(){
        $brainz = new MusicBrainz(new GuzzleHttpAdapter(new Client()), '', '');
        $brainz->setUserAgent('PIDV 2017', '0.1', 'myEmail@email.com');
    }

    public function getMBRecordings($artists){
        $brainz = new MusicBrainz(new GuzzleHttpAdapter(new Client()), '', '');
        $brainz->setUserAgent('PIDV 2017', '0.1', 'myEmail@email.com');
        try {
            $recordings = $brainz->search(new \MusicBrainz\Filters\RecordingFilter($artists));
                /* @var $artist \MusicBrainz\Artist */
            return $recordings;
        }catch (Exception $e) {
            print $e->getMessage();

        }


    }
    public function getMBArtist($mbrecordingid)
    {
        $brainz = new MusicBrainz(new GuzzleHttpAdapter(new Client()), '', '');
        $brainz->setUserAgent('PIDV 2017', '0.1', 'myEmail@email.com');
        try {
            $recordings = $brainz->search(new \MusicBrainz\Filters\ArtistFilter($artists));
            /* @var $artist \MusicBrainz\Artist */
            return $recordings;
        }catch (Exception $e) {
            print $e->getMessage();

        }
    }

}
