<template>
    <Head title="Categories" />


    <AuthenticatedLayout>

      <div class="bg-white rounded-lg shadow-lg p-6">
        <h1 class="text-3xl font-semibold text-gray-800 mb-4">Categories</h1>
        <ul class="space-y-4">
          <li v-for="category in categories" :key="category.id">
            <div class="bg-gray-100 rounded-lg p-4 hover:shadow-md transition duration-300 ease-in-out transform hover:scale-105">
              <h2 class="text-xl font-semibold text-gray-700 mb-2">Name: {{ category.name }}</h2>
              <p class="text-gray-600"> Description: {{ category.description }}</p>

            </div>
          </li>
        </ul>
      </div>

    </AuthenticatedLayout>
  </template>

  <script>
  import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
  import { Head } from '@inertiajs/vue3';
  export default {
    props: {
      categories: Array,
    },
  };
  </script>
