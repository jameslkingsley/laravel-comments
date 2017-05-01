<?php

namespace Kingsley\Comments\Test;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Orchestra\Testbench\TestCase as Orchestra;
use Orchestra\Testbench\Traits as OrchestraTrait;
use Illuminate\Database\Schema\Blueprint;
use DB;

abstract class TestCase extends Orchestra
{
    use OrchestraTrait\WithLaravelMigrations;

    public function setUp()
    {
        parent::setUp();

        $this->loadLaravelMigrations(['--database' => 'sqlite']);
        $this->setUpDatabase($this->app);
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'sqlite');

        $app['config']->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => ''
        ]);
    }

    protected function setUpDatabase($app)
    {
        //

        include_once __DIR__.'/../database/migrations/create_mentions_table.php.stub';

        (new \CreateMentionsTable())->up();
    }
}
