<script setup>
import { Head } from '@inertiajs/vue3';
import MainLayout from '@/Layouts/MainLayout.vue';
import Hero from '@/Components/Sections/Hero.vue';
import Services from '@/Components/Sections/Services.vue';
import Team from '@/Components/Sections/Team.vue';
import Features from '@/Components/Sections/Features.vue';
import Testimonials from '@/Components/Sections/Testimonials.vue';
import FAQ from '@/Components/Sections/FAQ.vue';
import CTA from '@/Components/Sections/CTA.vue';
import Footer from '@/Components/Sections/Footer.vue';
import { onMounted, ref } from 'vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});

const mainLayoutRef = ref(null);

const handleOpenQuoteModal = () => {
    if (mainLayoutRef.value) {
        mainLayoutRef.value.openQuoteModal();
    }
};

// Scroll animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

onMounted(() => {
    // Intersection Observer for scroll animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in-up');
            }
        });
    }, observerOptions);

    // Observe all sections
    document.querySelectorAll('section').forEach(section => {
        section.classList.add('opacity-0');
        observer.observe(section);
    });

    // Smooth scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});
</script>

<template>
    <Head title="Adiden Finances - Votre Courtier en Assurance et Crédit" />

    <MainLayout ref="mainLayoutRef" :can-login="canLogin">
        <Hero @open-quote-modal="handleOpenQuoteModal" />
        <Services />
        <Team />
        <Features />
        <Testimonials />
        <FAQ />
        <CTA />
        <Footer />
    </MainLayout>
</template>

<style>
/* Smooth scrolling */
html {
    scroll-behavior: smooth;
}

/* Fade in animation */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in-up {
    animation: fadeInUp 0.8s ease-out forwards;
}

/* Initial state for sections */
section {
    transition: opacity 0.3s ease-out;
}
</style>
