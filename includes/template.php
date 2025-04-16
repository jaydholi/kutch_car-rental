<?php
// Template block functions for content blocks

function startblock($blockName) {
    global $blocks;
    $blocks[$blockName] = '';
    ob_start();
}

function endblock() {
    global $blocks;
    $blocks[array_key_last($blocks)] = ob_get_clean();
}

function renderBlock($blockName) {
    global $blocks;
    echo $blocks[$blockName] ?? '';
}
?>
