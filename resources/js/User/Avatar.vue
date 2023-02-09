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
            class="rounded-full object-cover outline-accent outline-2"
            :style="{ width: size * 10 + 'px', height: size * 10 + 'px' }"
            :src="user.avatar"
            :alt="user.name"
        />
    </div>
</template>
