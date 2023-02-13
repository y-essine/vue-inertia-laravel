<script setup>
defineProps({
    message: Object,
    isMine: Boolean,
    isFirst: Boolean,
});
</script>

<template>
    <div class="flex" :class="{ 'justify-end': isMine }">
        <div
            class="p-2 rounded-lg w-fit"
            :class="[
                isMine ? 'bg-[#512a8b] mr-3' : 'bg-sec ml-3',
                isFirst && isMine
                    ? 'rounded-br-none'
                    : isMine
                    ? 'rounded-tr-none'
                    : '',
                isFirst && !isMine
                    ? 'rounded-bl-none'
                    : !isMine
                    ? 'rounded-tl-none'
                    : '',
            ]"
        >
            <div class="text-sm">{{ message.message }}</div>
        </div>
    </div>
</template>
