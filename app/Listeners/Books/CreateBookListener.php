<?php

namespace App\Listeners\Books;


use App\Models\Operation;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Events\Books\CreateBookEvent;

class CreateBookListener
{
    /**
     * Handle the event.
     *
     * @param  CreateBookEvent  $event
     * @return void
     */
    public function handle(CreateBookEvent $event)
    {
        // $logEntry = new LogEntry();
        // $logEntry->type = 'create';
        // $logEntry->table = 'books';
        // $logEntry->user = Auth::id(); // Assuming the user is authenticated
        // $logEntry->timestamps = now(); // Set the current timestamp

        // $logEntry->save();

        $id = $event->book->id;
        Operation::create([
            'type' => 'create',
            'table' => 'book',
            'book_id'=> $id,
            'user_id' => Auth::id()
        ]);
    }
}