<?php

$SP = 67836.43;
$RJ = 36678.66;
$MG = 29229.88;
$ES = 27165.48;
$outros = 19849.53;

$total = $SP + $RJ + $MG + $ES + $outros;

$porcentagemSP = ($SP*100)/$total;
echo $porcentagemSP;

$porcentagemRJ = ($RJ*100)/$total;
echo $porcentagemRJ;

$porcentagemMG = ($MG*100)/$total;
echo $porcentagemMG;

$porcentagemES = ($ES*100)/$total;
echo $porcentagemES;

$porcentagemOutros = ($outros*100)/$total;
echo $porcentagemOutros;