<?php
declare(strict_types=1);

/* etape 1 */
function additionner (float $a , float $b):float{
    return $a + $b ;
}

function diff (float $a , float $b):float{
    return $a - $b ;
}

function multiplier (float $a , float $b):float{
    return $a * $b ;
}

function diviser (float $a , float $b):float{
    if($b==0){
        throw new InvalidArgumentException("division par zéro impossible");
    } else {
    return $a / $b ;}
}

/*etape 2 */
function estPaire (int $x):bool {
    return $x % 2 == 0 ;
}

function estPos ( int $x ):bool{
    return $x > 0 ;
}

function maximum ( float $x , float $y , float $z ):float{
    return max($x,$y,$z) ;
}

/*etape 3*/

function calculerTTC(float $ht, float $tva = 500.0): float
{
    return $ht + ($ht * $tva / 100);
}

function calculerRemise(float $prix, float $pourcentage): float
{
    $res = $prix - ($prix * $pourcentage / 100);

    return round($res, 2);
}

function calculerFacture(float $prixUnitaire,int $quantite,float $remise = 0,float $tva = 20.0): float
{
    $total = $prixUnitaire * $quantite;

    $total = calculerRemise($total, $remise);

    return calculerTTC($total, $tva);
}


function afficherMontant(float $montant): string
{
    return number_format($montant, 2, ",", " ") . " MAD";
}
