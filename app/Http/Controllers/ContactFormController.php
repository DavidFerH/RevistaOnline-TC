<?php
namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
public function form(){

return view('contact');
}

public function send(Request $request){

$data = $request->validate([
'email' => 'required',
'asunto' => 'required',
'message' => 'required'
]);

Mail::to('pgmarticorena@gmail.com')->send(new ContactForm($data));

return back()->with('data', $data)->with('message', ['success', 'Mensaje enviado correctamente']);
}
}
