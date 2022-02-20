<template>
    <Head>
        <title>Locktec-Login</title>
    </Head>
    <h1>login oage</h1>

    <form @submit.prevent="submit">
       
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
        <button :disabled="processing" type="submit">Login</button>
    </form>
</template>

<script>
import { Head } from "@inertiajs/inertia-vue3";

export default {
    data() {
        return {
            form: {
               
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
          
             this.$inertia.post("/login", this.form,{
               onStart:()=>{this.processing=true},
               onFinish:()=>{this.processing=false}
             });
        },
    },
};
</script>

<style></style>
