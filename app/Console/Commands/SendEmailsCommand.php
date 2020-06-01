<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendEmailsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:send {user} {--queue}'; // Argument and option boolean
//    protected $signature = 'email:send {user?} {--Q|queue}'; // Optional argument and option boolean with shortcut
//    protected $signature = 'email:send {user=foo} {--queue=}'; // Default argument and option with value
//    protected $signature = 'email:send {user=foo} {--queue=*}'; // Default argument and option expecting array input
//    protected $signature = 'email:send {user=foo} {--queue=default}'; // Optional argument and option with default value
    
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
//    protected $signature = 'email:send
//                        {user : The ID of the user}
//                        {--queue= : Whether the job should be queued}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send drip emails to a user';

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
//        $userId = $this->argument('user');
//        $arguments = $this->arguments(); // Retrieve all of the arguments as an array.
//        $queue = $this->option('queue');
//        $options = $this->options(); // Retrieve all of the options as an array.
        
//        $name = $this->ask("What is your name?"); // Provide user input during the execution.
//        $password = $this->secret("What is your password?"); // Provide hidden user input
//        $confirm = $this->confirm("Do you wish to continue?"); // Provide confirmation
//        $name = $this->anticipate("What is your name?", ['Taylor', 'John']); // Auto-Completion with choise
//        $name = $this->anticipate("What is your name?", function(){
//            // Fetch auto-completion options
//        });
//        
//        $name = $this->choice('What is your name?', ['Taylor', 'Dayle'], $defaultIndex);
//        $name = $this->choice(
//                'What is your name?',
//                ['Taylor', 'Dayle'],
//                $defaultIndex,
//                $maxAttempts = null,
//                $allowMultipleSelections = false
//        );
        
//        Writing Output - line, info, comment, question and error
//        $this->info('Display this on the screen.');
//        
//        Table template
//        $headers = ['Name', 'Email'];
//        $users = App\User::all(['name', 'email'])->toArray();
//        $this->table($headers, $users);
//        
//        Progress Bar
//        $users = App\User::all();
//        $bar = $this->output->createProgressBar(count($users));
//        $bar->start();
//        foreach ($users as $user) {
//            $this->performTask($user);
//            $bar->advance();
//        }
//        $bar->finish();

//        $drip->send(User::find($this->argument('user')));
        
        $this->line('Completed Send Emails.');
    }
}
