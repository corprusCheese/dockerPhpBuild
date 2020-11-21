<template>
    <div class="chess">
        <chat/>
        <div class="m-5">
        </div>
        <chess/>
    </div>
</template>


<script>

import Chess from "../components/Game/Chess.vue";
import Chat from "../components/Game/Chat.vue";
import {chessboard} from "vue-chessboard"

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
