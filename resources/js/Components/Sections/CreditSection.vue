<template>
    <section id="credit" class="relative py-24 md:py-32 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 md:px-12">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <!-- Left: Content -->
                <div class="order-2 lg:order-1">
                    <div class="inline-block mb-4">
                        <span class="text-sm font-light tracking-[0.2em] uppercase text-gray-500">
                            Crédit
                        </span>
                    </div>
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-light text-gray-900 mb-6">
                        Crédit Hypothécaire
                    </h2>
                    <p class="text-lg md:text-xl text-gray-600 font-light mb-10 leading-relaxed">
                        Concrétisez votre projet immobilier avec les meilleures conditions du marché
                    </p>

                    <!-- Benefits List -->
                    <ul class="space-y-5 mb-10">
                        <li class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-light text-gray-900 mb-1">Taux compétitifs</h4>
                                <p class="text-gray-600 font-light">Négociation avec plus de 20 banques partenaires</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-light text-gray-900 mb-1">Accompagnement personnalisé</h4>
                                <p class="text-gray-600 font-light">Un conseiller dédié de A à Z</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-light text-gray-900 mb-1">100% gratuit</h4>
                                <p class="text-gray-600 font-light">Aucun frais de courtage, rémunération par les banques</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-light text-gray-900 mb-1">Gain de temps</h4>
                                <p class="text-gray-600 font-light">Un seul dossier pour toutes les banques</p>
                            </div>
                        </li>
                    </ul>

                    <!-- CTA Button -->
                    <button class="group inline-flex items-center gap-3 bg-black text-white px-8 py-4 rounded-full font-light text-lg hover:bg-gray-900 transition-all duration-300 shadow-lg shadow-black/20 hover:shadow-xl hover:shadow-black/30 hover:scale-105">
                        <span>Simuler Mon Crédit</span>
                        <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </button>
                </div>

                <!-- Right: Illustration -->
                <div class="order-1 lg:order-2 relative">
                    <div class="relative">
                        <!-- Main Illustration Card -->
                        <div class="relative bg-gradient-to-br from-gray-900 to-black rounded-3xl p-12 shadow-2xl">
                            <!-- House Icon -->
                            <div class="relative z-10">
                                <svg class="w-full h-auto text-white opacity-10" viewBox="0 0 200 200" fill="currentColor">
                                    <path d="M100 20L20 80v100h60v-60h40v60h60V80L100 20zm0 20l60 45v75h-20v-60H60v60H40v-75l60-45z"/>
                                </svg>
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <svg class="w-32 h-32 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                    </svg>
                                </div>
                            </div>

                            <!-- Floating Badges -->
                            <div class="absolute -top-6 -left-6 bg-white rounded-2xl px-6 py-3 shadow-xl">
                                <div class="text-sm font-light text-gray-500">Taux dès</div>
                                <div class="text-2xl font-light text-gray-900">2.5%</div>
                            </div>

                            <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl px-6 py-3 shadow-xl">
                                <div class="text-sm font-light text-gray-500">Partenaires</div>
                                <div class="text-2xl font-light text-gray-900">+20 Banques</div>
                            </div>
                        </div>

                        <!-- Decorative Elements -->
                        <div class="absolute -top-8 -right-8 w-32 h-32 bg-black/5 rounded-full blur-2xl"></div>
                        <div class="absolute -bottom-8 -left-8 w-32 h-32 bg-black/5 rounded-full blur-2xl"></div>
                    </div>

                    <!-- Stats -->
                    <div class="grid grid-cols-2 gap-4 mt-8">
                        <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                            <div class="text-3xl font-light text-gray-900 mb-1">48h</div>
                            <div class="text-sm font-light text-gray-600">Accord de principe</div>
                        </div>
                        <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                            <div class="text-3xl font-light text-gray-900 mb-1">100%</div>
                            <div class="text-sm font-light text-gray-600">Digital</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Background decorations -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-gray-100 rounded-full blur-3xl opacity-50 translate-x-1/3 -translate-y-1/3"></div>
    </section>
</template>

<script setup>
</script>
