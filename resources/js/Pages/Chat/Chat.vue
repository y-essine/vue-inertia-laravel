<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";

defineProps({
    status: String,
});
</script>

<template>
    <Head title="Chat" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-300 leading-tight">
                Chat
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-primary overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h1 class="font-bold text-xl text-zinc-300">
                            {{ status || "undefined" }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
