<template>
    <section class="relative py-24 md:py-32 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 md:px-12">
            <!-- Header -->
            <div class="text-center mb-16 md:mb-20">
                <div class="inline-block mb-4">
                    <span class="text-sm font-light tracking-[0.2em] uppercase text-gray-500">
                        Processus
                    </span>
                </div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-light text-gray-900 mb-6">
                    Comment Ça Marche ?
                </h2>
                <p class="text-lg md:text-xl text-gray-600 font-light max-w-3xl mx-auto">
                    Un parcours simple et efficace en 3 étapes
                </p>
            </div>

            <!-- Timeline -->
            <div class="relative">
                <!-- Connection Line (Desktop) -->
                <div class="hidden lg:block absolute top-24 left-0 right-0 h-0.5 bg-gradient-to-r from-transparent via-gray-200 to-transparent"></div>

                <!-- Steps Grid -->
                <div class="grid md:grid-cols-3 gap-12 lg:gap-16">
                    <!-- Step 1: Comparez -->
                    <div class="relative group">
                        <!-- Step Number -->
                        <div class="relative mb-8">
                            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-black to-gray-800 rounded-full text-white text-2xl font-light shadow-xl shadow-black/20 group-hover:scale-110 transition-transform duration-500 relative z-10">
                                01
                            </div>
                            <div class="absolute inset-0 bg-black/10 rounded-full blur-xl"></div>
                        </div>

                        <!-- Icon -->
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-gray-100 rounded-2xl mb-6 group-hover:bg-black group-hover:scale-110 transition-all duration-500">
                            <svg class="w-8 h-8 text-gray-900 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>

                        <!-- Content -->
                        <h3 class="text-2xl md:text-3xl font-light mb-4 text-gray-900">
                            Comparez
                        </h3>
                        <p class="text-gray-600 font-light leading-relaxed mb-4">
                            Remplissez notre formulaire en ligne en quelques minutes. Notre algorithme analyse
                            votre profil et compare des centaines d'offres.
                        </p>
                        <p class="text-sm font-light text-gray-500">
                            Devis personnalisés instantanés
                        </p>

                        <!-- Decorative Arrow (Desktop) -->
                        <div class="hidden lg:block absolute top-24 -right-8 text-gray-300">
                            <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </div>
                    </div>

                    <!-- Step 2: Choisissez -->
                    <div class="relative group">
                        <!-- Step Number -->
                        <div class="relative mb-8">
                            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-black to-gray-800 rounded-full text-white text-2xl font-light shadow-xl shadow-black/20 group-hover:scale-110 transition-transform duration-500 relative z-10">
                                02
                            </div>
                            <div class="absolute inset-0 bg-black/10 rounded-full blur-xl"></div>
                        </div>

                        <!-- Icon -->
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-gray-100 rounded-2xl mb-6 group-hover:bg-black group-hover:scale-110 transition-all duration-500">
                            <svg class="w-8 h-8 text-gray-900 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11"/>
                            </svg>
                        </div>

                        <!-- Content -->
                        <h3 class="text-2xl md:text-3xl font-light mb-4 text-gray-900">
                            Choisissez
                        </h3>
                        <p class="text-gray-600 font-light leading-relaxed mb-4">
                            Un conseiller expert vous contacte pour vous aider à comprendre les offres et
                            choisir celle qui correspond le mieux à vos besoins.
                        </p>
                        <p class="text-sm font-light text-gray-500">
                            Accompagnement personnalisé gratuit
                        </p>

                        <!-- Decorative Arrow (Desktop) -->
                        <div class="hidden lg:block absolute top-24 -right-8 text-gray-300">
                            <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </div>
                    </div>

                    <!-- Step 3: Signez -->
                    <div class="relative group">
                        <!-- Step Number -->
                        <div class="relative mb-8">
                            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-black to-gray-800 rounded-full text-white text-2xl font-light shadow-xl shadow-black/20 group-hover:scale-110 transition-transform duration-500 relative z-10">
                                03
                            </div>
                            <div class="absolute inset-0 bg-black/10 rounded-full blur-xl"></div>
                        </div>

                        <!-- Icon -->
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-gray-100 rounded-2xl mb-6 group-hover:bg-black group-hover:scale-110 transition-all duration-500">
                            <svg class="w-8 h-8 text-gray-900 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                        </div>

                        <!-- Content -->
                        <h3 class="text-2xl md:text-3xl font-light mb-4 text-gray-900">
                            Signez
                        </h3>
                        <p class="text-gray-600 font-light leading-relaxed mb-4">
                            Souscrivez directement en ligne de manière 100% digitale et sécurisée. Votre
                            contrat est actif immédiatement.
                        </p>
                        <p class="text-sm font-light text-gray-500">
                            Souscription digitale rapide
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bottom CTA -->
            <div class="text-center mt-16">
                <div class="inline-flex items-center gap-2 text-sm font-light text-gray-500">
                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>En moyenne 15 minutes du début à la fin</span>
                </div>
            </div>
        </div>

        <!-- Background decorations -->
        <div class="absolute top-1/3 left-0 w-96 h-96 bg-gray-100 rounded-full blur-3xl opacity-50 -translate-x-1/2"></div>
        <div class="absolute bottom-1/3 right-0 w-96 h-96 bg-gray-100 rounded-full blur-3xl opacity-50 translate-x-1/2"></div>
    </section>
</template>

<script setup>
</script>
