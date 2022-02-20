<template>
 <Head>
     <title>Locktec</title>
     <meta type="description" content="The Best Locker in World" head-key="description">
 </Head>
<section class="header">

    <header>
        <h1>Locktec</h1>
        <p>Welcome Back {{$page.props.auth.user.username}}</p>
        <Nav />
    </header>
</section>

<section class="content container">

    <slot />
</section>
</template>

<script > 
import Nav from "../Shared/Nav.vue";
import {Head} from '@inertiajs/inertia-vue3'
export default {
    components: {
        Nav,
        Head
    },
};
</script>

<style></style>
