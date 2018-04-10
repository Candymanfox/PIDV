<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RecordingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RecordingsTable Test Case
 */
class RecordingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RecordingsTable
     */
    public $Recordings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.recordings',
        'app.artists',
        'app.users_preferred_titles',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Recordings') ? [] : ['className' => RecordingsTable::class];
        $this->Recordings = TableRegistry::get('Recordings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Recordings);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
