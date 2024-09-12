<script setup lang="js">
const props = defineProps({
    links: Array,
});
</script>

<template>
    <nav
        class="flex items-center justify-between border-t border-gray-200 px-4 sm:px-0"
    >
        <div class="hidden md:-mt-px md:flex justify-between w-full">
            <Component
                v-for="link in links"
                :is="link.url ? 'Link' : 'span'"
                :class="{
                    'text-gray-400': !link.url,
                    'text-gray-500 hover:border-gray-300 hover:text-gray-700':
                        link.url,
                    'border-indigo-500 text-indigo-600': link.active,
                    'mr-auto': link.label.includes('Previous'),
                    'ml-auto': link.label.includes('Next'),
                }"
                :href="link.url"
                class="inline-flex items-center border-t-2 px-4 text-sm font-medium border-transparent"
                v-html="link.label"
            />
        </div>
    </nav>
</template>
