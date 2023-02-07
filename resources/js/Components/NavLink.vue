<script setup>
import { computed } from "vue";
import { Link } from "@inertiajs/vue3";

const props = defineProps(["href", "active"]);

const classes = computed(() =>
    props.active
        ? "inline-flex items-center px-1 pt-1 border-b-2 border-indigo-500 text-sm font-bold leading-5 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out"
        : "inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-bold leading-5 text-zinc-400 hover:text-zinc-300 hover:border-zinc-500 focus:outline-none focus:text-zinc-300 focus:border-zinc-700 transition duration-150 ease-in-out"
);
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
