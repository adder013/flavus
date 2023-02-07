<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RestoreIncrementalDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:restore {time}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Restoring Database';

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
        $time = $this->argument('time');
        $date = date('Y-m-d');
        $loginPath = env('DB_LOGIN_PATH');
        $dir = scandir('/var/log/mysql');
        $bins = '';
        foreach ($dir as $bin) {
            if (strpos($bin, 'mysql-bin') !== false && $bin != 'mysql-bin.index') {
                $bins .= '/var/log/mysql/'.$bin.' ';
            }
        }
        $this->info('Reverting to initial state');
        shell_exec("mysql < db_dump/dump.sql uralenergotel_ru");
        $this->info('DB is in initial state now');
        shell_exec('mysqlbinlog --stop-datetime="'.$date.' '.$time.':00" '.$bins.' | mysql --login-path='.$loginPath.' uralenergotel_ru');
        $this->info('DB restored successful');
    }
}
