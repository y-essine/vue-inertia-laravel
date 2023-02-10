<script setup>
import { Head } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import ChatWindow from "@/Chat/ChatWindow.vue";
// map state and actions
import { useStore } from "vuex";
const store = useStore();
const setMessages = (messages) => store.dispatch("chat/setMessages", messages);

// map state and actions
const props = defineProps({
    messages: Array,
});

// set messages
setMessages(props.messages);
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
