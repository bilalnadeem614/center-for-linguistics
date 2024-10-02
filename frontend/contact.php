<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./dist/output.css">
  <title>Contact Us</title>
</head>

<body class="text-gray-900">
  <?php
  require "./nav.php";
  ?>
  <main class="py-12">
    <!-- Contact Us Section -->
    <div class="max-w-screen-lg mx-auto px-4">
      <h2 class="text-4xl font-bold text-center text-gray-800 mb-6">Contact Us</h2>
      <p class="text-center text-gray-600 mb-12">We would love to hear from you! Please fill out the form below and we will get in touch with you shortly.</p>

      <form class="space-y-6 bg-white shadow-md rounded-lg p-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
          <!-- Name Input -->
          <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" id="name" name="name" class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
          </div>
          <!-- Email Input -->
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" name="email" class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
          </div>
        </div>

        <!-- Subject Input -->
        <div>
          <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
          <input type="text" id="subject" name="subject" class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
        </div>

        <!-- Message Input -->
        <div>
          <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
          <textarea id="message" name="message" rows="6" class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required></textarea>
        </div>

        <!-- Submit Button -->
        <div class="text-right">
          <button type="submit" class="py-2 px-6 text-white bg-indigo-600 hover:bg-indigo-500 rounded-lg shadow">Send Message</button>
        </div>
      </form>
    </div>
  </main>


  <!-- Footer -->
  <?php
  require "./footer.php";
  ?>

</body>

</html>