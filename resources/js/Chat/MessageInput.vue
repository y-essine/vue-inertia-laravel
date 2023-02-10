<script setup>
import { ref } from "vue";
defineProps(["modelValue"]);
const emit = defineEmits(["update:modelValue", "send"]);
const focus = ref(false);
</script>

<template>
    <div class="relative flex items-center">
        <input
            class="rounded bg-pri w-full focus:ring-accent border-b-[3px] outline-none py-2 px-4 duration-300"
            type="text"
            placeholder="Type a message..."
            :value="modelValue"
            @keydown.enter="$emit('send')"
            @focus="focus = true"
            @blur="focus = false"
            @input="$emit('update:modelValue', $event.target.value)"
        />
        <button
            class="text-t-ter first-letter:rounded-md absolute right-4"
            :class="{
                'text-accent': focus,
                'text-t-ter': !focus,
            }"
            @click="$emit('send')"
        >
            <icon icon="fa-paper-plane" />
        </button>
    </div>
</template>
>
