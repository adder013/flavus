<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
use Carbon\Carbon;

class CreateIncrementalDatabaseBackup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creating Incremental Backup';

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
        $loginPath = env('DB_LOGIN_PATH');
        $date = Carbon::now();
        $start = $date->copy()->startOfDay();
        shell_exec('mysqldump --login-path="'.$loginPath.'" '.env('DB_DATABASE').' --single-transaction --flush-logs --master-data=2 > db_dump/dump.sql');
        DB::statement("RESET MASTER");
        $this->info('DB backup created');
    }
}
