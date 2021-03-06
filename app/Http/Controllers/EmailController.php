<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('emails.contacto');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function send(Request $request)
    {
        //guarda el valor de los campos enviados desde el form en un array
        $data = $request->all();

        //se envia el array y la vista lo recibe en llaves individuales {{ $email }} , {{ $subject }}...
        Mail::send('emails.success', $data, function($message) use ($request)
        {
            //remitente
            $message->from(env('MAIL_USERNAME'));

            //receptor
            $message->to($request->email, $request->name);

            //asunto
            $message->subject($request->subject);
        });
        return redirect('/home');
    }
}
