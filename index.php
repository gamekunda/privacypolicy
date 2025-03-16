<?php
include 'nav.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="container mx-auto px-4 lg:px-8 py-6">
    <!-- Header Section -->
    <header class="text-center py-10">
        <h1 class="text-5xl font-bold text-gray-800 tracking-tight">Welcome to Gamekunda™</h1>
        <p class="text-lg text-gray-600 mt-2">Discover the Art of Game Development</p>
    </header>

    <!-- Main Section -->
    <main class="flex flex-col lg:flex-row items-center max-w-5xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden">
        <!-- Left Column with Text and Button -->
        <div class="flex flex-col items-center lg:items-start lg:w-1/2 p-8 lg:p-10 space-y-4">
            <h2 class="text-3xl font-semibold text-center lg:text-left text-gray-800">Game Studio from the City of Gods</h2>
            <p class="text-gray-700 text-center lg:text-left leading-relaxed">
                Explore our collection of exciting 2D and 3D games available on the Play Store. From racing to space shooters, there’s something for everyone!
            </p>
            <!-- Centered Play Store Button -->
            <div class="flex justify-center w-full">
                <a href="https://play.google.com/store/apps/dev?id=8157412288093710771" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Play Store
                </a>
            </div>
        </div>

        <!-- Right Column with Image -->
        <div class="lg:w-1/2 p-6">
            <img src="src/images/laptop.avif" alt="Game Image" class="rounded-lg shadow-lg w-full">
        </div>
    </main>

    <!-- Tools We Use Section with White Background -->
    <section class="py-12 mt-8 bg-white rounded-lg shadow-lg max-w-5xl mx-auto">
        <h2 class="text-3xl font-bold text-gray-800 text-center mb-8">Tools We Use</h2>
        <div class="flex flex-wrap justify-center items-center gap-6 p-4">
            <img src="src/images/unity.webp" alt="Unity Logo" class="h-20 w-auto">
            <img src="src/images/Csharp_Logo.png" alt="C# Logo" class="h-20 w-auto">
            <img src="src/images/figma.webp" alt="Figma Logo" class="h-20 w-auto">
            <img src="src/images/illustrator.png" alt="Adobe Illustrator Logo" class="h-20 w-auto">
            <img src="src/images/rider.jpg" alt="Rider Logo" class="h-20 w-auto">
        </div>
    </section>
</div>

<?php
include 'footer.php';
?>

</body>
</html>
