<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Apartment Booking Home</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to bottom, #f0f4f8, #ffffff);
        }
    </style>
</head>

<body class="font-sans text-gray-900">

    <!-- NAVBAR -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-blue-600">RentEasy</a>
            <div class="space-x-4 flex items-center">
                <a href="#" class="text-gray-700 hover:text-blue-600 transition">Home</a>
                <a href="#" class="text-gray-700 hover:text-blue-600 transition">About</a>
                <a href="#" class="text-gray-700 hover:text-blue-600 transition">Contact</a>
                <a href="/login"
                    class="px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition font-medium">Login</a>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="bg-gradient-to-r from-blue-50 via-white to-pink-50 py-20">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h1 class="text-5xl font-extrabold text-gray-900 mb-4">Find Your Perfect Apartment</h1>
            <p class="text-gray-600 text-lg mb-8">Browse apartments in Dhaka with flexible booking and premium comfort.
            </p>
            <a href="#listings"
                class="inline-block px-8 py-4 bg-blue-600 text-white font-semibold rounded-xl shadow hover:bg-blue-700 transition">Explore
                Apartments</a>
        </div>
    </section>

    <!-- LISTINGS -->
    <section id="listings" class="max-w-7xl mx-auto px-6 py-20">
        <h2 class="text-3xl font-bold text-gray-900 mb-10 text-center">Available Apartments</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

            <!-- Apartment Card -->
            <article
                class="group rounded-3xl bg-white shadow-lg overflow-hidden transition hover:-translate-y-1 hover:shadow-2xl">
                <div class="relative h-60 overflow-hidden">
                    <img src="https://picsum.photos/600/400?random=31"
                        class="h-full w-full object-cover transition duration-700 group-hover:scale-110" />
                    <span
                        class="absolute top-4 right-4 rounded-full bg-emerald-500 px-3 py-1 text-xs font-medium text-white">
                        Available
                    </span>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold leading-tight">Green View Apartment</h3>
                    <p class="mt-1 text-sm text-gray-500 flex items-center gap-1">
                        <i class="bi bi-geo-alt"></i> Dhanmondi, Dhaka
                    </p>
                    <div class="mt-4 flex items-end justify-between">
                        <div>
                            <p class="text-2xl font-bold text-gray-900">৳25,000</p>
                            <p class="text-xs text-gray-500">per month</p>
                        </div>
                        <div class="text-sm text-gray-400 flex items-center gap-1">
                            <i class="bi bi-house-door"></i> 2 Bed
                        </div>
                    </div>
                    <div class="mt-5 grid grid-cols-2 gap-3">
                        <input type="date"
                            class="rounded-xl border border-gray-200 bg-gray-50 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/30 outline-none" />
                        <input type="date"
                            class="rounded-xl border border-gray-200 bg-gray-50 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/30 outline-none" />
                    </div>
                    <button
                        class="mt-6 w-full rounded-xl bg-blue-600 py-3 text-sm font-medium text-white transition hover:bg-blue-700 active:scale-[0.98]">
                        Book Apartment
                    </button>
                </div>
            </article>

            <!-- Apartment Card (Booked) -->
            <article class="rounded-3xl bg-white/70 backdrop-blur shadow-lg overflow-hidden">
                <div class="relative h-60">
                    <img src="https://picsum.photos/600/400?random=32" class="h-full w-full object-cover grayscale" />
                    <span
                        class="absolute top-4 right-4 rounded-full bg-red-500 px-3 py-1 text-xs font-medium text-white">
                        Booked
                    </span>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold">Lake Side Residence</h3>
                    <p class="mt-1 text-sm text-gray-500 flex items-center gap-1">
                        <i class="bi bi-geo-alt"></i> Gulshan, Dhaka
                    </p>
                    <div class="mt-4 flex items-end justify-between">
                        <div>
                            <p class="text-2xl font-bold text-gray-900">
                                ৳32,000
                            </p>
                            <p class="text-xs text-gray-500">per month</p>
                        </div>

                        <div class="text-sm text-gray-400">
                            <i class="bi bi-house-door"></i> 3 Bed
                        </div>
                    </div>
                    <button disabled
                        class="mt-6 w-full rounded-xl bg-gray-300 py-3 text-sm font-medium text-gray-600 cursor-not-allowed">
                        Not Available
                    </button>
                </div>
            </article>

            <!-- Apartment Card (Another) -->
            <article
                class="group rounded-3xl bg-white shadow-lg overflow-hidden transition hover:-translate-y-1 hover:shadow-2xl">
                <div class="relative h-60 overflow-hidden">
                    <img src="https://picsum.photos/600/400?random=33"
                        class="h-full w-full object-cover transition duration-700 group-hover:scale-110" />
                    <span
                        class="absolute top-4 right-4 rounded-full bg-emerald-500 px-3 py-1 text-xs font-medium text-white">
                        Available
                    </span>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold leading-tight">Sunset Boulevard Apartment</h3>
                    <p class="mt-1 text-sm text-gray-500 flex items-center gap-1">
                        <i class="bi bi-geo-alt"></i> Banani, Dhaka
                    </p>
                    <div class="mt-4 flex items-end justify-between">
                        <div>
                            <p class="text-2xl font-bold text-gray-900">৳28,000</p>
                            <p class="text-xs text-gray-500">per month</p>
                        </div>
                        <div class="text-sm text-gray-400 flex items-center gap-1">
                            <i class="bi bi-house-door"></i> 3 Bed
                        </div>
                    </div>
                    <div class="mt-5 grid grid-cols-2 gap-3">
                        <input type="date"
                            class="rounded-xl border border-gray-200 bg-gray-50 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/30 outline-none" />
                        <input type="date"
                            class="rounded-xl border border-gray-200 bg-gray-50 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/30 outline-none" />
                    </div>
                    <button
                        class="mt-6 w-full rounded-xl bg-blue-600 py-3 text-sm font-medium text-white transition hover:bg-blue-700 active:scale-[0.98]">
                        Book Apartment
                    </button>
                </div>
            </article>

        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-gray-100 mt-20">
        <div class="max-w-7xl mx-auto px-6 py-10 text-center text-gray-500">
            &copy; 2026 RentEasy. All rights reserved.
        </div>
    </footer>

</body>

</html>