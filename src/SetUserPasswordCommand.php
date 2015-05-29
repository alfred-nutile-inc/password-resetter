<?php namespace AlfredNutileInc\PasswordResetter;


use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\InputArgument;

class SetUserPasswordCommand extends Command {

	protected $description = 'Reset the user password';

	protected $signature    = 'core-app:password-reset {user-email} {new-password}';

	public function __construct()
	{
		parent::__construct();
	}

	public function fire()
	{
		$email = $this->argument('user-email');
		$password = $this->argument('new-password');

        try
        {
            $user_model = Config::get('auth.model');
            $user = $user_model::where('email', $email)->firstOrFail();
            $user->password = Hash::make($password);
            $user->save();
            $this->info("User password reset");
        }
        catch(\Exception $e)
        {
            $this->error("Error setting user password " . $e->getMessage());
        }
	}

}
