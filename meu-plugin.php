<?php

/*
    Plugin name: meu plugin
    Plugin uri: http://
    Description: plugin de teste
    Version: 1.0
    Author: Emerson Beni
    Author uri: http://
    License: GPLv2 orlater
*/

function mp_menssagen_post( $mp_post ){
    $mp_messagen = "esta messagen sera mostarada no inocio de cada post";
    $mp_resultado .="<H1> $mp_messagen </H1>";
    $mp_resultado .= $mp_post;

    return $mp_resultado;
}

add_filter ('the_content', 'mp_menssagen_post' );

