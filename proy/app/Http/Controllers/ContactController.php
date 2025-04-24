<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'service' => 'nullable|string|max:50',
            'message' => 'required|string',
        ]);
        
        // Aquí se puede implementar el envío real del email
        // Mail::to('info@wizelaw.com')->send(new ContactFormMail($validatedData));
        
        // Por ahora, simularemos el envío con una respuesta de éxito
        return back()->with('success', '¡Gracias por tu mensaje! Nos pondremos en contacto contigo pronto.');
    }
}