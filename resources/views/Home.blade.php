<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rimer Gabaleo Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-[#697565]/40 text-[#181C14] antialiased flex flex-col min-h-screen">

  
    <nav class="bg-white/40 shadow-sm border-b border-[#697565]/20 sticky top-0 z-10 backdrop-blur-sm bg-[#ECDFCC]/90">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <span class="text-xl font-semibold text-White tracking-tight">Rimer Gabaleo</span>
                </div>
                <div class="flex items-center space-x-6">
                    <a href="/home" class="text-[#181C14] font-medium border-b-2 border-[#697565] pb-1">Home</a>
                    <a href="/about" class="text-[#3C3D37] hover:text-[#181C14] transition font-medium">About</a>
                    <a href="/Information" class="text-[#3C3D37] hover:text-[#181C14] transition font-medium">Information</a>
                </div>
            </div>
        </div>
    </nav>

    
    <main class="flex-grow">
        
        <section class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-32 text-center">
            <div class="flex justify-center mb-6">
                <di<div class="flex justify-center mb-6">
                <div class="w-24 h-24 rounded-full bg-[#697565]/20 border-4 border-[#697565] flex items-center justify-center text-[#697565] text-5xl">
                     <img src="{{ asset('images/profile.png') }}" alt="Profile Image" class="w-full h-full rounded-full object-cover">
               </div>
              </div>
            </div>

            <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-[#181C14] mb-4">
                Hi, I'm <span class="text-white">Rimer Gabaleo</span>
            </h1>

            <p class="text-xl text-[#3C3D37] mb-8 max-w-2xl mx-auto leading-relaxed">
                I'm a Student who loves building clean, functional web applications. 
                I focus on writing elegant code and designing for better user experiences.
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="/about" class="bg-[#697565] text-[#ECDFCC] px-8 py-3 rounded-lg font-medium hover:bg-[#3C3D37] transition inline-flex items-center justify-center gap-2">
                    <i class="fas fa-user"></i> Learn More About Me
                </a>
                <a href="/Information" class="border-2 border-[#697565] text-[#181C14] px-8 py-3 rounded-lg font-medium hover:bg-[#697565]/10 transition inline-flex items-center justify-center gap-2">
                    <i class="fas fa-code"></i> See My Work
                </a>
            </div>

        
            <div class="flex justify-center gap-6 mt-12 text-[#697565]">
                <a href="https://github.com/rimerGAB" class="hover:text-[#181C14] transition"><i class="fab fa-github text-2xl"></i></a>
                <a href="https://www.linkedin.com/in/rimer-gabaleo-98946036a/" class="hover:text-[#181C14] transition"><i class="fab fa-linkedin text-2xl"></i></a>
                <a href="https://www.facebook.com/MYTERYGUEST#" class="hover:text-[#181C14] transition"><i class="fab fa-facebook text-2xl"></i></a>
            </div>
        </section>
    </main>

  
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