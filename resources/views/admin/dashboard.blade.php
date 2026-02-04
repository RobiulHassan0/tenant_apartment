<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Property Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com"></script>
    <link href="https://fonts.googleapis.com" rel="stylesheet">
    <style>
        body {
            font-family: 'Outfit', sans-serif;
            background: #0f172a;
            color: #f1f5f9;
        }

        .glass-sidebar {
            background: rgba(15, 23, 42, 0.8);
            border-right: 1px solid rgba(255, 255, 255, 0.05);
        }

        .active-nav {
            background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
            box-shadow: 0 10px 20px -5px rgba(99, 102, 241, 0.4);
        }

        .booking-card {
            background: rgba(30, 41, 59, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: 0.3s;
        }

        .booking-card:hover {
            border-color: #6366f1;
            background: rgba(30, 41, 59, 0.8);
            transform: translateY(-3px);
        }

        .bg-gradient-actions {
            background: linear-gradient(135deg, #ec4899 0%, #f472b6 100%);
        }
    </style>
</head>

<body class="flex min-h-screen overflow-hidden">

    <!-- Left Side Panel (Sidebar) -->
    <aside class="w-64 glass-sidebar hidden lg:flex flex-col p-6 space-y-8 z-20">
        <div class="flex items-center gap-3 px-2">
            <div
                class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center shadow-lg shadow-indigo-500/20">
                <i data-lucide="building-2" class="text-white w-6 h-6"></i>
            </div>
            <h2 class="text-xl font-bold italic tracking-tighter">PROP<span class="text-indigo-400">SYNC</span></h2>
        </div>

        <nav class="flex-1 space-y-2">
            <a href="#"
                class="flex items-center gap-4 px-4 py-3.5 rounded-2xl active-nav text-white font-bold transition">
                <i data-lucide="grid" class="w-5 h-5"></i> Dashboard
            </a>
            <a href="#"
                class="flex items-center gap-4 px-4 py-3.5 rounded-2xl text-slate-400 hover:text-white hover:bg-slate-800 transition">
                <i data-lucide="key" class="w-5 h-5"></i> Apartments
            </a>
            <a href="#"
                class="flex items-center gap-4 px-4 py-3.5 rounded-2xl text-slate-400 hover:text-white hover:bg-slate-800 transition">
                <i data-lucide="users" class="w-5 h-5"></i> Tenants
            </a>
            <a href="#"
                class="flex items-center gap-4 px-4 py-3.5 rounded-2xl text-slate-400 hover:text-white hover:bg-slate-800 transition">
                <i data-lucide="settings" class="w-5 h-5"></i> Settings
            </a>
        </nav>

        <div class="pt-6 border-t border-slate-800">
            <button
                class="flex items-center gap-4 px-4 py-3.5 rounded-2xl text-rose-400 hover:bg-rose-500/10 w-full transition">
                <i data-lucide="log-out" class="w-5 h-5"></i> Logout
            </button>
        </div>
    </aside>

    <!-- Main Content Area -->
    <main class="flex-1 flex flex-col h-screen overflow-y-auto relative">
        <!-- Header -->
        <header
            class="p-6 md:p-10 flex justify-between items-center bg-slate-900/30 sticky top-0 backdrop-blur-md z-10">
            <div>
                <h1 class="text-3xl font-black italic">Admin Overview</h1>
                <p class="text-slate-400 text-sm mt-1">Manage all properties and tenants.</p>
            </div>
            <div class="flex items-center gap-4">
                <div class="text-right hidden md:block">
                    <p class="text-sm font-bold">Rahat Chowdhury</p>
                    <p class="text-xs text-indigo-400">Administrator</p>
                </div>
                <img src="https://api.dicebear.com"
                    class="w-12 h-12 rounded-2xl bg-slate-800 border border-slate-700 p-1 shadow-xl" alt="avatar">
            </div>
        </header>

        <!-- Main Workspace -->
        <div class="p-6 md:p-10 space-y-20">

            <!-- Quick Stats -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="p-8 rounded-[2.5rem] bg-indigo-600/10 border border-indigo-500/20">
                    <div class="w-12 h-12 bg-indigo-600 rounded-2xl flex items-center justify-center mb-4"><i
                            data-lucide="home"></i></div>
                    <p class="text-slate-400 text-sm font-bold uppercase tracking-widest">Total Apartments</p>
                    <h2 class="text-4xl font-black mt-1 italic">34</h2>
                </div>
                <div class="p-8 rounded-[2.5rem] bg-emerald-600/10 border border-emerald-500/20">
                    <div class="w-12 h-12 bg-emerald-600 rounded-2xl flex items-center justify-center mb-4"><i
                            data-lucide="users"></i></div>
                    <p class="text-slate-400 text-sm font-bold uppercase tracking-widest">Total Tenants</p>
                    <h2 class="text-4xl font-black mt-1 text-emerald-400 italic">28</h2>
                </div>
                <div class="p-8 rounded-[2.5rem] bg-pink-600/10 border border-pink-500/20">
                    <div class="w-12 h-12 bg-pink-600 rounded-2xl flex items-center justify-center mb-4"><i
                            data-lucide="zap"></i></div>
                    <p class="text-slate-400 text-sm font-bold uppercase tracking-widest">Active Bookings</p>
                    <h2 class="text-4xl font-black mt-1 text-pink-400 italic">02</h2>
                </div>
                <div class="p-8 rounded-[2.5rem] bg-sky-600/10 border border-sky-500/20">
                    <div class="w-12 h-12 bg-sky-600 rounded-2xl flex items-center justify-center mb-4"><i
                            data-lucide="zap"></i></div>
                    <p class="text-slate-400 text-sm font-bold uppercase tracking-widest">Active Bookings</p>
                    <h2 class="text-4xl font-black mt-1 text-sky-400 italic">02</h2>
                </div>

            </div>

            <!-- Apartment List -->
            <section>
                <div class="flex justify-between items-center mb-8 px-2">
                    <h3 class="text-2xl font-black italic flex items-center gap-3">
                        <span class="w-3 h-8 bg-indigo-600 rounded-full"></span> Apartment List
                    </h3>
                    <button
                        class="bg-indigo-600 hover:bg-indigo-500 px-6 py-3 rounded-xl text-sm font-bold text-white shadow-lg shadow-indigo-500/30 transition flex items-center gap-2">
                        <i data-lucide="plus" class="w-4 h-4"></i> Add New
                    </button>
                </div>

                <div
                    class="flex items-center px-10 py-4 text-slate-500 text-xs font-black uppercase tracking-[0.2em] border-b border-slate-800/50 mb-4">
                    <div class="w-[10%] text-left">Image</div>
                    <div class="w-[10%] text-center">ID</div>
                    <div class="w-[35%] text-center">Name & Location</div>
                    <div class="w-[15%] text-center">Rent</div>
                    <div class="w-[15%] text-center">Status</div>
                    <div class="w-[15%] text-right">Action</div>
                </div>

                <div class="space-y-4">
                    <div class="booking-card p-5 px-10 rounded-[2rem] flex items-center justify-between group">

                        <div class="w-[10%] flex justify-start">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=200&q=80"
                                    class="w-20 h-20 rounded-3xl object-cover border border-slate-700 shadow-2xl transition-transform group-hover:scale-105"
                                    alt="Property">
                            </div>
                        </div>

                        <div class="w-[10%] flex justify-center">
                            <span
                                class="px-3 py-1.5 rounded-xl bg-slate-800/50 border border-slate-700 text-indigo-400 font-mono font-bold text-xs shadow-inner">
                                #10
                            </span>
                        </div>

                        <div class="w-[35%] text-center">
                            <h4 class="text-lg font-bold tracking-tight text-white">Luxury Sky Penthouse</h4>
                            <p class="text-slate-500 text-xs mt-1 font-medium">Banani, Dhaka</p>
                        </div>

                        <div class="w-[15%] text-center">
                            <div>
                                <p class="text-[10px] font-black text-slate-500 uppercase">Monthly Rent</p>
                                <p class="text-2xl font-black text-emerald-400">৳ 55,000</p>
                            </div>
                        </div>

                        <div class="w-[15%] flex justify-center">
                            <span
                                class="flex items-center gap-2 px-4 py-2 rounded-2xl bg-rose-500/10 text-rose-500 text-[10px] font-black uppercase tracking-wider border border-rose-500/20 shadow-lg shadow-rose-500/5">
                                <span class="w-1.5 h-1.5 rounded-full bg-rose-500 animate-pulse"></span> Booked
                            </span>
                        </div>

                        <div class="w-[15%] flex justify-end gap-2">
                            <button
                                class="p-3 rounded-2xl bg-slate-800/80 hover:bg-indigo-600 transition-all shadow-xl group/btn"
                                title="View">
                                <i data-lucide="eye" class="w-5 h-5 text-slate-400 group-hover/btn:text-white"></i>
                            </button>
                            <button
                                class="p-3 rounded-2xl bg-slate-800/80 hover:bg-emerald-600 transition-all shadow-xl group/btn"
                                title="Edit">
                                <i data-lucide="edit-3" class="w-5 h-5 text-slate-400 group-hover/btn:text-white"></i>
                            </button>
                            <button
                                class="p-3 rounded-2xl bg-slate-800/80 hover:bg-rose-600 transition-all shadow-xl group/btn"
                                title="Delete">
                                <i data-lucide="trash-2" class="w-5 h-5 text-slate-400 group-hover/btn:text-white"></i>
                            </button>
                        </div>
                    </div>

                    <div class="booking-card p-5 px-10 rounded-[2.5rem] flex items-center justify-between group">
                        <div class="w-[10%] flex justify-start">
                            <div
                                class="w-20 h-20 rounded-3xl bg-indigo-600/10 flex items-center justify-center border border-indigo-500/20 shadow-xl">
                                <i data-lucide="home" class="w-8 h-8 text-indigo-400"></i>
                            </div>
                        </div>
                        <div class="w-[10%] flex justify-center">
                            <span
                                class="px-3 py-1.5 rounded-xl bg-slate-800/50 border border-slate-700 text-indigo-400 font-mono font-bold text-xs">#11</span>
                        </div>
                        <div class="w-[35%] text-center">
                            <h4 class="text-lg font-bold tracking-tight text-white">Lakeview Cozy Suite</h4>
                            <p class="text-slate-500 text-xs mt-1 font-medium">Gulshan 2, Dhaka</p>
                        </div>
                        <div class="w-[15%] text-center">
                            <span class="text-2xl font-black text-white italic tracking-tight">$2,800</span>
                        </div>
                        <div class="w-[15%] flex justify-center">
                            <span
                                class="flex items-center gap-2 px-4 py-2 rounded-2xl bg-emerald-500/10 text-emerald-500 text-[10px] font-black uppercase tracking-wider border border-emerald-500/20 shadow-lg shadow-emerald-500/5">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Available
                            </span>
                        </div>
                        <div class="w-[15%] flex justify-end gap-2">
                            <button
                                class="p-3 rounded-2xl bg-slate-800/80 hover:bg-indigo-600 transition-all group/btn"><i
                                    data-lucide="eye"
                                    class="w-5 h-5 text-slate-400 group-hover/btn:text-white"></i></button>
                            <button
                                class="p-3 rounded-2xl bg-slate-800/80 hover:bg-emerald-600 transition-all group/btn"><i
                                    data-lucide="edit-3"
                                    class="w-5 h-5 text-slate-400 group-hover/btn:text-white"></i></button>
                            <button
                                class="p-3 rounded-2xl bg-slate-800/80 hover:bg-rose-600 transition-all group/btn"><i
                                    data-lucide="trash-2"
                                    class="w-5 h-5 text-slate-400 group-hover/btn:text-white"></i></button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
</body>

</html>