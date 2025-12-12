<script setup>
import { ref, computed } from 'vue';

const emit = defineEmits(['close']);

const currentStep = ref(1);
const formData = ref({
    // Étape 1 : Type de demande
    type: '',
    
    // Étape 2 : Informations personnelles
    nom: '',
    prenom: '',
    email: '',
    telephone: '',
    adresse: '',
    codePostal: '',
    ville: '',
    dateNaissance: '',
    
    // Champs spécifiques Assurance Auto
    marqueVehicule: '',
    modeleVehicule: '',
    anneeVehicule: '',
    carburant: '',
    puissance: '',
    valeurVehicule: '',
    kilometrage: '',
    usageVehicule: '',
    
    // Champs spécifiques Assurance Habitation
    typeLogement: '',
    surfaceLogement: '',
    anneeConstruction: '',
    nombrePieces: '',
    valeurMobilier: '',
    systemeSecurite: '',
    
    // Champs spécifiques Assurance Vie
    montantCapital: '',
    dureeContrat: '',
    beneficiaires: '',
    objectifAssurance: '',
    
    // Champs spécifiques Crédit Hypothécaire
    montantEmprunt: '',
    dureeEmprunt: '',
    apportPersonnel: '',
    valeurBien: '',
    typeAcquisition: '',
    situationProfessionnelle: '',
    revenuMensuel: '',
    
    // Champs spécifiques Crédit Personnel
    montantSouhaite: '',
    dureeSouhaitee: '',
    objetCredit: '',
    chargesMensuelles: '',
    
    // Message optionnel
    message: ''
});

const types = [
    { value: 'assurance-auto', label: 'Assurance Auto', icon: '🚗' },
    { value: 'assurance-habitation', label: 'Assurance Habitation', icon: '🏠' },
    { value: 'assurance-vie', label: 'Assurance Vie', icon: '💼' },
    { value: 'credit-hypothecaire', label: 'Crédit Hypothécaire', icon: '🏡' },
    { value: 'credit-personnel', label: 'Crédit Personnel', icon: '💰' },
    { value: 'autre', label: 'Autre demande', icon: '📋' }
];

const showSpecificFields = computed(() => {
    return formData.value.type !== '';
});

const nextStep = () => {
    if (currentStep.value === 1 && formData.value.type) {
        currentStep.value = 2;
    }
};

const previousStep = () => {
    if (currentStep.value > 1) {
        currentStep.value--;
    }
};

const handleSubmit = async () => {
    try {
        // Envoyer les données à votre backend
        const response = await fetch('/api/devis', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
            },
            body: JSON.stringify(formData.value)
        });

        if (response.ok) {
            alert('Votre demande a été envoyée avec succès ! Nous vous recontacterons sous 24h.');
            emit('close');
        } else {
            alert('Une erreur est survenue. Veuillez réessayer.');
        }
    } catch (error) {
        console.error('Erreur lors de l\'envoi:', error);
        alert('Une erreur est survenue. Veuillez réessayer.');
    }
};
</script>

<template>
    <div class="space-y-4 sm:space-y-6">
        <!-- Progress Indicator -->
        <div class="flex items-center justify-center gap-2 sm:gap-3 mb-6 sm:mb-8">
            <div class="flex items-center">
                <div
                    class="flex items-center justify-center w-8 h-8 sm:w-10 sm:h-10 rounded-full transition-all duration-300"
                    :class="currentStep >= 1 ? 'bg-black text-white' : 'bg-gray-200 text-gray-400'"
                >
                    <span class="font-light text-sm sm:text-base">1</span>
                </div>
                <span class="ml-1.5 sm:ml-2 text-xs sm:text-sm font-light" :class="currentStep >= 1 ? 'text-black' : 'text-gray-400'">Type</span>
            </div>
            <div class="w-8 sm:w-12 h-0.5" :class="currentStep >= 2 ? 'bg-black' : 'bg-gray-200'"></div>
            <div class="flex items-center">
                <div
                    class="flex items-center justify-center w-8 h-8 sm:w-10 sm:h-10 rounded-full transition-all duration-300"
                    :class="currentStep >= 2 ? 'bg-black text-white' : 'bg-gray-200 text-gray-400'"
                >
                    <span class="font-light text-sm sm:text-base">2</span>
                </div>
                <span class="ml-1.5 sm:ml-2 text-xs sm:text-sm font-light" :class="currentStep >= 2 ? 'text-black' : 'text-gray-400'">Détails</span>
            </div>
        </div>

        <form @submit.prevent="handleSubmit" class="space-y-6">
            <!-- ÉTAPE 1 : Sélection du type -->
            <div v-if="currentStep === 1" class="space-y-4 sm:space-y-6">
                <div>
                    <label class="block text-sm sm:text-base font-medium text-gray-700 mb-3 sm:mb-4">Quel type de service recherchez-vous ?</label>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 sm:gap-3">
                        <button
                            v-for="type in types"
                            :key="type.value"
                            type="button"
                            @click="formData.type = type.value; nextStep()"
                            class="group relative p-4 sm:p-6 border-2 rounded-xl sm:rounded-2xl transition-all duration-300 hover:border-black hover:shadow-lg text-left active:scale-95"
                            :class="formData.type === type.value ? 'border-black bg-black/5' : 'border-gray-200'"
                        >
                            <div class="flex items-center gap-3 sm:gap-4">
                                <span class="text-2xl sm:text-3xl flex-shrink-0">{{ type.icon }}</span>
                                <div>
                                    <h3 class="font-light text-base sm:text-lg text-gray-900 group-hover:text-black">{{ type.label }}</h3>
                                </div>
                            </div>
                            <div
                                v-if="formData.type === type.value"
                                class="absolute top-2.5 right-2.5 sm:top-3 sm:right-3 w-5 h-5 sm:w-6 sm:h-6 bg-black rounded-full flex items-center justify-center"
                            >
                                <svg class="w-3 h-3 sm:w-4 sm:h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                        </button>
                    </div>
                </div>
            </div>

            <!-- ÉTAPE 2 : Informations détaillées -->
            <div v-if="currentStep === 2" class="space-y-4 sm:space-y-6">
                <!-- Informations personnelles -->
                <div class="bg-gray-50 rounded-xl sm:rounded-2xl p-4 sm:p-6 space-y-4 sm:space-y-5">
                    <h3 class="text-base sm:text-lg font-light text-gray-900 flex items-center gap-2">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        Vos informations personnelles
                    </h3>

                    <div class="grid sm:grid-cols-2 gap-3 sm:gap-4">
                        <div>
                            <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1.5 sm:mb-2">Nom</label>
                            <input
                                v-model="formData.nom"
                                type="text"
                                class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white"
                                placeholder="Dupont"
                            />
                        </div>
                        <div>
                            <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1.5 sm:mb-2">Prénom</label>
                            <input
                                v-model="formData.prenom"
                                type="text"
                                class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white"
                                placeholder="Jean"
                            />
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input
                                v-model="formData.email"
                                type="email"
                                class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white"
                                placeholder="jean.dupont@email.com"
                            />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Téléphone</label>
                            <input
                                v-model="formData.telephone"
                                type="tel"
                                class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white"
                                placeholder="+32 XXX XX XX XX"
                            />
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Adresse</label>
                        <input
                            v-model="formData.adresse"
                            type="text"
                            class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white"
                            placeholder="Rue de la Paix, 123"
                        />
                    </div>

                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Code postal</label>
                            <input
                                v-model="formData.codePostal"
                                type="text"
                                class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white"
                                placeholder="1000"
                            />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Ville</label>
                            <input
                                v-model="formData.ville"
                                type="text"
                                class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white"
                                placeholder="Bruxelles"
                            />
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Date de naissance</label>
                        <input
                            v-model="formData.dateNaissance"
                            type="date"
                           
                            class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white"
                        />
                    </div>
                </div>

                <!-- Champs spécifiques Assurance Auto -->
                <div v-if="formData.type === 'assurance-auto'" class="bg-blue-50 rounded-xl sm:rounded-2xl p-4 sm:p-6 space-y-4 sm:space-y-5">
                    <h3 class="text-base sm:text-lg font-light text-gray-900 flex items-center gap-2">
                        <span class="text-2xl">🚗</span>
                        Informations sur votre véhicule
                    </h3>

                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Marque</label>
                            <input
                                v-model="formData.marqueVehicule"
                                type="text"
                               
                                class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white"
                                placeholder="ex: Volkswagen"
                            />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Modèle</label>
                            <input
                                v-model="formData.modeleVehicule"
                                type="text"
                               
                                class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white"
                                placeholder="ex: Golf"
                            />
                        </div>
                    </div>

                    <div class="grid md:grid-cols-3 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Année</label>
                            <input
                                v-model="formData.anneeVehicule"
                                type="number"
                               
                                min="1990"
                                :max="new Date().getFullYear() + 1"
                                class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white"
                                placeholder="2020"
                            />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Carburant</label>
                            <select
                                v-model="formData.carburant"
                               
                                class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white appearance-none"
                            >
                                <option value="">Sélectionner</option>
                                <option>Essence</option>
                                <option>Diesel</option>
                                <option>Hybride</option>
                                <option>Électrique</option>
                                <option>GPL</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Puissance (CV)</label>
                            <input
                                v-model="formData.puissance"
                                type="number"
                                class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white"
                                placeholder="110"
                            />
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Kilométrage actuel</label>
                            <input
                                v-model="formData.kilometrage"
                                type="number"
                                class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white"
                                placeholder="50000"
                            />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Valeur du véhicule (€)</label>
                            <input
                                v-model="formData.valeurVehicule"
                                type="number"
                                class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white"
                                placeholder="15000"
                            />
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Usage du véhicule</label>
                        <select
                            v-model="formData.usageVehicule"
                           
                            class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white appearance-none"
                        >
                            <option value="">Sélectionner</option>
                            <option>Privé uniquement</option>
                            <option>Trajet domicile-travail</option>
                            <option>Usage professionnel</option>
                            <option>Usage mixte</option>
                        </select>
                    </div>
                </div>

                <!-- Champs spécifiques Assurance Habitation -->
                <div v-if="formData.type === 'assurance-habitation'" class="bg-green-50 rounded-xl sm:rounded-2xl p-4 sm:p-6 space-y-4 sm:space-y-5">
                    <h3 class="text-base sm:text-lg font-light text-gray-900 flex items-center gap-2">
                        <span class="text-2xl">🏠</span>
                        Informations sur votre logement
                    </h3>

                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Type de logement</label>
                            <select
                                v-model="formData.typeLogement"
                               
                                class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white appearance-none"
                            >
                                <option value="">Sélectionner</option>
                                <option>Maison</option>
                                <option>Appartement</option>
                                <option>Studio</option>
                                <option>Villa</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Surface (m²)</label>
                            <input
                                v-model="formData.surfaceLogement"
                                type="number"
                               
                                class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white"
                                placeholder="100"
                            />
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Année de construction</label>
                            <input
                                v-model="formData.anneeConstruction"
                                type="number"
                                min="1800"
                                :max="new Date().getFullYear()"
                                class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white"
                                placeholder="1990"
                            />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nombre de pièces</label>
                            <input
                                v-model="formData.nombrePieces"
                                type="number"
                                min="1"
                                class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white"
                                placeholder="4"
                            />
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Valeur du mobilier (€)</label>
                        <input
                            v-model="formData.valeurMobilier"
                            type="number"
                            class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white"
                            placeholder="30000"
                        />
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Système de sécurité</label>
                        <select
                            v-model="formData.systemeSecurite"
                            class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white appearance-none"
                        >
                            <option value="">Aucun</option>
                            <option>Alarme</option>
                            <option>Vidéosurveillance</option>
                            <option>Alarme + Vidéosurveillance</option>
                            <option>Système complet</option>
                        </select>
                    </div>
                </div>

                <!-- Champs spécifiques Assurance Vie -->
                <div v-if="formData.type === 'assurance-vie'" class="bg-purple-50 rounded-xl sm:rounded-2xl p-4 sm:p-6 space-y-4 sm:space-y-5">
                    <h3 class="text-base sm:text-lg font-light text-gray-900 flex items-center gap-2">
                        <span class="text-2xl">💼</span>
                        Détails de votre assurance vie
                    </h3>

                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Capital souhaité (€)</label>
                            <input
                                v-model="formData.montantCapital"
                                type="number"
                               
                                class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white"
                                placeholder="100000"
                            />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Durée (années)</label>
                            <input
                                v-model="formData.dureeContrat"
                                type="number"
                               
                                min="1"
                                class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white"
                                placeholder="20"
                            />
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Objectif principal</label>
                        <select
                            v-model="formData.objectifAssurance"
                           
                            class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white appearance-none"
                        >
                            <option value="">Sélectionner</option>
                            <option>Protection familiale</option>
                            <option>Épargne pension</option>
                            <option>Investissement</option>
                            <option>Transmission de patrimoine</option>
                            <option>Couverture crédit</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Bénéficiaires</label>
                        <textarea
                            v-model="formData.beneficiaires"
                            rows="2"
                            class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white resize-none"
                            placeholder="Conjoint, enfants..."
                        ></textarea>
                    </div>
                </div>

                <!-- Champs spécifiques Crédit Hypothécaire -->
                <div v-if="formData.type === 'credit-hypothecaire'" class="bg-orange-50 rounded-xl sm:rounded-2xl p-4 sm:p-6 space-y-4 sm:space-y-5">
                    <h3 class="text-base sm:text-lg font-light text-gray-900 flex items-center gap-2">
                        <span class="text-2xl">🏡</span>
                        Détails de votre projet immobilier
                    </h3>

                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Montant emprunté (€)</label>
                            <input
                                v-model="formData.montantEmprunt"
                                type="number"
                               
                                class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white"
                                placeholder="200000"
                            />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Durée (années)</label>
                            <input
                                v-model="formData.dureeEmprunt"
                                type="number"
                               
                                min="1"
                                max="30"
                                class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white"
                                placeholder="20"
                            />
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Apport personnel (€)</label>
                            <input
                                v-model="formData.apportPersonnel"
                                type="number"
                               
                                class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white"
                                placeholder="50000"
                            />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Valeur du bien (€)</label>
                            <input
                                v-model="formData.valeurBien"
                                type="number"
                               
                                class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white"
                                placeholder="250000"
                            />
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Type d'acquisition</label>
                        <select
                            v-model="formData.typeAcquisition"
                           
                            class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white appearance-none"
                        >
                            <option value="">Sélectionner</option>
                            <option>Résidence principale</option>
                            <option>Résidence secondaire</option>
                            <option>Investissement locatif</option>
                            <option>Terrain</option>
                            <option>Construction</option>
                        </select>
                    </div>

                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Situation professionnelle</label>
                            <select
                                v-model="formData.situationProfessionnelle"
                               
                                class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white appearance-none"
                            >
                                <option value="">Sélectionner</option>
                                <option>CDI</option>
                                <option>CDD</option>
                                <option>Indépendant</option>
                                <option>Fonctionnaire</option>
                                <option>Retraité</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Revenu mensuel net (€)</label>
                            <input
                                v-model="formData.revenuMensuel"
                                type="number"
                               
                                class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white"
                                placeholder="3000"
                            />
                        </div>
                    </div>
                </div>

                <!-- Champs spécifiques Crédit Personnel -->
                <div v-if="formData.type === 'credit-personnel'" class="bg-yellow-50 rounded-xl sm:rounded-2xl p-4 sm:p-6 space-y-4 sm:space-y-5">
                    <h3 class="text-base sm:text-lg font-light text-gray-900 flex items-center gap-2">
                        <span class="text-2xl">💰</span>
                        Détails de votre crédit personnel
                    </h3>

                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Montant souhaité (€)</label>
                            <input
                                v-model="formData.montantSouhaite"
                                type="number"
                               
                                class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white"
                                placeholder="15000"
                            />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Durée souhaitée (mois)</label>
                            <input
                                v-model="formData.dureeSouhaitee"
                                type="number"
                               
                                min="6"
                                max="120"
                                class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white"
                                placeholder="48"
                            />
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Objet du crédit</label>
                        <select
                            v-model="formData.objetCredit"
                           
                            class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white appearance-none"
                        >
                            <option value="">Sélectionner</option>
                            <option>Véhicule</option>
                            <option>Travaux</option>
                            <option>Regroupement de crédits</option>
                            <option>Équipement</option>
                            <option>Trésorerie</option>
                            <option>Autre</option>
                        </select>
                    </div>

                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Revenus mensuels (€)</label>
                            <input
                                v-model="formData.revenuMensuel"
                                type="number"
                               
                                class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white"
                                placeholder="2500"
                            />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Charges mensuelles (€)</label>
                            <input
                                v-model="formData.chargesMensuelles"
                                type="number"
                                class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white"
                                placeholder="800"
                            />
                        </div>
                    </div>
                </div>

                <!-- Message optionnel (pour tous les types) -->
                <div class="bg-gray-50 rounded-2xl p-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                            </svg>
                            Message complémentaire (optionnel)
                        </div>
                    </label>
                    <textarea
                        v-model="formData.message"
                        rows="4"
                        class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent font-light bg-white resize-none"
                        placeholder="Ajoutez toute information complémentaire qui pourrait nous aider à mieux répondre à votre demande..."
                    ></textarea>
                </div>

                <!-- Boutons d'action -->
                <div class="flex flex-col sm:flex-row gap-3 pt-2 sm:pt-4">
                    <button
                        type="button"
                        @click="previousStep"
                        class="flex items-center justify-center gap-2 px-5 sm:px-6 py-3 sm:py-4 text-sm sm:text-base border-2 border-gray-300 text-gray-700 rounded-full font-light hover:bg-gray-50 transition-all duration-300 active:scale-95"
                    >
                        <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                        <span>Retour</span>
                    </button>

                    <button
                        type="submit"
                        class="flex-1 bg-black text-white px-6 sm:px-8 py-3 sm:py-4 rounded-full font-light text-base sm:text-lg tracking-wide hover:bg-gray-900 transition-all duration-300 transform hover:scale-[1.02] active:scale-95 shadow-lg shadow-black/20 group"
                    >
                        <span class="flex items-center justify-center gap-2">
                            Envoyer ma demande
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 transform transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </span>
                    </button>
                </div>

                <p class="text-[10px] sm:text-xs text-gray-500 text-center font-light flex flex-wrap items-center justify-center gap-1.5 sm:gap-2">
                    <svg class="w-3 h-3 sm:w-4 sm:h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                    <span>Vos données sont protégées et ne seront jamais partagées</span>
                </p>
            </div>
        </form>
    </div>
</template>

<style scoped>
/* Smooth scroll pour le modal */
.overflow-y-auto::-webkit-scrollbar {
    width: 6px;
}

.overflow-y-auto::-webkit-scrollbar-track {
    background: transparent;
}

.overflow-y-auto::-webkit-scrollbar-thumb {
    background: #e5e7eb;
    border-radius: 3px;
}

.overflow-y-auto::-webkit-scrollbar-thumb:hover {
    background: #d1d5db;
}

/* Custom select styling */
select {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%239ca3af' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
    background-position: right 0.75rem center;
    background-repeat: no-repeat;
    background-size: 1.5em 1.5em;
    padding-right: 2.5rem;
}
</style>