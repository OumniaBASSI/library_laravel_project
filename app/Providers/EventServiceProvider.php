<?php

namespace App\Providers;

use App\Events\Books\CreateBookEvent;
use App\Events\Books\DeleteBookEvent;
use App\Events\Books\UpdateBookEvent;
use Illuminate\Support\Facades\Event;
use App\Listeners\Books\CreateBookListener;
use App\Listeners\Books\DeleteBookListener;
use App\Listeners\Books\UpdateBookListener;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        CreateBookEvent::class => [CreateBookListener::class],
        UpdateBookEvent::class => [UpdateBookListener::class],
        DeleteBookEvent::class => [DeleteBookListener::class],
    ];

    public function boot()
    {
        //
    }

    public function shouldDiscoverEvents()
    {
        return false;
    }
}