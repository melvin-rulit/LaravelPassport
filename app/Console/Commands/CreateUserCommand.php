<?php
// The command will create a user and a token based on some options that have to get passed to the command.

// php artisan user:create --name=Laravel --email=laravel@example.com --password=secret --token=LaravelToken

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateUserCommand extends Command
{
    protected $signature = 'user:create {--name=} {--email=} {--password=} {--token=}';

    protected $description = 'Create user and token';

    public function handle()
    {
        $user = User::create([
            'name' => $this->option('name'),
            'email' => $this->option('email'),
            'password' => bcrypt($this->option('password'))
        ]);

        $token = $user->createToken($this->option('token'))->accessToken;

        $this->line($token);
    }
}