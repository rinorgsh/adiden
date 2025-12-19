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
        { name: 'BNP Paribas', logo: '/images/bnp.png' },
        { name: 'Belfius', logo: '/images/belfius.png' },
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

<template>
    <section class="py-12 sm:py-16 lg:py-28 bg-white">
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
                <div class="flex items-center gap-2 sm:gap-3 mb-4 sm:mb-6 lg:mb-8">
                    <div class="w-1 h-1 rounded-full bg-gray-400"></div>
                    <h3 class="text-[10px] sm:text-xs font-light text-gray-500 uppercase tracking-[0.2em] sm:tracking-[0.3em]">Assurances</h3>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-7 gap-3 sm:gap-4">
                    <div
                        v-for="partner in partners.assurances"
                        :key="partner.name"
                        class="group relative aspect-[4/3] rounded-lg border border-gray-200 hover:border-gray-300 bg-white p-4 sm:p-3 flex items-center justify-center transition-all duration-300"
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
                <div class="flex items-center gap-2 sm:gap-3 mb-4 sm:mb-6 lg:mb-8">
                    <div class="w-1 h-1 rounded-full bg-gray-400"></div>
                    <h3 class="text-[10px] sm:text-xs font-light text-gray-500 uppercase tracking-[0.2em] sm:tracking-[0.3em]">Crédit</h3>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-7 gap-3 sm:gap-4">
                    <div
                        v-for="partner in partners.credit"
                        :key="partner.name"
                        class="group relative aspect-[4/3] rounded-lg border border-gray-200 hover:border-gray-300 bg-white p-4 sm:p-3 flex items-center justify-center transition-all duration-300"
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
                <div class="flex items-center gap-2 sm:gap-3 mb-4 sm:mb-6 lg:mb-8">
                    <div class="w-1 h-1 rounded-full bg-gray-400"></div>
                    <h3 class="text-[10px] sm:text-xs font-light text-gray-500 uppercase tracking-[0.2em] sm:tracking-[0.3em]">Leasing</h3>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-2 gap-3 sm:gap-4 max-w-md">
                    <div
                        v-for="partner in partners.leasing"
                        :key="partner.name"
                        class="group relative aspect-[4/3] rounded-lg border border-gray-200 hover:border-gray-300 bg-white p-4 sm:p-3 flex items-center justify-center transition-all duration-300"
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
