<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactMessageRequest;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(StoreContactMessageRequest $request, ContactMessage $contactMessage)
    {

        $validated = $request->validated();

        $contactMessage->fill($validated);
        $contactMessage->save();

        return view('contact.index');
    }
}
