<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenant Dashboard | Apartment Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50">

    <div class="flex h-screen overflow-hidden">
        <aside class="w-64 bg-slate-900 text-slate-300 hidden md:flex flex-col shadow-xl">
            <div class="p-6 text-white text-xl font-bold flex items-center space-x-2 border-b border-slate-800">
                <span class="text-indigo-500 text-3xl">🏢</span>
                <span>Tenant Portal</span>
            </div>
            
            <nav class="flex-1 px-4 py-6 space-y-2">
                <a href="#" class="flex items-center space-x-3 p-3 rounded-xl bg-indigo-600 text-white shadow-lg shadow-indigo-500/20">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    <span class="font-medium">Dashboard</span>
                </a>
                <a href="#" class="flex items-center space-x-3 p-3 rounded-xl hover:bg-slate-800 hover:text-white transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    <span>My Apartment</span>
                </a>
                <a href="#" class="flex items-center space-x-3 p-3 rounded-xl hover:bg-slate-800 hover:text-white transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span>Payments</span>
                </a>
                <a href="#" class="flex items-center space-x-3 p-3 rounded-xl hover:bg-slate-800 hover:text-white transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                    <span>Complaints</span>
                </a>
            </nav>

            <div class="p-4 border-t border-slate-800">
                <button class="flex items-center space-x-3 p-3 w-full text-rose-400 hover:bg-rose-900/20 rounded-xl transition-all font-medium">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                    <span>Logout System</span>
                </button>
            </div>
        </aside>

        <main class="flex-1 overflow-y-auto">
            <header class="bg-white border-b border-gray-200 sticky top-0 z-10">
                <div class="max-w-7xl mx-auto px-8 py-4 flex justify-between items-center">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Welcome Back!</h2>
                        <p class="text-sm text-gray-500">Here's what's happening with your stay today.</p>
                    </div>
                    
                    <div class="flex items-center space-x-4">
                        <button class="p-2 text-gray-400 hover:text-indigo-600 bg-gray-50 rounded-full relative">
                            <span class="absolute top-0 right-0 h-2 w-2 bg-rose-500 rounded-full border-2 border-white"></span>
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                        </button>
                        <div class="h-10 w-[1px] bg-gray-200"></div>
                        <div class="flex items-center space-x-3 cursor-pointer group">
                            <div class="text-right hidden sm:block">
                                <p class="text-sm font-bold text-gray-800 group-hover:text-indigo-600 transition">John Doe</p>
                                <p class="text-xs text-gray-400">Tenant ID: #TN9021</p>
                            </div>
                            <img class="h-11 w-11 rounded-full border-2 border-white ring-2 ring-indigo-500/20 object-cover" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Avatar">
                        </div>
                    </div>
                </div>
            </header>

            <div class="max-w-7xl mx-auto px-8 py-8">
                
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-10">
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 group hover:border-indigo-500 transition-all duration-300">
                        <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-xl flex items-center justify-center mb-4 group-hover:bg-indigo-600 group-hover:text-white transition-all">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <p class="text-gray-500 text-sm font-medium italic">Current Month Rent</p>
                        <h3 class="text-2xl font-black text-gray-800">৳ ১৫,৫০০</h3>
                        <span class="mt-2 inline-block px-3 py-1 bg-green-100 text-green-700 text-xs font-bold rounded-lg uppercase">Paid</span>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 group hover:border-amber-500 transition-all duration-300">
                        <div class="w-12 h-12 bg-amber-50 text-amber-600 rounded-xl flex items-center justify-center mb-4 group-hover:bg-amber-600 group-hover:text-white transition-all">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <p class="text-gray-500 text-sm font-medium italic">Electricity Bill</p>
                        <h3 class="text-2xl font-black text-gray-800">৳ ১,৪২০</h3>
                        <span class="mt-2 inline-block px-3 py-1 bg-amber-100 text-amber-700 text-xs font-bold rounded-lg uppercase">Due in 3 days</span>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 group hover:border-rose-500 transition-all duration-300">
                        <div class="w-12 h-12 bg-rose-50 text-rose-600 rounded-xl flex items-center justify-center mb-4 group-hover:bg-rose-600 group-hover:text-white transition-all">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <p class="text-gray-500 text-sm font-medium italic">Open Issues</p>
                        <h3 class="text-2xl font-black text-gray-800">২টি সমস্যা</h3>
                        <span class="mt-2 inline-block px-3 py-1 bg-rose-100 text-rose-700 text-xs font-bold rounded-lg uppercase">In Progress</span>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 group hover:border-emerald-500 transition-all duration-300">
                        <div class="w-12 h-12 bg-emerald-50 text-emerald-600 rounded-xl flex items-center justify-center mb-4 group-hover:bg-emerald-600 group-hover:text-white transition-all">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                        <p class="text-gray-500 text-sm font-medium italic">Total Paid (Year)</p>
                        <h3 class="text-2xl font-black text-gray-800">৳ ১,৮৬,০০০</h3>
                        <span class="mt-2 inline-block px-3 py-1 bg-emerald-100 text-emerald-700 text-xs font-bold rounded-lg uppercase">Tax Ready</span>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <div class="lg:col-span-2 bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                        <div class="p-6 border-b border-gray-50 flex justify-between items-center bg-white">
                            <h3 class="font-bold text-gray-800 text-lg">Transaction History</h3>
                            <button class="px-4 py-2 bg-gray-50 text-indigo-600 rounded-xl text-sm font-bold hover:bg-indigo-50 transition">Export CSV</button>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left">
                                <thead class="bg-gray-50/50 text-gray-400 text-[11px] font-black uppercase tracking-widest">
                                    <tr>
                                        <th class="px-8 py-4">Ref ID</th>
                                        <th class="px-8 py-4">Description</th>
                                        <th class="px-8 py-4">Amount</th>
                                        <th class="px-8 py-4 text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-50">
                                    <tr class="hover:bg-gray-50/50 transition">
                                        <td class="px-8 py-5 text-sm font-mono text-indigo-600 uppercase">TXN-88021</td>
                                        <td class="px-8 py-5 font-semibold text-gray-700">February Rent Payment</td>
                                        <td class="px-8 py-5 font-bold text-gray-800">৳ ১৫,৫০০</td>
                                        <td class="px-8 py-5 text-center">
                                            <span class="px-3 py-1 bg-green-50 text-green-600 text-[10px] font-black uppercase rounded-full">Completed</span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50/50 transition">
                                        <td class="px-8 py-5 text-sm font-mono text-indigo-600 uppercase">TXN-87995</td>
                                        <td class="px-8 py-5 font-semibold text-gray-700">January Gas & Water Bill</td>
                                        <td class="px-8 py-5 font-bold text-gray-800">৳ ১,২০০</td>
                                        <td class="px-8 py-5 text-center">
                                            <span class="px-3 py-1 bg-green-50 text-green-600 text-[10px] font-black uppercase rounded-full">Completed</span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50/50 transition">
                                        <td class="px-8 py-5 text-sm font-mono text-indigo-600 uppercase">TXN-87102</td>
                                        <td class="px-8 py-5 font-semibold text-gray-700">Service Charge (Annual)</td>
                                        <td class="px-8 py-5 font-bold text-gray-800">৳ ৩,০০০</td>
                                        <td class="px-8 py-5 text-center">
                                            <span class="px-3 py-1 bg-amber-50 text-amber-600 text-[10px] font-black uppercase rounded-full">Processing</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="space-y-8">
                        <div class="bg-indigo-600 rounded-3xl p-6 text-white shadow-xl shadow-indigo-500/30 relative overflow-hidden">
                            <div class="relative z-10">
                                <h4 class="text-indigo-200 text-xs font-black uppercase tracking-widest mb-4">Your Apartment</h4>
                                <h3 class="text-3xl font-bold mb-1 italic">Green Villa</h3>
                                <p class="text-indigo-100 text-sm mb-6 opacity-80">Unit: B-4, 4th Floor, Sector 12, Uttara, Dhaka</p>
                                <div class="flex items-center -space-x-2">
                                    <img class="h-8 w-8 rounded-full border-2 border-indigo-600" src="https://via.placeholder.com/100" alt="">
                                    <div class="h-8 w-8 rounded-full bg-indigo-400 border-2 border-indigo-600 flex items-center justify-center text-[10px] font-bold">+2</div>
                                    <span class="ml-4 text-xs font-medium text-indigo-100 italic underline">View Unit Details</span>
                                </div>
                            </div>
                            <svg class="absolute -right-4 -bottom-4 w-32 h-32 text-indigo-500 opacity-20 transform -rotate-12" fill="currentColor" viewBox="0 0 20 20"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                        </div>

                        <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">
                            <h4 class="text-gray-800 font-bold mb-4 flex items-center">
                                <span class="text-amber-500 mr-2">🔔</span> Recent Notice
                            </h4>
                            <div class="space-y-4">
                                <div class="p-4 bg-gray-50 rounded-2xl border-l-4 border-amber-400">
                                    <p class="text-xs text-gray-400 font-bold mb-1">Feb 02, 2026</p>
                                    <h5 class="text-sm font-bold text-gray-700 mb-1">Water Supply Maintenance</h5>
                                    <p class="text-xs text-gray-500 leading-relaxed">Water supply will be closed from 10 AM to 2 PM tomorrow for tank cleaning.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>
</html>