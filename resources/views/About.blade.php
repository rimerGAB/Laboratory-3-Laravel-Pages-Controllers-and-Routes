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
                    <span class="text-xl font-semibold text-red/60 tracking-tight">Rimer Gabaleo</span>
                </div>
                <div class="flex items-center space-x-6">
                    <a href="/home" class="text-[#3C3D37] hover:text-[#181C14] transition font-medium">Home</a>
                    <a href="/about" class="text-[#181C14] font-medium border-b-2 border-[#697565] pb-1">About</a>
                    <a href="/Information" class="text-[#3C3D37] hover:text-[#181C14] transition font-medium">Information</a>
            </div>
        </div>
    </nav>

  
    <section class="bg-[#BCD9A2]     py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold text-white">About Me</h1>
            <p class="text-white/80 mt-2">Get to know the person behind the code</p>
        </div>
    </section>


    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid md:grid-cols-3 gap-8">
           
            <div class="md:col-span-1">
                <div class="bg-white/80 p-6 rounded-xl shadow-sm border border-[#697565]/30 sticky top-24">
                    <div class="flex flex-col items-center">
                        <!-- Profile image placeholder -->
                        <div class="w-26 h-28 bg-[#697565]/80 border-4 border-[#697565] flex items-center justify-center text-[#697565] text-5xl mb-4">
                        <img src="{{ asset('images/profile.png') }}" 
                        alt="Profile Image" 
                        class="w-full h-full object-cover">
                        </div>
                        <h2 class="text-2xl font-semibold text-[#181C14]">Rimer Gabaleo</h2>
                        <p class="text-[#697565] font-medium">Laravel & Tailwind Beginner</p>
                        <p class="text-[#3C3D37] text-sm mt-2 text-center">Based in (Antipolo, Rizal,Philippines)</p>
                        <hr class="w-16 border-[#697565] my-4">
                        <div class="w-full space-y-2 text-[#3C3D37]">
                            <p><i class="fas fa-envelope w-6 text-[#697565]"></i> gabaleorimer@gmail.com</p>
                            <p><i class="fas fa-phone w-6 text-[#697565]"></i>09104207702</p>
                        </div>
                    </div>
                </div>
            </div>

          
            <div class="md:col-span-2 space-y-8">
                <!-- Bio -->
                <div class="bg-white/80 p-6 rounded-xl shadow-sm border border-[#697565]/30">
                    <h3 class="text-xl font-semibold text-[#181C14] mb-3 flex items-center gap-2"><i class="fas fa-user text-black"></i> Who I Am</h3>
                    <p class="text-[#3C3D37] leading-relaxed">
                     I am a Bachelor of Science in Information Systems student with a strong interest in system analysis, web development, and structured problem-solving. I focus on building clean, efficient, and user-centered solutions while continuously improving my technical and analytical skills. My goal is to grow into a professional who designs scalable systems and develops practical technologies that address real-world challenges effectively.
                    </p>
                    <p class="text-[#3C3D37] leading-relaxed mt-3">
                        Outside of coding, I enjoy Designing, Music , and Cooking. I'm always open to new opportunities 
                        and collaborations.
                    </p>
                </div>

              
                <div class="bg-white/80 p-6 rounded-xl shadow-sm border border-[#697565]/30">
                    <h3 class="text-xl font-semibold text-[#181C14] mb-4 flex items-center gap-2"><i class="fas fa-cog text-[#697565]"></i> Core Skills</h3>
                    <div class="space-y-4">
                        <div><span class="font-medium text-[#181C14]">Laravel</span> <div class="w-full bg-[#697565]/20 h-2.5 rounded-full mt-1"><div class="bg-[#697565] h-2.5 rounded-full" style="width: 20%"></div></div></div>
                        <div><span class="font-medium text-[#181C14]">Tailwind CSS</span> <div class="w-full bg-[#697565]/20 h-2.5 rounded-full mt-1"><div class="bg-[#697565] h-2.5 rounded-full" style="width: 30%"></div></div></div>
                        <div><span class="font-medium text-[#181C14]">Canva/Capcut</span> <div class="w-full bg-[#697565]/20 h-2.5 rounded-full mt-1"><div class="bg-[#697565] h-2.5 rounded-full" style="width: 55%"></div></div></div>
                        <div><span class="font-medium text-[#181C14]">UI/UX Design</span> <div class="w-full bg-[#697565]/20 h-2.5 rounded-full mt-1"><div class="bg-[#697565] h-2.5 rounded-full" style="width: 50%"></div></div></div>
                    </div>
                </div>

               
                <div class="bg-white/80 p-6 rounded-xl shadow-sm border border-[#697565]/30">
                    <h3 class="text-xl font-semibold text-[#181C14] mb-4 flex items-center gap-2"><i class="fas fa-briefcase text-[#697565]"></i> Experience</h3>
                    <div class="space-y-4">
                        <div>
                            <h4 class="font-semibold text-[#181C14]">Laravel Beginner</h4>
                            <p class="text-[#697565] text-sm">LVCC 2025 – Present</p>
                            <p class="text-[#3C3D37] text-sm mt-1">A new student that wants to know MVC model well and create websites using laravel</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-[#181C14]">UI/UX</h4>
                            <p class="text-[#697565] text-sm">LVCC · 2024 – present</p>
                            <p class="text-[#3C3D37] text-sm mt-1">Built responsive interfaces with Tailwind and CSS design.</p>
                        </div>
                    </div>
                </div>
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