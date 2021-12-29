<?php 
/**
 * Utilities Functions 
 */

 function erdreams_get_logged_user(){
   $current_user = "";
   if ( is_user_logged_in() ) {
     $user = wp_get_current_user(); 
     $current_user = $user->user_login;
   } else {
     $current_user = 'Login';
   }
   return $current_user;
 }