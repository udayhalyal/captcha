<?php
session_start();
$captcha_num = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';

$captcha_num = substr(str_shuffle($captcha_num),0, 6);

$my_img = imagecreate( 200, 80 );
$background = imagecolorallocate( $my_img, 0, 0, 255 );
$text_colour = imagecolorallocate( $my_img, 255, 255, 0 );
$line_colour = imagecolorallocate( $my_img, 255, 255, 255, 0.1);
imagestring( $my_img, 4, 30, 25, $captcha_num, $text_colour );
$_SESSION["code"] = $captcha_num;
imagesetthickness ( $my_img, 15 );
imageline( $my_img, 100, 45, 165, 15, $line_colour );

header( "Content-type: image/png" );
imagepng( $my_img );
imagecolordeallocate( $line_color );
imagecolordeallocate( $text_color );
imagecolordeallocate( $background );
imagedestroy( $my_img );

?>