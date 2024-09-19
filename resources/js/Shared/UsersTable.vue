<script setup>
import Paginator from "./Paginator.vue";

const props = defineProps({
    users: Object,
});
</script>
<template>
    <div>
        <div class="sm:flex sm:items-end">
            <div class="mt-4 sm:ml-auto sm:mt-0 sm:flex-none">
                <Link
                    as="button"
                    class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                    href="/users/create"
                >
                    Add user
                </Link>
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
                            <tr v-for="user in users.data" :key="user.id">
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
        <Paginator :links="users.links" class="pt-6" />
    </div>
</template>
