<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:create {fname}{lname}{email}{password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command create admin ';

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
     * @return int
     */
    public function handle()
    {
        $newadmin = [
            'name' => $this->argument('fname'),
            'first_name' => $this->argument('fname'),
            'last_name' => $this->argument('lname'),
            'email' => $this->argument('email'),
            'is_admin'=>1,
            'password' => bcrypt($this->argument('password')),
           
        ];

        User::create($newadmin);
    }
}
