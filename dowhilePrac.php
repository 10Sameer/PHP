<?php
$num = 5; 
$factorial = 1;
$i = $num;

do {
    $factorial *= $i;
    $i--;
} while ($i > 0);

echo "Factorial of $num is: " . $factorial;
?>

// reverse a string
<?php
$str = "Hello, World!";  
$reversed = "";
$length = strlen($str);
$i = $length - 1;

do {
    $reversed .= $str[$i];  
    $i--;
} while ($i >= 0);

echo "Reversed String: " . $reversed;
?>

//
<?php
$orders = [];
do {
    // Simulating user input (in a real case, use $_POST or $_GET)
    $item = readline("Enter item name (or type 'exit' to finish): ");
    
    if ($item !== "exit") {
        $quantity = (int) readline("Enter quantity: ");

        if ($quantity > 0) {
            $orders[] = ["item" => $item, "quantity" => $quantity];
        } else {
            echo "Invalid quantity. Try again.\n";
        }
    }
} while ($item !== "exit");

echo "\nOrder Summary:\n";
foreach ($orders as $order) {
    echo "{$order['quantity']} x {$order['item']}\n";
}
?>
