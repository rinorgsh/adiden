<script setup>
defineEmits(['openQuoteModal']);
</script>

<template>
    <section class="relative min-h-screen overflow-hidden">
        <!-- Background Image avec overlay -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070');">
            </div>
            <!-- Dark overlay for better text readability -->
            <div class="absolute inset-0 bg-gradient-to-br from-black/70 via-black/60 to-black/75"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 h-full">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 xl:px-12">
                <div class="min-h-screen flex items-center py-24 sm:py-28 lg:py-32">
                    <div class="w-full">
                        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 xl:gap-20 items-center">

                            <!-- LEFT SIDE - Texte & Infos -->
                            <div class="text-white space-y-8 sm:space-y-10 lg:space-y-12">

                                <!-- Phrase d'accroche -->
                                <div class="space-y-4 sm:space-y-5 lg:space-y-6 animate-fade-in">
                                    <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl font-light leading-[1.1]">
                                        L'excellence au service
                                        <span class="block font-extralight italic mt-2 sm:mt-3">de vos projets</span>
                                    </h1>
                                    <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-white/70 font-light leading-relaxed max-w-2xl">
                                        Courtier indépendant spécialisé en assurances et crédits depuis 15 ans
                                    </p>
                                </div>

                                <!-- FSMA Badge Raffiné -->
                                <div class="animate-fade-in-delay">
                                    <div class="inline-flex items-center gap-4 border-l-2 border-white/40 pl-5 sm:pl-6">
                                        <svg class="w-6 h-6 sm:w-7 sm:h-7 text-white/60 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        <div>
                                            <p class="text-xs sm:text-sm font-light text-white/50 uppercase tracking-[0.2em] mb-1">Courtier agréé FSMA</p>
                                            <p class="text-sm sm:text-base font-light text-white/80">N° 60 622 & 46 400</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Stats luxueux -->
                                <div class="grid grid-cols-3 gap-4 sm:gap-6 lg:gap-8 animate-fade-in-delay-2">
                                    <!-- 15 ans -->
                                    <div class="border-l-2 border-white/30 pl-3 sm:pl-4 lg:pl-5">
                                        <p class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-light text-white mb-1 sm:mb-2">15+</p>
                                        <p class="text-[10px] sm:text-xs md:text-sm text-white/50 font-light uppercase tracking-wider leading-tight">Ans d'expertise</p>
                                    </div>
                                    <!-- Clients -->
                                    <div class="border-l-2 border-white/30 pl-3 sm:pl-4 lg:pl-5">
                                        <p class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-light text-white mb-1 sm:mb-2">2500+</p>
                                        <p class="text-[10px] sm:text-xs md:text-sm text-white/50 font-light uppercase tracking-wider leading-tight">Clients</p>
                                    </div>
                                    <!-- Satisfaction -->
                                    <div class="border-l-2 border-white/30 pl-3 sm:pl-4 lg:pl-5">
                                        <p class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-light text-white mb-1 sm:mb-2">98%</p>
                                        <p class="text-[10px] sm:text-xs md:text-sm text-white/50 font-light uppercase tracking-wider leading-tight">Satisfaction</p>
                                    </div>
                                </div>

                                <!-- CTA Buttons Mobile & Tablet -->
                                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 lg:hidden animate-fade-in-delay-3">
                                    <!-- Demander un devis -->
                                    <button
                                        @click="$emit('openQuoteModal')"
                                        class="group flex items-center justify-center gap-3 bg-white text-black px-8 py-4 rounded-full font-light text-base sm:text-lg tracking-wide hover:bg-white/90 transition-all duration-300 shadow-lg shadow-white/10"
                                    >
                                        <span>Demander un devis</span>
                                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                        </svg>
                                    </button>

                                    <!-- Nous appeler -->
                                    <a
                                        href="tel:+32123456789"
                                        class="group flex items-center justify-center gap-3 border-2 border-white/30 text-white px-8 py-4 rounded-full font-light text-base sm:text-lg tracking-wide hover:bg-white/5 transition-all duration-300"
                                    >
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                                        </svg>
                                        <span>Nous appeler</span>
                                    </a>
                                </div>

                            </div>

                            <!-- RIGHT SIDE - Valeurs & Services (Desktop Only) -->
                            <div class="hidden lg:flex flex-col space-y-8 animate-fade-in-delay-4">

                                <!-- Nos valeurs -->
                                <div class="space-y-6">
                                    <h2 class="text-sm font-light text-white/50 uppercase tracking-[0.3em]">Nos engagements</h2>

                                    <div class="space-y-6">
                                        <!-- Indépendance -->
                                        <div class="flex items-start gap-4 group">
                                            <div class="w-1.5 h-1.5 rounded-full bg-white/60 mt-2.5 flex-shrink-0"></div>
                                            <div class="space-y-2">
                                                <h3 class="text-xl xl:text-2xl font-light text-white">Indépendance totale</h3>
                                                <p class="text-white/50 font-light text-sm xl:text-base leading-relaxed">
                                                    Comparaison objective de plus de 50 compagnies d'assurance et organismes de crédit
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Expertise -->
                                        <div class="flex items-start gap-4 group">
                                            <div class="w-1.5 h-1.5 rounded-full bg-white/60 mt-2.5 flex-shrink-0"></div>
                                            <div class="space-y-2">
                                                <h3 class="text-xl xl:text-2xl font-light text-white">Expertise reconnue</h3>
                                                <p class="text-white/50 font-light text-sm xl:text-base leading-relaxed">
                                                    Équipe de conseillers certifiés spécialisés en assurances et financement
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Accompagnement -->
                                        <div class="flex items-start gap-4 group">
                                            <div class="w-1.5 h-1.5 rounded-full bg-white/60 mt-2.5 flex-shrink-0"></div>
                                            <div class="space-y-2">
                                                <h3 class="text-xl xl:text-2xl font-light text-white">Accompagnement sur-mesure</h3>
                                                <p class="text-white/50 font-light text-sm xl:text-base leading-relaxed">
                                                    Suivi personnalisé de A à Z, de l'analyse de vos besoins à la gestion de vos contrats
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Transparence -->
                                        <div class="flex items-start gap-4 group">
                                            <div class="w-1.5 h-1.5 rounded-full bg-white/60 mt-2.5 flex-shrink-0"></div>
                                            <div class="space-y-2">
                                                <h3 class="text-xl xl:text-2xl font-light text-white">Transparence absolue</h3>
                                                <p class="text-white/50 font-light text-sm xl:text-base leading-relaxed">
                                                    Devis clairs, sans frais cachés, et conseil 100% gratuit
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- CTA Buttons Desktop -->
                                <div class="flex flex-col gap-4 pt-4">
                                    <!-- Demander un devis -->
                                    <button
                                        @click="$emit('openQuoteModal')"
                                        class="group flex items-center justify-center gap-3 bg-white text-black px-8 py-4 rounded-full font-light text-lg tracking-wide hover:bg-white/90 transition-all duration-300 shadow-lg shadow-white/10"
                                    >
                                        <span>Demander un devis</span>
                                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                        </svg>
                                    </button>

                                    <!-- Nous appeler -->
                                    <a
                                        href="tel:+32123456789"
                                        class="group flex items-center justify-center gap-3 border-2 border-white/30 text-white px-8 py-4 rounded-full font-light text-lg tracking-wide hover:bg-white/5 transition-all duration-300"
                                    >
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                                        </svg>
                                        <span>Nous appeler</span>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce hidden sm:block">
            <svg class="w-6 h-6 text-white/50" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
            </svg>
        </div>
    </section>
</template>

<style scoped>
@keyframes fade-in {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in {
    animation: fade-in 1s ease-out;
}

.animate-fade-in-delay {
    animation: fade-in 1s ease-out 0.2s both;
}

.animate-fade-in-delay-2 {
    animation: fade-in 1s ease-out 0.4s both;
}

.animate-fade-in-delay-3 {
    animation: fade-in 1s ease-out 0.6s both;
}

.animate-fade-in-delay-4 {
    animation: fade-in 1s ease-out 0.8s both;
}

/* Smooth transitions */
button,
a {
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}
</style>