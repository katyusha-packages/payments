<?php

namespace Katyusha\Package;

use Orchestra\Testbench\TestCase;

use function Orchestra\Testbench\artisan;

use Illuminate\Foundation\Testing\RefreshDatabase;

class FeatureTest extends TestCase {
    use RefreshDatabase;

    protected $enablesPackageDiscoveries = true;

    /**
     * Define environment setup.
     */
    protected function defineEnvironment($app): void {
        // Setup default database to use sqlite :memory:
        $app['config']->set('database.default', 'testbench');
        $app['config']->set('database.connections.testbench', [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ]);
    }

    /**
     * Define database migrations.
     */
    protected function defineDatabaseMigrations(): void {
        artisan($this, 'migrate', ['--database' => 'testbench']);

        $this->beforeApplicationDestroyed(
            fn () => artisan($this, 'migrate:rollback', ['--database' => 'testbench'])
        );
    }

    /**
     * A basic test example.
     */
    public function test_basic_test(): void {
        $this->assertTrue(true);
    }
}
