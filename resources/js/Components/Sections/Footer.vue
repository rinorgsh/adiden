<template>
    <footer class="bg-black text-white pt-12 sm:pt-16 lg:pt-20 pb-6 sm:pb-8">
        <div class="container mx-auto px-4 sm:px-6 lg:px-12">

            <!-- Main Footer Content -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 sm:gap-10 lg:gap-12 mb-10 sm:mb-12 lg:mb-16">

                <!-- Column 1: About -->
                <div>
                    <img
                        src="/images/logo.png"
                        alt="Adiden Finances"
                        class="h-8 sm:h-10 mb-4 sm:mb-6"
                    />
                    <p class="text-white/50 font-light text-sm sm:text-base leading-relaxed mb-4 sm:mb-6">
                        Votre courtier indépendant en assurance et crédit depuis 15 ans.
                    </p>
                    <div class="flex space-x-3 sm:space-x-4">
                        <a href="#" class="w-11 h-11 sm:w-12 sm:h-12 rounded-full border border-white/10 hover:border-white/20 flex items-center justify-center hover:bg-white/5 transition-all touch-manipulation active:scale-95">
                            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-8 h-8 sm:w-9 sm:h-9 rounded-full border border-white/10 hover:border-white/20 flex items-center justify-center hover:bg-white/5 transition-all">
                            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-8 h-8 sm:w-9 sm:h-9 rounded-full border border-white/10 hover:border-white/20 flex items-center justify-center hover:bg-white/5 transition-all">
                            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Column 2: Assurances -->
                <div>
                    <h4 class="text-[10px] sm:text-xs lg:text-sm font-light uppercase tracking-[0.2em] sm:tracking-[0.3em] text-white/40 mb-4 sm:mb-6">Assurances</h4>
                    <ul class="space-y-3 sm:space-y-4">
                        <li>
                            <a href="#assurances" class="text-white/60 hover:text-white font-light transition-colors text-sm sm:text-base inline-block py-1 touch-manipulation">
                                Assurance Auto
                            </a>
                        </li>
                        <li>
                            <a href="#assurances" class="text-white/60 hover:text-white font-light transition-colors text-xs sm:text-sm">
                                Assurance Habitation
                            </a>
                        </li>
                        <li>
                            <a href="#assurances" class="text-white/60 hover:text-white font-light transition-colors text-xs sm:text-sm">
                                Assurance Familiale
                            </a>
                        </li>
                        <li>
                            <a href="#assurances" class="text-white/60 hover:text-white font-light transition-colors text-xs sm:text-sm">
                                Assurance Vie
                            </a>
                        </li>
                        <li>
                            <a href="#assurances" class="text-white/60 hover:text-white font-light transition-colors text-xs sm:text-sm">
                                Assurance Santé
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Column 3: Crédits -->
                <div>
                    <h4 class="text-[10px] sm:text-xs lg:text-sm font-light uppercase tracking-[0.2em] sm:tracking-[0.3em] text-white/40 mb-4 sm:mb-6">Crédits</h4>
                    <ul class="space-y-2 sm:space-y-3">
                        <li>
                            <a href="#credits" class="text-white/60 hover:text-white font-light transition-colors text-xs sm:text-sm">
                                Crédit Hypothécaire
                            </a>
                        </li>
                        <li>
                            <a href="#credits" class="text-white/60 hover:text-white font-light transition-colors text-xs sm:text-sm">
                                Crédit Personnel
                            </a>
                        </li>
                        <li>
                            <a href="#credits" class="text-white/60 hover:text-white font-light transition-colors text-xs sm:text-sm">
                                Regroupement de Crédits
                            </a>
                        </li>
                        <li>
                            <a href="#credits" class="text-white/60 hover:text-white font-light transition-colors text-xs sm:text-sm">
                                Leasing Auto
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Column 4: Contact -->
                <div>
                    <h4 class="text-[10px] sm:text-xs lg:text-sm font-light uppercase tracking-[0.2em] sm:tracking-[0.3em] text-white/40 mb-4 sm:mb-6">Contact</h4>
                    <ul class="space-y-2 sm:space-y-3">
                        <li class="flex items-start gap-2 sm:gap-3">
                            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white/40 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                            </svg>
                            <div class="text-white/60 font-light text-xs sm:text-sm">
                                <p>Avenue Henri Conscience 41</p>
                                <p>1140 Evere</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-2 sm:gap-3">
                            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white/40 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                            </svg>
                            <div class="text-white/60 font-light text-xs sm:text-sm space-y-1">
                                <p><span class="text-white/40 text-[10px] sm:text-xs">Assurances :</span> <a href="tel:+32489623990" class="hover:text-white transition-colors">0489 62 39 90</a></p>
                                <p><span class="text-white/40 text-[10px] sm:text-xs">Crédit Hypothécaire :</span> <a href="tel:+32483508818" class="hover:text-white transition-colors">0483 508 818</a></p>
                                <p><span class="text-white/40 text-[10px] sm:text-xs">Autres Crédits :</span> <a href="tel:+32485162085" class="hover:text-white transition-colors">0485 16 20 85</a></p>
                            </div>
                        </li>
                        <li class="flex items-start gap-2 sm:gap-3">
                            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white/40 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                            </svg>
                            <a href="mailto:info@adiden.be" class="text-white/60 font-light text-xs sm:text-sm hover:text-white transition-colors">info@adiden.be</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Legal Warning -->
            <div class="bg-white/5 rounded-xl sm:rounded-2xl p-4 sm:p-6 mb-6 sm:mb-8 border border-white/10">
                <p class="text-white/60 font-light text-xs sm:text-sm leading-relaxed">
                    <span class="text-white/80 font-normal">Attention, emprunter de l'argent coûte aussi de l'argent.</span><br>
                    Courtier agréé par la <a href="https://www.fsma.be" target="_blank" rel="noopener noreferrer" class="text-white hover:text-white/80 underline underline-offset-2 transition-colors">FSMA</a> (Autorité des Services et Marchés Financiers)<br>
                    FSMA n° 60 622 & 46 400 · RPM 0737 899 190
                </p>
            </div>

            <!-- Divider -->
            <div class="h-px bg-white/10 mb-6 sm:mb-8"></div>

            <!-- Bottom bar -->
            <div class="flex flex-col sm:flex-row justify-between items-center text-white/40 text-[10px] sm:text-xs font-light gap-4 sm:gap-0">
                <p class="text-center sm:text-left">
                    © 2025 Adiden Finances · Tous droits réservés
                </p>
                <div class="flex flex-wrap justify-center sm:justify-end gap-4 sm:gap-6">
                    <a href="/mentions-legales" class="hover:text-white transition-colors">
                        Mentions Légales
                    </a>
                    <a href="#" class="hover:text-white transition-colors">
                        Confidentialité
                    </a>
                    <a href="#" class="hover:text-white transition-colors">
                        Cookies
                    </a>
                </div>
            </div>

        </div>
    </footer>
</template>
