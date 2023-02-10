<script setup>
import { ref } from "vue";
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    message: "",
});

const focus = ref(false);
const emit = defineEmits(["send"]);

const send = () => {
    const msg = form.message.trim();
    if (msg) {
        form.post(route("chat.send"), {
            onSuccess: () => {
                emit("send", msg);
                form.reset();
            },
        });
    }
};

const limit = () => {
    if (form.message.length > 40) {
        form.message = form.message.slice(0, 40);
    }
};
</script>

<template>
    <div class="relative flex items-center">
        <input
            class="rounded bg-pri w-full focus:ring-accent border-b-[3px] outline-none py-2 px-4"
            type="text"
            placeholder="Type a message..."
            v-model="form.message"
            @keydown.enter="send"
            @focus="focus = true"
            @blur="focus = false"
            @input="limit"
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
>
