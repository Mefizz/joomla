<?php

class ModInfoUserHelper
{
    public static function getInfo($phrase1)
    {
        $session = JFactory::getSession();
        $user = JFactory::getUser();
        $currenrdate = date('Y-m-d');
        $user_sessions_counter_string = 'zero';
        $temp = ' ';

        if ($user->guest) {
            $phrase = "Welcome, guest";
        } // If user logged in
        else {
//          Chose user name to give this name to  Session
            $temp = 'my_cookie_' . $user->username;


            if (isset($_COOKIE[$temp])) //               if var isset
            {
//                     check var value = current date
                if (substr($_COOKIE[$temp], 0, 10) == $currenrdate)
                    //                             if user var value = current date
                {
                    $current_day_visits = intval(substr($_COOKIE[$temp], 11)) + 1;
                } else //                            not corrent date
                {
                    $current_day_visits = 1;

                }
            }
            //            if no value of var
            else {
                $current_day_visits = 1;
            }

            setcookie($temp, $currenrdate . '#' . (string)$current_day_visits, strtotime("+1 days"));


//         $phrase1 = Phrase , if default - get phrase from xml file
            $phrase = $phrase1 . " " . $user->name . "! Today (" . $currenrdate . ") you visit " . substr($_COOKIE[$temp], 11) . " times ";
        }


        return $phrase;

    }
}
