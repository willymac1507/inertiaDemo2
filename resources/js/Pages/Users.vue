<script setup>
import UsersTable from "../Shared/UsersTable.vue";

const props = defineProps({
    users: Object,
});
</script>

<template>
    <Head><title>Users</title></Head>
    <h1 class="font-bold text-4xl">Users</h1>
    <UsersTable :users="users"></UsersTable>
</template>
