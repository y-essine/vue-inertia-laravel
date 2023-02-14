<script setup>
import { computed } from "vue";
import { Link } from "@inertiajs/vue3";

const props = defineProps(["href", "active"]);

const classes = computed(() =>
    props.active
        ? "block w-full pl-3 pr-4 py-2 border-l-4 border-accent text-left text-base font-medium text-indigo-200 bg-sec focus:outline-none focus:text-white focus:bg-sec focus:border-indigo-700 transition duration-150 ease-in-out"
        : "block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium text-t-sec hover:text-white hover:bg-sec/70 hover:border-accent/30 focus:outline-none focus:text-white focus:bg-sec focus:border-accent transition duration-150 ease-in-out"
);
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
