<template>
    <hello></hello>
</template>


<script>
import Hello from "../components/Hello.vue";

export default {
    name: 'Game',
    components: {
        Hello
    },
    replace: false
}
</script>
