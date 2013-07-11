<?php

class Imagetools{

     /**
      * imagereflection
      *
      * Versieht ein Bild mit einem Spiegeleffekt.
      *
      * @author  Jan Papenbrock, www.solvium.de
      * @version 0.1 (Apr-13 2007)
      *
      * @param   $source      Quellbild
      * @param   $background  Array, das die RGB-Werte der Hintergrundfarbe enthält,
      *                       wobei R = [0], G = [1], B = [2]
      * @param   $gradient    Enthält die Größe des Verlaufs, anteilig zur Bildgröße
      * @param   $shadow      Enthält die Größe des Schattens, anteilig zur Bildgröße
      *
      * @return das fertige Bild
      */

    public function imagereflection ( $simg, $background = array (255, 255, 255), $gradient = 0.55, $shadow = 0.1 ) {
    	
        $simgx = imagesx($simg);
        $simgy = imagesy($simg);
        // Höhen von Verlauf und Schatten in px bestimmen
        $gradientH = round($simgy * $gradient);
        $shadowH   = round($simgy * $shadow);
        // Zielbild erzeugen
        $dimg = imagecreatetruecolor($simgx, $simgy + $gradientH );
        // und mit Hintergrundfarbe füllen
        imagefill($dimg, 0, 0, imagecolorallocate($dimg, $background[0], $background[1], $background[2]));
        // Quellbild kopieren
        imagecopy($dimg, $simg, 0, 0, 0, 0, $simgx, $simgy);
        // und das gespiegelte Bild einfügen
        $simg = $this->imageflip($simg);
        imagecopy($dimg, $simg, 0, $simgy, 0, 0, $simgx, $simgy);

        // Verlauf erzeugen
        $alphaF = 60 / ($gradientH - 1);
        for ($i = 0; $i < $gradientH; $i++) {
            $col = imagecolorallocatealpha($dimg, $background[0], $background[1], $background[2], 60 - $i * $alphaF);
            imageline($dimg, 0, $simgy + $i, $simgx, $simgy + $i, $col);
        }

        // Schatten erzeugen
        $alphaF = 60 / ($shadowH - 1);
        for ($i = 0; $i < $shadowH; $i++) {
            $col = imagecolorallocatealpha($dimg, 160, 160, 160, $i*$alphaF + 67);
            imageline($dimg, 0, $simgy + $i, $simgx, $simgy + $i, $col);
        }

        // Bild zurückgeben
        return $dimg;
    }
    
    
    private function imageflip($source_image){
    	
    	$width  = imagesx($source_image);
        $height = imagesy($source_image);
        $dest   = imagecreatetruecolor($width, $height);
        $x = $y = 0;
        for($i = 0; $i < $width * $height; $i++)
        {
                if($i % $height == 0)
                {
                        $x = ($i / $height);
                        $y = 0;
                }
                imagesetpixel($dest, $x, $height - $y - 1, imagecolorat($source_image, $x, $y));
                $y++;
        }
        return $dest;

    	
    }
    
}
?>

