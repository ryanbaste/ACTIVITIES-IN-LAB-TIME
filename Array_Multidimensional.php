<?php
$output = null;

$user = [
    'name' => 'Juan',
    'email' => 'juan@gmail.com',
    'password' => '123456',
    'hobbies' => ['Video Games', 'Basketball'],
];

// Examples
// $output = $user['name'];
// $output = $user['hobbies'][0];


$fruits = [
    ['Apple', 'Red'],
    ['Orange', 'Orange'],
    ['Banana', 'Yellow']
];

// Examples
// $fruits[] = ['Grapes', 'Purple'];
// $output = $fruits[3][0];


$users = [
    ['name' => 'Juan',   'email' => 'juan@gmail.com',   'password' => '123456'],
    ['name' => 'Ryan', 'email' => 'ryan@gmail.com', 'password' => 'ryan123'],
    ['name' => 'Baste', 'email' => 'baste@gmail.com', 'password' => 'baste']
];

// Example
// $output = $users[1]['email'];



$tempUser = [
    ['name' => 'Maria', 'email' => 'maria@gmail.com', 'password' => 'akoCmaria']
];

unset($tempUser[2]);

$output = count($tempUser);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP Arrays and Multidimensional</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP Arrays</h1>
        </div>
    </header>

    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <p class="text-xl font-semibold mb-4">
                Output: <?= $output ?>
            </p>

            <pre class="bg-gray-100 p-3 rounded">
<?php print_r($tempUser); ?>
            </pre>
        </div>
    </div>
</body>

</html>