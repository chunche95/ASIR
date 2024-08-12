<?php
    function aleatorio() {
        $numero=dechex (mt_rand (0,15));
        return $numero;
    }

    function color() {
        $color=aleatorio().aleatorio().aleatorio();
        return $color;
    }

    function grises() {
        $grises=aleatorio();
        $grises=$grises.$grises.$grises;
        return $grises;
    }
?>