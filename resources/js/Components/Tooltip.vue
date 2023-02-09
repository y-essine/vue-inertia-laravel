<script setup>
import { ref } from "vue";
defineProps({
    text: String,
});

const show = ref(false);
</script>

<template>
    <div class="relative">
        <div @mouseenter="show = true" @mouseleave="show = false">
            <slot />
        </div>
        <transition name="fade">
            <div
                v-if="show"
                class="absolute -top-16 py-1 px-3 bg-black/60 rounded-md"
            >
                <span class="text-sm">{{ text }}</span>
            </div>
        </transition>
    </div>
</template>

<style scoped>
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.3s;
}
.fade-enter,
.fade-leave-to {
    opacity: 0;
}
</style>
