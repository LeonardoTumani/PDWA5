<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<data>
    @foreach($registros as $item)
    <Videogame>
        <nome>{{ $item->nome }}</nome>
        <data_venda>{{ $item->data_venda }}</data_venda>
        <cor>{{ $item->cor }}</cor>
        <preco>{{ $item->preco }}</preco>
        <processador>{{ $item->processador }}</processador>
    </Videogame>
    @endforeach
</data>
