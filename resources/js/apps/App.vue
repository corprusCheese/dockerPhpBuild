<template>
    <hello></hello>
</template>


<script>
import Hello from "../components/Hello.vue";

export default {
    name: 'App',
    components: {
        Hello
    },
    replace: false
}
</script>
