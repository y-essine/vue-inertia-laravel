<script setup>
import { computed } from "vue";
import { usePage } from "@inertiajs/vue3";
import Avatar from "@/User/Avatar.vue";
import Tooltip from "@/Components/Tooltip.vue";
import Message from "./Message.vue";

const props = defineProps({
    group: {
        type: Object,
        required: true,
    },
});

const user = computed(() => usePage().props.auth.user);
const isMine = computed(() => user.value.id === props.group.user.id);
</script>

<template>
    <div class="flex" :class="{ 'flex-row-reverse': isMine }">
        <div class="flex-shrink-0">
            <Tooltip :text="group.user.name">
                <Avatar :user="group.user" size="3.5" />
            </Tooltip>
        </div>
        <div class="space-y-2">
            <Message
                v-for="(message, index) in group.messages"
                :key="message.id"
                :message="message"
                :isMine="isMine"
                :isFirst="index === 0"
            />
        </div>
    </div>
</template>
