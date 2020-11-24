<template>
    <div class="chess-template">
        <div class="chess-game">
            <h1>Chessboard</h1>
            <chessboard />
        </div>
    </div>
</template>

<script>
import 'vue-chessboard/dist/vue-chessboard.css'
import {chessboard} from "vue-chessboard"


export default {
    components: {
        chessboard
    },
    replace: false
}
</script>

<style>
</style>
