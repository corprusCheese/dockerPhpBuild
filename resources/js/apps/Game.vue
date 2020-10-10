<template>
    <Chess></Chess>
</template>


<script>
import Chess from "../components/Chess.vue";

export default {
    name: 'Game',
    components: {
        Chess
    },
    replace: false
}
</script>
