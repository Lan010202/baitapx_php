<?php

interface Resizable {/*Tạo một interface "Resizable" (Có thể điều chỉnh kích thước) với một phương thức là "resize". 
    Tạo một lớp "Rectangle" (Hình chữ nhật) và triển khai interface Resizable để thay đổi kích thước của hình chữ nhật.*/
    public function resize($percentage);
}

class Rectangle implements Resizable {
    protected $width;
    protected $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function resize($percentage) {
        $this->width *= $percentage / 100;
        $this->height *= $percentage / 100;
    }

    public function getDimensions() {
        return "Width: {$this->width}, Height: {$this->height}";
    }
}

// Create a Rectangle object
$rectangle = new Rectangle(10, 5);
print "Initial Dimensions: " . $rectangle->getDimensions() . "\n";

// Resize the rectangle
$rectangle->resize(150);
print "Resized Dimensions: " . $rectangle->getDimensions() . "\n";

?>
