<template>
    <div class="chess">
        <chat/>
        <div class="chess-right-side">
            <chess/>
            <chess-helper/>
        </div>
    </div>
</template>


<script>

import Chess from "../components/Game/Chess.vue";
import Chat from "../components/Game/Chat.vue";
import ChessHelper from "../components/Game/ChessHelper";

export default {
    name: 'Game',
    components: {
        Chess,
        Chat, ChessHelper
    },
    replace: false
}
</script>
