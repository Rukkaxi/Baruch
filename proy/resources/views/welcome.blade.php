@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section id="home" class="relative bg-cover bg-center h-screen flex items-center" style="background-image: url('https://images.unsplash.com/photo-1589829085413-56de8ae18c73?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');">
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl" data-aos="fade-up">
            <h1 class="text-4xl md:text-6xl font-serif font-bold text-white leading-tight mb-4">Expertos Legales Para Tus Necesidades</h1>
            <p class="text-xl text-gray-200 mb-8">Ofrecemos soluciones legales personalizadas para proteger tus intereses y ayudarte a alcanzar tus objetivos.</p>
            <div class="flex flex-wrap gap-4">
                <a href="#contact" class="btn-primary">Consulta Gratis</a>
                <a href="#about" class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-primary px-6 py-3 rounded transition duration-300 font-semibold">Conoce Más</a>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1581922819941-6ab31ab79afc?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="Sobre WizeLaw" class="rounded-lg shadow-lg">
            </div>
            <div data-aos="fade-left">
                <h2 class="section-title">Sobre Nosotros</h2>
                <p class="mb-6 text-gray-600">
                    WizeLaw es un bufete de abogados líder con más de 25 años de experiencia proporcionando servicios legales excepcionales a clientes de todo el país. Nuestro compromiso con la excelencia nos ha convertido en una referencia en el sector legal.
                </p>
                <p class="mb-6 text-gray-600">
                    Nuestro equipo de abogados altamente cualificados se dedica a ofrecer asesoramiento legal personalizado y soluciones efectivas para satisfacer las necesidades específicas de cada cliente.
                </p>
                <div class="grid grid-cols-2 gap-6 mb-8">
                    <div class="flex items-center">
                        <i class="fas fa-balance-scale text-2xl text-secondary mr-4"></i>
                        <div>
                            <h4 class="font-bold">Experiencia Legal</h4>
                            <p class="text-gray-600">25+ años de servicio</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-users text-2xl text-secondary mr-4"></i>
                        <div>
                            <h4 class="font-bold">Equipo Profesional</h4>
                            <p class="text-gray-600">Abogados certificados</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-trophy text-2xl text-secondary mr-4"></i>
                        <div>
                            <h4 class="font-bold">Premio Excelencia</h4>
                            <p class="text-gray-600">Reconocimiento nacional</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-handshake text-2xl text-secondary mr-4"></i>
                        <div>
                            <h4 class="font-bold">Clientes Satisfechos</h4>
                            <p class="text-gray-600">Más de 10,000</p>
                        </div>
                    </div>
                </div>
                <a href="#practice-areas" class="btn-primary">Nuestras Áreas de Práctica</a>
            </div>
        </div>
    </div>
</section>

<!-- Practice Areas Section -->
<section id="practice-areas" class="section-padding bg-gray-100">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="section-title mx-auto" data-aos="fade-up">
                <span class="inline-block after:left-1/2 after:-translate-x-1/2">Áreas de Práctica</span>
            </h2>
            <p class="text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Ofrecemos una amplia gama de servicios legales para satisfacer las diversas necesidades de nuestros clientes, tanto individuos como empresas.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Practice Area Card 1 -->
            <div class="bg-white rounded-lg shadow-lg p-8 transition-transform hover:transform hover:scale-105" data-aos="fade-up" data-aos-delay="100">
                <div class="text-center mb-4">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-primary rounded-full text-white mb-4">
                        <i class="fas fa-building text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold">Derecho Corporativo</h3>
                </div>
                <p class="text-gray-600 text-center">
                    Asesoramiento legal integral para empresas, desde la constitución hasta fusiones y adquisiciones.
                </p>
            </div>

            <!-- Practice Area Card 2 -->
            <div class="bg-white rounded-lg shadow-lg p-8 transition-transform hover:transform hover:scale-105" data-aos="fade-up" data-aos-delay="200">
                <div class="text-center mb-4">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-primary rounded-full text-white mb-4">
                        <i class="fas fa-home text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold">Derecho Inmobiliario</h3>
                </div>
                <p class="text-gray-600 text-center">
                    Apoyo legal en compra-venta de propiedades, arrendamientos y disputas de propiedad.
                </p>
            </div>

            <!-- Practice Area Card 3 -->
            <div class="bg-white rounded-lg shadow-lg p-8 transition-transform hover:transform hover:scale-105" data-aos="fade-up" data-aos-delay="300">
                <div class="text-center mb-4">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-primary rounded-full text-white mb-4">
                        <i class="fas fa-gavel text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold">Litigios Comerciales</h3>
                </div>
                <p class="text-gray-600 text-center">
                    Representación en disputas comerciales, incumplimientos de contrato y protección de activos.
                </p>
            </div>

            <!-- Practice Area Card 4 -->
            <div class="bg-white rounded-lg shadow-lg p-8 transition-transform hover:transform hover:scale-105" data-aos="fade-up" data-aos-delay="400">
                <div class="text-center mb-4">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-primary rounded-full text-white mb-4">
                        <i class="fas fa-heart text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold">Derecho Familiar</h3>
                </div>
                <p class="text-gray-600 text-center">
                    Apoyo en divorcios, custodia de hijos, adopciones y planificación patrimonial familiar.
                </p>
            </div>

            <!-- Practice Area Card 5 -->
            <div class="bg-white rounded-lg shadow-lg p-8 transition-transform hover:transform hover:scale-105" data-aos="fade-up" data-aos-delay="500">
                <div class="text-center mb-4">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-primary rounded-full text-white mb-4">
                        <i class="fas fa-dollar-sign text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold">Derecho Fiscal</h3>
                </div>
                <p class="text-gray-600 text-center">
                    Asesoramiento en planificación fiscal, declaraciones y resolución de conflictos con autoridades fiscales.
                </p>
            </div>

            <!-- Practice Area Card 6 -->
            <div class="bg-white rounded-lg shadow-lg p-8 transition-transform hover:transform hover:scale-105" data-aos="fade-up" data-aos-delay="600">
                <div class="text-center mb-4">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-primary rounded-full text-white mb-4">
                        <i class="fas fa-briefcase text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold">Derecho Laboral</h3>
                </div>
                <p class="text-gray-600 text-center">
                    Representación en conflictos laborales, contratos de trabajo y despidos improcedentes.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section id="team" class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="section-title mx-auto" data-aos="fade-up">
                <span class="inline-block after:left-1/2 after:-translate-x-1/2">Nuestro Equipo</span>
            </h2>
            <p class="text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Contamos con un equipo de abogados altamente cualificados y experimentados, dedicados a proporcionar servicios legales excepcionales.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Team Member 1 -->
            <div class="group" data-aos="fade-up" data-aos-delay="100">
                <div class="relative overflow-hidden rounded-lg shadow-lg mb-4">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="Carlos Rodríguez" class="w-full h-80 object-cover object-center">
                    <div class="absolute inset-0 bg-primary bg-opacity-75 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="flex space-x-4">
                            <a href="#" class="text-white hover:text-secondary"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="text-white hover:text-secondary"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-white hover:text-secondary"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <h3 class="text-xl font-bold">Carlos Rodríguez</h3>
                    <p class="text-secondary font-medium">Socio Fundador</p>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="group" data-aos="fade-up" data-aos-delay="200">
                <div class="relative overflow-hidden rounded-lg shadow-lg mb-4">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="Ana Martínez" class="w-full h-80 object-cover object-center">
                    <div class="absolute inset-0 bg-primary bg-opacity-75 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="flex space-x-4">
                            <a href="#" class="text-white hover:text-secondary"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="text-white hover:text-secondary"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-white hover:text-secondary"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <h3 class="text-xl font-bold">Ana Martínez</h3>
                    <p class="text-secondary font-medium">Derecho Corporativo</p>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="group" data-aos="fade-up" data-aos-delay="300">
                <div class="relative overflow-hidden rounded-lg shadow-lg mb-4">
                    <img src="https://images.unsplash.com/photo-1556157382-97eda2d62296?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="Miguel López" class="w-full h-80 object-cover object-center">
                    <div class="absolute inset-0 bg-primary bg-opacity-75 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="flex space-x-4">
                            <a href="#" class="text-white hover:text-secondary"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="text-white hover:text-secondary"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-white hover:text-secondary"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <h3 class="text-xl font-bold">Miguel López</h3>
                    <p class="text-secondary font-medium">Litigios</p>
                </div>
            </div>

            <!-- Team Member 4 -->
            <div class="group" data-aos="fade-up" data-aos-delay="400">
                <div class="relative overflow-hidden rounded-lg shadow-lg mb-4">
                    <img src="https://images.unsplash.com/photo-1580894732444-8ecded7900cd?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="Laura Gómez" class="w-full h-80 object-cover object-center">
                    <div class="absolute inset-0 bg-primary bg-opacity-75 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="flex space-x-4">
                            <a href="#" class="text-white hover:text-secondary"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="text-white hover:text-secondary"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-white hover:text-secondary"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <h3 class="text-xl font-bold">Laura Gómez</h3>
                    <p class="text-secondary font-medium">Derecho Familiar</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="section-padding bg-gray-100">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="section-title mx-auto" data-aos="fade-up">
                <span class="inline-block after:left-1/2 after:-translate-x-1/2">Testimonios</span>
            </h2>
            <p class="text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Descubre lo que nuestros clientes dicen sobre nuestros servicios y cómo hemos ayudado a resolver sus problemas legales.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-white p-8 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="100">
                <div class="flex justify-center mb-4">
                    <div class="flex items-center justify-center w-12 h-12 bg-secondary rounded-full">
                        <i class="fas fa-quote-right text-primary"></i>
                    </div>
                </div>
                <p class="text-gray-600 text-center mb-6">
                    "El equipo de WizeLaw manejó mi caso de divorcio con un profesionalismo y empatía excepcionales. Resolvieron todas mis dudas y me guiaron en cada paso del proceso."
                </p>
                <div class="text-center">
                    <h4 class="font-bold">Isabel Torres</h4>
                    <p class="text-secondary">Cliente desde 2020</p>
                    <div class="flex items-center justify-center mt-2">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-white p-8 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="200">
                <div class="flex justify-center mb-4">
                    <div class="flex items-center justify-center w-12 h-12 bg-secondary rounded-full">
                        <i class="fas fa-quote-right text-primary"></i>
                    </div>
                </div>
                <p class="text-gray-600 text-center mb-6">
                    "Como propietario de una pequeña empresa, necesitaba asesoramiento legal continuo. WizeLaw ha sido fundamental para ayudarnos a crecer con seguridad y evitar problemas legales."
                </p>
                <div class="text-center">
                    <h4 class="font-bold">Javier Méndez</h4>
                    <p class="text-secondary">Cliente desde 2018</p>
                    <div class="flex items-center justify-center mt-2">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-white p-8 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="300">
                <div class="flex justify-center mb-4">
                    <div class="flex items-center justify-center w-12 h-12 bg-secondary rounded-full">
                        <i class="fas fa-quote-right text-primary"></i>
                    </div>
                </div>
                <p class="text-gray-600 text-center mb-6">
                    "Cuando necesité asesoramiento para la compra de mi vivienda, WizeLaw me ofreció un servicio rápido y eficiente. Su experiencia en derecho inmobiliario fue invaluable."
                </p>
                <div class="text-center">
                    <h4 class="font-bold">Elena Durán</h4>
                    <p class="text-secondary">Cliente desde 2019</p>
                    <div class="flex items-center justify-center mt-2">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star-half-alt text-yellow-400"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 md:py-20 bg-primary relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0 bg-pattern"></div>
    </div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center text-white" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-serif font-bold mb-6">¿Necesitas Asesoramiento Legal?</h2>
            <p class="text-xl text-gray-200 mb-8">
                Nuestro equipo de expertos está listo para ayudarte con tus necesidades legales. Agenda una consulta gratuita hoy mismo.
            </p>
            <a href="#contact" class="btn-secondary inline-block">Consulta Gratuita</a>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="section-title mx-auto" data-aos="fade-up">
                <span class="inline-block after:left-1/2 after:-translate-x-1/2">Contacto</span>
            </h2>
            <p class="text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Estamos aquí para ayudarte. Ponte en contacto con nosotros para programar una consulta o para obtener más información sobre nuestros servicios.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div data-aos="fade-right">
                <div class="bg-gray-100 p-8 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold mb-6">Envíanos un Mensaje</h3>
                    <form action="{{ route('contact.store') }}" method="POST" id="contact-form">
                        @csrf
                        <div class="mb-6">
                            <label for="name" class="block text-gray-700 font-medium mb-2">Nombre Completo</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" required>
                        </div>

                        <div class="mb-6">
                            <label for="email" class="block text-gray-700 font-medium mb-2">Correo Electrónico</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" required>
                        </div>

                        <div class="mb-6">
                            <label for="phone" class="block text-gray-700 font-medium mb-2">Teléfono</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>

                        <div class="mb-6">
                            <label for="service" class="block text-gray-700 font-medium mb-2">Servicio de Interés</label>
                            <select id="service" name="service" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                <option value="">Selecciona un servicio</option>
                                <option value="corporate">Derecho Corporativo</option>
                                <option value="real_estate">Derecho Inmobiliario</option>
                                <option value="litigation">Litigios Comerciales</option>
                                <option value="family">Derecho Familiar</option>
                                <option value="tax">Derecho Fiscal</option>
                                <option value="labor">Derecho Laboral</option>
                            </select>
                        </div>

                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 font-medium mb-2">Mensaje</label>
                            <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" required></textarea>
                        </div>

                        <button type="submit" class="btn-primary w-full">Enviar Mensaje</button>
                    </form>
                </div>
            </div>

            <!-- Contact Info -->
            <div data-aos="fade-left">
                <div class="mb-8">
                    <h3 class="text-2xl font-bold mb-6">Información de Contacto</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 flex items-center justify-center w-12 h-12 bg-primary rounded-full text-white mr-4">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Dirección</h4>
                                <p class="text-gray-600">123 Avenida Principal, Ciudad, CP 12345</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0 flex items-center justify-center w-12 h-12 bg-primary rounded-full text-white mr-4">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Teléfono</h4>
                                <p class="text-gray-600">+34 123 456 789</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0 flex items-center justify-center w-12 h-12 bg-primary rounded-full text-white mr-4">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Email</h4>
                                <p class="text-gray-600">info@wizelaw.com</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0 flex items-center justify-center w-12 h-12 bg-primary rounded-full text-white mr-4">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Horario de Atención</h4>
                                <p class="text-gray-600">Lunes a Viernes: 9:00 - 18:00</p>
                                <p class="text-gray-600">Sábados: 10:00 - 14:00</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Map -->
                <div class="h-80 bg-gray-300 rounded-lg overflow-hidden">
                    <div class="w-full h-full flex items-center justify-center">
                        <!-- Aquí iría un iframe de Google Maps -->
                        <p class="text-gray-600">Mapa de ubicación</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection