<script setup>
import { reactive } from "vue";
import Message from "./Message/Message.vue";
import MessageInput from "./MessageInput.vue";
defineProps({});

const me = {
    id: 0,
    name: "YESSINE",
    avatar: "https://i.pravatar.cc/150?img=3",
};

const _messages = [
    {
        id: 1,
        body: "Hello",
        user: {
            id: 1,
            name: "John Doe",
            avatar: "https://i.pravatar.cc/150?img=1",
        },
    },
    {
        id: 2,
        body: "Hi, i'm jane i'm a big bitch",
        user: {
            id: 2,
            name: "Jane Doe",
            avatar: "https://i.pravatar.cc/150?img=2",
        },
    },
];

const send = (msg) => {
    messages.push({
        id: messages.length + 1,
        body: msg,
        user: me,
    });
};

const messages = reactive(_messages);
</script>

<template>
    <div class="space-y-5 h-80 flex flex-col">
        <MessageInput @send="send" />
        <div class="h-full space-y-4">
            <Message
                v-for="message in messages.slice().reverse().slice(0, 5)"
                :key="message.id"
                :message="message"
            />
        </div>
    </div>
</template>
