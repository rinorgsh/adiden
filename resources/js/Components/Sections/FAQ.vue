<script setup>
import { ref } from 'vue';

defineEmits(['openQuoteModal']);

const openItems = ref([]);

const toggleItem = (index) => {
    const itemIndex = openItems.value.indexOf(index);
    if (itemIndex > -1) {
        openItems.value.splice(itemIndex, 1);
    } else {
        openItems.value.push(index);
    }
};

const isOpen = (index) => {
    return openItems.value.includes(index);
};

const faqs = [
    {
        question: "Qu'est-ce qu'un courtier en assurance ?",
        answer: "Un courtier en assurance est un intermédiaire indépendant qui compare les offres de multiples assureurs pour trouver la meilleure protection au meilleur prix pour ses clients. Contrairement à un agent lié à une seule compagnie, nous travaillons pour vous."
    },
    {
        question: "Est-ce que vos services sont gratuits ?",
        answer: "Oui, nos conseils et comparaisons sont entièrement gratuits pour vous. Nous sommes rémunérés par les assureurs avec lesquels nous travaillons, sans aucun surcoût pour nos clients."
    },
    {
        question: "Combien de temps faut-il pour obtenir un devis ?",
        answer: "Vous pouvez obtenir un devis en moins de 3 minutes en remplissant notre formulaire en ligne. Un de nos conseillers vous recontactera ensuite sous 2 heures ouvrables pour affiner votre demande."
    },
    {
        question: "Puis-je gérer mes assurances en ligne ?",
        answer: "Absolument ! Notre plateforme digitale vous permet de gérer toutes vos assurances en ligne, 24/7. Vous pouvez consulter vos contrats, modifier vos informations et déclarer un sinistre en quelques clics."
    },
    {
        question: "Combien d'assureurs comparez-vous ?",
        answer: "Nous travaillons avec plus de 30 compagnies d'assurance parmi les plus grandes du marché belge. Cela nous permet de toujours vous proposer les meilleures offres adaptées à votre profil."
    },
    {
        question: "Que se passe-t-il en cas de sinistre ?",
        answer: "En cas de sinistre, vous pouvez nous contacter immédiatement. Nous vous accompagnons dans toutes les démarches auprès de votre assureur et veillons à ce que votre dossier soit traité rapidement."
    },
    {
        question: "Puis-je changer d'assurance à tout moment ?",
        answer: "Cela dépend de votre contrat actuel. Certaines assurances peuvent être résiliées à tout moment, d'autres nécessitent de respecter un préavis. Nous vous aidons à analyser votre situation et à effectuer le changement au meilleur moment."
    },
    {
        question: "Comment fonctionne un crédit hypothécaire ?",
        answer: "Un crédit hypothécaire est un prêt destiné à financer l'achat d'un bien immobilier. Le bien acheté sert de garantie au prêt. Nous vous accompagnons dans toutes les étapes : simulation, recherche du meilleur taux, constitution du dossier et signature."
    },
    {
        question: "Quel est le meilleur moment pour refinancer mon crédit ?",
        answer: "Le refinancement peut être intéressant si les taux ont baissé depuis votre emprunt initial, ou si votre situation financière s'est améliorée. Nous analysons gratuitement votre situation pour déterminer si un refinancement est avantageux pour vous."
    },
    {
        question: "Êtes-vous agréés ?",
        answer: "Oui, Adiden Finances est un courtier agréé par la FSMA (Autorité des Services et Marchés Financiers). Cet agrément garantit notre professionnalisme et notre respect des réglementations en vigueur."
    }
];
</script>

<template>
    <section class="py-12 sm:py-16 lg:py-28 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-12">

            <!-- Header -->
            <div class="text-center mb-10 sm:mb-16 lg:mb-20">
                <p class="text-[10px] sm:text-xs font-light text-gray-400 uppercase tracking-[0.2em] sm:tracking-[0.3em] mb-3 sm:mb-6">FAQ</p>
                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-light text-gray-900 mb-2 sm:mb-4 px-4">
                    Questions <span class="font-normal">fréquentes</span>
                </h2>
                <p class="text-sm sm:text-base lg:text-lg text-gray-600 font-light max-w-2xl mx-auto px-4">
                    Vous avez des questions ? Nous avons les réponses.
                </p>
            </div>

            <!-- FAQ List -->
            <div class="max-w-4xl mx-auto space-y-2 sm:space-y-3">
                <div
                    v-for="(faq, index) in faqs"
                    :key="index"
                    class="group"
                >
                    <button
                        @click="toggleItem(index)"
                        class="w-full text-left"
                    >
                        <div class="border-l-2 border-gray-200 hover:border-gray-300 pl-3 sm:pl-4 lg:pl-6 py-3 sm:py-4 transition-all duration-300">
                            <div class="flex items-start justify-between gap-3 sm:gap-4">
                                <div class="flex items-start gap-2 sm:gap-3 lg:gap-4 flex-1">
                                    <div class="flex-shrink-0 w-5 h-5 sm:w-6 sm:h-6 rounded-full bg-gray-100 flex items-center justify-center text-gray-400 text-[10px] sm:text-xs font-light mt-0.5 sm:mt-1">
                                        {{ index + 1 }}
                                    </div>
                                    <span class="text-sm sm:text-base lg:text-lg font-light text-gray-900">
                                        {{ faq.question }}
                                    </span>
                                </div>
                                <svg
                                    class="w-4 h-4 sm:w-5 sm:h-5 text-gray-400 flex-shrink-0 transition-transform duration-300 mt-0.5 sm:mt-1"
                                    :class="{ 'rotate-180': isOpen(index) }"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    viewBox="0 0 24 24"
                                >
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </div>

                            <div
                                v-show="isOpen(index)"
                                class="mt-3 sm:mt-4 pl-7 sm:pl-9 lg:pl-10 text-xs sm:text-sm text-gray-600 font-light leading-relaxed"
                            >
                                {{ faq.answer }}
                            </div>
                        </div>
                    </button>
                </div>
            </div>

            <!-- Divider -->
            <div class="h-px bg-gray-200 my-10 sm:my-12 lg:my-16 max-w-4xl mx-auto"></div>

            <!-- CTA -->
            <div class="text-center px-4">
                <p class="text-gray-500 font-light mb-4 sm:mb-6 text-xs sm:text-sm">
                    Vous ne trouvez pas la réponse à votre question ?
                </p>
                <button
                    @click="$emit('openQuoteModal')"
                    class="inline-flex items-center gap-2 text-gray-900 font-light text-xs sm:text-sm hover:text-gray-600 transition-colors group"
                >
                    <span>Contactez-nous</span>
                    <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </button>
            </div>

        </div>
    </section>
</template>
