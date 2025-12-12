<script setup>
defineEmits(['openQuoteModal']);
</script>

<template>
    <section id="apropos" class="relative py-12 sm:py-16 lg:py-28 overflow-hidden bg-black">
        <div class="container mx-auto px-4 sm:px-6 lg:px-12">

            <!-- Header -->
            <div class="text-center mb-10 sm:mb-12 lg:mb-16">
                <p class="text-[10px] sm:text-xs font-light text-white/40 uppercase tracking-[0.2em] sm:tracking-[0.3em] mb-3 sm:mb-6">Notre équipe</p>
                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-light text-white mb-2 sm:mb-4 px-4">
                    Des experts à <span class="font-normal">votre service</span>
                </h2>
                <p class="text-sm sm:text-base lg:text-lg text-white/50 font-light max-w-2xl mx-auto px-4">
                    Une équipe de professionnels certifiés pour vous accompagner
                </p>
            </div>

            <!-- Team Grid -->
            <div class="max-w-6xl mx-auto">
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 lg:gap-8 mb-6 sm:mb-8">
                    <!-- Membre 1 -->
                    <div class="group">
                        <div class="relative aspect-[3/4] rounded-xl sm:rounded-2xl overflow-hidden mb-3 sm:mb-4 bg-white/5">
                            <img
                                src="/images/emin.jpg"
                                alt="Emin Hasani"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        <div class="text-center">
                            <h3 class="text-base sm:text-lg lg:text-xl font-light text-white mb-1">Emin Hasani</h3>
                            <p class="text-xs sm:text-sm text-white/50 font-light">Expert en assurance</p>
                        </div>
                    </div>

                    <!-- Membre 2 -->
                    <div class="group">
                        <div class="relative aspect-[3/4] rounded-xl sm:rounded-2xl overflow-hidden mb-3 sm:mb-4 bg-white/5">
                            <img
                                src="/images/adem.jpg"
                                alt="Adem Hasani"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        <div class="text-center">
                            <h3 class="text-base sm:text-lg lg:text-xl font-light text-white mb-1">Adem Hasani</h3>
                            <p class="text-xs sm:text-sm text-white/50 font-light">Expert et conseiller en crédit</p>
                        </div>
                    </div>

                    <!-- Membre 3 -->
                    <div class="group">
                        <div class="relative aspect-[3/4] rounded-xl sm:rounded-2xl overflow-hidden mb-3 sm:mb-4 bg-white/5">
                            <img
                                src="/images/deniz.jpg"
                                alt="Deniz Aktas"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        <div class="text-center">
                            <h3 class="text-base sm:text-lg lg:text-xl font-light text-white mb-1">Deniz Aktas</h3>
                            <p class="text-xs sm:text-sm text-white/50 font-light">Expert et conseillère en crédit hypothécaire</p>
                        </div>
                    </div>
                </div>

                <!-- Photo d'équipe grande -->
                <div class="relative aspect-[16/9] sm:aspect-[21/10] lg:aspect-[21/9] rounded-xl sm:rounded-2xl overflow-hidden bg-white/5 group">
                    <img
                        src="/images/3.jpg"
                        alt="Équipe Adiden Finances"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>

                    <!-- Texte overlay -->
                    <div class="absolute bottom-0 left-0 right-0 p-4 sm:p-6 lg:p-12">
                        <div class="max-w-3xl">
                            <p class="text-white/80 font-light mb-3 sm:mb-4 text-sm sm:text-base lg:text-lg">
                                Une équipe passionnée, à votre écoute depuis plus de 15 ans
                            </p>
                            <button
                                @click="$emit('openQuoteModal')"
                                class="inline-flex items-center gap-2 sm:gap-3 bg-white text-black px-5 py-3 sm:px-8 sm:py-4 rounded-full font-light text-sm sm:text-base lg:text-lg tracking-wide hover:bg-white/90 transition-all duration-300 group"
                            >
                                <span>Rencontrer l'équipe</span>
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</template>
