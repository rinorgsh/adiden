<script setup>
import { Head, Link } from '@inertiajs/vue3';
import MainLayout from '@/Layouts/MainLayout.vue';

defineProps({
    canLogin: Boolean,
});
</script>

<template>
    <Head title="Politique de Confidentialité - Adiden Finances" />

    <MainLayout :can-login="canLogin" content-page>
        <div class="min-h-screen bg-white pt-32 pb-20">
            <div class="container mx-auto px-6 lg:px-12 max-w-4xl">

                <!-- Retour à l'accueil -->
                <Link
                    href="/"
                    class="inline-flex items-center gap-2 text-gray-500 hover:text-adiden font-light transition-colors mb-8"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                    <span>Retour à l'accueil</span>
                </Link>

                <!-- Header -->
                <div class="mb-16">
                    <h1 class="text-4xl md:text-5xl font-light text-gray-900 mb-4">Politique de Confidentialité</h1>
                    <p class="text-lg text-gray-600 font-light">Protection et traitement de vos données personnelles</p>
                </div>

                <!-- Content -->
                <div class="space-y-12">

                    <!-- Introduction -->
                    <section>
                        <div class="text-gray-700 font-light space-y-3">
                            <p>Adiden Finances accorde une grande importance à la protection de votre vie privée et de vos données personnelles. La présente politique de confidentialité décrit la manière dont nous collectons, utilisons et protégeons vos données conformément au Règlement Général sur la Protection des Données (RGPD).</p>
                        </div>
                    </section>

                    <!-- Responsable du traitement -->
                    <section>
                        <h2 class="text-2xl font-light text-gray-900 mb-6 border-l-2 border-gray-900 pl-6">
                            Responsable du traitement
                        </h2>
                        <div class="space-y-3 text-gray-700 font-light">
                            <p><span class="font-normal">Dénomination :</span> Adiden Finances (SRL)</p>
                            <p><span class="font-normal">Adresse :</span> Avenue Henri Conscience 41, 1140 Evere, Belgique</p>
                            <p><span class="font-normal">Téléphone :</span> <a href="tel:+32483508818" class="hover:text-gray-900 transition-colors">0483 508 818</a></p>
                            <p><span class="font-normal">Email :</span> <a href="mailto:info@adiden.be" class="hover:text-gray-900 transition-colors">info@adiden.be</a></p>
                        </div>
                    </section>

                    <!-- Données collectées -->
                    <section>
                        <h2 class="text-2xl font-light text-gray-900 mb-6 border-l-2 border-gray-900 pl-6">
                            Données collectées
                        </h2>
                        <div class="text-gray-700 font-light space-y-4">
                            <p>Dans le cadre de nos activités de courtage en assurances et en crédits, nous sommes amenés à collecter les données suivantes :</p>
                            <ul class="list-disc list-inside space-y-2 ml-4">
                                <li>Données d'identification (nom, prénom, date de naissance)</li>
                                <li>Coordonnées (adresse, téléphone, email)</li>
                                <li>Données financières et patrimoniales nécessaires à l'étude de votre dossier</li>
                                <li>Toute information communiquée via nos formulaires de contact ou de demande de devis</li>
                            </ul>
                        </div>
                    </section>

                    <!-- Finalités du traitement -->
                    <section>
                        <h2 class="text-2xl font-light text-gray-900 mb-6 border-l-2 border-gray-900 pl-6">
                            Finalités du traitement
                        </h2>
                        <div class="text-gray-700 font-light space-y-4">
                            <p>Vos données personnelles sont traitées pour les finalités suivantes :</p>
                            <ul class="list-disc list-inside space-y-2 ml-4">
                                <li>Gestion de la relation client</li>
                                <li>Fourniture de services de courtage en assurances et en crédits</li>
                                <li>Respect de nos obligations légales et réglementaires</li>
                                <li>Prospection commerciale (avec votre consentement)</li>
                            </ul>
                        </div>
                    </section>

                    <!-- Base légale -->
                    <section>
                        <h2 class="text-2xl font-light text-gray-900 mb-6 border-l-2 border-gray-900 pl-6">
                            Base légale et conservation
                        </h2>
                        <div class="text-gray-700 font-light space-y-3">
                            <p>Le traitement de vos données repose sur l'exécution du contrat, le respect de nos obligations légales et, le cas échéant, sur votre consentement.</p>
                            <p>Vos données sont conservées pendant la durée nécessaire aux finalités pour lesquelles elles ont été collectées et conformément aux délais légaux de conservation applicables au secteur financier.</p>
                        </div>
                    </section>

                    <!-- Vos droits -->
                    <section>
                        <h2 class="text-2xl font-light text-gray-900 mb-6 border-l-2 border-gray-900 pl-6">
                            Vos droits
                        </h2>
                        <div class="text-gray-700 font-light space-y-4">
                            <p>Conformément au RGPD, vous disposez des droits suivants sur vos données personnelles :</p>
                            <ul class="list-disc list-inside space-y-1 ml-4">
                                <li>Droit d'accès à vos données</li>
                                <li>Droit de rectification</li>
                                <li>Droit à l'effacement</li>
                                <li>Droit à la limitation du traitement</li>
                                <li>Droit à la portabilité</li>
                                <li>Droit d'opposition</li>
                            </ul>
                            <p>Pour exercer ces droits, contactez-nous à l'adresse : <a href="mailto:info@adiden.be" class="text-gray-900 hover:text-gray-700 transition-colors">info@adiden.be</a></p>
                            <p>Pour toute réclamation, vous pouvez vous adresser à l'<a href="https://www.autoriteprotectiondonnees.be" target="_blank" rel="noopener noreferrer" class="text-gray-900 hover:text-gray-700 transition-colors underline">Autorité de protection des données</a>.</p>
                        </div>
                    </section>

                    <!-- Cookies -->
                    <section>
                        <h2 class="text-2xl font-light text-gray-900 mb-6 border-l-2 border-gray-900 pl-6">
                            Cookies
                        </h2>
                        <div class="text-gray-700 font-light space-y-3">
                            <p>Notre site peut utiliser des cookies techniques nécessaires à son bon fonctionnement ainsi que, le cas échéant, des cookies de mesure d'audience. Vous pouvez configurer votre navigateur pour refuser les cookies non essentiels.</p>
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
                            <p><span class="font-normal">Crédits :</span> <a href="tel:+32483508818" class="hover:text-gray-900 transition-colors">0483 508 818</a></p>
                            <p class="mt-4"><a href="mailto:info@adiden.be" class="hover:text-gray-900 transition-colors">info@adiden.be</a></p>
                        </div>
                    </section>

                    <!-- Dernière mise à jour -->
                    <div class="text-center text-sm text-gray-500 font-light pt-8 border-t border-gray-200">
                        <p>Dernière mise à jour : Juillet 2026</p>
                    </div>

                </div>
            </div>
        </div>
    </MainLayout>
</template>
