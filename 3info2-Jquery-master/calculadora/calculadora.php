<?php

    require_once "calc.php";



        $ip = "192.168.10.0";

        $mascara = 25;

        $octetos = explode(".", $ip);

        $bits = 32 - $mascara;

        $enderecos = pow(2, $bits);

        $subredes = 256/ $enderecos;

        $qual_rede = (int) $subredes

    }

