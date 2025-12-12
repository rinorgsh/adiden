<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class DevisController extends Controller
{
    public function store(Request $request)
    {
        try {
            $data = $request->all();

            // Envoyer l'email à emin@adiden.be
            Mail::send('emails.devis', ['data' => $data], function ($message) use ($data) {
                $message->to('emin@adiden.be')
                        ->subject('Nouvelle demande de devis - ' . ($data['type'] ?? 'Non spécifié'));

                // Si l'email du client est fourni, l'ajouter en réponse
                if (!empty($data['email'])) {
                    $message->replyTo($data['email']);
                }
            });

            return response()->json([
                'success' => true,
                'message' => 'Demande envoyée avec succès'
            ], 200);

        } catch (\Exception $e) {
            Log::error('Erreur lors de l\'envoi du devis: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Une erreur est survenue lors de l\'envoi'
            ], 500);
        }
    }
}
