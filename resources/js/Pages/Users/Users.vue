<script setup>
import { Head } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import UsersList from "@/Users/UsersList.vue";

defineProps({
    users: Array,
});
</script>

<template>
    <Head title="Chat" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl leading-tight">Users</h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <UsersList :users="users" />
            </div>
        </div>
    </AuthenticatedLayout>
</template>
