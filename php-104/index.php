<?php

// Numeric Array.
$brands = ['Nike', 'Addidas', 'Puma', 'Converse'];

echo $brands[2];

echo "<pre>";
print_r($brands);
echo "</pre>";

echo "<br/>";

// associative array
$players = [
    'lebron_james' => 'Lakers',
    'derrick_rose' => 'Knicks',
    'stephen_curry' => 'Warriors',
];

echo $players['stephen_curry'];

echo "<pre>";
print_r($players);
echo "</pre>";

echo "<br/>";


// multidimensional array
$fast_food_chains = [
    'jollibee' => [
        'branches' => 12,
        'managers' => 15,
        'employees' => 80,
    ],
    'mcdonalds' => [
        'branches' => 18,
        'managers' => 10,
        'employees' => 70,
    ],
    'kfc' => [
        'branches' => 8,
        'managers' => 9,
        'employees' => 40,
    ],
];

$max_employee = 0;
$max_manager = max(array_column($fast_food_chains, 'managers'));

$most_employee_chain = [
    'name' => '',
    'count' => 0,
];
$least_manager_chain = [
    'name' => '',
    'count' => $max_manager,
];;

foreach ($fast_food_chains as $name => $chain) {

    if ($chain['employees'] > $most_employee_chain['count']) {
        $most_employee_chain = [
            'name' => $name,
            'count' => $chain['employees'],
        ];
    }
    if ($chain['managers'] < $least_manager_chain['count']) {
        $least_manager_chain = [
            'name' => $name,
            'count' => $chain['managers'],
        ];
    }
}

echo "the chain with the least manager is " . $least_manager_chain . " <br/>";
echo "the chain with the most employee is " . $most_employee_chain;
