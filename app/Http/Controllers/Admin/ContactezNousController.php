<?php

namespace App\Http\Controllers\Admin;

use App\Models\Newsletter;
use App\Exports\EmailExport;
use App\Mail\AdminSendEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactezNousController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacteznous = Contact::all();
        return view('template/admin/contactezNous/contacteznous',compact('contacteznous'));
    }

}
