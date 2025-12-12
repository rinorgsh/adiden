<template>
    <section id="services" class="py-12 sm:py-16 lg:py-28 bg-black">
        <div class="container mx-auto px-4 sm:px-6 lg:px-12">

            <!-- Header -->
            <div class="text-center mb-10 sm:mb-16 lg:mb-20">
                <p class="text-[10px] sm:text-xs font-light text-white/40 uppercase tracking-[0.2em] sm:tracking-[0.3em] mb-3 sm:mb-6">Nos services</p>
                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-light text-white mb-3 sm:mb-4 px-4">
                    Une protection <span class="font-normal">sur-mesure</span>
                </h2>
                <p class="text-sm sm:text-base lg:text-lg text-white/50 font-light max-w-2xl mx-auto px-4">
                    Découvrez notre gamme complète de solutions d'assurance et de crédit
                </p>
            </div>

            <!-- Two columns: Assurances & Crédits -->
            <div class="grid lg:grid-cols-2 gap-8 sm:gap-12 lg:gap-16 max-w-6xl mx-auto">

                <!-- Colonne Assurances -->
                <div id="assurances">
                    <div class="flex items-center gap-2 sm:gap-3 mb-6 sm:mb-8 lg:mb-10">
                        <div class="w-1 h-1 rounded-full bg-white/40"></div>
                        <h3 class="text-[10px] sm:text-xs font-light text-white/50 uppercase tracking-[0.2em] sm:tracking-[0.3em]">Assurances</h3>
                    </div>

                    <div class="space-y-4 sm:space-y-6">
                        <!-- Assurance Auto -->
                        <div class="group border-l-2 border-white/10 hover:border-white/20 pl-4 sm:pl-6 transition-all duration-300">
                            <div class="flex items-start gap-3 sm:gap-4">
                                <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-white/5 flex items-center justify-center flex-shrink-0 group-hover:bg-white/10 transition-colors">
                                    <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white/60" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-base sm:text-lg lg:text-xl font-light text-white mb-1 sm:mb-2">Assurance Auto</h4>
                                    <p class="text-xs sm:text-sm text-white/50 font-light leading-relaxed">
                                        Couverture complète pour votre véhicule, adaptée à vos besoins et votre budget
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Assurance Habitation -->
                        <div class="group border-l-2 border-white/10 hover:border-white/20 pl-4 sm:pl-6 transition-all duration-300">
                            <div class="flex items-start gap-3 sm:gap-4">
                                <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-white/5 flex items-center justify-center flex-shrink-0 group-hover:bg-white/10 transition-colors">
                                    <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white/60" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-base sm:text-lg lg:text-xl font-light text-white mb-1 sm:mb-2">Assurance Habitation</h4>
                                    <p class="text-xs sm:text-sm text-white/50 font-light leading-relaxed">
                                        Protection optimale de votre logement et de vos biens
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Assurance Familiale -->
                        <div class="group border-l-2 border-white/10 hover:border-white/20 pl-4 sm:pl-6 transition-all duration-300">
                            <div class="flex items-start gap-3 sm:gap-4">
                                <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-white/5 flex items-center justify-center flex-shrink-0 group-hover:bg-white/10 transition-colors">
                                    <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white/60" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-base sm:text-lg lg:text-xl font-light text-white mb-1 sm:mb-2">Assurance Familiale</h4>
                                    <p class="text-xs sm:text-sm text-white/50 font-light leading-relaxed">
                                        Responsabilité civile pour toute la famille au quotidien
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Assurance Vie -->
                        <div class="group border-l-2 border-white/10 hover:border-white/20 pl-4 sm:pl-6 transition-all duration-300">
                            <div class="flex items-start gap-3 sm:gap-4">
                                <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-white/5 flex items-center justify-center flex-shrink-0 group-hover:bg-white/10 transition-colors">
                                    <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white/60" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-base sm:text-lg lg:text-xl font-light text-white mb-1 sm:mb-2">Assurance Vie</h4>
                                    <p class="text-xs sm:text-sm text-white/50 font-light leading-relaxed">
                                        Sécurisez l'avenir de vos proches avec nos solutions d'épargne et de prévoyance
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Assurance Santé -->
                        <div class="group border-l-2 border-white/10 hover:border-white/20 pl-4 sm:pl-6 transition-all duration-300">
                            <div class="flex items-start gap-3 sm:gap-4">
                                <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-white/5 flex items-center justify-center flex-shrink-0 group-hover:bg-white/10 transition-colors">
                                    <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white/60" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-base sm:text-lg lg:text-xl font-light text-white mb-1 sm:mb-2">Assurance Santé</h4>
                                    <p class="text-xs sm:text-sm text-white/50 font-light leading-relaxed">
                                        Mutuelle santé pour une couverture médicale complète
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Assurance Professionnelle -->
                        <div class="group border-l-2 border-white/10 hover:border-white/20 pl-4 sm:pl-6 transition-all duration-300">
                            <div class="flex items-start gap-3 sm:gap-4">
                                <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-white/5 flex items-center justify-center flex-shrink-0 group-hover:bg-white/10 transition-colors">
                                    <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white/60" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-base sm:text-lg lg:text-xl font-light text-white mb-1 sm:mb-2">Assurance Professionnelle</h4>
                                    <p class="text-xs sm:text-sm text-white/50 font-light leading-relaxed">
                                        Protection pour votre activité professionnelle et vos locaux
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Assurance Voyage -->
                        <div class="group border-l-2 border-white/10 hover:border-white/20 pl-4 sm:pl-6 transition-all duration-300">
                            <div class="flex items-start gap-3 sm:gap-4">
                                <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-white/5 flex items-center justify-center flex-shrink-0 group-hover:bg-white/10 transition-colors">
                                    <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white/60" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-base sm:text-lg lg:text-xl font-light text-white mb-1 sm:mb-2">Assurance Voyage</h4>
                                    <p class="text-xs sm:text-sm text-white/50 font-light leading-relaxed">
                                        Partez en toute sérénité avec une couverture complète
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Protection Juridique -->
                        <div class="group border-l-2 border-white/10 hover:border-white/20 pl-4 sm:pl-6 transition-all duration-300">
                            <div class="flex items-start gap-3 sm:gap-4">
                                <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-white/5 flex items-center justify-center flex-shrink-0 group-hover:bg-white/10 transition-colors">
                                    <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white/60" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-base sm:text-lg lg:text-xl font-light text-white mb-1 sm:mb-2">Protection Juridique</h4>
                                    <p class="text-xs sm:text-sm text-white/50 font-light leading-relaxed">
                                        Assistance juridique pour tous vos litiges du quotidien
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Colonne Crédits -->
                <div id="credit">
                    <div class="flex items-center gap-2 sm:gap-3 mb-6 sm:mb-8 lg:mb-10">
                        <div class="w-1 h-1 rounded-full bg-white/40"></div>
                        <h3 class="text-[10px] sm:text-xs font-light text-white/50 uppercase tracking-[0.2em] sm:tracking-[0.3em]">Crédits</h3>
                    </div>

                    <div class="space-y-4 sm:space-y-6">
                        <!-- Crédit Hypothécaire -->
                        <div class="group border-l-2 border-white/10 hover:border-white/20 pl-4 sm:pl-6 transition-all duration-300">
                            <div class="flex items-start gap-3 sm:gap-4">
                                <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-white/5 flex items-center justify-center flex-shrink-0 group-hover:bg-white/10 transition-colors">
                                    <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white/60" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-base sm:text-lg lg:text-xl font-light text-white mb-1 sm:mb-2">Crédit Hypothécaire</h4>
                                    <p class="text-xs sm:text-sm text-white/50 font-light leading-relaxed">
                                        Financement de votre projet immobilier aux meilleurs taux du marché
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Crédit à la Consommation -->
                        <div class="group border-l-2 border-white/10 hover:border-white/20 pl-4 sm:pl-6 transition-all duration-300">
                            <div class="flex items-start gap-3 sm:gap-4">
                                <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-white/5 flex items-center justify-center flex-shrink-0 group-hover:bg-white/10 transition-colors">
                                    <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white/60" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-base sm:text-lg lg:text-xl font-light text-white mb-1 sm:mb-2">Crédit à la Consommation</h4>
                                    <p class="text-xs sm:text-sm text-white/50 font-light leading-relaxed">
                                        Solutions de financement pour vos projets personnels
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Regroupement de Crédits -->
                        <div class="group border-l-2 border-white/10 hover:border-white/20 pl-4 sm:pl-6 transition-all duration-300">
                            <div class="flex items-start gap-3 sm:gap-4">
                                <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-white/5 flex items-center justify-center flex-shrink-0 group-hover:bg-white/10 transition-colors">
                                    <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white/60" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-base sm:text-lg lg:text-xl font-light text-white mb-1 sm:mb-2">Regroupement de Crédits</h4>
                                    <p class="text-xs sm:text-sm text-white/50 font-light leading-relaxed">
                                        Simplifiez vos remboursements avec une mensualité unique
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Crédit Auto -->
                        <div class="group border-l-2 border-white/10 hover:border-white/20 pl-4 sm:pl-6 transition-all duration-300">
                            <div class="flex items-start gap-3 sm:gap-4">
                                <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-white/5 flex items-center justify-center flex-shrink-0 group-hover:bg-white/10 transition-colors">
                                    <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white/60" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V13.5zm0 2.25h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V18zm2.498-6.75h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V13.5zm0 2.25h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V18zm2.504-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zm0 2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V18zm2.498-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zM8.25 6h7.5v2.25h-7.5V6zM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 002.25 2.25h10.5a2.25 2.25 0 002.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0012 2.25z"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-base sm:text-lg lg:text-xl font-light text-white mb-1 sm:mb-2">Crédit Auto</h4>
                                    <p class="text-xs sm:text-sm text-white/50 font-light leading-relaxed">
                                        Financement de votre véhicule neuf ou d'occasion
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Crédit Travaux -->
                        <div class="group border-l-2 border-white/10 hover:border-white/20 pl-4 sm:pl-6 transition-all duration-300">
                            <div class="flex items-start gap-3 sm:gap-4">
                                <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-white/5 flex items-center justify-center flex-shrink-0 group-hover:bg-white/10 transition-colors">
                                    <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white/60" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-base sm:text-lg lg:text-xl font-light text-white mb-1 sm:mb-2">Crédit Travaux</h4>
                                    <p class="text-xs sm:text-sm text-white/50 font-light leading-relaxed">
                                        Rénovez votre logement avec des conditions avantageuses
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Leasing Auto -->
                        <div class="group border-l-2 border-white/10 hover:border-white/20 pl-4 sm:pl-6 transition-all duration-300">
                            <div class="flex items-start gap-3 sm:gap-4">
                                <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-white/5 flex items-center justify-center flex-shrink-0 group-hover:bg-white/10 transition-colors">
                                    <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white/60" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-base sm:text-lg lg:text-xl font-light text-white mb-1 sm:mb-2">Leasing Auto</h4>
                                    <p class="text-xs sm:text-sm text-white/50 font-light leading-relaxed">
                                        Location avec option d'achat pour votre véhicule professionnel ou privé
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Refinancement -->
                        <div class="group border-l-2 border-white/10 hover:border-white/20 pl-4 sm:pl-6 transition-all duration-300">
                            <div class="flex items-start gap-3 sm:gap-4">
                                <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-white/5 flex items-center justify-center flex-shrink-0 group-hover:bg-white/10 transition-colors">
                                    <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white/60" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-base sm:text-lg lg:text-xl font-light text-white mb-1 sm:mb-2">Refinancement</h4>
                                    <p class="text-xs sm:text-sm text-white/50 font-light leading-relaxed">
                                        Optimisez votre crédit actuel avec de meilleures conditions
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Crédit Professionnel -->
                        <div class="group border-l-2 border-white/10 hover:border-white/20 pl-4 sm:pl-6 transition-all duration-300">
                            <div class="flex items-start gap-3 sm:gap-4">
                                <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-white/5 flex items-center justify-center flex-shrink-0 group-hover:bg-white/10 transition-colors">
                                    <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white/60" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-base sm:text-lg lg:text-xl font-light text-white mb-1 sm:mb-2">Crédit Professionnel</h4>
                                    <p class="text-xs sm:text-sm text-white/50 font-light leading-relaxed">
                                        Financement pour développer votre activité professionnelle
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Divider -->
            <div class="h-px bg-white/10 my-10 sm:my-12 lg:my-16 max-w-6xl mx-auto"></div>

            <!-- CTA -->
            <div class="text-center px-4">
                <p class="text-white/50 font-light mb-4 sm:mb-6 text-xs sm:text-sm">
                    Un projet spécifique en tête ?
                </p>
                <button
                    @click="$emit('openQuoteModal')"
                    class="inline-flex items-center gap-2 text-white font-light text-xs sm:text-sm hover:text-white/70 transition-colors group"
                >
                    <span>Demander un devis personnalisé</span>
                    <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </button>
            </div>

        </div>
    </section>
</template>

<script setup>
defineEmits(['openQuoteModal']);
</script>
