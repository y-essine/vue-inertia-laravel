<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <Link
        class="rounded block w-full px-4 py-2 text-left text-sm leading-5 text-t-sec font-semibold hover:bg-white/5 hover:text-t-pri focus:outline-none focus:bg-white/10 transition duration-150 ease-in-out"
    >
        <slot />
    </Link>
</template>
