<?php
require_once 'sortBoardingTicket.php';

function is_chained( $sorted_tickets_list )
{
    $is_chained = true;
    for($i = 0; $i < (count($sorted_tickets_list) - 1 ); $i++ ){
        if($sorted_tickets_list[$i]->end_station != $sorted_tickets_list[$i+1]->start_station  ){
            $is_chained = false;
        }
    }
    return $is_chained;
}

$boarding_tickets_list = [
    new boardingTicket("place3" , "place4" , "34" , "train" , "KL 445" , "board train number 2312 at platform 2A" ) ,
    new boardingTicket("place4" , "place5" , "34" , "flight" , "WN 417" , "board train number 2312 at platform 2A" ) ,
    new boardingTicket("place9" , "place10" , "34" , "flight" ,"DAE0001" , "board train number 2312 at platform 2A" ) ,
    new boardingTicket("place2" , "place3" , "34" , "train" , "PNR-678" , "board train number 2312 at platform 2A" ) ,
    new boardingTicket("place6" , "place7" , "34" , "train" , "BA2490", "board train number 2312 at platform 2A" ) ,
    new boardingTicket("place1" , "place2" , "34" , "flight" ,"BA2491A" , "board train number 2312 at platform 2A" ) ,
    new boardingTicket("place5" , "place6" , "34" , "train" , "CPZ1" , "board train number 2312 at platform 2A" ) ,
    new boardingTicket("place8" , "place9" , "34" , "train" , "RRR-888" , "board train number 2312 at platform 2A" ) ,
    new boardingTicket("place7" , "place8" , "34" , "train" , "456YU" , "board train number 2312 at platform 2A" ) ,
];

$sorted_tickets_list =  sortBoardingPasses($boarding_tickets_list);

$is_chained = is_chained($sorted_tickets_list);

if($is_chained){
    echo "Test Success: Boarding Tickets are Sorted\n";
}else{
    echo "Test Failed! : Boarding Tickets are not Sorted!\n";
}