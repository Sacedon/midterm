<template>
    <AuthenticatedLayout>
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-3xl font-semibold text-gray-800 mb-4">Products</h1>
        <ul class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
          <li v-for="product in products" :key="product.id">
            <div class="bg-gray-100 p-4 rounded-lg hover:shadow-md transition duration-300 ease-in-out transform hover:scale-105">
              <inertia-link :href="route('products.show', product.id)" class="text-xl font-semibold text-gray-700 mb-2">{{ product.name }}</inertia-link>
              <p class="text-gray-600">{{ product.description }}</p>
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
      products: Array,
    },
  };
  </script>
