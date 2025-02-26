<?php

namespace App\Listeners\Books;


use App\Models\Operation;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Events\Books\UpdateBookEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UpdateBookListener
{
    /**
     * Handle the event.
     *
     * @param  UpdateBookEvent  $event
     * @return void
     */
    public function handle(UpdateBookEvent $event)
    {
        // $logEntry = new LogEntry();
        // $logEntry->type = 'update';
        // $logEntry->table = 'books';
        // $logEntry->user = Auth::id();
        // $logEntry->timestamps = now();
        // $logEntry->save();

        // Log::info("The book {$event->book->id} has been updated");

        $id = $event->book->id;

        Operation::create([
            'type' => 'update',
            'table' => 'books',
            'book_id'=> $id,
            'user_id' => Auth::id()
        ]);
    }
}