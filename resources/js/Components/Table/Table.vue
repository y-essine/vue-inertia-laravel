<script setup>
import "./table.less";
import PrimaryButton from "../PrimaryButton.vue";

defineProps({
    headers: Array,
    rows: Array,
});

const emit = defineEmits(["openEdit"]);

const handleEdit = (row) => {
    emit("openEdit", row);
};
</script>

<template>
    <table class="table">
        <thead>
            <tr>
                <th v-for="header in headers" :key="header">
                    {{ header }}
                </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="row in rows" :key="row">
                <td v-for="(header, index) in headers" :key="index">
                    {{ row[header] }}
                </td>
                <td>
                    <PrimaryButton @click="handleEdit(row)">Edit</PrimaryButton>
                </td>
            </tr>
        </tbody>
    </table>
</template>
