<script setup>
import { computed } from 'vue';

const props = defineProps({
    show: {
        type: Boolean,
        required: true
    },
    type: {
        type: String,
        default: 'success', // 'success', 'error', 'loading'
        validator: (value) => ['success', 'error', 'loading'].includes(value)
    },
    title: {
        type: String,
        required: true
    },
    message: {
        type: String,
        default: ''
    }
});

const emit = defineEmits(['close']);

const iconConfig = computed(() => {
    switch (props.type) {
        case 'success':
            return {
                bg: 'bg-green-100',
                text: 'text-green-600',
                icon: 'M5 13l4 4L19 7'
            };
        case 'error':
            return {
                bg: 'bg-red-100',
                text: 'text-red-600',
                icon: 'M6 18L18 6M6 6l12 12'
            };
        case 'loading':
            return {
                bg: 'bg-blue-100',
                text: 'text-blue-600',
                icon: null
            };
        default:
            return {
                bg: 'bg-gray-100',
                text: 'text-gray-600',
                icon: null
            };
    }
});

const closeModal = () => {
    if (props.type !== 'loading') {
        emit('close');
    }
};
</script>

<template>
    <Teleport to="body">
        <Transition
            enter-active-class="transition ease-out duration-200"
            enter-from-class="opacity-0"
            enter-to-class="opacity-100"
            leave-active-class="transition ease-in duration-150"
            leave-from-class="opacity-100"
            leave-to-class="opacity-0"
        >
            <div
                v-if="show"
                class="fixed inset-0 z-[99999] flex items-center justify-center px-4"
                @click.self="closeModal"
                style="position: fixed !important; top: 0 !important; left: 0 !important; right: 0 !important; bottom: 0 !important;"
            >
                <!-- Overlay -->
                <div class="absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

            <!-- Modal -->
            <Transition
                enter-active-class="transition ease-out duration-300"
                enter-from-class="opacity-0 scale-95 translate-y-4"
                enter-to-class="opacity-100 scale-100 translate-y-0"
                leave-active-class="transition ease-in duration-200"
                leave-from-class="opacity-100 scale-100 translate-y-0"
                leave-to-class="opacity-0 scale-95 translate-y-4"
            >
                <div
                    v-if="show"
                    class="relative bg-white rounded-2xl shadow-2xl max-w-md w-full p-6 sm:p-8"
                >
                    <!-- Close button (hidden for loading) -->
                    <button
                        v-if="type !== 'loading'"
                        @click="closeModal"
                        class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 transition-colors"
                    >
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>

                    <!-- Icon -->
                    <div class="flex justify-center mb-4">
                        <div
                            :class="[iconConfig.bg, iconConfig.text]"
                            class="w-16 h-16 rounded-full flex items-center justify-center"
                        >
                            <!-- Loading spinner -->
                            <svg
                                v-if="type === 'loading'"
                                class="animate-spin h-8 w-8"
                                fill="none"
                                viewBox="0 0 24 24"
                            >
                                <circle
                                    class="opacity-25"
                                    cx="12"
                                    cy="12"
                                    r="10"
                                    stroke="currentColor"
                                    stroke-width="4"
                                ></circle>
                                <path
                                    class="opacity-75"
                                    fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                                ></path>
                            </svg>

                            <!-- Success/Error icon -->
                            <svg
                                v-else
                                class="w-8 h-8"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="3"
                                    :d="iconConfig.icon"
                                />
                            </svg>
                        </div>
                    </div>

                    <!-- Title -->
                    <h3 class="text-xl sm:text-2xl font-light text-gray-900 text-center mb-3">
                        {{ title }}
                    </h3>

                    <!-- Message -->
                    <p
                        v-if="message"
                        class="text-sm sm:text-base text-gray-600 text-center font-light mb-6"
                    >
                        {{ message }}
                    </p>

                    <!-- Action button (hidden for loading) -->
                    <button
                        v-if="type !== 'loading'"
                        @click="closeModal"
                        class="w-full bg-black text-white px-6 py-3 rounded-full font-light text-base hover:bg-gray-900 transition-all duration-300 transform hover:scale-[1.02] active:scale-95"
                    >
                        Fermer
                    </button>
                </div>
            </Transition>
            </div>
        </Transition>
    </Teleport>
</template>
