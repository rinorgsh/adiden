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
            // Validation des données requises
            $validated = $request->validate([
                'type' => 'required|string',
                'email' => 'required|email',
                'nom' => 'required|string|max:255',
                'prenom' => 'required|string|max:255',
            ], [
                'type.required' => 'Le type de demande est requis',
                'email.required' => 'L\'adresse email est requise',
                'email.email' => 'L\'adresse email n\'est pas valide',
                'nom.required' => 'Le nom est requis',
                'prenom.required' => 'Le prénom est requis',
            ]);

            $data = $request->all();

            // Tentative d'envoi de l'email
            try {
                Mail::send('emails.devis', ['data' => $data], function ($message) use ($data) {
                    $message->to('emin@adiden.be')
                            ->subject('Nouvelle demande de devis - ' . ($data['type'] ?? 'Non spécifié'));

                    // Si l'email du client est fourni, l'ajouter en réponse
                    if (!empty($data['email'])) {
                        $message->replyTo($data['email']);
                    }
                });
            } catch (\Exception $mailException) {
                Log::error('Échec de l\'envoi de l\'email de devis', [
                    'error' => $mailException->getMessage(),
                    'data' => $data
                ]);

                return response()->json([
                    'success' => false,
                    'message' => 'L\'email n\'a pas pu être envoyé. Veuillez réessayer ou nous contacter directement.'
                ], 500);
            }

            Log::info('Demande de devis envoyée avec succès', [
                'type' => $data['type'],
                'email' => $data['email'],
                'nom' => $data['nom'] . ' ' . $data['prenom']
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Votre demande a été envoyée avec succès ! Nous vous recontacterons sous 24h.'
            ], 200);

        } catch (\Illuminate\Validation\ValidationException $e) {
            // Erreurs de validation
            return response()->json([
                'success' => false,
                'message' => 'Veuillez remplir tous les champs obligatoires',
                'errors' => $e->errors()
            ], 422);

        } catch (\Exception $e) {
            Log::error('Erreur lors de l\'envoi du devis', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Une erreur technique est survenue. Veuillez réessayer dans quelques instants ou nous contacter directement.'
            ], 500);
        }
    }
}
