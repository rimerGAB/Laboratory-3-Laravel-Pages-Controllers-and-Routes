<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rimer Gabaleo Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-[#697565] text-[#181C14] antialiased">

   
    <nav class="bg-white/40 shadow-sm border-b border-[#697565]/20 sticky top-0 z-10 backdrop-blur-sm bg-[#ECDFCC]/90">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <span class="text-xl font-semibold text-[#181C14] tracking-tight">Rimer Gabaleo</span>
                </div>
                <div class="flex items-center space-x-6">
                    <a href="/home"class="text-[#3C3D37] hover:text-[#181C14] transition font-medium">Home</a>
                    <a href="/about" class="text-[#3C3D37] hover:text-[#181C14] transition font-medium">About</a>
                    <a href="/Information" class="text-[#181C14] font-medium border-b-2 border-[#697565] pb-1">Information</a>
                </div>
            </div>
        </div>
    </nav>

   
    <section class="bg-[#BCD9A2] py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold text-white">Projects & Information</h1>
            <p class="text-white/80 mt-2">A selection of my work and how to reach me</p>
        </div>
    </section>

  
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <h2 class="text-3xl font-bold text-center text-[#181C14] mb-4">Featured Projects</h2>
        <p class="text-center text-[#3C3D37] mb-12 max-w-2xl mx-auto">some of my projects</p>
        <div class="grid md:grid-cols-3 gap-8">
        
            <div class="bg-white/80 p-6 rounded-xl shadow-sm border border-[#697565]/30 hover:shadow-md transition group">
                <div class="w-12 h-12 bg-[#697565] rounded-lg flex items-center justify-center mb-4 group-hover:bg-[#3C3D37] transition">
                    <i class="fas fa-code text-[#ECDFCC] text-xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-[#181C14] mb-2">School Featuring Website</h3>
                <p class="text-[#3C3D37] mb-4">A navigating school online store with search, featured, and landing page.</p>
                <a href="#" class="text-[#697565] font-medium inline-flex items-center gap-1 hover:text-[#181C14] transition">
                    Learn more <i class="fas fa-arrow-right text-sm"></i>
                </a>
            </div>
          
            <div class="bg-white/80 p-6 rounded-xl shadow-sm border border-[#697565]/30 hover:shadow-md transition group">
                <div class="w-12 h-12 bg-[#697565] rounded-lg flex items-center justify-center mb-4 group-hover:bg-[#3C3D37] transition">
                    <i class="fas fa-paint-brush text-[#ECDFCC] text-xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-[#181C14] mb-2">Portfolio 2026</h3>
                <p class="text-[#3C3D37] mb-4">This very site! Designed with my custom color palette and Tailwind.</p>
                <a href="#" class="text-[#697565] font-medium inline-flex items-center gap-1 hover:text-[#181C14] transition">
                    Learn more <i class="fas fa-arrow-right text-sm"></i>
                </a>
            </div>
          
            <div class="bg-white/80 p-6 rounded-xl shadow-sm border border-[#697565]/30 hover:shadow-md transition group">
                <div class="w-12 h-12 bg-[#697565] rounded-lg flex items-center justify-center mb-4 group-hover:bg-[#3C3D37] transition">
                    <i class="fas fa-mobile-alt text-[#ECDFCC] text-xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-[#181C14] mb-2">Task Manager App</h3>
                <p class="text-[#3C3D37] mb-4">in the making.</p>
                <a href="#" class="text-[#697565] font-medium inline-flex items-center gap-1 hover:text-[#181C14] transition">
                    Learn more <i class="fas fa-arrow-right text-sm"></i>
                </a>
            </div>
        </div>
    </section>

  
    <section id="contact" class="bg-white py-16 border-y border-[#697565]/20">
        <div class="max-w-4xl mx-auto text-center px-4">
            <h2 class="text-3xl font-bold text-[#181C14] mb-4">Let's work together</h2>
            <p class="text-[#3C3D37] text-lg mb-8">I'm currently a student but if you want to contact me this is my email.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4 items-center">
                <a href="mailto:your.email@example.com" class="bg-[#697565] text-[#ECDFCC] px-8 py-4 rounded-lg font-semibold hover:bg-[#3C3D37] transition inline-flex items-center gap-2">
                    <i class="fas fa-envelope"></i> gabaleorimer@gmail.com
                </a>
                <a href="#" class="border-2 border-[#697565] text-[#181C14] px-8 py-4 rounded-lg font-semibold hover:bg-[#697565]/10 transition inline-flex items-center gap-2">
                    <i class="fas fa-file-pdf"></i> Download Resume
                </a>
            </div>
        </div>
    </section>

    
    <footer class="bg-[#3C3D37] text-[#ECDFCC] py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <p>© {{ date('Y') }} RG development .co</p>
                <div class="flex space-x-6 text-[#ECDFCC]/80">
                    <a href="https://github.com/rimerGAB" class="hover:text-[#ECDFCC] transition"><i class="fab fa-github text-xl"></i></a>
                    <a href="https://www.linkedin.com/in/rimer-gabaleo-98946036a/" class="hover:text-[#ECDFCC] transition"><i class="fab fa-linkedin text-xl"></i></a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>