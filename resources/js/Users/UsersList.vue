<script setup>
import { ref } from "vue";
import { Head } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Table from "@/Components/Table/Table.vue";
import Modal from "@/Components/Modal.vue";
import UserEditModal from "./modals/UserEditModal.vue";

defineProps({
    users: Array,
});

const selectedUser = ref({});

const showEditModal = ref(false);

const openEdit = (cell) => {
    selectedUser.value = cell;
    showEditModal.value = true;
};

const closeEdit = () => {
    showEditModal.value = false;
};

const edit = (u) => {
    console.log(u);
    closeEdit();
};
</script>

<template>
    <div class="bg-pri overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 space-y-5">
            <div class="text-t-ter font-bold uppercase text-sm">
                List of users
            </div>
            <div>
                <Table
                    :headers="['name', 'email']"
                    :rows="users"
                    @openEdit="openEdit"
                    @openDelete="openEdit"
                />
            </div>
            <Modal :show="showEditModal" @close="closeEdit">
                <UserEditModal
                    :user="selectedUser"
                    @close="closeEdit"
                    @edit="edit"
                />
            </Modal>
        </div>
    </div>
</template>
