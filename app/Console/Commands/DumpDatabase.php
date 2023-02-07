<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DumpDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:dump {--auto}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dump MySQL database';

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
        if ($this->option('auto')) {
            $db = glob("db_dump/*.sql");
            $upd = array();
            foreach ($db as $key => $dump) {
                if (strpos($dump, 'manual') === false) {
                    $upd[] = $dump;
                }
            }
            rsort($upd);
            foreach ($upd as $key => $dump) {
                if ($dump != 'db_dump/dump.sql' && $key > 6) {
                    unlink(base_path().'/'.$dump);
                }
            }
            $name = "db_".date('dmY').date('His');
            $exe = 'mysqldump --login-path="'.$loginPath.'" '.env('DB_DATABASE')." > db_dump/".$name.".sql";
            $shell = shell_exec($exe);
            $this->info('MySQL DB dump successful');
        } else {
            $name = "db_".date('dmY').date('His');
            $exe = 'mysqldump --login-path="'.$loginPath.'" '.env('DB_DATABASE')." > db_dump/manual_".$name.".sql";
            $shell = shell_exec($exe);
            $this->info('MySQL DB dump successful');
        }
        $environment = \App::environment();
        if ($environment == 'production') {
            \Log::channel('slack')->info('Бэкап БД был успешно создан');
        }
    }
}
