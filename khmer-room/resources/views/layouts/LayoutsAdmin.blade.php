{{-- <!DOCTYPE html>

<html class="light" lang="km">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Tenant List - បញ្ជីអ្នកជួល | Khmer Rental Management</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;family=Noto+Sans+Khmer:wght@100..900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#22c3b6",
                        "background-light": "#f6f8f8",
                        "background-dark": "#12201f",
                        "accent": "#0e7a71",
                    },
                    fontFamily: {
                        "display": ["Manrope", "Noto Sans Khmer", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Manrope', 'Noto Sans Khmer', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }

        /* Custom scrollbar for better aesthetic */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #dce5e4;
            border-radius: 10px;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-[#121717] dark:text-white antialiased">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar Navigation -->
        <aside
            class="w-72 bg-white dark:bg-[#1a2e2c] border-r border-[#dce5e4] dark:border-[#2a4542] flex flex-col shrink-0">
            <div class="p-6 flex flex-col gap-8">
                <div class="flex items-center gap-3">
                    <div class="size-10 rounded-xl bg-primary flex items-center justify-center text-white">
                        <span class="material-symbols-outlined text-2xl">apartment</span>
                    </div>
                    <div class="flex flex-col">
                        <h1 class="text-[#121717] dark:text-white text-base font-bold leading-tight">Khmer Rental</h1>
                        <p class="text-primary text-xs font-semibold uppercase tracking-wider">Admin Portal</p>
                    </div>
                </div>
                <nav class="flex flex-col gap-1">
                    <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-background-light dark:hover:bg-[#233d3a] transition-colors group"
                        href="#">
                        <span class="material-symbols-outlined text-[#658683] group-hover:text-primary">dashboard</span>
                        <span class="text-[#121717] dark:text-gray-200 text-sm font-medium">ផ្ទាំងគ្រប់គ្រង</span>
                    </a>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary/10 text-primary border border-primary/20"
                        href="#">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">group</span>
                        <span class="text-sm font-bold">បញ្ជីអ្នកជួល</span>
                    </a>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-background-light dark:hover:bg-[#233d3a] transition-colors group"
                        href="#">
                        <span
                            class="material-symbols-outlined text-[#658683] group-hover:text-primary">meeting_room</span>
                        <span class="text-[#121717] dark:text-gray-200 text-sm font-medium">បន្ទប់</span>
                    </a>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-background-light dark:hover:bg-[#233d3a] transition-colors group"
                        href="#">
                        <span class="material-symbols-outlined text-[#658683] group-hover:text-primary">payments</span>
                        <span class="text-[#121717] dark:text-gray-200 text-sm font-medium">ការបង់ប្រាក់</span>
                    </a>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-background-light dark:hover:bg-[#233d3a] transition-colors group"
                        href="#">
                        <span
                            class="material-symbols-outlined text-[#658683] group-hover:text-primary">description</span>
                        <span class="text-[#121717] dark:text-gray-200 text-sm font-medium">របាយការណ៍</span>
                    </a>
                    <div class="my-4 border-t border-[#dce5e4] dark:border-[#2a4542]"></div>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-background-light dark:hover:bg-[#233d3a] transition-colors group"
                        href="#">
                        <span class="material-symbols-outlined text-[#658683] group-hover:text-primary">settings</span>
                        <span class="text-[#121717] dark:text-gray-200 text-sm font-medium">ការកំណត់</span>
                    </a>
                </nav>
            </div>
            <div class="mt-auto p-6">
                <div class="bg-background-light dark:bg-[#233d3a] rounded-xl p-4 flex items-center gap-3">
                    <div class="size-10 rounded-full bg-cover bg-center border-2 border-primary"
                        data-alt="User profile avatar of property manager"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBZsEECGUxxTLb2HD33LycPwkVcrRLeJ7bLOTRJSphpfDh1Joy5q7UC4Y6kTUmYrwIHFZ9zNVFlhsXfk9jqr1-z1DlLKZfzxnBfVR-p_beluOZU2EjmCOMTip7z12-Lbp2u4QxhfXGT2qq-vGzfGbtigKp7yviEhAkSUxylnZdgiH_s0W2IF1nTc_oyZbZj1xN7paqq0-NZouIN6KQFBgiXxc_dKuHho35IsnU1jDzaCEYEKvb8rmCILLfWCNJAY8p50rZQerzRgCMR')">
                    </div>
                    <div class="flex flex-col">
                        <p class="text-xs font-bold dark:text-white">Admin User</p>
                        <p class="text-[10px] text-[#658683]">Super Admin</p>
                    </div>
                    <span class="material-symbols-outlined ml-auto text-sm text-[#658683]">logout</span>
                </div>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto flex flex-col">
            <!-- Header -->
            <header
                class="h-20 bg-white dark:bg-[#1a2e2c] border-b border-[#dce5e4] dark:border-[#2a4542] px-8 flex items-center justify-between sticky top-0 z-10">
                <div class="flex items-center gap-4">
                    <nav class="flex items-center gap-2 text-sm">
                        <a class="text-[#658683] hover:text-primary" href="#">ទំព័រដើម</a>
                        <span class="text-[#658683] text-xs">/</span>
                        <span class="text-[#121717] dark:text-white font-semibold">បញ្ជីអ្នកជួល</span>
                    </nav>
                </div>
                <div class="flex items-center gap-6">
                    <div class="relative w-72">
                        <span
                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-[#658683] text-xl">search</span>
                        <input
                            class="w-full h-11 pl-10 pr-4 bg-background-light dark:bg-[#233d3a] border-none rounded-xl text-sm focus:ring-2 focus:ring-primary/50 transition-all placeholder:text-[#658683]"
                            placeholder="ស្វែងរកអ្នកជួល..." type="text" />
                    </div>
                    <button
                        class="relative size-11 flex items-center justify-center bg-background-light dark:bg-[#233d3a] rounded-xl text-[#121717] dark:text-white">
                        <span class="material-symbols-outlined">notifications</span>
                        <span
                            class="absolute top-3 right-3 size-2 bg-red-500 rounded-full border-2 border-white dark:border-[#233d3a]"></span>
                    </button>
                    <button
                        class="bg-primary hover:bg-accent text-white h-11 px-6 rounded-xl font-bold text-sm transition-all flex items-center gap-2">
                        <span class="material-symbols-outlined text-lg">add</span>
                        បន្ថែមអ្នកជួល
                    </button>
                </div>
            </header>
            <!-- Page Content -->
            <div class="p-8">
                <div class="mb-8">
                    <h2 class="text-3xl font-black text-[#121717] dark:text-white tracking-tight mb-2">បញ្ជីអ្នកជួល
                        (Tenant List)</h2>
                    <p class="text-[#658683] dark:text-gray-400">គ្រប់គ្រង
                        និងតាមដានព័ត៌មានរបស់អ្នកជួលទាំងអស់ក្នុងប្រព័ន្ធ</p>
                </div>
                <!-- Stats Overview (Optional but adds distinction) -->
                <div class="grid grid-cols-4 gap-6 mb-8">
                    <div
                        class="bg-white dark:bg-[#1a2e2c] p-6 rounded-2xl border border-[#dce5e4] dark:border-[#2a4542] shadow-sm">
                        <div class="flex items-center justify-between mb-4">
                            <div class="size-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined">groups</span>
                            </div>
                            <span
                                class="text-xs font-bold text-green-500 bg-green-500/10 px-2 py-1 rounded-full">+12%</span>
                        </div>
                        <p class="text-[#658683] text-sm mb-1">អ្នកជួលសរុប</p>
                        <p class="text-2xl font-black dark:text-white">1,284</p>
                    </div>
                    <div
                        class="bg-white dark:bg-[#1a2e2c] p-6 rounded-2xl border border-[#dce5e4] dark:border-[#2a4542] shadow-sm">
                        <div class="flex items-center justify-between mb-4">
                            <div
                                class="size-12 rounded-xl bg-blue-500/10 flex items-center justify-center text-blue-500">
                                <span class="material-symbols-outlined">how_to_reg</span>
                            </div>
                            <span
                                class="text-xs font-bold text-blue-500 bg-blue-500/10 px-2 py-1 rounded-full">សកម្ម</span>
                        </div>
                        <p class="text-[#658683] text-sm mb-1">អ្នកជួលសកម្ម</p>
                        <p class="text-2xl font-black dark:text-white">1,120</p>
                    </div>
                    <div
                        class="bg-white dark:bg-[#1a2e2c] p-6 rounded-2xl border border-[#dce5e4] dark:border-[#2a4542] shadow-sm">
                        <div class="flex items-center justify-between mb-4">
                            <div
                                class="size-12 rounded-xl bg-orange-500/10 flex items-center justify-center text-orange-500">
                                <span class="material-symbols-outlined">person_off</span>
                            </div>
                            <span
                                class="text-xs font-bold text-orange-500 bg-orange-500/10 px-2 py-1 rounded-full">អតីត</span>
                        </div>
                        <p class="text-[#658683] text-sm mb-1">អ្នកជួលចាកចេញ</p>
                        <p class="text-2xl font-black dark:text-white">164</p>
                    </div>
                    <div
                        class="bg-white dark:bg-[#1a2e2c] p-6 rounded-2xl border border-[#dce5e4] dark:border-[#2a4542] shadow-sm">
                        <div class="flex items-center justify-between mb-4">
                            <div
                                class="size-12 rounded-xl bg-purple-500/10 flex items-center justify-center text-purple-500">
                                <span class="material-symbols-outlined">pending_actions</span>
                            </div>
                            <span
                                class="text-xs font-bold text-red-500 bg-red-500/10 px-2 py-1 rounded-full">ជិតដល់ថ្ងៃ</span>
                        </div>
                        <p class="text-[#658683] text-sm mb-1">កិច្ចសន្យាជិតផុតកំណត់</p>
                        <p class="text-2xl font-black dark:text-white">42</p>
                    </div>
                </div>
                <!-- Table Container -->
                <div
                    class="bg-white dark:bg-[#1a2e2c] rounded-2xl border border-[#dce5e4] dark:border-[#2a4542] shadow-sm overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr
                                    class="bg-background-light dark:bg-[#233d3a] border-b border-[#dce5e4] dark:border-[#2a4542]">
                                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-[#658683]">
                                        ឈ្មោះអ្នកជួល (Tenant)</th>
                                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-[#658683]">
                                        ព័ត៌មានទំនាក់ទំនង (Contact)</th>
                                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-[#658683]">
                                        លេខបន្ទប់ (Room)</th>
                                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-[#658683]">
                                        ថ្ងៃចូលស្នាក់នៅ (Move-in)</th>
                                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-[#658683]">
                                        ស្ថានភាព (Status)</th>
                                    <th
                                        class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-[#658683] text-right">
                                        សកម្មភាព (Actions)</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-[#dce5e4] dark:divide-[#2a4542]">
                                <!-- Row 1 -->
                                <tr class="hover:bg-background-light/50 dark:hover:bg-[#233d3a]/30 transition-colors">
                                    <td class="px-6 py-5">
                                        <div class="flex items-center gap-3">
                                            <div class="size-10 rounded-full bg-cover bg-center ring-2 ring-primary/20"
                                                data-alt="Portrait of tenant Soun Channa"
                                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCAXVPlYrTwJ9XFjHESZup0wj9h6X7usNoxy8sHwqg0h16ATtKS9WcvRynXsK3KGHzLp9rYDBOFXGnJS43jrbBSkoomeUX6wqCiBPLIqBmllG5VaF9jPXsbyftHjivNHP3saBc-0fYnazP-Esh5T_2lBfkmHBRMobnGPDHGURJI-6Na2dLrNVjSFBCaQtFowCnuqW2p-lAAVhY4PgAIuWtcSPPjdNuyvWPFtJEY3HyaIYA0soSWbspvdLBPOdQitmv4Cr9ryykQF1PF')">
                                            </div>
                                            <div class="flex flex-col">
                                                <span class="text-sm font-bold text-[#121717] dark:text-white">សុខ
                                                    ចាន់ណា</span>
                                                <span class="text-[11px] text-[#658683]">ID: T-9021</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5">
                                        <div class="flex flex-col gap-1">
                                            <div
                                                class="flex items-center gap-1.5 text-xs text-[#121717] dark:text-gray-300">
                                                <span class="material-symbols-outlined text-sm text-primary">call</span>
                                                012 345 678
                                            </div>
                                            <div class="flex items-center gap-1.5 text-xs text-[#658683]">
                                                <span class="material-symbols-outlined text-sm">mail</span>
                                                channa.s@gmail.com
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5">
                                        <span
                                            class="px-3 py-1 bg-primary/10 text-primary text-xs font-bold rounded-lg border border-primary/20">A-101</span>
                                    </td>
                                    <td class="px-6 py-5 text-sm text-[#121717] dark:text-gray-300">០១ មករា ២០២៤</td>
                                    <td class="px-6 py-5">
                                        <span
                                            class="inline-flex items-center gap-1.5 px-3 py-1 bg-green-500/10 text-green-600 text-[11px] font-bold rounded-full">
                                            <span class="size-1.5 rounded-full bg-green-500"></span>
                                            សកម្ម
                                        </span>
                                    </td>
                                    <td class="px-6 py-5 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button
                                                class="size-8 flex items-center justify-center rounded-lg hover:bg-primary/10 text-[#658683] hover:text-primary transition-all">
                                                <span class="material-symbols-outlined text-xl">edit</span>
                                            </button>
                                            <button
                                                class="size-8 flex items-center justify-center rounded-lg hover:bg-primary/10 text-[#658683] hover:text-primary transition-all">
                                                <span class="material-symbols-outlined text-xl">visibility</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Row 2 -->
                                <tr class="hover:bg-background-light/50 dark:hover:bg-[#233d3a]/30 transition-colors">
                                    <td class="px-6 py-5">
                                        <div class="flex items-center gap-3">
                                            <div class="size-10 rounded-full bg-cover bg-center ring-2 ring-primary/20"
                                                data-alt="Portrait of tenant Mao Samnang"
                                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA7m6J9dwdN5N6NcXDeA2kkVGpSWhe8gRbhGGmJA2o2TDo4qrXYGg2EMwf8vrMd2ogT91BiFNb5Xt35LV721VglAQ6DBIYhgf7C1kzIqrnYpM7PSXTUAkZNKLjmH1HFesSz28x5M4loLXKDaQPEQ62-yWA-sMXsKC1l7Pzn3cCankVSGDXnI5kUWHhwxmJ4ZBjvIGsjpLm2zCl_9dQt4yVyAz3nUtaz2oYtHObqudFUcdvY0YEwlZSibapdENsX09uGHeamKlrAvtdO')">
                                            </div>
                                            <div class="flex flex-col">
                                                <span class="text-sm font-bold text-[#121717] dark:text-white">ម៉ៅ
                                                    សំណាង</span>
                                                <span class="text-[11px] text-[#658683]">ID: T-8842</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5">
                                        <div class="flex flex-col gap-1">
                                            <div
                                                class="flex items-center gap-1.5 text-xs text-[#121717] dark:text-gray-300">
                                                <span class="material-symbols-outlined text-sm text-primary">call</span>
                                                098 765 432
                                            </div>
                                            <div class="flex items-center gap-1.5 text-xs text-[#658683]">
                                                <span class="material-symbols-outlined text-sm">mail</span>
                                                samnang.m@outlook.com
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5">
                                        <span
                                            class="px-3 py-1 bg-primary/10 text-primary text-xs font-bold rounded-lg border border-primary/20">B-202</span>
                                    </td>
                                    <td class="px-6 py-5 text-sm text-[#121717] dark:text-gray-300">១៥ កុម្ភៈ ២០២៤</td>
                                    <td class="px-6 py-5">
                                        <span
                                            class="inline-flex items-center gap-1.5 px-3 py-1 bg-green-500/10 text-green-600 text-[11px] font-bold rounded-full">
                                            <span class="size-1.5 rounded-full bg-green-500"></span>
                                            សកម្ម
                                        </span>
                                    </td>
                                    <td class="px-6 py-5 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button
                                                class="size-8 flex items-center justify-center rounded-lg hover:bg-primary/10 text-[#658683] hover:text-primary transition-all">
                                                <span class="material-symbols-outlined text-xl">edit</span>
                                            </button>
                                            <button
                                                class="size-8 flex items-center justify-center rounded-lg hover:bg-primary/10 text-[#658683] hover:text-primary transition-all">
                                                <span class="material-symbols-outlined text-xl">visibility</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Row 3 -->
                                <tr class="hover:bg-background-light/50 dark:hover:bg-[#233d3a]/30 transition-colors">
                                    <td class="px-6 py-5">
                                        <div class="flex items-center gap-3">
                                            <div class="size-10 rounded-full bg-cover bg-center ring-2 ring-primary/20 grayscale"
                                                data-alt="Portrait of former tenant Keo Sopheak"
                                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDsTXZRjuzEY5CT-2PFaCvHDMoBGoVhlY0dcTCcO98OSLSe0HaBJ3xrGUDt2CVAxP-eErWF7FxDcmMYXDOJUxA20-Liu9Z_1sStpS9hXcgNNIZLz1IDdgIy8BGR5w9n52WcRjD__Bnpuo8SLdfsu9LhhtA8poBRN5xsx1jrt8ITHtugKAk4-8_0OVnXR1t3DLJ3N_1fO5K-Z2VTamwfO4yFrWX1af3-MTAe9f7EUtbsZ00UotDXr7-c_Pi3HuDYJS4jP2w_vKalxIM4')">
                                            </div>
                                            <div class="flex flex-col">
                                                <span class="text-sm font-bold text-[#121717] dark:text-white">កែវ
                                                    សុភ័ក្ត្រ</span>
                                                <span class="text-[11px] text-[#658683]">ID: T-4412</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5">
                                        <div class="flex flex-col gap-1">
                                            <div
                                                class="flex items-center gap-1.5 text-xs text-[#121717] dark:text-gray-300">
                                                <span class="material-symbols-outlined text-sm text-primary">call</span>
                                                011 222 333
                                            </div>
                                            <div class="flex items-center gap-1.5 text-xs text-[#658683]">
                                                <span class="material-symbols-outlined text-sm">mail</span>
                                                sopheak.k@gmail.com
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5">
                                        <span
                                            class="px-3 py-1 bg-[#658683]/10 text-[#658683] text-xs font-bold rounded-lg border border-[#658683]/20">A-105</span>
                                    </td>
                                    <td class="px-6 py-5 text-sm text-[#121717] dark:text-gray-300">០១ ធ្នូ ២០២៣</td>
                                    <td class="px-6 py-5">
                                        <span
                                            class="inline-flex items-center gap-1.5 px-3 py-1 bg-gray-500/10 text-gray-500 text-[11px] font-bold rounded-full">
                                            <span class="size-1.5 rounded-full bg-gray-400"></span>
                                            អតីត
                                        </span>
                                    </td>
                                    <td class="px-6 py-5 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button
                                                class="size-8 flex items-center justify-center rounded-lg hover:bg-primary/10 text-[#658683] hover:text-primary transition-all">
                                                <span class="material-symbols-outlined text-xl">edit</span>
                                            </button>
                                            <button
                                                class="size-8 flex items-center justify-center rounded-lg hover:bg-primary/10 text-[#658683] hover:text-primary transition-all">
                                                <span class="material-symbols-outlined text-xl">visibility</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Row 4 -->
                                <tr class="hover:bg-background-light/50 dark:hover:bg-[#233d3a]/30 transition-colors">
                                    <td class="px-6 py-5">
                                        <div class="flex items-center gap-3">
                                            <div class="size-10 rounded-full bg-cover bg-center ring-2 ring-primary/20"
                                                data-alt="Portrait of tenant Chan Thida"
                                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDBb6uMHczM4cn8d4It45amwNr8zmX6K43n2iABa4Onia669QkiKX9wdGRKdogOUh9Xvzxa5zODvaftDK6m_lgxHdgURXHRVRK0gJ6CAd9QYVI8zOwZcNW7Z7kUjfPaa4gDo8aKwUUxScQPqobJ85gWW2YVC-V8rql0vnK-ucPF90c1fgSOM8RUP10ReSc-rNSXN_-gD4FNXuYwU-wSoEBeZ-MTu1tNW9U8od9ZZJIEdKHjt09C8XN1RxMXfoOMGCvuotn1Mcn4ps-G')">
                                            </div>
                                            <div class="flex flex-col">
                                                <span class="text-sm font-bold text-[#121717] dark:text-white">ចាន់
                                                    ធីតា</span>
                                                <span class="text-[11px] text-[#658683]">ID: T-9115</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5">
                                        <div class="flex flex-col gap-1">
                                            <div
                                                class="flex items-center gap-1.5 text-xs text-[#121717] dark:text-gray-300">
                                                <span class="material-symbols-outlined text-sm text-primary">call</span>
                                                015 888 999
                                            </div>
                                            <div class="flex items-center gap-1.5 text-xs text-[#658683]">
                                                <span class="material-symbols-outlined text-sm">mail</span>
                                                thida.c@gmail.com
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5">
                                        <span
                                            class="px-3 py-1 bg-primary/10 text-primary text-xs font-bold rounded-lg border border-primary/20">C-301</span>
                                    </td>
                                    <td class="px-6 py-5 text-sm text-[#121717] dark:text-gray-300">២០ មិនា ២០២៤</td>
                                    <td class="px-6 py-5">
                                        <span
                                            class="inline-flex items-center gap-1.5 px-3 py-1 bg-green-500/10 text-green-600 text-[11px] font-bold rounded-full">
                                            <span class="size-1.5 rounded-full bg-green-500"></span>
                                            សកម្ម
                                        </span>
                                    </td>
                                    <td class="px-6 py-5 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button
                                                class="size-8 flex items-center justify-center rounded-lg hover:bg-primary/10 text-[#658683] hover:text-primary transition-all">
                                                <span class="material-symbols-outlined text-xl">edit</span>
                                            </button>
                                            <button
                                                class="size-8 flex items-center justify-center rounded-lg hover:bg-primary/10 text-[#658683] hover:text-primary transition-all">
                                                <span class="material-symbols-outlined text-xl">visibility</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Pagination -->
                    <div
                        class="px-6 py-4 flex items-center justify-between border-t border-[#dce5e4] dark:border-[#2a4542]">
                        <p class="text-sm text-[#658683]">បង្ហាញពី ១ ដល់ ៤ នៃ ១,២៨៤ នាក់</p>
                        <div class="flex items-center gap-2">
                            <button
                                class="size-9 flex items-center justify-center rounded-lg border border-[#dce5e4] dark:border-[#2a4542] hover:bg-background-light dark:hover:bg-[#233d3a] transition-colors">
                                <span class="material-symbols-outlined">chevron_left</span>
                            </button>
                            <button
                                class="size-9 flex items-center justify-center rounded-lg bg-primary text-white font-bold text-sm">1</button>
                            <button
                                class="size-9 flex items-center justify-center rounded-lg border border-[#dce5e4] dark:border-[#2a4542] hover:bg-background-light dark:hover:bg-[#233d3a] transition-colors font-medium text-sm">2</button>
                            <button
                                class="size-9 flex items-center justify-center rounded-lg border border-[#dce5e4] dark:border-[#2a4542] hover:bg-background-light dark:hover:bg-[#233d3a] transition-colors font-medium text-sm">3</button>
                            <span class="px-1 text-[#658683]">...</span>
                            <button
                                class="size-9 flex items-center justify-center rounded-lg border border-[#dce5e4] dark:border-[#2a4542] hover:bg-background-light dark:hover:bg-[#233d3a] transition-colors font-medium text-sm">12</button>
                            <button
                                class="size-9 flex items-center justify-center rounded-lg border border-[#dce5e4] dark:border-[#2a4542] hover:bg-background-light dark:hover:bg-[#233d3a] transition-colors">
                                <span class="material-symbols-outlined">chevron_right</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Info -->
            <footer
                class="mt-auto p-8 pt-0 flex justify-between items-center text-[11px] text-[#658683] font-medium uppercase tracking-widest">
                <p>© 2024 Khmer Rental Management System</p>
                <div class="flex gap-6">
                    <a class="hover:text-primary transition-colors" href="#">ជំនួយ (Help)</a>
                    <a class="hover:text-primary transition-colors" href="#">គោលការណ៍ (Policy)</a>
                </div>
            </footer>
        </main>
    </div>
</body>

</html> --}}
<!DOCTYPE html>
<html class="light" lang="km">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>@yield('title', 'Khmer Rental Management')</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;family=Noto+Sans+Khmer:wght@100..900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#22c3b6",
                        "background-light": "#f6f8f8",
                        "background-dark": "#12201f",
                        "accent": "#0e7a71",
                    },
                    fontFamily: {
                        "display": ["Manrope", "Noto Sans Khmer", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
    <style>
        body { font-family: 'Manrope', 'Noto Sans Khmer', sans-serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; vertical-align: middle; }
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #dce5e4; border-radius: 10px; }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-[#121717] dark:text-white antialiased">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        @include('partials.SlidebarAdmin')

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto flex flex-col">
            <!-- Navbar / Header -->
            @include('partials.NavbarAdmin')

            <!-- Page Content -->
            <div class="p-8">
                @yield('content')
            </div>

            <!-- Footer -->
            <footer
                class="mt-auto p-8 pt-0 flex justify-between items-center text-[11px] text-[#658683] font-medium uppercase tracking-widest">
                <p>© 2024 Khmer Rental Management System</p>
                <div class="flex gap-6">
                    <a class="hover:text-primary transition-colors" href="#">ជំនួយ (Help)</a>
                    <a class="hover:text-primary transition-colors" href="#">គោលការណ៍ (Policy)</a>
                </div>
            </footer>
        </main>
    </div>
</body>

</html>
