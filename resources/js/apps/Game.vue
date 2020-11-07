<template>
    <center>
        <chessboard/>
    </center>
</template>


<script>

import {chessboard} from "vue-chessboard"
import Chess from "../components/Game/Chess.vue";
import Chat from "../components/Game/Chat.vue";

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
