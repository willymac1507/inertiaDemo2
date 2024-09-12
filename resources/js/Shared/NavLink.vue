<script setup>
const props = defineProps({
    active: Boolean,
});
</script>
<template>
    <Link
        :class="{
            'font-bold underline': active,
        }"
        class="text-black"
    >
        <slot></slot>
    </Link>
</template>
<style />
