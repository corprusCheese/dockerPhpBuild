<template>
    <div class="chess-location">
        <div class="for-adaptive-chess"></div>
        <div id="board1" class="my-chess"></div>
        <div class="for-adaptive-chess"></div>
    </div>
</template>


<script>

// библиотека шахматной доски не работает без жиквери, а писать свой экспорт для вью жс мне лень
// другие билиотеки так себе
// не лучший код в мире
function readyChess() {
    if ($('*').is('.my-chess')) {
        var board1 = Chessboard('board1', 'start')
    }
}

document.addEventListener("DOMContentLoaded", readyChess);

export default {
    components: {
        //chessboard
    },
    replace: false
}
</script>

<style>
</style>
