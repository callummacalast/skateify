<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class AdminContactMessageController extends Controller
{
    public function index()
    {
        $messages = ContactMessage::paginate(4);
        return view('admin.contact.index', compact('messages'));
    }
}
