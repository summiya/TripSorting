<?php
require_once 'boardingTicket.class.php';

function sortBoardingPasses($boardingPasses)
{
    $unSortedBoardingPasses = $boardingPasses;
    $sorted_passes = [];
    $i = 0;
    array_push( $sorted_passes , $unSortedBoardingPasses[$i] );
    unset( $unSortedBoardingPasses[$i]);

    while(count($unSortedBoardingPasses) > 0){
        $sorted_last_pass = end($sorted_passes);
        $sorted_first_pass = reset($sorted_passes);

        foreach($unSortedBoardingPasses as $key => $bPass){
            if( $sorted_last_pass->end_station  ==  $bPass->start_station ){
                array_push( $sorted_passes , $bPass );
                unset($unSortedBoardingPasses[$key]);
            }elseif($sorted_first_pass->start_station ==  $bPass->end_station){
                array_unshift( $sorted_passes , $bPass);
                unset($unSortedBoardingPasses[$key]);            
            }
        }
    }

    return $sorted_passes;
}
