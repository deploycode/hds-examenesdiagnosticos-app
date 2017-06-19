<?php

namespace examenesApp\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Redirect;
use examenesApp\Http\Requests;
use examenesApp\Http\Requests\CitasRequest;
use examenesApp\Http\Controllers\Controller;

class MailController extends Controller
{
    public function store(CitasRequest $request)
    {
      $data = array (
        'examen'		=>	$request->examen,
        'name'		=>	$request->name,
        'number'		=>	$request->number,
        'email'		=>	$request->email,
      );
      Mail::send('emails.contact', $data, function($msj){
        $msj->subject('Solicitud de cita');
        $msj->to('auxiliar@examenesdiagnosticos.com.co');
      });
      flash('<strong>Gracias,</strong> le contactaremos inmediatamente', 'success');
      return Redirect::to('/citas');
    }
}
