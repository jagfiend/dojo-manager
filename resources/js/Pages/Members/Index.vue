<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import NavLink from "@/Components/NavLink.vue";
</script>

<template>
    <Head title="Members" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-white leading-tight">
                Members
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 border-b">
                        <NavLink :href="route('members.create')">Add new member</NavLink>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
