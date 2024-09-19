<script setup>
import UsersTable from "../../Shared/UsersTable.vue";
import { ref, watch } from "vue";
import { router } from "@inertiajs/vue3";
import debounce from "lodash/debounce";

const props = defineProps({
    users: Object,
    filters: Object,
});
let search = ref(props.filters.search);
watch(
    search,
    debounce((value) => {
        router.get(
            "/users",
            { search: value },
            { preserveState: true, replace: true },
        );
    }, 300),
);
</script>
<template>
    <Head><title>Users</title></Head>
    <div class="flex justify-between items-center">
        <h1 class="font-bold text-4xl">Users</h1>
        <input
            id="search"
            v-model="search"
            class="border px-2 rounded"
            name="search"
            placeholder="Search"
            type="text"
        />
    </div>
    <UsersTable :users="users"></UsersTable>
</template>
