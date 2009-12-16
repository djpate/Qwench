<?php 

function timeAgo($timestamp, $granularity=2, $format='Y-m-d H:i:s'){
        $difference = time() - $timestamp;
        if($difference < 0) return _("0 seconds ago");             // if difference is lower than zero check server offset
        elseif($difference < 2160000){                              // if difference is over 25 days show normal time form
       
                $periods = array(_("week") => 604800,_("day") => 86400,_("hr") => 3600,_("min") => 60,_("sec") => 1);
                $output = '';
                foreach($periods as $key => $value){
               
                        if($difference >= $value){
                       
                                $time = round($difference / $value);
                                $difference %= $value;
                               
                                $output .= ($output ? ' ' : '').$time.' ';
                                $output .= (($time > 1) ? $key.'s' : $key);
                               
                                $granularity--;
                        }
                        if($granularity == 0) break;
                }
                return ($output ? $output : _("0 seconds"))." "._("ago");
        }
        else return date($format, $timestamp);
}

