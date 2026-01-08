<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Square Operations') }}</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Fix for the gradient text and custom animations */
        .hero-gradient {
            background: linear-gradient(135deg, #f97316 0%, #fbbf24 100%);
        }

        .text-gradient {
            background: linear-gradient(135deg, #f97316 0%, #fbbf24 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .nav-link { @apply text-gray-600 hover:text-orange-500 transition-colors duration-300; }
        .btn-primary { @apply bg-orange-500 text-white hover:bg-orange-600 transition-all duration-300 shadow-md hover:shadow-lg; }
        .btn-secondary { @apply bg-white border border-gray-200 text-gray-700 hover:bg-gray-50 transition-all duration-300; }
    </style>
</head>
<body class="antialiased">
<nav class="bg-white/80 backdrop-blur-md border-b border-gray-200 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="max-w-36">
                <x-application-logo />
            </div>
            <div class="hidden md:flex items-center space-x-8">
                <a href="#features" class="nav-link">Features</a>
                <a href="#benefits" class="nav-link">Benefits</a>
                <a href="#pricing" class="nav-link">Pricing</a>
            </div>
            <div class="flex space-x-3">
                <a href="/login" class="btn-secondary px-6 py-2 rounded-lg font-medium">Sign In</a>
                <a href="/register" class="btn-primary px-6 py-2 rounded-lg font-medium">Get Started</a>
            </div>
        </div>
    </div>
</nav>

<section class="relative overflow-hidden py-20 md:py-32 bg-gradient-to-b from-orange-50 to-white">
    <div class="absolute top-0 right-0 -translate-y-12 translate-x-12 blur-3xl opacity-20 w-96 h-96 bg-orange-400 rounded-full"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right" data-aos-duration="1000">
                <h1 class="text-5xl md:text-7xl font-bold text-gray-900 leading-tight mb-6">
                    Manage Your <span class="text-gradient">Workforce</span> Effortlessly
                </h1>
                <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                    Streamline staff onboarding, expense tracking, and team management with an intuitive platform designed for modern businesses.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="dashboard.html" class="btn-primary px-8 py-4 rounded-xl font-semibold text-center text-lg">Start Free Trial</a>
                    <button class="btn-secondary px-8 py-4 rounded-xl font-semibold text-lg flex items-center justify-center gap-2">
                        <span>Watch Demo</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="hidden md:block animate-float" data-aos="fade-left" data-aos-duration="1000">
                <div class="relative">
                    <div class="absolute inset-0 bg-orange-400 blur-2xl opacity-20 scale-95"></div>
                    <video
                        src="{{ asset('assets/videos/video.mp4') }}"
                        autoplay
                        muted
                        loop
                        playsinline
                        class="relative w-full h-auto rounded-3xl shadow-2xl border-4 border-white"
                    >
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Stats Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="stat-card">
                    <div class="stat-number">50K+</div>
                    <div class="stat-label">Active Users</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">98%</div>
                    <div class="stat-label">Uptime</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">150+</div>
                    <div class="stat-label">Companies</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">24/7</div>
                    <div class="stat-label">Support</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="section-title">Powerful Features Built for Teams</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="card-hover bg-white rounded-2xl p-8">
                    <div class="feature-icon mb-6">📋</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Staff Onboarding</h3>
                    <p class="text-gray-600 leading-relaxed">Streamlined workflows for new hires. Automated document collection and role assignment in minutes.</p>
                </div>
                <div class="card-hover bg-white rounded-2xl p-8">
                    <div class="feature-icon mb-6">💰</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Expense Requests</h3>
                    <p class="text-gray-600 leading-relaxed">Submit, approve, and manage expenses with complete audit trails. Real-time status tracking for all requests.</p>
                </div>
                <div class="card-hover bg-white rounded-2xl p-8">
                    <div class="feature-icon mb-6">👤</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Staff Management</h3>
                    <p class="text-gray-600 leading-relaxed">Centralized employee directory with profiles, roles, and performance metrics all in one place.</p>
                </div>
                <div class="card-hover bg-white rounded-2xl p-8">
                    <div class="feature-icon mb-6">🔐</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Roles & Permissions</h3>
                    <p class="text-gray-600 leading-relaxed">Granular access control with customizable roles and permissions for enhanced security and governance.</p>
                </div>
                <div class="card-hover bg-white rounded-2xl p-8">
                    <div class="feature-icon mb-6">📊</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Analytics & Insights</h3>
                    <p class="text-gray-600 leading-relaxed">Comprehensive dashboards with real-time metrics, trends, and actionable business intelligence.</p>
                </div>
                <div class="card-hover bg-white rounded-2xl p-8">
                    <div class="feature-icon mb-6">🔔</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Notifications</h3>
                    <p class="text-gray-600 leading-relaxed">Stay informed with real-time alerts for approvals, onboarding milestones, and important updates.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="benefits" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="section-title">Why Choose SquareOps</h2>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-full hero-gradient flex items-center justify-center text-white font-bold flex-shrink-0">✓</div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 mb-2">Increase Efficiency</h4>
                                <p class="text-gray-600">Automate repetitive tasks and reduce manual work by up to 70%</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-full hero-gradient flex items-center justify-center text-white font-bold flex-shrink-0">✓</div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 mb-2">Better Compliance</h4>
                                <p class="text-gray-600">Built-in audit trails and compliance features for regulatory peace of mind</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-full hero-gradient flex items-center justify-center text-white font-bold flex-shrink-0">✓</div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 mb-2">Cost Savings</h4>
                                <p class="text-gray-600">Reduce operational costs and improve resource allocation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="relative w-full h-96 bg-gradient-to-br from-red-100 to-yellow-50 rounded-2xl shadow-xl overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <div class="text-5xl mb-4">📈</div>
                                <p class="text-gray-700 font-semibold">Growth Metrics</p>
                                <p class="text-gray-500 text-sm mt-2">Real-time business insights</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="section-title">Simple, Transparent Pricing</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="card-hover bg-white rounded-2xl p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Starter</h3>
                    <div class="text-4xl font-bold text-gray-900 mb-1">$29<span class="text-lg text-gray-600">/mo</span></div>
                    <p class="text-gray-600 mb-6">Perfect for small teams</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-2"><span class="text-green-500">✓</span> Up to 50 staff</li>
                        <li class="flex items-center gap-2"><span class="text-green-500">✓</span> Basic reports</li>
                        <li class="flex items-center gap-2"><span class="text-green-500">✓</span> Email support</li>
                    </ul>
                    <button class="btn-secondary w-full px-6 py-2 rounded-lg font-medium">Get Started</button>
                </div>
                <div class="card-hover bg-white rounded-2xl p-8 ring-2 ring-orange-400">
                    <div class="text-center mb-4">
                        <span class="bg-orange-400 text-white px-3 py-1 rounded-full text-sm font-semibold">POPULAR</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Professional</h3>
                    <div class="text-4xl font-bold text-gray-900 mb-1">$79<span class="text-lg text-gray-600">/mo</span></div>
                    <p class="text-gray-600 mb-6">For growing businesses</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-2"><span class="text-green-500">✓</span> Up to 500 staff</li>
                        <li class="flex items-center gap-2"><span class="text-green-500">✓</span> Advanced analytics</li>
                        <li class="flex items-center gap-2"><span class="text-green-500">✓</span> Priority support</li>
                    </ul>
                    <button class="btn-primary w-full px-6 py-2 rounded-lg font-medium">Start Free Trial</button>
                </div>
                <div class="card-hover bg-white rounded-2xl p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Enterprise</h3>
                    <div class="text-4xl font-bold text-gray-900 mb-1">Custom</div>
                    <p class="text-gray-600 mb-6">For large organizations</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-2"><span class="text-green-500">✓</span> Unlimited staff</li>
                        <li class="flex items-center gap-2"><span class="text-green-500">✓</span> Custom integrations</li>
                        <li class="flex items-center gap-2"><span class="text-green-500">✓</span> Dedicated support</li>
                    </ul>
                    <button class="btn-secondary w-full px-6 py-2 rounded-lg font-medium">Contact Sales</button>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 hero-gradient">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Ready to Transform Your Staff Operations?</h2>
            <p class="text-xl text-orange-100 mb-8">Join hundreds of companies already using SquareOps to streamline their workflows</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="dashboard.html" class="bg-white text-orange-600 hover:bg-orange-50 px-8 py-3 rounded-lg font-medium transition">Start Free Trial</a>
                <a href="login.html" class="border-2 border-white text-white hover:bg-white hover:text-orange-600 px-8 py-3 rounded-lg font-medium transition">Sign In</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <div class="max-w-36 h-24">
                        <x-application-logo />
                    </div>
                    <p class="text-sm">Modern staff operations for ambitious teams.</p>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4">Product</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white transition">Features</a></li>
                        <li><a href="#" class="hover:text-white transition">Pricing</a></li>
                        <li><a href="#" class="hover:text-white transition">Security</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4">Company</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white transition">About</a></li>
                        <li><a href="#" class="hover:text-white transition">Blog</a></li>
                        <li><a href="#" class="hover:text-white transition">Careers</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4">Legal</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white transition">Privacy</a></li>
                        <li><a href="#" class="hover:text-white transition">Terms</a></li>
                        <li><a href="#" class="hover:text-white transition">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8">
                <p class="text-center text-sm">&copy; 2025 SquareOps. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    // Initialize AOS
    AOS.init({
        once: true,
        offset: 100
    });

    // Smooth scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
</script>
    </body>
</html>
