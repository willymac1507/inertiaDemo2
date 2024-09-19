<script setup>
import { router, useForm } from "@inertiajs/vue3";

let form = useForm({
    name: "",
    email: "",
    password: "",
});

let submit = () => {
    form.post("/users");
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
            <div
                v-if="form.errors.name"
                v-text="form.errors.name"
                class="text-xs text-red-500 mt-1"
            ></div>
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
            <div
                v-if="form.errors.email"
                v-text="form.errors.email"
                class="text-xs text-red-500 mt-1"
            ></div>
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
            />
            <div
                v-if="form.errors.password"
                v-text="form.errors.password"
                class="text-xs text-red-500 mt-1"
            ></div>
        </div>
        <div class="mb-6">
            <button
                class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 disabled:bg-gray-500"
                type="submit"
                :disabled="form.processing"
            >
                Create
            </button>
        </div>
    </form>
</template>
