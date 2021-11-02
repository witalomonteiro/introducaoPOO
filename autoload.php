<?php

spl_autoload_register(function (string $classe) {
    $caminho = str_replace('Alura\\Banco', 'src', $classe);
    $caminho = str_replace('\\', DIRECTORY_SEPARATOR, $caminho);
    $caminho .= '.php';

    if (file_exists($caminho)) {
        require_once $caminho;
    }
});

?>