<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Http\Requests\StoreSubscriberRequest;
use App\Http\Requests\UpdateSubscriberRequest;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

         $subscribers = Subscriber::paginate(config('pagination.count'));
        return view('admin.subscribers.index', get_defined_vars());
    }

    
    public function show(Subscriber $subscriber)
    {

         return view('admin.subscribers.show', get_defined_vars());
    }

        public function destroy(Subscriber $subscriber)
    {

        $subscriber->delete();
         return to_route('admin.subscribers.index')->with('success' ,__('keywords.deleted_successfully') );

    }
}
