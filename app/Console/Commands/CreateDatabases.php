<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateDatabases extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create-databases';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create databases';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        dd(config('database.connections'));
        config()->set('database.connections.sqlsrv.database', 'master');
        \DB::unprepared("
            IF NOT EXISTS
            (
                SELECT name FROM master.dbo.sysdatabases
                WHERE name = N'apinav'
            )
            CREATE DATABASE [apinav]
        ");
        \DB::unprepared("
            IF NOT EXISTS
            (
                SELECT name FROM master.dbo.sysdatabases
                WHERE name = N'apinav_test'
            )
            CREATE DATABASE [apinav_test]
        ");
    }
}
