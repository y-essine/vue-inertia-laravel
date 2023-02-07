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
            <h2 class="font-semibold text-xl leading-tight">Chat</h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-pri overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        {{ status || "undefined" }}
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
