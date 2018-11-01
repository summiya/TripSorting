<?php
class boardingTicket {
    public $start_station, 
            $end_station, 
            $seat_number, 
            $transportation_means,
            $instructions,
            $vehical_number;
    
    public function __construct($start_station, $end_station,  $seat_number, $transportation_means, $vehical_number, $instructions ) 
    {
        $this->start_station = $start_station;
        $this->end_station = $end_station;
        $this->seat_number = $seat_number;
        $this->transportation_means = $transportation_means;
        $this->vehical_number = $vehical_number;
        $this->instructions = $instructions;
    }
}



