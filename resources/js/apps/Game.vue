<template>
    <div class="chess">
        <chat/>
        <div class="m-5">
        </div>
        <chess/>
        <div class="m-5" style="display: inline-block">
        </div>
        <chess-helper/>
    </div>
</template>


<script>

import Chess from "../components/Game/Chess.vue";
import Chat from "../components/Game/Chat.vue";
import ChessHelper from "../components/Game/ChessHelper";
import {chessboard} from "vue-chessboard"

export default {
    name: 'Game',
    components: {
        Chess,
        Chat, ChessHelper,
        chessboard
    },
    replace: false
}
</script>
