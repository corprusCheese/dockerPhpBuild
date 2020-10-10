<template>
    <center>
        <chessboard/>
    </center>
</template>


<script>

import {chessboard} from "vue-chessboard"
import Chess from "../components/Chess.vue";
import Chat from "../components/Chat.vue";

export default {
    name: 'Game',
    components: {
        Chess,
        Chat,
        chessboard
    },
    replace: false
}
</script>
