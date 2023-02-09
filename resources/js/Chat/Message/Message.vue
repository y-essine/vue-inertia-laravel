<script setup>
import Avatar from "@/User/Avatar.vue";
import Tooltip from "@/Components/Tooltip.vue";
defineProps({
    message: Object,
});
</script>

<template>
    <div>
        <div class="flex">
            <Tooltip :text="message.user.name">
                <Avatar :user="message.user" size="3" />
            </Tooltip>
            <div class="ml-3 p-2 bg-white/5 rounded-lg rounded-tl-none">
                <div class="text-sm">{{ message.body }}</div>
            </div>
        </div>
    </div>
</template>
