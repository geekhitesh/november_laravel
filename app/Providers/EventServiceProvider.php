<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
		'App\Events\EmployeeCreated' => [
            'App\Listeners\EmployeeCreated\HRListener',
            'App\Listeners\EmployeeCreated\AccountListener',
            'App\Listeners\EmployeeCreated\ProjectListener',
            'App\Listeners\EmployeeCreated\MedicalListener',
			'App\Listeners\EmployeeCreated\EmailListener',
			'App\Listeners\EmployeeCreated\SMSListener',
			'App\Listeners\EmployeeCreated\SaveToDbListener',
			'App\Listeners\EmployeeCreated\SaveTo3rdPartyListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
