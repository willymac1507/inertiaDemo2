<script setup>
import { ArrowLongLeftIcon, ArrowLongRightIcon } from "@heroicons/vue/20/solid";

const props = defineProps({
    users: Object,
});
</script>
<template>
    <div>
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <p class="mt-2 text-sm text-gray-700">
                    A list of all the users in your account including their name
                    and email.
                </p>
            </div>
            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                <button
                    class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                    type="button"
                >
                    Add user
                </button>
            </div>
        </div>
        <div class="mt-8 flow-root">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div
                    class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8"
                >
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead>
                            <tr>
                                <th
                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0"
                                    scope="col"
                                >
                                    Name
                                </th>
                                <th
                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                                    scope="col"
                                >
                                    Email
                                </th>
                                <th
                                    class="relative py-3.5 pl-3 pr-4 sm:pr-0"
                                    scope="col"
                                >
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divid(e-gray-200">
                            <tr v-for="user in props.users.data" :key="user.id">
                                <td
                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0"
                                >
                                    {{ user.name }}
                                </td>
                                <td
                                    class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"
                                >
                                    {{ user.email }}
                                </td>
                                <td
                                    class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0"
                                >
                                    <Link
                                        :href="'/users/' + user.id + '/edit'"
                                        class="text-indigo-600 hover:text-indigo-900"
                                        >Edit<span class="sr-only"
                                            >, {{ user.name }}</span
                                        ></Link
                                    >
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <nav
            class="flex items-center justify-between border-t border-gray-200 px-4 sm:px-0"
        >
            <div class="-mt-px flex w-0 flex-1">
                <Component
                    :is="props.users.prev_page_url ? 'Link' : 'span'"
                    :class="
                        !props.users.prev_page_url
                            ? 'text-gray-200'
                            : 'text-gray-500 hover:border-gray-300 hover:text-gray-700'
                    "
                    :href="props.users.prev_page_url"
                    class="inline-flex items-center border-t-2 border-transparent pr-1 pt-4 text-sm font-medium"
                >
                    <ArrowLongLeftIcon
                        aria-hidden="true"
                        class="mr-3 h-5 w-5"
                    />
                    Previous
                </Component>
            </div>
            <div class="hidden md:-mt-px md:flex">
                <Link
                    v-for="link in props.users.links.slice(1, -1)"
                    :class="
                        link.active
                            ? 'border-indigo-500 text-indigo-600'
                            : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700'
                    "
                    :href="link.url"
                    class="inline-flex items-center border-t-2 px-4 pt-4 text-sm font-medium"
                    v-html="link.label"
                />
            </div>
            <div class="-mt-px flex w-0 flex-1 justify-end">
                <Component
                    :is="props.users.next_page_url ? 'Link' : 'span'"
                    :class="
                        !props.users.next_page_url
                            ? 'text-gray-200'
                            : 'text-gray-500 hover:border-gray-300 hover:text-gray-700'
                    "
                    :href="props.users.next_page_url"
                    class="inline-flex items-center border-t-2 border-transparent pl-1 pt-4 text-sm font-medium"
                >
                    Next
                    <ArrowLongRightIcon
                        aria-hidden="true"
                        class="ml-3 h-5 w-5"
                    />
                </Component>
            </div>
        </nav>
    </div>
</template>
