<script setup>
import { ref } from "vue";
import { Head } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import ChatWindow from "@/Chat/ChatWindow.vue";

defineProps({
    status: String,
    users: Array,
});

const showEditModal = ref(false);

const openEdit = (cell) => {
    showEditModal.value = true;
};

const closeEdit = () => {
    showEditModal.value = false;
};

const edit = (u) => {
    console.log(u);
};
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
                        <div>Live chat</div>
                        <div class="mt-5">
                            <ChatWindow />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
