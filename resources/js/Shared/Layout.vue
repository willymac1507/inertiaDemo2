<script setup>
import NavBar from "./NavBar.vue";
import { computed } from "vue";
import { usePage } from "@inertiajs/vue3";

const page = usePage();
const username = computed(() => page.props.auth.user.username);
</script>
<template>
    <section class="p-6 bg-gray-300">
        <header class="flex justify-between align-baseline">
            <div class="flex items-center space-x-4 align-baseline">
                <h1 class="text-lg font-bold">My App</h1>
                <p>Welcome back {{ username }}</p>
            </div>
            <NavBar />
        </header>
    </section>
    <section class="flex justify-center">
        <div class="p-6 w-full max-w-2xl">
            <slot />
        </div>
    </section>
</template>
<style />
