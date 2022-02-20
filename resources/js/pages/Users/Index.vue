<template>
    
        <div>
            <h1>users</h1>
        </div>
        <Link class="newuser" href="/users/create">New User</Link>
        <ul>
            <li class="user" v-for="user in users.data" :key="user.id">
             {{user.name}}
            </li>
        </ul>
       
  <Pagination :links="users.links"/>

</template>

<script >
import Layout from "../../Shared/Layout.vue"
import Pagination from '../../Shared/Pagination.vue'
import {Link} from '@inertiajs/inertia-vue3'

export default {
   layout:Layout,
   props:{
       users:Object,
   },
   components:{
       Link,
       Pagination,
   }

   
};
</script>

<style></style>
