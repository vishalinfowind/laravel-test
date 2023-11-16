<template>
<div class="container">
    <h3>User List</h3>
    <div>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>City</th>
        </tr>
        </thead>
        <tbody  v-for="item in data" :key="item.id">
        <tr>
            <td class="col-md-4"> {{ item.name }}</td>
            <td class="col-md-4">{{ item.email }}</td>
            <td class="col-md-4">{{ item.address.city }} </td>
        </tr>
        </tbody>
    </table>
    </div>
</div>
</template>
<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';
const data = ref([]);
onMounted(() => {
  axios.get('http://127.0.0.1:8000/api/user-list')
    .then(response => {
      data.value = response.data;
    })
    .catch(error => {
      console.error(error);
    });
});
</script>
