<?php
class Rectangle
{
    // static を使うことでクラスの外からでも、そのクラスの属性、メソッド、を呼び出すことができます
    public static $width;
    public static $height;

    public static function getPerimeter()
    {
        //クラスの中はself::$変数 を使って、変数の値を設定できます。
        echo 2 * (self::$width + self::$height);
    }
    public static function getArea()
    {
        return self::$width * self::$height;
    }
}
Rectangle::$width = 30;
Rectangle::$height = 50;
echo Rectangle::getArea();
echo "<br>";
echo Rectangle::getPerimeter();
