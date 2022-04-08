<?php

class Retangle{
    public $width ;
    public $height ;

    public function getPerimeter(){
        return 2*($this->width + $this->heigth);
    }
    public function getArea(){
        return $this->width * $this->height;
    }
}
// toán tử new giúp cấp phát bộ nhớ và tạo một đối tượng trên lớp đã dk khai báo 
// --> cung cấp kết nối tới những thuộc tính và phương  thưc của class 
$a= new Retangle();
$a -> width = 30;
$a -> height = 30;
echo $a->getArea();


?>