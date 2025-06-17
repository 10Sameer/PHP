<?php

$bakery = [
    "cakes" => [
        "choco_delight" => [
            "name" => "Chocolate Delight",
            "price" => 15.99,
            "stock" => 12,
            "ingredients" => ["flour", "cocoa", "sugar", "cream"],
            "variants" => [
                "small" => 10.99,
                "medium" => 15.99,
                "large" => 20.99
            ]
        ],
        "red_velvet" => [
            "name" => "Red Velvet Cake",
            "price" => 18.50,
            "stock" => 8,
            "ingredients" => ["flour", "butter", "red color", "cheese"],
            "variants" => [
                "half_kg" => 9.99,
                "1_kg" => 18.50,
                "2_kg" => 34.00
            ]
        ]
    ],
    "cookies" => [
        "butter_cookie" => [
            "name" => "Butter Cookie",
            "price" => 2.50,
            "stock" => 30,
            "ingredients" => ["butter", "flour", "vanilla"],
            "variants" => [
                "pack_6" => 2.50,
                "pack_12" => 4.50,
                "pack_24" => 8.00
            ]
        ]
    ],
    "bread" => [
        "multigrain" => [
            "name" => "Multigrain Bread",
            "price" => 3.25,
            "stock" => 20,
            "ingredients" => ["wheat", "seeds", "yeast"],
            "variants" => [
                "half" => 1.75,
                "full" => 3.25
            ]
        ]
    ]
];

// 🔁 Display all items with their variants
foreach ($bakery as $category => $items) {
    echo strtoupper($category) . ":\n";
    foreach ($items as $code => $details) {
        echo "- " . $details['name'] . " (Stock: {$details['stock']})\n";
        echo "  Price: $" . $details['price'] . "\n";
  
?>
