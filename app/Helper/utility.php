<?php

use Carbon\Carbon;
if(!function_exists('carTime')){

    function carTime($time){
        $new_time = Carbon::parse('00:00:00');
        $new_time->addMinutes($time);
        $new_time = $new_time->format('H:i');
        $time_array = collect(str_split(implode(explode(':', $new_time)),1));
        return $time_array->sum();
    }

}

 ?>
