<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-white p-2 m-2">
        <div class="container mx-auto flex items-center justify-between">
            <!-- Logo and Name -->
            <div class="flex items-center space-x-2">
                <!-- Set maximum width and auto height for responsive scaling -->
                <a href="home">
                    <img src="src/images/logo_horizontal_bold.png" alt="Logo" class="max-w-[200px] h-auto">
                </a>
            </div>

            <!-- Menu Button for Mobile -->
            <div class="md:hidden">
                <button id="menu-toggle" class="text-grey-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>

            <!-- Menu Items -->
            <div class="hidden md:flex items-center space-x-6" id="menu">
                <ul class="flex space-x-6">
                    <li><a href="home" class="text-black font-bold hover:text-sky-600">Home</a></li>
                    <li><a href="products" class="text-black font-bold hover:text-sky-600">Products</a></li>
                    <li><a href="contact" class="text-black font-bold hover:text-sky-600">Contact Us</a></li>
                    <li><a href="about" class="text-black font-bold hover:text-sky-600">About Us</a></li>
                    <li><a href="https://blog.gamekunda.com" class="text-black font-bold hover:text-sky-600">Blog</a></li>
                    <li><a href="privacy" class="text-black font-bold hover:text-sky-600">Privacy</a></li>
                </ul>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="md:hidden bg-grey-700 mt-2" id="mobile-menu" style="display: none;">
            <ul class="flex flex-col space-y-2 p-4">
                <li><a href="home" class="text-black font-bold hover:text-sky-600 ml-2">• Home</a></li>
                <li><a href="products.php" class="text-black font-bold hover:text-sky-600 ml-2">• Projects</a></li>
                <li><a href="contact.php" class="text-black font-bold hover:text-sky-600 ml-2">• Contact</a></li>
                <li><a href="about.php" class="text-black font-bold hover:text-sky-600 ml-2">• Daily Ups</a></li>
                <li><a href="https://blog.gamekunda.com" class="text-black font-bold hover:text-sky-600 ml-2">• Blog</a></li>
                <li><a href="privacy.php" class="text-black font-bold hover:text-sky-600 ml-2">• Privacy</a></li>
            </ul>
        </div>
    </nav>

    <script>
        // Toggle mobile menu visibility
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            if (mobileMenu.style.display === "none" || mobileMenu.style.display === "") {
                mobileMenu.style.display = "block";
            } else {
                mobileMenu.style.display = "none";
            }
        });
    </script>
</body>
</html>
