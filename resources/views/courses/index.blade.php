<x-app-layout>
    <section class="bg-cover" style="background-image: url({{asset('img/courses/programming-g738f9ce5a_1920.png')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">¡Llévate 2 y el tercero te sale con un 50% de descuento!</h1>
                <p class="text-white text-lg mt-2 mb-4">Se considera todos los cursos de la web, el descuento se aplica sobre el curso de menor precio de los 3 seleccionados.</p>
                @livewire('search')
            </div>
        </div>
    </section>
    @livewire('course-index')
</x-app-layout>
