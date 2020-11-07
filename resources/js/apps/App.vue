<template>
    <Main></Main>
</template>


<script>
import Main from "../components/App/Main.vue";
import UserSearch from "../components/App/UserSearch.vue";

export default {
    name: 'App',
    components: {
        Main,
        UserSearch
    },
    replace: false
}
</script>
