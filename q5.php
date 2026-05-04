<?php
$car_models = ["Mahindra", "Ferrari", "Audi", "Maruti"];

echo "Car Models:<br>";
for ($i = 0; $i < count($car_models); $i++) {
    echo $car_models[$i] . "<br>";
}

$car_prices = [
    "Mahindra" => 1300000,
    "Ferrari" => 8900000,
    "Audi" => 1230000,
    "Maruti" => 890000,

];

echo "<br>Car Prices:<br>";
foreach ($car_prices as $model => $price) {
    echo $model . " : $" . $price . "<br>";
}


array_push($car_models, "Maruti");

array_pop($car_models);

$new_cars = ["BMW", "Skoda"];
$merged = array_merge($car_models, $new_cars);

$sliced = array_slice($merged, 1, 3);

$keys = array_keys($car_prices);

echo "<br>Merged Array:<br>";
print_r($merged);

echo "<br>Sliced Array:<br>";
print_r($sliced);

echo "<br>Keys of Associative Array:<br>";
print_r($keys);
?>

