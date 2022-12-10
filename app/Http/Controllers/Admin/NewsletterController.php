<?php

namespace App\Http\Controllers\Admin;

use App\Models\Newsletter;
use App\Exports\EmailExport;
use App\Mail\AdminSendEmail;
use Illuminate\Http\Request;
use App\Jobs\AdminSendEmailJob;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Console\Scheduling\Event;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsletters = Newsletter::all();
        return view('template/admin/newsLetter/newletters',compact('newsletters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('template/admin/newsLetter/newletter');
    }

    /**
     * send email to all user in newsletter table
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newsletters = Newsletter::all();
        
        foreach($newsletters as $key=>$newletter){
        #dd($newletter->email);
            (new AdminSendEmail($request->subject, $request->message, $request->picture))
            ->to($newletter->email);
            #$newletter->email->notify(new AdminSendEmailNotification($this->subject,  $this->message, $this->picture));
        }
        #AdminSendEmailJob::dispatch($request->subject, $request->message,$request->picture);
        return back()->with('sucess','send succes');
    }

    public function export() 
    {
       return Excel::download(new EmailExport, 'email.xlsx');
    }
}
