<script setup>
defineProps({
    type: {
        type: String,
        default: "button",
    },
});
</script>

<template>
    <button
        :type="type"
        class="inline-flex items-center px-4 py-2 bg-sec border border-zinc-700 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-ter focus:outline-none focus:ring-2 focus:ring-indigo-500 ring-offset-sec focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150"
    >
        <slot />
    </button>
</template>
