<?php
require_once 'sortBoardingTicket.php';

$boarding_tickets_list = [
    new boardingTicket("place3" , "place4" , "34" , "train" , "KL 445" , "Platform number 4" ) ,
    new boardingTicket("place4" , "place5" , "1" , "flight" , "WN 417" , "Do not carry Powerbanks" ) ,
    new boardingTicket("place9" , "place10" , "45" , "flight" ,"DAE0001" , "Take Gate 22" ) ,
    new boardingTicket("place2" , "place3" , "2" , "train" , "PNR-678" , "" ) ,
    new boardingTicket("place6" , "place7" , "39" , "train" , "BA2490", "" ) ,
    new boardingTicket("place1" , "place2" , "11" , "flight" ,"BA2491A" , "" ) ,
    new boardingTicket("place5" , "place6" , "23" , "train" , "CPZ1" , "" ) ,
    new boardingTicket("place8" , "place9" , "34" , "train" , "RRR-888" , "" ) ,
    new boardingTicket("place7" , "place8" , "45" , "train" , "456YU" , "" ) ,
];


$sorted_tickets_list =  sortBoardingPasses($boarding_tickets_list);

foreach($sorted_tickets_list as $ticket){
    echo "\nFrom " . $ticket->start_station . " to " . $ticket->end_station . " take " . $ticket->transportation_means . 
    " '" . $ticket->vehical_number . "'";
    
    if(empty($ticket->seat_number)){
        echo " no seat assignment. ";
    }else{
        echo " sit in seat '" . $ticket->seat_number . "'. ";
    }

    if( !empty($ticket->instructions) ){
        echo "Additional Instruction : " . $ticket->instructions;
    }
}
echo "\nYou have arrived at your final destination.!\n\n";