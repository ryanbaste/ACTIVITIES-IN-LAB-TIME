<?php
$listings = [
    [
        'id' => 1,
        'title' => 'Web Developer',
        'description' => 'Build and maintain modern websites',
        'salary' => 40000,
        'location' => 'Manila, Philippines',
        'tags' => []
    ],
    [
        'id' => 2,
        'title' => 'UI/UX Designer',
        'description' => 'Design clean and user-friendly interfaces',
        'salary' => 35000,
        'location' => 'Cebu City, Philippines',
        'tags' => ['Figma', 'UX', 'UI']
    ],
    [
        'id' => 3,
        'title' => 'Data Analyst',
        'description' => 'Analyze and interpret complex data sets',
        'salary' => 45000,
        'location' => 'Quezon City, Philippines',
        'tags' => ['SQL', 'Python', 'Excel']
    ],
    [
        'id' => 4,
        'title' => 'DevOps Engineer',
        'description' => 'Manage and optimize deployment pipelines',
        'salary' => 50000,
        'location' => 'Davao City, Philippines',
        'tags' => ['SQL', 'Python', 'Excel']
    ],
    [
        'id' => 5,
        'title' => 'Backend Developer',
        'description' => 'Develop and maintain server-side logic',
        'salary' => 48000,
        'location' => 'Baguio City, Philippines',
        'tags' => ['PHP', 'Node.js', 'MySQL']
    ]
];

$formatSalary = fn($salary) => number_format($salary);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['Roboto', 'sans-serif']
                    }
                }
            }
        }
    </script>

    <title>Job Listings</title>
</head>

<style>
    body {
        font-family: 'Roboto', sans-serif;
    }
</style>

<body class="bg-gradient-to-br from-slate-100 to-slate-200">

    <header class="bg-gradient-to-r from-indigo-600 to-blue-600 text-white p-5 shadow-lg">
        <h1 class="text-3xl font-bold tracking-wide">Job Listings</h1>
    </header>

    <div class="p-6 max-w-5xl mx-auto">
        <?php foreach ($listings as $index => $job) : ?>
            <div class="mb-5">
                <div
                    class="
                    <?php if ($job['id'] % 2 == 0) : ?>
                        bg-white border-l-4 border-blue-500
                    <?php else : ?>
                        bg-white border-l-4 border-indigo-500
                    <?php endif; ?>
                    rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">

                    <h2 class="text-2xl font-bold text-slate-800">
                        <?= $job['title'] ?>
                    </h2>

                    <p class="text-slate-600 mt-2">
                        <?= $job['description'] ?>
                    </p>

                    <ul class="mt-4 space-y-2 text-slate-700">
                        <li>
                            <strong class="text-slate-900">Salary:</strong>
                            <?= '$' . $formatSalary($job['salary']) ?>
                        </li>

                        <li>
                            <strong class="text-slate-900">Location:</strong>
                            <?= $job['location'] ?>
                            <?php if ($job['location'] === 'Cebu City, Philippines'): ?>
                                <span class="text-xs text-white bg-green-600 rounded-full px-2 py-1 ml-2">
                                    Remote-Friendly
                                </span>
                            <?php endif; ?>
                        </li>

                        <?php if (!empty($job['tags'])): ?>
                            <li class="mt-2">
                                <strong class="text-slate-900">Tags:</strong>
                                <span class="text-slate-600">
                                    <?= implode(', ', $job['tags']) ?>
                                </span>
                            </li>
                        <?php endif; ?>
                    </ul>

                </div>
            </div>
        <?php endforeach; ?>
    </div>

</body>

</html>