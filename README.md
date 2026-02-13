Rimer Gabaleo Portfolio
A personal portfolio website built with Laravel and Tailwind CSS, featuring a custom color palette (#181C14, #3C3D37, #697565, #ECDFCC). The site consists of three pages: a welcoming Home page, a detailed About page, and an Information page showcasing projects and contact details.

Pages Overview
Home Page
A clean landing page with a friendly introduction, avatar placeholder, and calls‑to‑action leading to the About and Information pages.

html
<!-- Simplified structure -->
<section class="...">
  <div class="avatar">...</div>
  <h1>Hi, I'm Rimer Gabaleo</h1>
  <p>Laravel developer ...</p>
  <div class="buttons">
    <a href="/about">Learn More About Me</a>
    <a href="/information">See My Work</a>
  </div>
</section>
About Page
Provides an in‑depth look at the developer – bio, core skills with progress bars, work experience, and contact details.

html
<!-- Simplified structure -->
<section class="...">
  <div class="profile-card">...</div>
  <div class="bio">...</div>
  <div class="skills">...</div>
  <div class="experience">...</div>
</section>
Information Page
Displays featured projects and a contact section, encouraging visitors to get in touch or download a resume.

html
<!-- Simplified structure -->
<section class="...">
  <h2>Featured Projects</h2>
  <div class="project-grid">...</div>
</section>
<section class="contact">...</section>
Screenshots – Add actual screenshots of your three pages here by placing image files in a screenshots/ folder and linking them:

text
![Home Page](screenshots/home.png)
![About Page](screenshots/about.png)
![Information Page](screenshots/information.png)
Technologies Used
Laravel 11.x (or your version)

Tailwind CSS – for styling (via CDN, no build step required in this setup)

Font Awesome – icons (via CDN)

How to Run the Project Locally
Follow these steps to get the portfolio up and running on your own machine.

Prerequisites
PHP >= 8.2

Composer

Node.js & npm (optional, only if you later want to customize Tailwind locally)

Installation
Clone the repository

bash
git clone https://github.com/rimerGAB/your-repo-name.git
cd your-repo-name
Install PHP dependencies

bash
composer install
Copy the environment file

bash
cp .env.example .env
Generate an application key

bash
php artisan key:generate
Set up your environment variables (if needed)
Edit the .env file to match your local database or mail settings (not required for a static portfolio, but Laravel expects it).

(Optional) Install and compile front‑end assets
This project uses Tailwind via CDN, so no build step is strictly necessary. However, if you later want to customize Tailwind, you can run:

bash
npm install
npm run dev
Start the local development server

bash
php artisan serve
Visit the application
Open your browser and go to http://localhost:8000. The home page should appear.

Navigate the pages
Use the links in the navigation bar to explore /about and /information.

File Structure (Views)
All Blade templates are located in resources/views/:

home.blade.php – Landing page

about.blade.php – About page

information.blade.php – Projects & contact page

Routes are defined in routes/web.php:

php
Route::get('/', function () { return view('home'); });
Route::get('/about', function () { return view('about'); });
Route::get('/information', function () { return view('information'); });
Customization
Colors – The palette is applied directly via Tailwind’s arbitrary value syntax (e.g., bg-[#ECDFCC]). To use named colors, extend the tailwind.config.js file and rebuild assets.

Content – Replace placeholder text, links, and the avatar image with your own information.

Avatar – To add a real photo, replace the <i> tag inside the avatar <div> with an <img src="your-photo.jpg"> and adjust styling.

License
This project is open‑source and available under the MIT license.
