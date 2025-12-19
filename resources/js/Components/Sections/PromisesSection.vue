<template>
    <section id="promesses" class="relative py-24 md:py-32 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 md:px-12">
            <!-- Header -->
            <div class="text-center mb-16 md:mb-20">
                <div class="inline-block mb-4">
                    <span class="text-sm font-light tracking-[0.2em] uppercase text-gray-500">
                        Nos Valeurs
                    </span>
                </div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-light text-gray-900 mb-6">
                    Nos 3 Promesses
                </h2>
                <p class="text-lg md:text-xl text-gray-600 font-light max-w-3xl mx-auto">
                    Nous mettons tout en œuvre pour vous offrir la meilleure expérience
                </p>
            </div>

            <!-- Promises Grid -->
            <div class="grid md:grid-cols-3 gap-8 md:gap-12">
                <!-- Promise 1: Simple -->
                <div class="group relative">
                    <div class="relative bg-gradient-to-br from-white to-gray-50 rounded-3xl p-8 md:p-10 border border-gray-100 hover:border-black/20 transition-all duration-500 hover:shadow-2xl hover:shadow-black/5 hover:-translate-y-2">
                        <!-- Icon -->
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-black rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>

                        <!-- Content -->
                        <h3 class="text-2xl md:text-3xl font-light mb-4 text-gray-900">
                            Simple
                        </h3>
                        <p class="text-gray-600 font-light leading-relaxed">
                            Une plateforme intuitive et claire. Comparez, choisissez et souscrivez en quelques clics sans aucune complexité.
                        </p>

                        <!-- Decorative element -->
                        <div class="absolute -bottom-2 -right-2 w-24 h-24 bg-black/5 rounded-full blur-2xl group-hover:bg-black/10 transition-all duration-500"></div>
                    </div>
                </div>

                <!-- Promise 2: Rapide -->
                <div class="group relative">
                    <div class="relative bg-gradient-to-br from-white to-gray-50 rounded-3xl p-8 md:p-10 border border-gray-100 hover:border-black/20 transition-all duration-500 hover:shadow-2xl hover:shadow-black/5 hover:-translate-y-2">
                        <!-- Icon -->
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-black rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>

                        <!-- Content -->
                        <h3 class="text-2xl md:text-3xl font-light mb-4 text-gray-900">
                            Rapide
                        </h3>
                        <p class="text-gray-600 font-light leading-relaxed">
                            Obtenez votre devis personnalisé en moins de 3 minutes. Un processus optimisé pour gagner du temps.
                        </p>

                        <!-- Decorative element -->
                        <div class="absolute -bottom-2 -right-2 w-24 h-24 bg-black/5 rounded-full blur-2xl group-hover:bg-black/10 transition-all duration-500"></div>
                    </div>
                </div>

                <!-- Promise 3: À Vos Côtés -->
                <div class="group relative">
                    <div class="relative bg-gradient-to-br from-white to-gray-50 rounded-3xl p-8 md:p-10 border border-gray-100 hover:border-black/20 transition-all duration-500 hover:shadow-2xl hover:shadow-black/5 hover:-translate-y-2">
                        <!-- Icon -->
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-black rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                        </div>

                        <!-- Content -->
                        <h3 class="text-2xl md:text-3xl font-light mb-4 text-gray-900">
                            À Vos Côtés
                        </h3>
                        <p class="text-gray-600 font-light leading-relaxed">
                            Des conseillers experts disponibles pour vous accompagner à chaque étape de votre projet.
                        </p>

                        <!-- Decorative element -->
                        <div class="absolute -bottom-2 -right-2 w-24 h-24 bg-black/5 rounded-full blur-2xl group-hover:bg-black/10 transition-all duration-500"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Background decoration -->
        <div class="absolute top-0 left-0 w-96 h-96 bg-gray-100/50 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-gray-100/50 rounded-full blur-3xl translate-x-1/2 translate-y-1/2"></div>
    </section>
</template>

<script setup>
</script>
