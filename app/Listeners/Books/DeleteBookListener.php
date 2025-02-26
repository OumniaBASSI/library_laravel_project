<?php

namespace App\Listeners\Books;


use App\Models\Operation;
use Illuminate\Support\Facades\Auth;
use App\Events\Books\DeleteBookEvent;

class DeleteBookListener
{
    /**
     * Handle the event.
     *
     * @param  DeleteBookEvent  $event
     * @return void
     */
    public function handle(DeleteBookEvent $event)
    {
        $id = $event->book->id;

        Operation::create([
            'type' => 'delete',
            'table' => 'books',
            'book_id'=> $id,
            'user_id' => Auth::id()
        ]);
    }
}