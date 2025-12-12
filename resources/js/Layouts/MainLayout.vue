<script setup>
import { ref, onMounted, onUnmounted, computed } from 'vue';
import { Link } from '@inertiajs/vue3';
import QuoteForm from './QuoteForm.vue';

const showQuoteModal = ref(false);
const isDarkBackground = ref(true);
const showMobileMenu = ref(false);
const isScrolled = ref(false);
const activeSection = ref('');

defineProps({
    canLogin: Boolean,
});

const openQuoteModal = () => {
    showQuoteModal.value = true;
    document.body.style.overflow = 'hidden';
};

// Exposer la méthode pour que les composants parents puissent l'appeler
defineExpose({
    openQuoteModal
});

const closeQuoteModal = () => {
    showQuoteModal.value = false;
    document.body.style.overflow = '';
};

const toggleMobileMenu = () => {
    showMobileMenu.value = !showMobileMenu.value;
    if (showMobileMenu.value) {
        document.body.style.overflow = 'hidden';
    } else {
        document.body.style.overflow = '';
    }
};

const closeMobileMenu = () => {
    showMobileMenu.value = false;
    document.body.style.overflow = '';
};

// Navigation smooth scroll
const scrollToSection = (sectionId) => {
    const element = document.querySelector(sectionId);
    if (element) {
        const offset = 100;
        const elementPosition = element.getBoundingClientRect().top;
        const offsetPosition = elementPosition + window.pageYOffset - offset;

        window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
        });
    }
    closeMobileMenu();
};

// Vérifier si le background est sombre
const checkBackgroundColor = () => {
    const header = document.querySelector('header');
    if (!header) return;

    const headerRect = header.getBoundingClientRect();
    const centerY = headerRect.top + headerRect.height / 2;
    const sections = document.querySelectorAll('section');

    // Détecter le scroll
    isScrolled.value = window.scrollY > 50;

    for (const section of sections) {
        const rect = section.getBoundingClientRect();

        if (rect.top <= centerY && rect.bottom >= centerY) {
            const classList = section.className;
            
            // Section active
            if (section.id) {
                activeSection.value = section.id;
            }

            // Background sombre ou clair
            if (classList.includes('bg-black') ||
                classList.includes('bg-gray-900') ||
                classList.includes('bg-gray-800') ||
                classList.includes('bg-slate-900') ||
                classList.includes('from-gray-900') ||
                classList.includes('from-gray-800') ||
                classList.includes('from-black')) {
                isDarkBackground.value = true;
            } else if (classList.includes('bg-white') ||
                       classList.includes('bg-gray-50') ||
                       classList.includes('bg-slate-50') ||
                       classList.includes('from-white') ||
                       classList.includes('from-gray-50') ||
                       classList.includes('from-slate-50')) {
                isDarkBackground.value = false;
            }
            break;
        }
    }
};

// Computed classes
const navClasses = computed(() => {
    const base = 'backdrop-blur-md rounded-full px-6 md:px-8 py-3 md:py-4 transition-all duration-500 ease-out';
    
    if (isScrolled.value) {
        return `${base} ${isDarkBackground.value 
            ? 'bg-white/95 border border-white/30 shadow-2xl shadow-black/10' 
            : 'bg-black/95 border border-black/30 shadow-2xl shadow-white/10'}`;
    }
    
    return `${base} ${isDarkBackground.value
        ? 'bg-white/10 border border-white/20'
        : 'bg-black/10 border border-black/20'}`;
});

const textClasses = computed(() => {
    if (isScrolled.value) {
        return isDarkBackground.value 
            ? 'text-black hover:text-black/60' 
            : 'text-white hover:text-white/60';
    }
    return isDarkBackground.value
        ? 'text-white hover:text-white/70'
        : 'text-black hover:text-black/70';
});

const buttonClasses = computed(() => {
    if (isScrolled.value) {
        return isDarkBackground.value
            ? 'bg-black text-white hover:bg-black/90 shadow-lg shadow-black/20'
            : 'bg-white text-black hover:bg-white/90 shadow-lg shadow-white/20';
    }
    return isDarkBackground.value
        ? 'bg-white text-black hover:bg-white/90'
        : 'bg-black text-white hover:bg-black/90';
});

const mobileIconClasses = computed(() => {
    if (isScrolled.value) {
        return isDarkBackground.value ? 'text-black' : 'text-white';
    }
    return isDarkBackground.value ? 'text-white' : 'text-black';
});

const logoSrc = computed(() => {
    // Si le menu est scrollé et sur fond sombre, le menu devient blanc donc logo noir
    if (isScrolled.value && isDarkBackground.value) {
        return '/images/logo-noir.png';
    }
    // Si le menu est scrollé et sur fond clair, le menu devient noir donc logo blanc
    if (isScrolled.value && !isDarkBackground.value) {
        return '/images/logo.png';
    }
    // Par défaut, logo blanc sur fond transparent sombre, logo noir sur fond transparent clair
    return isDarkBackground.value ? '/images/logo.png' : '/images/logo-noir.png';
});

onMounted(() => {
    checkBackgroundColor();
    window.addEventListener('scroll', checkBackgroundColor);
});

onUnmounted(() => {
    window.removeEventListener('scroll', checkBackgroundColor);
    document.body.style.overflow = '';
});
</script>

<template>
    <div class="min-h-screen">
        <!-- Floating Header -->
        <header class="fixed top-4 md:top-6 left-1/2 -translate-x-1/2 z-50 w-[95%] md:w-full max-w-7xl px-4 md:px-6">
            <nav :class="navClasses">
                <div class="flex items-center justify-between">
                    <!-- Logo -->
                    <Link href="/" class="flex-shrink-0 transition-transform duration-300 hover:scale-105">
                        <img
                            :src="logoSrc"
                            alt="Adiden Finances"
                            class="h-8 md:h-10 lg:h-12 transition-opacity duration-300"
                        />
                    </Link>

                    <!-- Desktop Navigation -->
                    <div class="hidden lg:flex items-center space-x-8 xl:space-x-12">
                        <a
                            href="#assurances"
                            @click.prevent="scrollToSection('#assurances')"
                            :class="textClasses"
                            class="relative font-light tracking-wide transition-all duration-300 group"
                        >
                            <span class="relative z-10">Assurances</span>
                            <span
                                class="absolute inset-x-0 -bottom-1 h-0.5 transform origin-left transition-transform duration-300 scale-x-0 group-hover:scale-x-100"
                                :class="isDarkBackground && !isScrolled ? 'bg-white' : 'bg-black'"
                            ></span>
                        </a>
                        <a
                            href="#credit"
                            @click.prevent="scrollToSection('#credit')"
                            :class="textClasses"
                            class="relative font-light tracking-wide transition-all duration-300 group"
                        >
                            <span class="relative z-10">Crédit</span>
                            <span
                                class="absolute inset-x-0 -bottom-1 h-0.5 transform origin-left transition-transform duration-300 scale-x-0 group-hover:scale-x-100"
                                :class="isDarkBackground && !isScrolled ? 'bg-white' : 'bg-black'"
                            ></span>
                        </a>
                        <a
                            href="#apropos"
                            @click.prevent="scrollToSection('#apropos')"
                            :class="textClasses"
                            class="relative font-light tracking-wide transition-all duration-300 group"
                        >
                            <span class="relative z-10">À propos</span>
                            <span
                                class="absolute inset-x-0 -bottom-1 h-0.5 transform origin-left transition-transform duration-300 scale-x-0 group-hover:scale-x-100"
                                :class="isDarkBackground && !isScrolled ? 'bg-white' : 'bg-black'"
                            ></span>
                        </a>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="hidden lg:flex items-center gap-3">
                        <a
                            href="tel:+32470123456"
                            :class="buttonClasses"
                            class="inline-flex items-center gap-2 px-5 xl:px-6 py-2.5 xl:py-3 rounded-full font-light text-sm tracking-wide transition-all duration-300 transform hover:scale-105"
                        >
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                            </svg>
                            <span>Appeler</span>
                        </a>
                        <button
                            @click="openQuoteModal"
                            :class="buttonClasses"
                            class="inline-flex items-center gap-2 px-5 xl:px-6 py-2.5 xl:py-3 rounded-full font-light text-sm tracking-wide transition-all duration-300 transform hover:scale-105"
                        >
                            <span>Demander un devis</span>
                            <svg class="w-4 h-4 transform transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </button>
                    </div>

                    <!-- Mobile menu button -->
                    <button
                        @click="toggleMobileMenu"
                        class="lg:hidden p-2 rounded-full transition-all duration-300 hover:bg-white/10 relative"
                        :aria-label="showMobileMenu ? 'Fermer le menu' : 'Ouvrir le menu'"
                        :aria-expanded="showMobileMenu"
                    >
                        <!-- Hamburger Icon -->
                        <svg 
                            v-if="!showMobileMenu"
                            :class="mobileIconClasses"
                            class="w-6 h-6 transition-colors duration-300"
                            fill="none" 
                            stroke="currentColor" 
                            viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <!-- Close Icon -->
                        <svg 
                            v-else
                            :class="mobileIconClasses"
                            class="w-6 h-6 transition-colors duration-300"
                            fill="none" 
                            stroke="currentColor" 
                            viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </nav>
        </header>

        <!-- Mobile Menu Overlay -->
        <Transition
            enter-active-class="transition-opacity duration-300"
            enter-from-class="opacity-0"
            enter-to-class="opacity-100"
            leave-active-class="transition-opacity duration-300"
            leave-from-class="opacity-100"
            leave-to-class="opacity-0"
        >
            <div
                v-if="showMobileMenu"
                class="fixed inset-0 bg-black/60 backdrop-blur-md z-40 lg:hidden"
                @click="closeMobileMenu"
            ></div>
        </Transition>

        <!-- Mobile Menu Panel -->
        <Transition
            enter-active-class="transition-transform duration-500 ease-out"
            enter-from-class="translate-x-full"
            enter-to-class="translate-x-0"
            leave-active-class="transition-transform duration-500 ease-in"
            leave-from-class="translate-x-0"
            leave-to-class="translate-x-full"
        >
            <div
                v-if="showMobileMenu"
                class="fixed top-0 right-0 bottom-0 w-full sm:w-96 bg-white z-50 lg:hidden overflow-y-auto"
            >
                <div class="flex flex-col h-full">
                    <!-- Header -->
                    <div class="flex items-center justify-between p-6 border-b border-gray-100">
                        <img
                            src="/images/logo-noir.png"
                            alt="Adiden Finances"
                            class="h-10"
                        />
                        <button
                            @click="closeMobileMenu"
                            class="p-2 rounded-full hover:bg-gray-100 transition-colors"
                            aria-label="Fermer le menu"
                        >
                            <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>

                    <!-- Navigation Links -->
                    <nav class="flex-1 p-6 space-y-2">
                        <a
                            href="#assurances"
                            @click.prevent="scrollToSection('#assurances')"
                            class="flex items-center justify-between group px-4 py-4 rounded-xl hover:bg-gray-50 transition-all duration-300"
                        >
                            <span class="text-lg font-light text-gray-900 group-hover:text-black transition-colors">
                                Assurances
                            </span>
                            <svg class="w-5 h-5 text-gray-400 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>

                        <a
                            href="#credit"
                            @click.prevent="scrollToSection('#credit')"
                            class="flex items-center justify-between group px-4 py-4 rounded-xl hover:bg-gray-50 transition-all duration-300"
                        >
                            <span class="text-lg font-light text-gray-900 group-hover:text-black transition-colors">
                                Crédit
                            </span>
                            <svg class="w-5 h-5 text-gray-400 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>

                        <a
                            href="#apropos"
                            @click.prevent="scrollToSection('#apropos')"
                            class="flex items-center justify-between group px-4 py-4 rounded-xl hover:bg-gray-50 transition-all duration-300"
                        >
                            <span class="text-lg font-light text-gray-900 group-hover:text-black transition-colors">
                                À propos
                            </span>
                            <svg class="w-5 h-5 text-gray-400 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </nav>

                    <!-- CTA Section -->
                    <div class="p-6 border-t border-gray-100 space-y-3">
                        <a
                            href="tel:+32470123456"
                            class="w-full flex items-center justify-center gap-2 bg-white text-black border-2 border-black px-6 py-4 rounded-full font-light tracking-wide hover:bg-gray-50 transition-all duration-300"
                        >
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                            </svg>
                            <span>Appeler</span>
                        </a>

                        <button
                            @click="openQuoteModal(); closeMobileMenu()"
                            class="w-full flex items-center justify-center gap-2 bg-black text-white px-6 py-4 rounded-full font-light tracking-wide hover:bg-gray-900 transition-all duration-300 shadow-lg shadow-black/10"
                        >
                            <span>Demander un devis</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </Transition>

        <!-- Main Content -->
        <main>
            <slot />
        </main>

        <!-- Quote Modal -->
        <Teleport to="body">
            <Transition
                enter-active-class="transition-opacity duration-300"
                enter-from-class="opacity-0"
                enter-to-class="opacity-100"
                leave-active-class="transition-opacity duration-300"
                leave-from-class="opacity-100"
                leave-to-class="opacity-0"
            >
                <div
                    v-if="showQuoteModal"
                    class="fixed inset-0 z-[100] overflow-y-auto"
                    @click.self="closeQuoteModal"
                >
                    <div class="flex min-h-screen items-center justify-center p-4">
                        <!-- Backdrop -->
                        <div class="fixed inset-0 bg-black/70 backdrop-blur-md" @click="closeQuoteModal"></div>

                        <!-- Modal -->
                        <Transition
                            enter-active-class="transition-all duration-500 ease-out"
                            enter-from-class="opacity-0 scale-95 translate-y-4"
                            enter-to-class="opacity-100 scale-100 translate-y-0"
                            leave-active-class="transition-all duration-300 ease-in"
                            leave-from-class="opacity-100 scale-100 translate-y-0"
                            leave-to-class="opacity-0 scale-95 translate-y-4"
                        >
                            <div v-if="showQuoteModal" class="relative bg-white rounded-3xl shadow-2xl max-w-3xl w-full p-8 md:p-12 transform max-h-[90vh] overflow-y-auto">
                                <!-- Close button -->
                                <button
                                    @click="closeQuoteModal"
                                    class="absolute top-6 right-6 p-2 text-gray-400 hover:text-gray-600 hover:bg-gray-100 rounded-full transition-all duration-300 z-10"
                                    aria-label="Fermer"
                                >
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </button>

                                <!-- Content -->
                                <div class="mb-8">
                                    <div class="inline-flex items-center justify-center w-16 h-16 bg-black rounded-2xl mb-6">
                                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                        </svg>
                                    </div>
                                    <h2 class="text-3xl md:text-4xl font-light mb-3 text-gray-900">Demande de devis</h2>
                                    <p class="text-gray-600 font-light">Remplissez ce formulaire détaillé pour recevoir votre devis personnalisé sous 24h</p>
                                </div>

                                <QuoteForm @close="closeQuoteModal" />
                            </div>
                        </Transition>
                    </div>
                </div>
            </Transition>
        </Teleport>
    </div>
</template>

<style scoped>
/* Smooth animations */
* {
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}

/* Custom scrollbar for mobile menu */
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

/* Focus visible styles */
button:focus-visible,
a:focus-visible,
input:focus-visible,
select:focus-visible,
textarea:focus-visible {
    outline: 2px solid #000;
    outline-offset: 2px;
}

/* Prevent body scroll when modals are open */
body.modal-open {
    overflow: hidden;
}
</style>