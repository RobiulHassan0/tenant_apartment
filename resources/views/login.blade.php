<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Apartment Management</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* মসৃণ ট্রানজিশন এনিমেশন */
    .transition-all-custom {
      transition: all 0.7s cubic-bezier(0.6, -0.28, 0.735, 0.045);
    }

    .move-right {
      transform: translateX(100%);
    }

    .move-left {
      transform: translateX(-100%);
    }
  </style>
</head>

<body class="min-h-screen flex items-center justify-center bg-gray-900 relative overflow-hidden">

  <div class="absolute inset-0">
    <img src="https://images.unsplash.com/photo-1501183638710-841dd1904471?auto=format&fit=crop&w=1600&q=80"
      class="w-full h-full object-cover" alt="Background Image">
    <div class="absolute inset-0 bg-black/60"></div>
  </div>

  <div
    class="relative z-10 w-full max-w-4xl h-[550px] bg-white/90 rounded-[3rem] shadow-2xl flex overflow-hidden backdrop-blur-sm">

    <div id="cover-side"
      class="w-1/2 h-full bg-gradient-to-br from-indigo-600 to-purple-600 flex flex-col items-center justify-center p-12 text-center transition-all-custom z-20 order-1">
      <h2 id="cover-title" class="text-4xl font-black text-white mb-4 uppercase italic">Tenant Login</h2>
      <p id="cover-desc" class="text-indigo-100 mb-10 text-sm leading-relaxed">Access your apartment dashboard, pay
        bills, and manage your stay.</p>

      <button onclick="toggleAuth()"
        class="px-10 py-3 border-2 border-white/30 rounded-2xl font-bold hover:bg-white hover:text-indigo-600 transition-all tracking-widest uppercase text-xs text-white">
        Switch to Admin
      </button>
    </div>

    <div id="form-side"
      class="w-1/2 h-full flex flex-col items-center justify-center p-12 transition-all-custom z-10 order-2">
      <div class="w-full max-w-sm">
        <div class="text-center mb-8">
          <h1 id="main-title" class="text-3xl font-extrabold text-gray-800 mb-2">🏢 Welcome Back</h1>
          <p id="sub-title" class="text-gray-600 text-sm">Please login as Tenant</p>
        </div>

        <div class="space-y-5">
          <div>
            <label class="block text-gray-700 mb-2 font-medium text-sm">Email/Phone</label>
            <input type="text" id="LoginID" placeholder="Enter credentials"
              class="w-full px-5 py-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition">
          </div>

          <div>
            <label class="block text-gray-700 mb-2 font-medium text-sm">Password</label>
            <input type="password" id="PasswordID" placeholder="••••••••"
              class="w-full px-5 py-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition">
          </div>

          <button onclick="handleLogin()"
            class="w-full py-3 bg-gradient-to-r from-indigo-500 to-purple-500 text-white font-semibold rounded-xl shadow-lg hover:from-purple-500 hover:to-indigo-500 transition-all uppercase tracking-wider">
            Login
          </button>

          <div id="register-link" class="text-center">
            <a href="#" class="text-indigo-700 font-medium hover:text-indigo-900 transition text-sm">
              Create a new account?
            </a>
          </div>
        </div>
      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script>
    let isAdminMode = false;
    const coverSide = document.getElementById('cover-side');
    const formSide = document.getElementById('form-side');
    const coverTitle = document.getElementById('cover-title');
    const coverDesc = document.getElementById('cover-desc');
    const mainTitle = document.getElementById('main-title');
    const subTitle = document.getElementById('sub-title');
    const registerLink = document.getElementById('register-link');

    function toggleAuth() {
      isAdminMode = !isAdminMode;
      const switchBtn = document.querySelector('#cover-side button');

      if (isAdminMode) {
        coverSide.classList.add('move-right');
        formSide.classList.add('move-left');

        setTimeout(() => {
          coverTitle.innerText = "Admin Login";
          coverDesc.innerText = "Authorized personnel only. Manage properties, tenants, and system settings.";
          mainTitle.innerText = "🛡️ Admin Access";
          subTitle.innerText = "Please login as Administrator";
          registerLink.style.display = 'none';

          switchBtn.innerText = "Switch to Tenant";
        }, 300);
      } else {
        coverSide.classList.remove('move-right');
        formSide.classList.remove('move-left');

        setTimeout(() => {
          coverTitle.innerText = "Tenant Login";
          coverDesc.innerText = "Access your apartment dashboard, pay bills, and manage your stay.";
          mainTitle.innerText = "🏢 Welcome Back";
          subTitle.innerText = "Please login as Tenant";
          registerLink.style.display = 'block';

          switchBtn.innerText = "Switch to Admin";
        }, 300);
      }
    }


    // const token = localStorage.getItem('tenant-token') || localStorage.getItem('admin-token');
    // if (!token) {
    //   window.location = "/login"
    // }

    async function handleLogin() {
      const loginValue = document.getElementById('LoginID').value;
      const passwordValue = document.getElementById('PasswordID').value;

      if (!loginValue || !passwordValue) {
        alert('Please fill in both fields.');
        return;
      }

      let userData = {
        [isAdminMode ? 'email' : 'phone']: loginValue,
        'password': passwordValue
      };

      try {
        const endpoint = isAdminMode ? '/api/v1/login' : '/api/v1/tenant/login';
        const response = await axios.post(endpoint, userData);

        const tokenKey = isAdminMode ? 'admin-token' : 'tenant-token';
        localStorage.setItem(tokenKey, response.data.access_token)
        console.log(response.data);

        alert(response.data.message || 'Login Successfull');
        window.location.href = isAdminMode ? "api/v1/admin/dashboard" : "api/v1/tenant/dashboard";

      } catch (err) {
        if (err.response && err.response.data.errors) {
          alert(Object.values(err.response.data.errors)[0][0]);
        } else {
          alert('Login failed. Please check your credentials.');
        }
      }
    }

    async function logout() {
      try {
        const tokenKey = isAdminMode ? 'admin-token' : 'tenant-token';
        const token = localStorage.getItem(tokenKey);
        await axios.post('api/v1/tenant/logout', {}, {
          'headers': { Authorization: `Bearer ${token}` },
        });
        localStorage.removeItem(tokenKey);
        window.location = "/login";

      } catch (error) {
        console.log('login failed', error);
        localStorage.clear();
        window.location = "/login";
      }
    }
  
    getDashboard();
    async function getDashboard(){
      const token = localStorage.getItem('admin-token');
      try {
        const response = await axios.get('api/v1/admin/dashboard', {
          headers: {
            Authorization: `Bearer ${token}`,
            'Accept': 'application/json' 
          }
        });

        console.log(response.data);
      } catch (error) {
        if(error.response.status === 401){
          window.location = '/login'
        }
      }
    }
  </script>

</body>

</html>