<script setup>
import { Head } from '@inertiajs/vue3';
import MainLayout from '@/Layouts/MainLayout.vue';

defineProps({
    canLogin: Boolean,
});
</script>

<template>
    <Head title="Mentions Légales - Adiden Finances" />

    <MainLayout :can-login="canLogin">
        <div class="min-h-screen bg-white pt-32 pb-20">
            <div class="container mx-auto px-6 lg:px-12 max-w-4xl">

                <!-- Header -->
                <div class="mb-16">
                    <h1 class="text-4xl md:text-5xl font-light text-gray-900 mb-4">Mentions Légales</h1>
                    <p class="text-lg text-gray-600 font-light">Informations légales et réglementaires</p>
                </div>

                <!-- Content -->
                <div class="space-y-12">

                    <!-- Identification de l'entreprise -->
                    <section>
                        <h2 class="text-2xl font-light text-gray-900 mb-6 border-l-2 border-gray-900 pl-6">
                            Identification de l'entreprise
                        </h2>
                        <div class="space-y-3 text-gray-700 font-light">
                            <p><span class="font-normal">Dénomination sociale :</span> Adiden Finances</p>
                            <p><span class="font-normal">Forme juridique :</span> Société privée à responsabilité limitée (SPRL)</p>
                            <p><span class="font-normal">Numéro d'entreprise (BCE) :</span> 0737 899 190</p>
                            <p><span class="font-normal">Numéro FSMA :</span> 0737 899 190</p>
                            <p><span class="font-normal">Adresse du siège social :</span> Avenue Henri Conscience 41, 1140 Evere, Belgique</p>
                            <p><span class="font-normal">Téléphone :</span> <a href="tel:+3228081178" class="hover:text-gray-900 transition-colors">+32 2 808 11 78</a></p>
                            <p><span class="font-normal">Email :</span> <a href="mailto:info@adiden.be" class="hover:text-gray-900 transition-colors">info@adiden.be</a></p>
                        </div>
                    </section>

                    <!-- Agréments et Autorisations -->
                    <section>
                        <h2 class="text-2xl font-light text-gray-900 mb-6 border-l-2 border-gray-900 pl-6">
                            Agréments et Autorisations
                        </h2>
                        <div class="space-y-4 text-gray-700 font-light">
                            <div>
                                <h3 class="font-normal text-gray-900 mb-2">Autorité des services et marchés financiers (FSMA)</h3>
                                <p><span class="font-normal">Numéro d'inscription :</span> 60 622 (Assurances)</p>
                                <p><span class="font-normal">Numéro d'inscription :</span> 46 400 (Crédits)</p>
                            </div>
                            <p>Adiden Finances est agréé comme courtier en assurances et intermédiaire de crédit par la FSMA (Autorité des services et marchés financiers).</p>
                            <div class="bg-gray-50 rounded-xl p-6 mt-4">
                                <p class="font-normal text-gray-900 mb-2">Coordonnées FSMA :</p>
                                <p>Rue du Congrès 12-14, 1000 Bruxelles</p>
                                <p>Tél : <a href="tel:+3222205211" class="hover:text-gray-900 transition-colors">+32 2 220 52 11</a></p>
                                <p>Email : <a href="mailto:info@fsma.be" class="hover:text-gray-900 transition-colors">info@fsma.be</a></p>
                                <p>Site web : <a href="https://www.fsma.be" target="_blank" rel="noopener noreferrer" class="hover:text-gray-900 transition-colors underline">www.fsma.be</a></p>
                            </div>
                        </div>
                    </section>

                    <!-- Autorité de surveillance -->
                    <section>
                        <h2 class="text-2xl font-light text-gray-900 mb-6 border-l-2 border-gray-900 pl-6">
                            Autorité de surveillance
                        </h2>
                        <div class="bg-gray-50 rounded-xl p-6 text-gray-700 font-light">
                            <p class="font-normal text-gray-900 mb-2">Service public fédéral Economie, P.M.E., Classes moyennes et Energie</p>
                            <p>City Atrium C</p>
                            <p>Rue du Progrès, 50 – 1210 Bruxelles</p>
                            <p>Tél : <a href="tel:080012033" class="hover:text-gray-900 transition-colors">0800 120 33</a></p>
                            <p>Email : <a href="mailto:info.eco@economie.fgov.be" class="hover:text-gray-900 transition-colors">info.eco@economie.fgov.be</a></p>
                            <p>Site web : <a href="https://economie.fgov.be" target="_blank" rel="noopener noreferrer" class="hover:text-gray-900 transition-colors underline">economie.fgov.be</a></p>
                        </div>
                    </section>

                    <!-- Informations Crédits -->
                    <section>
                        <h2 class="text-2xl font-light text-gray-900 mb-6 border-l-2 border-gray-900 pl-6">
                            Informations Crédits
                        </h2>
                        <div class="bg-red-50 border-l-4 border-red-500 rounded-xl p-6 mb-6">
                            <p class="font-normal text-red-900 mb-2">⚠️ ATTENTION, EMPRUNTER DE L'ARGENT COÛTE AUSSI DE L'ARGENT !</p>
                        </div>
                        <div class="space-y-3 text-gray-700 font-light">
                            <p class="font-normal text-gray-900">Avant de contracter un crédit, il est important de :</p>
                            <ul class="list-disc list-inside space-y-2 ml-4">
                                <li>Vérifier que vous pouvez rembourser le crédit</li>
                                <li>Comparer les offres de différents organismes de crédit</li>
                                <li>Lire attentivement toutes les conditions</li>
                                <li>Demander conseil à un expert indépendant si nécessaire</li>
                            </ul>
                            <p class="mt-4">Le TAEG (Taux Annuel Effectif Global) vous permet de comparer les offres de crédit.</p>
                        </div>
                    </section>

                    <!-- Assurance Responsabilité Professionnelle -->
                    <section>
                        <h2 class="text-2xl font-light text-gray-900 mb-6 border-l-2 border-gray-900 pl-6">
                            Assurance Responsabilité Professionnelle
                        </h2>
                        <div class="text-gray-700 font-light space-y-3">
                            <p>Adiden Finances dispose d'une assurance responsabilité professionnelle couvrant ses activités de courtage en assurances et en crédits conformément aux exigences légales.</p>
                            <p>Les détails de cette couverture sont disponibles sur simple demande auprès de nos services.</p>
                        </div>
                    </section>

                    <!-- Procédure de réclamation -->
                    <section>
                        <h2 class="text-2xl font-light text-gray-900 mb-6 border-l-2 border-gray-900 pl-6">
                            Procédure de réclamation
                        </h2>
                        <div class="text-gray-700 font-light space-y-4">
                            <p>Si vous avez une réclamation concernant nos services, vous pouvez nous contacter par :</p>
                            <div class="bg-gray-50 rounded-xl p-6 space-y-2">
                                <p><span class="font-normal">Email :</span> <a href="mailto:info@adidenfinances.be" class="hover:text-gray-900 transition-colors">info@adidenfinances.be</a></p>
                                <p><span class="font-normal">Courrier :</span> Avenue Henri Conscience 41, 1140 Evere</p>
                                <p><span class="font-normal">Téléphone :</span> <a href="tel:+3228081178" class="hover:text-gray-900 transition-colors">+32 2 808 11 78</a></p>
                            </div>
                            <p>Nous nous engageons à traiter votre réclamation dans les plus brefs délais.</p>
                            <p>Si vous n'êtes pas satisfait de notre réponse, vous pouvez vous adresser à l'<a href="https://www.ombudsman-insurance.be" target="_blank" rel="noopener noreferrer" class="text-gray-900 hover:text-gray-700 transition-colors underline">Ombudsman des Assurances</a> ou au <a href="https://www.mediationconsommateur.be" target="_blank" rel="noopener noreferrer" class="text-gray-900 hover:text-gray-700 transition-colors underline">Service de Médiation pour le Consommateur</a>.</p>
                        </div>
                    </section>

                    <!-- Protection des données personnelles (RGPD) -->
                    <section>
                        <h2 class="text-2xl font-light text-gray-900 mb-6 border-l-2 border-gray-900 pl-6">
                            Protection des données personnelles (RGPD)
                        </h2>
                        <div class="text-gray-700 font-light space-y-4">
                            <p>Adiden Finances traite vos données personnelles conformément au Règlement Général sur la Protection des Données (RGPD).</p>
                            <p><span class="font-normal text-gray-900">Responsable du traitement :</span> Adiden Finances</p>

                            <div>
                                <p class="font-normal text-gray-900 mb-2">Finalités du traitement :</p>
                                <ul class="list-disc list-inside space-y-1 ml-4">
                                    <li>Gestion de la relation client</li>
                                    <li>Fourniture de services de courtage</li>
                                    <li>Respect des obligations légales et réglementaires</li>
                                    <li>Prospection commerciale (avec votre consentement)</li>
                                </ul>
                            </div>

                            <div>
                                <p class="font-normal text-gray-900 mb-2">Vos droits :</p>
                                <ul class="list-disc list-inside space-y-1 ml-4">
                                    <li>Droit d'accès à vos données</li>
                                    <li>Droit de rectification</li>
                                    <li>Droit à l'effacement</li>
                                    <li>Droit à la limitation du traitement</li>
                                    <li>Droit à la portabilité</li>
                                    <li>Droit d'opposition</li>
                                </ul>
                            </div>

                            <p>Pour exercer ces droits, contactez-nous à l'adresse : <a href="mailto:info@adidenfinances.be" class="text-gray-900 hover:text-gray-700 transition-colors">info@adidenfinances.be</a></p>
                            <p>Pour toute réclamation, vous pouvez vous adresser à l'<a href="https://www.autoriteprotectiondonnees.be" target="_blank" rel="noopener noreferrer" class="text-gray-900 hover:text-gray-700 transition-colors underline">Autorité de protection des données</a>.</p>
                        </div>
                    </section>

                    <!-- Propriété intellectuelle -->
                    <section>
                        <h2 class="text-2xl font-light text-gray-900 mb-6 border-l-2 border-gray-900 pl-6">
                            Propriété intellectuelle
                        </h2>
                        <div class="text-gray-700 font-light space-y-3">
                            <p>L'ensemble du contenu de ce site web (textes, images, logos, etc.) est protégé par le droit d'auteur et appartient à Adiden Finances ou à ses partenaires.</p>
                            <p>Toute reproduction, même partielle, sans autorisation préalable écrite est strictement interdite.</p>
                        </div>
                    </section>

                    <!-- Droit applicable et juridiction -->
                    <section>
                        <h2 class="text-2xl font-light text-gray-900 mb-6 border-l-2 border-gray-900 pl-6">
                            Droit applicable et juridiction
                        </h2>
                        <div class="text-gray-700 font-light space-y-3">
                            <p>Les présentes mentions légales sont régies par le droit belge.</p>
                            <p>En cas de litige, les tribunaux de l'arrondissement judiciaire de Bruxelles seront seuls compétents.</p>
                        </div>
                    </section>

                    <!-- Contact -->
                    <section class="bg-gray-50 rounded-xl p-8">
                        <h2 class="text-2xl font-light text-gray-900 mb-6 border-l-2 border-gray-900 pl-6">
                            Contact
                        </h2>
                        <div class="text-gray-700 font-light space-y-2">
                            <p class="font-normal text-gray-900">Avenue Henri Conscience 41</p>
                            <p>1140 Evere</p>
                            <p class="mt-4"><span class="font-normal">Assurances :</span> <a href="tel:+32489623990" class="hover:text-gray-900 transition-colors">0489 62 39 90</a></p>
                            <p><span class="font-normal">Crédit Hypothécaire :</span> <a href="tel:+32483508818" class="hover:text-gray-900 transition-colors">0483 508 818</a></p>
                            <p><span class="font-normal">Autres Crédits :</span> <a href="tel:+32485162085" class="hover:text-gray-900 transition-colors">0485 16 20 85</a></p>
                            <p class="mt-4"><a href="mailto:info@adiden.be" class="hover:text-gray-900 transition-colors">info@adiden.be</a></p>
                        </div>
                    </section>

                    <!-- Dernière mise à jour -->
                    <div class="text-center text-sm text-gray-500 font-light pt-8 border-t border-gray-200">
                        <p>Dernière mise à jour : Décembre 2025</p>
                    </div>

                </div>
            </div>
        </div>
    </MainLayout>
</template>
