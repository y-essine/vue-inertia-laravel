<script setup>
defineProps({
    user: Object,
    size: {
        type: String,
        default: 3,
    },
});
</script>

<template>
    <!-- squircle avatar tailwind -->
    <div class="overflow-hidden">
        <img
            v-if="user.avatar"
            class="rounded-full object-cover outline-accent outline-2"
            :style="{ width: size * 10 + 'px', height: size * 10 + 'px' }"
            :src="user.avatar"
            :alt="user.name"
        />
        <div
            v-else
            class="rounded-full object-cover outline-accent outline-2"
            :style="{ width: size * 10 + 'px', height: size * 10 + 'px' }"
            :class="`bg-sec`"
        >
            <div class="flex items-center justify-center h-full text-white">
                {{ user.name.charAt(0).toUpperCase() }}
            </div>
        </div>
    </div>
</template>
