<?php
class code{
    private $width=120;
    private $height=40;
    private $letter="123456789abcdefghigklmnpqrstuvwxxyz";
    private $count=20;
    private $line=5;
    private $typeface="src/font/Rubik-Italic.ttf";
    private $color="";
    private $img="";
    private $str="";
    function __construct()
    {
        session_start();
    }
    private function pic(){
        $this->img=imagecreate($this->width,$this->height);
    }
    private function getColor($type="b"){
        if ($type==="b"){
            $r=mt_rand(0,120);
            $g=mt_rand(0,120);
            $b=mt_rand(0,120);
        }elseif ($type==="l"){
            $r=mt_rand(120,240);
            $g=mt_rand(120,240);
            $b=mt_rand(120,240);
        }
        $this->color=imagecolorallocate($this->img,$r,$g,$b);
        return $this->color;
    }
    private function bg(){
        imagefill($this->img,$this->width,$this->height,$this->getColor());
    }
    private function drawPoint(){
        for($i=0;$i<=$this->count;$i++){
            imagesetpixel($this->img,mt_rand(0,$this->width),mt_rand(0,$this->height),$this->getColor());
        }
    }
    private function drawLine(){
        for ($i=0;$i<$this->line;$i++){
            imageline($this->img,mt_rand(0,$this->width),mt_rand(0,$this->height),mt_rand(0,$this->width),mt_rand(0,$this->height),$this->getColor());
        }
    }
    private function drawWord(){
        for ($i=0;$i<4;$i++){
            $w=substr($this->letter,mt_rand(0,strlen($this->letter)-1),1);
            $w=mt_rand(0,1)?strtolower($w):strtoupper($w);
            imagettftext($this->img,mt_rand(18,22),mt_rand(-20,20),mt_rand($i*30+5,$i*30+10),mt_rand(20,35),$this->getColor("l"),$this->typeface,$w);
            $this->str.=$w;
        }
        $_SESSION["code"]=$this->str;
    }
    function outcode(){
        header("content-type:image/png");
        $this->pic();
        $this->bg();
        $this->drawWord();
        $this->drawPoint();
        $this->drawLine();

        imagepng($this->img);
    }
}
