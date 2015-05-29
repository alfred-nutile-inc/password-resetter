# Password Resetter

# Install

Add to your Kernel.php file

~~~
protected $commands = [
        'AlfredNutileInc\PasswordResetter\SetUserPasswordCommand',
		'AlfredNutileInc\CoreApp\AngularStubber\AngularStubberCommand',
		'Approve\Console\Commands\CleanUploadsCommands'
    ];
~~~

And run...


Simple command to help us manage passwords at the command line.

~~~
php artisan core-app:password-reset --help
~~~

For more info
