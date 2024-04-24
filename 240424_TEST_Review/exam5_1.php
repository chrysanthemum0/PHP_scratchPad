<?php 
class Product {
    private $name;
    private $price;

    public function __set($var, $value) {
        if ($var === 'price' && $value < 0) {
            throw new Exception("Price cannot be negative");
        }
        $this->{$var} = $value;
    }

    public function __get($var) {
        if ($var === 'name') {
            return strtoupper($this->{$var});
        }
        return $this->{$var};
    }
}

$product = new Product();
$product->name = 'Laptop';
$product->price = 1200;

echo "Product: " . $product->name . ", Price: $" . $product->price;  // __get 메서드 호출


?>