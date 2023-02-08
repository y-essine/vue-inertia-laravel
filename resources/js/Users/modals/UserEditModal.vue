<script setup>
import { ref } from "vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";

const editedUser = ref({
    name: "John Doe",
    email: "johndoe@email.com",
});

const props = defineProps({
    user: Object,
});

const emit = defineEmits(["close", "edit"]);

const cancel = () => {
    emit("close");
};

const edit = () => {
    emit("edit", props.user, editedUser);
};
</script>

<template>
    <div class="p-6">
        <h2 class="text-lg font-medium">
            Are you sure you want to edit this user?
            <span class="text-t-ter">({{ user.name }})</span>
        </h2>

        <p class="mt-1 text-sm text-t-ter">
            Once a user is edited, all of its resources and data will be
            permanently changed.
        </p>

        <div class="mt-6 flex justify-end">
            <SecondaryButton @click="cancel"> Cancel </SecondaryButton>

            <PrimaryButton class="ml-3" @click="edit">
                Edit User
            </PrimaryButton>
        </div>
    </div>
</template>
