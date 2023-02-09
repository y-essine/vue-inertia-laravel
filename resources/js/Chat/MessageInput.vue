<script setup>
import { ref } from "vue";
defineProps({});

const message = ref("");
const focus = ref(false);

const emit = defineEmits(["send"]);

const send = () => {
    const msg = message.value.trim();
    if (msg) {
        emit("send", msg);
        message.value = "";
    }
};
</script>

<template>
    <div class="relative flex items-center">
        <input
            class="rounded bg-pri w-full focus:ring-accent border-b-[3px] outline-none py-2 px-4"
            type="text"
            placeholder="Type a message..."
            v-model="message"
            @keydown.enter="send"
            @focus="focus = true"
            @blur="focus = false"
        />
        <button
            class="text-t-ter first-letter:rounded-md absolute right-4"
            :class="{
                'text-accent': focus,
                'text-t-ter': !focus,
            }"
            @click="send"
        >
            <icon icon="fa-paper-plane" />
        </button>
    </div>
</template>
