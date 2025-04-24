import './bootstrap';
import AOS from 'aos';

// Inicializar AOS
document.addEventListener('DOMContentLoaded', function() {
    AOS.init({
        duration: 800,
        once: true,
    });
    
    // Manejar el envío del formulario de contacto
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Aquí puedes agregar validación adicional en el lado del cliente si es necesario
            
            // Para simular el envío y la respuesta
            const formData = new FormData(contactForm);
            
            // Mostrar estado de carga
            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerText;
            submitBtn.innerText = 'Enviando...';
            submitBtn.disabled = true;
            
            // Simular una petición AJAX (en un proyecto real usarías fetch o axios)
            setTimeout(() => {
                // Restablecer el botón
                submitBtn.innerText = originalBtnText;
                submitBtn.disabled = false;
                
                // Mostrar mensaje de éxito (en un proyecto real esto vendría del servidor)
                const successMessage = document.createElement('div');
                successMessage.className = 'mt-4 p-4 bg-green-100 text-green-700 rounded';
                successMessage.innerText = '¡Gracias por tu mensaje! Nos pondremos en contacto contigo pronto.';
                
                // Insertar mensaje después del formulario
                contactForm.parentNode.insertBefore(successMessage, contactForm.nextSibling);
                
                // Limpiar formulario
                contactForm.reset();
                
                // Eliminar mensaje después de 5 segundos
                setTimeout(() => {
                    successMessage.remove();
                }, 5000);
            }, 1500);
        });
    }
    
    // Navegación suave al hacer clic en los enlaces del menú
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                // Cerrar menú móvil si está abierto
                const mobileMenu = document.getElementById('mobile-menu');
                if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                }
                
                // Scroll suave hasta el elemento
                window.scrollTo({
                    top: targetElement.offsetTop - 80, // Ajuste para el header fijo
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Control de scroll para cambiar estilo del header
    const header = document.querySelector('header');
    if (header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('bg-white', 'shadow-md');
            } else {
                header.classList.remove('bg-white', 'shadow-md');
            }
        });
    }
});