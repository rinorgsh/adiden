<script setup>
defineEmits(['openQuoteModal']);

// Partenaires organisés par catégorie
const partners = {
    assurances: [
        { name: 'AXA', logo: '/images/axa.png' },
        { name: 'AG Insurance', logo: '/images/ag2.jpg' },
        { name: 'Aviva', logo: '/images/aviza.png' },
        { name: 'Cardif', logo: '/images/cardif.jpeg' },
        { name: 'NN', logo: '/images/nn.png' },
        { name: 'Europ Assistance', logo: '/images/europ.png' },
        { name: 'ARAG', logo: '/images/arag.png' }
    ],
    credit: [
        { name: 'BNP Paribas Credit Broker', logo: '/images/bnpbrokers.png' },
        { name: 'Elantis', logo: '/images/elantis.png' },
        { name: 'BankB', logo: '/images/bankb.webp' },
        { name: 'Europabank', logo: '/images/eurobank.jpg' },
        { name: 'AlphaCredit', logo: '/images/alpha.jpg' },
        { name: 'Cofidis', logo: '/images/cofidis.png' },
        { name: 'Creafin', logo: '/images/creafin.png' },
        { name: 'Record Credits', logo: '/images/records.png' }
    ],
    leasing: [
        { name: 'Fina Lease', logo: '/images/finallease.png' },
        { name: 'Go4Lease', logo: '/images/go4lease.png' }
    ]
};
</script>

<style scoped>
/* Masquer la scrollbar tout en gardant le scroll fonctionnel */
.scrollbar-hide {
    -ms-overflow-style: none;  /* IE et Edge */
    scrollbar-width: none;  /* Firefox */
}

.scrollbar-hide::-webkit-scrollbar {
    display: none;  /* Chrome, Safari et Opera */
}

/* Animation de défilement infini */
@keyframes scroll {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(calc(-100% / 3));
    }
}

@keyframes scroll-slow {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(calc(-100% / 3));
    }
}

.animate-scroll {
    animation: scroll 40s linear infinite;
    will-change: transform;
}

.animate-scroll-slow {
    animation: scroll-slow 45s linear infinite;
    will-change: transform;
}

/* Pause l'animation pendant le scroll tactile */
.overflow-x-auto:active .slider-track,
.overflow-x-auto:hover .slider-track {
    animation-play-state: paused;
}

/* Smooth scrolling sur mobile */
.scroll-smooth {
    -webkit-overflow-scrolling: touch;
}

/* Empêcher le bounce sur les bords */
.overscroll-x-contain {
    overscroll-behavior-x: contain;
}
</style>

<template>
    <section class="py-12 sm:py-16 lg:py-28 bg-white overflow-hidden">
        <div class="container mx-auto px-4 sm:px-6 lg:px-12">

            <!-- Header minimaliste -->
            <div class="text-center mb-10 sm:mb-12 lg:mb-16">
                <p class="text-[10px] sm:text-xs font-light text-gray-400 uppercase tracking-[0.2em] sm:tracking-[0.3em] mb-3 sm:mb-4">Nos partenaires</p>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-light text-gray-900 mb-2 sm:mb-3 px-4">
                    Plus de <span class="font-normal">20 partenaires</span>
                </h2>
                <p class="text-sm sm:text-base text-gray-600 font-light max-w-2xl mx-auto px-4">
                    Pour vous offrir les meilleures solutions
                </p>
            </div>

            <!-- Assurances -->
            <div class="mb-10 sm:mb-12 lg:mb-16">
                <div class="flex items-center gap-2 sm:gap-3 mb-4 sm:mb-6 lg:mb-8 px-4 sm:px-0">
                    <div class="w-1 h-1 rounded-full bg-gray-400"></div>
                    <h3 class="text-[10px] sm:text-xs font-light text-gray-500 uppercase tracking-[0.2em] sm:tracking-[0.3em]">Assurances</h3>
                </div>

                <!-- Mobile: Slider -->
                <div class="md:hidden relative">
                    <div class="overflow-x-auto scrollbar-hide scroll-smooth overscroll-x-contain">
                        <div class="slider-track flex gap-4 animate-scroll px-4">
                            <!-- Duplicated for infinite scroll -->
                            <div
                                v-for="(partner, index) in [...partners.assurances, ...partners.assurances, ...partners.assurances]"
                                :key="`assurance-${index}`"
                                class="flex-shrink-0 w-32 h-24 rounded-lg border border-gray-200 bg-white p-3 flex items-center justify-center transition-transform active:scale-95"
                            >
                                <img
                                    :src="partner.logo"
                                    :alt="partner.name"
                                    class="max-w-full max-h-full object-contain pointer-events-none"
                                    @error="(e) => { e.target.style.display = 'none'; e.target.nextElementSibling.style.display = 'block'; }"
                                />
                                <span class="hidden text-xs font-light text-gray-500 text-center">{{ partner.name }}</span>
                            </div>
                        </div>
                    </div>
                    <!-- Gradient overlays -->
                    <div class="absolute inset-y-0 left-0 w-8 bg-gradient-to-r from-white to-transparent pointer-events-none z-10"></div>
                    <div class="absolute inset-y-0 right-0 w-8 bg-gradient-to-l from-white to-transparent pointer-events-none z-10"></div>
                </div>

                <!-- Tablet & Desktop: Grid -->
                <div class="hidden md:grid md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-7 gap-3 sm:gap-4">
                    <div
                        v-for="partner in partners.assurances"
                        :key="partner.name"
                        class="group relative aspect-[4/3] rounded-lg border border-gray-200 hover:border-gray-300 bg-white p-3 flex items-center justify-center transition-all duration-300"
                    >
                        <img
                            :src="partner.logo"
                            :alt="partner.name"
                            class="max-w-full max-h-full object-contain transition-all duration-300 group-hover:scale-105"
                            @error="(e) => { e.target.style.display = 'none'; e.target.nextElementSibling.style.display = 'block'; }"
                        />
                        <span class="hidden text-xs font-light text-gray-500 text-center">{{ partner.name }}</span>
                    </div>
                </div>
            </div>

            <!-- Crédit -->
            <div class="mb-10 sm:mb-12 lg:mb-16">
                <div class="flex items-center gap-2 sm:gap-3 mb-4 sm:mb-6 lg:mb-8 px-4 sm:px-0">
                    <div class="w-1 h-1 rounded-full bg-gray-400"></div>
                    <h3 class="text-[10px] sm:text-xs font-light text-gray-500 uppercase tracking-[0.2em] sm:tracking-[0.3em]">Crédit</h3>
                </div>

                <!-- Mobile: Slider -->
                <div class="md:hidden relative">
                    <div class="overflow-x-auto scrollbar-hide scroll-smooth overscroll-x-contain">
                        <div class="slider-track flex gap-4 animate-scroll-slow px-4">
                            <!-- Duplicated for infinite scroll -->
                            <div
                                v-for="(partner, index) in [...partners.credit, ...partners.credit, ...partners.credit]"
                                :key="`credit-${index}`"
                                class="flex-shrink-0 w-32 h-24 rounded-lg border border-gray-200 bg-white p-3 flex items-center justify-center transition-transform active:scale-95"
                            >
                                <img
                                    :src="partner.logo"
                                    :alt="partner.name"
                                    class="max-w-full max-h-full object-contain pointer-events-none"
                                    @error="(e) => { e.target.style.display = 'none'; e.target.nextElementSibling.style.display = 'block'; }"
                                />
                                <span class="hidden text-xs font-light text-gray-500 text-center">{{ partner.name }}</span>
                            </div>
                        </div>
                    </div>
                    <!-- Gradient overlays -->
                    <div class="absolute inset-y-0 left-0 w-8 bg-gradient-to-r from-white to-transparent pointer-events-none z-10"></div>
                    <div class="absolute inset-y-0 right-0 w-8 bg-gradient-to-l from-white to-transparent pointer-events-none z-10"></div>
                </div>

                <!-- Tablet & Desktop: Grid -->
                <div class="hidden md:grid md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-7 gap-3 sm:gap-4">
                    <div
                        v-for="partner in partners.credit"
                        :key="partner.name"
                        class="group relative aspect-[4/3] rounded-lg border border-gray-200 hover:border-gray-300 bg-white p-3 flex items-center justify-center transition-all duration-300"
                    >
                        <img
                            :src="partner.logo"
                            :alt="partner.name"
                            class="max-w-full max-h-full object-contain transition-all duration-300 group-hover:scale-105"
                            @error="(e) => { e.target.style.display = 'none'; e.target.nextElementSibling.style.display = 'block'; }"
                        />
                        <span class="hidden text-xs font-light text-gray-500 text-center">{{ partner.name }}</span>
                    </div>
                </div>
            </div>

            <!-- Leasing -->
            <div class="mb-10 sm:mb-12 lg:mb-16">
                <div class="flex items-center gap-2 sm:gap-3 mb-4 sm:mb-6 lg:mb-8 px-4 sm:px-0">
                    <div class="w-1 h-1 rounded-full bg-gray-400"></div>
                    <h3 class="text-[10px] sm:text-xs font-light text-gray-500 uppercase tracking-[0.2em] sm:tracking-[0.3em]">Leasing</h3>
                </div>

                <!-- Mobile & Tablet: Simple Grid (only 2 logos) -->
                <div class="flex gap-4 justify-center md:justify-start max-w-md mx-auto md:mx-0">
                    <div
                        v-for="partner in partners.leasing"
                        :key="partner.name"
                        class="flex-1 max-w-[140px] aspect-[4/3] rounded-lg border border-gray-200 hover:border-gray-300 bg-white p-4 flex items-center justify-center transition-all duration-300"
                    >
                        <img
                            :src="partner.logo"
                            :alt="partner.name"
                            class="max-w-full max-h-full object-contain"
                            @error="(e) => { e.target.style.display = 'none'; e.target.nextElementSibling.style.display = 'block'; }"
                        />
                        <span class="hidden text-xs font-light text-gray-500 text-center">{{ partner.name }}</span>
                    </div>
                </div>
            </div>

            <!-- Divider -->
            <div class="h-px bg-gray-200 my-16"></div>

            <!-- CTA minimaliste -->
            <div class="text-center">
                <p class="text-gray-500 font-light mb-6 text-sm">
                    Une question sur nos partenaires ?
                </p>
                <button
                    @click="$emit('openQuoteModal')"
                    class="inline-flex items-center gap-2 text-gray-900 font-light text-sm hover:text-gray-600 transition-colors group"
                >
                    <span>Nous contacter</span>
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </button>
            </div>

        </div>
    </section>
</template>
