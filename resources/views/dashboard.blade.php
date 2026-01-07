{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">--}}
{{--            {{ __('Dashboard') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">--}}
{{--                <x-welcome />--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}
<x-app-layout>

    <main
        class="flex-1 overflow-y-auto bg-gray-50 dark:bg-gray-900 p-4 md:p-8 pt-20 md:pt-8 transition-colors duration-300">

        <!-- Header -->
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-8 gap-4">
            <div>
                <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Dashboard Overview</h1>
                <p class="text-gray-500 dark:text-gray-400 mt-1">Welcome back, here's what's happening today.</p>
            </div>
            <div class="flex gap-3">
                <button
                    class="inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg shadow-sm text-sm font-medium text-gray-700 dark:text-gray-200 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500 transition-colors">
                    <i class="fas fa-download mr-2"></i> Export Report
                </button>
                <button
                    class="inline-flex items-center px-4 py-2 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-teal-600 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500 shadow-lg shadow-teal-600/30 transition-all hover:-translate-y-0.5">
                    <i class="fas fa-plus mr-2"></i> New Request
                </button>
            </div>
        </div>

        <!-- Metrics Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <!-- Card 1 -->
            <div
                class="bg-white dark:bg-gray-800 rounded-2xl p-6 border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <div
                        class="w-12 h-12 bg-teal-50 dark:bg-teal-900/20 rounded-xl flex items-center justify-center text-teal-600 dark:text-teal-400 text-xl">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                    <span
                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-900/30 dark:text-red-300">
                            Action Required
                        </span>
                </div>
                <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium">Pending Approvals</h3>
                <p class="text-3xl font-bold text-gray-900 dark:text-white mt-1">12</p>
                <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">
                    <span class="text-red-500 font-medium"><i class="fas fa-arrow-up"></i> 4</span> since yesterday
                </p>
            </div>

            <!-- Card 2 -->
            <div
                class="bg-white dark:bg-gray-800 rounded-2xl p-6 border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <div
                        class="w-12 h-12 bg-purple-50 dark:bg-purple-900/20 rounded-xl flex items-center justify-center text-purple-600 dark:text-purple-400 text-xl">
                        <i class="fas fa-user-clock"></i>
                    </div>
                </div>
                <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium">Open Leave Requests</h3>
                <p class="text-3xl font-bold text-gray-900 dark:text-white mt-1">5</p>
                <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">
                    <span class="text-green-500 font-medium"><i class="fas fa-arrow-down"></i> 2</span> since last
                    week
                </p>
            </div>

            <!-- Card 3 -->
            <div
                class="bg-white dark:bg-gray-800 rounded-2xl p-6 border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <div
                        class="w-12 h-12 bg-blue-50 dark:bg-blue-900/20 rounded-xl flex items-center justify-center text-blue-600 dark:text-blue-400 text-xl">
                        <i class="fas fa-users"></i>
                    </div>
                    <span
                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-300">
                            +3 New
                        </span>
                </div>
                <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium">Total Active Staff</h3>
                <p class="text-3xl font-bold text-gray-900 dark:text-white mt-1">148</p>
                <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">
                    <span class="text-green-500 font-medium"><i class="fas fa-arrow-up"></i> 12%</span> growth this
                    month
                </p>
            </div>
        </div>

        <!-- Charts & Feed Section -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- Chart -->
            <div
                class="lg:col-span-2 bg-white dark:bg-gray-800 rounded-2xl p-6 border border-gray-100 dark:border-gray-700 shadow-sm">
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-6">Expense Trends</h3>
                <div class="relative h-80 w-full">
                    <canvas id="expenseChart"></canvas>
                </div>
            </div>

            <!-- Activity Feed -->
            <div
                class="bg-white dark:bg-gray-800 rounded-2xl p-6 border border-gray-100 dark:border-gray-700 shadow-sm">
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-6">Recent Activity</h3>
                <div class="space-y-6">
                    <!-- Item 1 -->
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <div
                                class="w-10 h-10 rounded-full bg-teal-100 dark:bg-teal-900/30 flex items-center justify-center text-teal-600 dark:text-teal-400">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900 dark:text-white">Expense Approved</p>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Sarah Smith's travel request for
                                $450 was approved.</p>
                            <p class="text-xs text-gray-400 mt-1">2 mins ago</p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <div
                                class="w-10 h-10 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-600 dark:text-blue-400">
                                <i class="fas fa-user-plus"></i>
                            </div>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900 dark:text-white">New Staff Onboarded</p>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Mike Johnson joined the Engineering
                                team.</p>
                            <p class="text-xs text-gray-400 mt-1">2 hours ago</p>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <div
                                class="w-10 h-10 rounded-full bg-yellow-100 dark:bg-yellow-900/30 flex items-center justify-center text-yellow-600 dark:text-yellow-400">
                                <i class="fas fa-file-alt"></i>
                            </div>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900 dark:text-white">SOP Updated</p>
                            <p class="text-sm text-gray-500 dark:text-gray-400">"Remote Work Policy" was updated by
                                HR.</p>
                            <p class="text-xs text-gray-400 mt-1">5 hours ago</p>
                        </div>
                    </div>
                </div>
                <button
                    class="w-full mt-6 py-2 text-sm font-medium text-teal-600 hover:text-teal-700 dark:hover:text-teal-400 transition-colors">
                    View All Activity
                </button>
            </div>
        </div>

    </main>

    <script>

        // Chart.js Initialization
        const ctx = document.getElementById('expenseChart').getContext('2d');
        let expenseChart;

        function initChart() {
            const isDark = htmlElement.classList.contains('dark');
            const gridColor = isDark ? '#374151' : '#e5e7eb';
            const textColor = isDark ? '#9ca3af' : '#6b7280';

            expenseChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                    datasets: [{
                        label: 'Expenses ($)',
                        data: [12000, 19000, 3000, 5000, 2000, 3000],
                        backgroundColor: '#0d9488', // Teal-600
                        borderRadius: 6,
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: gridColor,
                                borderDash: [5, 5]
                            },
                            ticks: {
                                color: textColor
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                color: textColor
                            }
                        }
                    }
                }
            });
        }

        function updateChartTheme() {
            if (expenseChart) {
                expenseChart.destroy();
            }
            initChart();
        }

        initChart();
    </script>

</x-app-layout>

