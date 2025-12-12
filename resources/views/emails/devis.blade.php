<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle demande de devis</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .email-container {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .header {
            border-bottom: 3px solid #000;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 300;
        }
        .badge {
            display: inline-block;
            background: #000;
            color: #fff;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 300;
            margin-top: 10px;
        }
        .section {
            margin-bottom: 25px;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 6px;
        }
        .section-title {
            font-size: 16px;
            font-weight: 600;
            color: #000;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        .field {
            margin-bottom: 12px;
        }
        .field-label {
            font-weight: 600;
            color: #666;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .field-value {
            color: #000;
            font-size: 15px;
            margin-top: 4px;
        }
        .footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e5e5e5;
            font-size: 12px;
            color: #999;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h1>Nouvelle demande de devis</h1>
            <span class="badge">{{ ucfirst(str_replace('-', ' ', $data['type'] ?? 'Non spécifié')) }}</span>
        </div>

        <!-- Informations personnelles -->
        <div class="section">
            <div class="section-title">👤 Informations personnelles</div>

            @if(!empty($data['nom']) || !empty($data['prenom']))
                <div class="field">
                    <div class="field-label">Nom complet</div>
                    <div class="field-value">{{ ($data['prenom'] ?? '') }} {{ ($data['nom'] ?? '') }}</div>
                </div>
            @endif

            @if(!empty($data['email']))
                <div class="field">
                    <div class="field-label">Email</div>
                    <div class="field-value">{{ $data['email'] }}</div>
                </div>
            @endif

            @if(!empty($data['telephone']))
                <div class="field">
                    <div class="field-label">Téléphone</div>
                    <div class="field-value">{{ $data['telephone'] }}</div>
                </div>
            @endif

            @if(!empty($data['dateNaissance']))
                <div class="field">
                    <div class="field-label">Date de naissance</div>
                    <div class="field-value">{{ $data['dateNaissance'] }}</div>
                </div>
            @endif

            @if(!empty($data['adresse']))
                <div class="field">
                    <div class="field-label">Adresse</div>
                    <div class="field-value">{{ $data['adresse'] }}</div>
                </div>
            @endif

            @if(!empty($data['codePostal']) || !empty($data['ville']))
                <div class="field">
                    <div class="field-label">Localité</div>
                    <div class="field-value">{{ ($data['codePostal'] ?? '') }} {{ ($data['ville'] ?? '') }}</div>
                </div>
            @endif
        </div>

        <!-- Informations spécifiques selon le type -->
        @if($data['type'] === 'assurance-auto')
            <div class="section">
                <div class="section-title">🚗 Véhicule</div>

                @foreach([
                    'marqueVehicule' => 'Marque',
                    'modeleVehicule' => 'Modèle',
                    'anneeVehicule' => 'Année',
                    'carburant' => 'Carburant',
                    'puissance' => 'Puissance (CV)',
                    'kilometrage' => 'Kilométrage',
                    'valeurVehicule' => 'Valeur (€)',
                    'usageVehicule' => 'Usage'
                ] as $key => $label)
                    @if(!empty($data[$key]))
                        <div class="field">
                            <div class="field-label">{{ $label }}</div>
                            <div class="field-value">{{ $data[$key] }}</div>
                        </div>
                    @endif
                @endforeach
            </div>
        @endif

        @if($data['type'] === 'assurance-habitation')
            <div class="section">
                <div class="section-title">🏠 Logement</div>

                @foreach([
                    'typeLogement' => 'Type',
                    'surfaceLogement' => 'Surface (m²)',
                    'anneeConstruction' => 'Année de construction',
                    'nombrePieces' => 'Nombre de pièces',
                    'valeurMobilier' => 'Valeur mobilier (€)',
                    'systemeSecurite' => 'Système de sécurité'
                ] as $key => $label)
                    @if(!empty($data[$key]))
                        <div class="field">
                            <div class="field-label">{{ $label }}</div>
                            <div class="field-value">{{ $data[$key] }}</div>
                        </div>
                    @endif
                @endforeach
            </div>
        @endif

        @if($data['type'] === 'assurance-vie')
            <div class="section">
                <div class="section-title">💼 Assurance vie</div>

                @foreach([
                    'montantCapital' => 'Capital (€)',
                    'dureeContrat' => 'Durée (années)',
                    'objectifAssurance' => 'Objectif',
                    'beneficiaires' => 'Bénéficiaires'
                ] as $key => $label)
                    @if(!empty($data[$key]))
                        <div class="field">
                            <div class="field-label">{{ $label }}</div>
                            <div class="field-value">{{ $data[$key] }}</div>
                        </div>
                    @endif
                @endforeach
            </div>
        @endif

        @if($data['type'] === 'credit-hypothecaire')
            <div class="section">
                <div class="section-title">🏡 Crédit hypothécaire</div>

                @foreach([
                    'montantEmprunt' => 'Montant (€)',
                    'dureeEmprunt' => 'Durée (années)',
                    'apportPersonnel' => 'Apport (€)',
                    'valeurBien' => 'Valeur bien (€)',
                    'typeAcquisition' => 'Type d\'acquisition',
                    'situationProfessionnelle' => 'Situation professionnelle',
                    'revenuMensuel' => 'Revenu mensuel (€)'
                ] as $key => $label)
                    @if(!empty($data[$key]))
                        <div class="field">
                            <div class="field-label">{{ $label }}</div>
                            <div class="field-value">{{ $data[$key] }}</div>
                        </div>
                    @endif
                @endforeach
            </div>
        @endif

        @if($data['type'] === 'credit-personnel')
            <div class="section">
                <div class="section-title">💰 Crédit personnel</div>

                @foreach([
                    'montantSouhaite' => 'Montant (€)',
                    'dureeSouhaitee' => 'Durée (mois)',
                    'objetCredit' => 'Objet',
                    'revenuMensuel' => 'Revenus (€)',
                    'chargesMensuelles' => 'Charges (€)'
                ] as $key => $label)
                    @if(!empty($data[$key]))
                        <div class="field">
                            <div class="field-label">{{ $label }}</div>
                            <div class="field-value">{{ $data[$key] }}</div>
                        </div>
                    @endif
                @endforeach
            </div>
        @endif

        <!-- Message -->
        @if(!empty($data['message']))
            <div class="section">
                <div class="section-title">💬 Message</div>
                <div class="field-value">{{ $data['message'] }}</div>
            </div>
        @endif

        <div class="footer">
            <p>Cet email a été envoyé automatiquement depuis le formulaire de demande de devis sur adiden.be</p>
            <p>© {{ date('Y') }} Adiden Finances - Courtier agréé FSMA</p>
        </div>
    </div>
</body>
</html>
