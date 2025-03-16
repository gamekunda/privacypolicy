<?php
include 'nav.php';

$host = "localhost";
$username = "root";
$password = "root";
$database = "Gamekunda";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    // Insert into database
    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, contact_number, address, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $contact_number, $address, $message);

    if ($stmt->execute()) {
        $success_message = "Your message has been sent successfully!";
    } else {
        $error_message = "Error: " . $stmt->error;
    }
    $stmt->close();
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="container mx-auto p-5">
    <header class="text-center py-10">
        <h1 class="text-4xl font-bold text-gray-800">Contact Me</h1>
        <p class="text-lg text-gray-600">I'd love to hear from you! Please fill out the form below:</p>
    </header>

    <main class="flex flex-col items-center">
        <div class="w-full md:w-2/3 lg:w-1/2 mx-auto bg-white p-6 rounded-lg shadow-lg mb-10">
            <!-- Success/Error Message -->
            <?php if (!empty($success_message)): ?>
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                    <?= htmlspecialchars($success_message) ?>
                </div>
            <?php elseif (!empty($error_message)): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                    <?= htmlspecialchars($error_message) ?>
                </div>
            <?php endif; ?>

            <!-- Contact Form -->
            <form action="contact.php" method="POST">
                <!-- Name -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                    <input type="text" id="name" name="name" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                    <input type="email" id="email" name="email" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Contact Number -->
                <div class="mb-4">
                    <label for="contact_number" class="block text-gray-700 font-bold mb-2">Contact Number:</label>
                    <input type="text" id="contact_number" name="contact_number" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Address -->
                <div class="mb-4">
                    <label for="address" class="block text-gray-700 font-bold mb-2">Address:</label>
                    <textarea id="address" name="address" rows="2" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <!-- Message -->
                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-bold mb-2">Message:</label>
                    <textarea id="message" name="message" rows="5" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </main>
</div>

<?php
include 'footer.php';
?>
