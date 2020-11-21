<template>
    <div class="chess-game">
        <chessboard/>
        <div class="chess-helper">
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
