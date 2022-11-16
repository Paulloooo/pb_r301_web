<?php
$image = new CreateImageClass();
$image->create_and_display_image();
class CreateImageClass
{
    function create_and_display_image(){
        header ("Content-type: image/jpeg");
        $image = imagecreate(400,400);
        $bleu = imagecolorallocate($image, 0, 0, 255);
        $red = imagecolorallocate($image, 255, 0, 0);
        imagestring($image, 5, 100, 200, "I LOVE PHP AND  3.01 PW",$bleu);
        imagefilledellipse($image, 200, 200, 300, 300, $red);
        imagejpeg($image, "image_php.jpeg");
    }

}