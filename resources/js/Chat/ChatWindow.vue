<script setup>
import { computed, onBeforeMount, onBeforeUnmount } from "vue";
import { usePage, useForm } from "@inertiajs/vue3";
import { useStore } from "vuex";
import Echo from "@/echo";

import MessageGroup from "./Message/MessageGroup.vue";
import MessageInput from "./MessageInput.vue";

const store = useStore();
const user = computed(() => usePage().props.auth.user);
const groups = computed(() => store.state.chat.groups);
const isSending = computed(() => store.state.chat.isSending);
const addMessage = (msg) => store.dispatch("chat/addMessage", msg);
const setSending = (bool) => store.dispatch("chat/setSending", bool);

const form = useForm({
    message: "",
});

const send = () => {
    const msg = form.message.trim();
    if (!msg || isSending.value) return;
    setSending(true);
    form.post(route("chat.send"), {
        onSuccess: () => {
            const data = {
                id: Math.floor(Math.random() * 100000),
                message: msg,
                user: user.value,
            };
            addMessage(data);

            form.reset();
            setSending(false);
        },
    });
};

Echo.private("chat").listen("ChatMessageEvent", (e) => {
    addMessage(e.message);
});

onBeforeUnmount(() => {
    Echo.leave("chat");
});
</script>

<template>
    <div class="space-y-5 h-80 flex flex-col">
        <MessageInput v-model="form.message" @send="send" />
        <div class="h-full space-y-4">
            <MessageGroup
                v-for="group in groups"
                :key="group.id"
                :group="group"
            />
        </div>
    </div>
</template>
