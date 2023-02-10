<script setup>
import { computed } from "vue";
import { usePage, useForm } from "@inertiajs/vue3";
import { useStore } from "vuex";

import Message from "./Message/Message.vue";
import MessageInput from "./MessageInput.vue";

const store = useStore();
const user = computed(() => usePage().props.auth.user);
const messages = computed(() => store.state.chat.messages);
const isSending = computed(() => store.state.chat.isSending);
const addMessage = (msg) => store.dispatch("chat/addMessage", msg);
const setSending = (bool) => store.dispatch("chat/setSending", bool);

const form = useForm({
    message: "",
    user: user,
});

const send = () => {
    if (!form.message.trim() || isSending.value) return;
    setSending(true);
    form.post(route("chat.send"), {
        onSuccess: () => {
            addMessage({
                id: Math.floor(Math.random() * 100000),
                message: form.message.trim(),
                user: form.user,
            });
            form.reset();
            setSending(false);
        },
    });
};
</script>

<template>
    <div class="space-y-5 h-80 flex flex-col">
        <MessageInput v-model="form.message" @send="send" />
        <div class="h-full space-y-4">
            <Message
                v-for="message in messages.slice(0, 5)"
                :key="message.id"
                :message="message"
            />
        </div>
    </div>
</template>
