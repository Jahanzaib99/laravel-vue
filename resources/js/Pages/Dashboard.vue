<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <h1>User List</h1>
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead>
                            <tr>
                                <th class="px-4 py-2 bg-gray-200 text-gray-700 font-semibold uppercase border-b border-gray-300">Name</th>
                                <th class="px-4 py-2 bg-gray-200 text-gray-700 font-semibold uppercase border-b border-gray-300">Email</th>
                                <!-- Add more columns as needed -->
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="user in users.data" :key="user.id" class="hover:bg-gray-100">
                                <td class="px-4 py-2 border-b border-gray-300">{{ user.name }}</td>
                                <td class="px-4 py-2 border-b border-gray-300">{{ user.email }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4 mb-4 flex justify-end">
                        <div>
                            <inertia-link :href="users.prev_page_url" class="px-4 py-2 bg-gray-200 text-gray-700 hover:bg-gray-300 rounded-md">Previous</inertia-link>
                        </div>
                        <div class="ml-2">
                            <inertia-link :href="users.next_page_url" class="px-4 py-2 bg-gray-200 text-gray-700 hover:bg-gray-300 rounded-md">Next</inertia-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
export default {
  props: {
    users: Object, // Passed from Laravel controller
  },
};
</script>
