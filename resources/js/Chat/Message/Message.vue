<script setup>
import { computed } from "vue";
import { usePage } from "@inertiajs/vue3";
import Avatar from "@/User/Avatar.vue";
import Tooltip from "@/Components/Tooltip.vue";
const props = defineProps({
    message: Object,
});

const user = computed(() => usePage().props.auth.user);
const isMine = computed(() => user.value.id === props.message.user.id);
</script>

<template>
    <div>
        <div class="flex" :class="{ 'flex-row-reverse': isMine }">
            <Tooltip :text="message.user.name">
                <Avatar :user="message.user" size="3" />
            </Tooltip>

            <div
                class="p-2 rounded-lg"
                :class="
                    isMine
                        ? 'bg-[#512a8b] mr-3 rounded-tr-none'
                        : 'bg-white/5 ml-3 rounded-tl-none'
                "
            >
                <div class="text-sm">{{ message.message }}</div>
            </div>
        </div>
    </div>
</template>
