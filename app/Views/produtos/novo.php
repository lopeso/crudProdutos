<?php
    if (isset($data)){
    echo
    form_open("produtos/save/$data"),
    form_input('nome'),
    form_input('descricao'),
    form_input('valor_compra'),
    form_input('valor_venda'),
    form_input('quantidade'),
    form_input('validade'),

    form_submit('mysubmit', 'Submit Post!'),
    form_close();
    }
    else{
        echo
    form_open("produtos/save/"),
    form_input('nome'),
    form_input('descricao'),
    form_input('valor_compra'),
    form_input('valor_venda'),
    form_input('quantidade'),
    form_input('validade'),

    form_submit('mysubmit', 'Submit Post!'),
    form_close();
    }

?>