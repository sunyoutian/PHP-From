<!DOCTYPE>

<head>

<title>Array</title>

</head>
<body>

  <?php
$customer['firstName'] = 'John';
$customer['lasttName'] = 'Kay';
$customer['city'] = 'New York';
$customer['state'] = 'New York';

echo "my first name is" .$customer ['firstName'];
echo'<br>';


$cars[0] = 'Ferrari';
$cars[1] = 'Porshe';
$cars[2] = 'Mustang';
$cars[3] = 'Jaguar';
$cars[4] = 'Ausi';

echo "my other car is $car[0]\n";
echo "my other car is $car[3]";
echo'<br>';


$restaurant = [

['name' => "Nobu",
'type' => "Sushi",
'price' => "Expensive"
],

['name' => "Burger King",
'type' => "Fast Food",
'price' => "Cheap"
]


];

echo $restaurant[0]['name'].' is very '.$restaurant[0]['price'];
echo'<br>';
echo $restaurant[1]['name'].' is very '.$restaurant[1]['price'];


 ?>

</body>
