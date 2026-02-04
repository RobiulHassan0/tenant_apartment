<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tenant Registration | Apartment Management</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-900 relative">

  <!-- Background Image -->
  <div class="absolute inset-0">
    <img src="https://images.unsplash.com/photo-1599423300746-b62533397364?auto=format&fit=crop&w=1600&q=80" 
         class="w-full h-full object-cover" alt="Background Image">
    <div class="absolute inset-0 bg-black/60"></div>
  </div>

  <!-- Registration Card -->
  <div class="relative z-10 w-full max-w-md bg-white/90 rounded-3xl shadow-2xl p-10 backdrop-blur-sm">
    <div class="text-center mb-8">
      <h1 class="text-3xl font-extrabold text-gray-800 mb-2">📝 Tenant Registration</h1>
      <p class="text-gray-600 text-sm">Create your account</p>
    </div>

    <!-- Form -->
    <div class="space-y-6">
      <div>
        <label for="NameID" class="block text-gray-700 mb-2 font-medium">Full Name</label>
        <input type="text" id="NameID" placeholder="John Doe"
               class="w-full px-5 py-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition">
      </div>

      <div>
        <label for="EmailID" class="block text-gray-700 mb-2 font-medium">Email</label>
        <input type="email" id="EmailID" placeholder="example@mail.com"
               class="w-full px-5 py-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition">
      </div>

      <div>
        <label for="PasswordID" class="block text-gray-700 mb-2 font-medium">Password</label>
        <input type="password" id="PasswordID" placeholder="••••••••"
               class="w-full px-5 py-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition">
      </div>

      <div>
        <label for="ConfirmPasswordID" class="block text-gray-700 mb-2 font-medium">Confirm Password</label>
        <input type="password" id="ConfirmPasswordID" placeholder="••••••••"
               class="w-full px-5 py-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition">
      </div>

      <button onclick="tenantRegister()"
              class="w-full py-3 bg-gradient-to-r from-indigo-500 to-purple-500 text-white font-semibold rounded-xl shadow-lg hover:from-purple-500 hover:to-indigo-500 transition-all">
        Register
      </button>

      <a href="/tenant/login" class="block text-center text-indigo-700 font-medium hover:text-indigo-900 transition mt-3">
        Already have an account? Login
      </a>
    </div>

    <p class="text-center text-gray-400 text-xs mt-8">© 2026 Apartment Management System</p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script>
    async function tenantRegister() {
      const name = document.getElementById('NameID').value;
      const email = document.getElementById('EmailID').value;
      const password = document.getElementById('PasswordID').value;
      const confirmPassword = document.getElementById('ConfirmPasswordID').value;

      if (!name || !email || !password || !confirmPassword) {
        alert('Please fill in all fields.');
        return;
      }

      if (password !== confirmPassword) {
        alert('Passwords do not match.');
        return;
      }

      try {
        const response = await axios.post('/api/v1/tenant/register', {
          name: name,
          email: email,
          password: password
        });
        alert('Registration successful!');
        window.location = "/tenant/login";
      } catch (err) {
        alert('Registration failed. Please try again.');
        console.error(err);
      }
    }
  </script>

</body>
</html>
