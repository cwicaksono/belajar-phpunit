<?php

class Group {
    function get_group($now){
        $sarapan_start = '06:00:00';
        $sarapan_end = '07:30:00';

        $jam = date('H:i:s', strtotime($now));
        $day = date('D', strtotime($now));

        $launch_start = '12:00:00';
        $launch_end = '13:00:00';
        if($day == 'Fri'){
            $launch_start = '11:30:00';
            $launch_end = '13:30:00';
        }

        $malam_start = '18:00:00';
        $malam_end = '20:00:00';

        if(strtotime($jam) >= strtotime($sarapan_start) && strtotime($jam) <= strtotime($sarapan_end)){
            return 'Makan Pagi';
        }

        if(strtotime($jam) >= strtotime($launch_start) && strtotime($jam) <= strtotime($launch_end)){
            return 'Makan Siang';
        }

        if(strtotime($jam) >= strtotime($malam_start) && strtotime($jam) <= strtotime($malam_end)){
            return 'Makan Malam';
        }
    }
}
?>
