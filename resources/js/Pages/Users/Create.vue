<script setup>
import { reactive } from "vue";
import { router } from "@inertiajs/vue3";

let form = reactive({
    name: "",
    email: "",
    password: "",
});

let submit = () => {
    router.post("/users", form);
};
</script>
<template>
    <Head><title>Create User</title></Head>
    <h1 class="text-4xl font-bold">Create User</h1>
    <form @submit.prevent="submit" class="max-w-md mx-auto mt-6">
        <div class="mb-6">
            <label
                class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                for="name"
            >
                Name
            </label>
            <input
                v-model="form.name"
                class="w-full p-2 border border-gray-400 rounded"
                type="text"
                id="name"
                name="name"
                value=""
                required
            />
        </div>
        <div class="mb-6">
            <label
                class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                for="email"
            >
                Email
            </label>
            <input
                v-model="form.email"
                class="w-full p-2 border border-gray-400 rounded"
                type="email"
                id="email"
                name="email"
                value=""
                required
            />
        </div>
        <div class="mb-6">
            <label
                class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                for="password"
            >
                Password
            </label>
            <input
                v-model="form.password"
                class="w-full p-2 border border-gray-400 rounded"
                type="password"
                id="password"
                name="password"
                value=""
                required
            />
        </div>
        <div class="mb-6">
            <button
                class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                type="submit"
            >
                Create
            </button>
        </div>
    </form>
</template>
