<template>
  <div class="p">
<div v-for="link in links">
    <Link :class="link.active?'bo' : ''" v-if="link.url" :href="link.url" v-html="link.label"/>
    <span v-else class="spann"  v-html="link.labbel"></span>
</div>
</div>

</template>

<script>
import {Link} from '@inertiajs/inertia-vue3'
export default {
props:{
  links:Array,
},
 components:{
       Link,
       
   }
}
</script>

<style>

</style>