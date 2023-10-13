<template>
    <Head title="Dashboard" />
<AuthenticatedLayout>
<template>
    <div>
      <h1>Clients Page</h1>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Credit Limit</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="client in clients" :key="client.id">
            <td>{{ client.id }}</td>
            <td>{{ client.last_name }}</td>
            <td>{{ client.first_name }}</td>
            <td>{{ client.address }}</td>
            <td>{{ client.phone }}</td>
            <td>{{ client.credit_limit }}</td>
            <td>
              <!-- Add buttons or links for editing and deleting clients -->
              <button @click="editClient(client)">Edit</button>
              <button @click="deleteClient(client)">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </template>
</AuthenticatedLayout>
</template>
  <script>
  import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
  import { ref } from 'vue';
  import { usePage } from '@inertia/vue3';

  export default {
  props: {
    clients: Array, // Receive the clients data from Laravel
  },
}
  </script>
