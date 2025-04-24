<header class="bg-white shadow-md fixed w-full z-50">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="text-2xl font-serif font-bold text-primary">
                    <span class="text-secondary">Wize</span>Law
                </a>
            </div>
            
            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-8">
                <a href="#home" class="text-primary hover:text-secondary font-medium transition duration-300">Inicio</a>
                <a href="#about" class="text-primary hover:text-secondary font-medium transition duration-300">Sobre Nosotros</a>
                <a href="#practice-areas" class="text-primary hover:text-secondary font-medium transition duration-300">Áreas de Práctica</a>
                <a href="#team" class="text-primary hover:text-secondary font-medium transition duration-300">Equipo</a>
                <a href="#testimonials" class="text-primary hover:text-secondary font-medium transition duration-300">Testimonios</a>
                <a href="#contact" class="text-primary hover:text-secondary font-medium transition duration-300">Contacto</a>
            </nav>
            
            <!-- Mobile Navigation Button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-primary">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
        
        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="md:hidden hidden py-4">
            <a href="#home" class="block py-2 text-primary hover:text-secondary font-medium">Inicio</a>
            <a href="#about" class="block py-2 text-primary hover:text-secondary font-medium">Sobre Nosotros</a>
            <a href="#practice-areas" class="block py-2 text-primary hover:text-secondary font-medium">Áreas de Práctica</a>
            <a href="#team" class="block py-2 text-primary hover:text-secondary font-medium">Equipo</a>
            <a href="#testimonials" class="block py-2 text-primary hover:text-secondary font-medium">Testimonios</a>
            <a href="#contact" class="block py-2 text-primary hover:text-secondary font-medium">Contacto</a>
        </div>
    </div>
</header>

<script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>