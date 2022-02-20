<template>
    <Head>
        <title>Locktec-Create</title>
    </Head>
    <h1>Create New User</h1>

    <form @submit.prevent="submit">
        <input
            v-model="form.name"
            type="text"
            name="name"
            id="name"
            placeholder="Name"
            required
            
        />
        <div v-if="$page.props.errors.name" v-text="$page.props.errors.name" class="errors"></div>
        <input
            v-model="form.email"
            type="email"
            name="email"
            id="email"
            placeholder="Email"
            required
            
        />
         <div   v-if="$page.props.errors.email" v-text="$page.props.errors.email" class="errors"></div>
        <input
            v-model="form.password"
            type="password"
            name="password"
            id="password"
            placeholder="Password"
            required
            
        />
 <div v-if="$page.props.errors.password" v-text="$page.props.errors.password" class="errors"></div>
        <button :disabled="processing" type="submit">Submit</button>
    </form>
</template>

<script>
import { Head } from "@inertiajs/inertia-vue3";

export default {
    data() {
        return {
            form: {
                name: null,
                email: null,
                password: null,
            },

            processing:false,
        };
    },
    components: {
        Head,
    },
    methods: {
        submit() {
          
             this.$inertia.post("/users", this.form,{
               onStart:()=>{this.processing=true},
               onFinish:()=>{this.processing=false}
             });
        },
    },
};
</script>

<style></style>
