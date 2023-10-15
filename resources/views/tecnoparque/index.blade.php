<x-app-layout>
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-gradient-to-b from-orange-500 to-orange-200 overflow-hidden mb-3">
    <div class="max-w-7xl mx-auto">
      <div class="relative z-10 pb-8  bg-gradient-to-b from-orange-500 to-orange-200 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">


        <div>
          <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
            <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
              <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                <div class="flex items-center justify-between w-full md:w-auto">
                  <a href="#">
                    <span class="sr-only">Workflow</span>
                    <img alt="Workflow" class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg">
                  </a>
                  <div class="-mr-2 flex items-center md:hidden">
                    <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                      <span class="sr-only">Open main menu</span>
                      <!-- Heroicon name: outline/menu -->
                      <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
              <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">
                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Product</a>

                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Features</a>

                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Marketplace</a>

                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Company</a>

                <a href="#" class="font-medium text-orange-600 hover:text-indigo-500">Log in</a>
              </div>
            </nav>
          </div>


          <div class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
            <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
              <div class="px-5 pt-4 flex items-center justify-between">
                <div>
                  <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="">
                </div>
                <div class="-mr-2">
                  <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <span class="sr-only">Close main menu</span>
                    <!-- Heroicon name: outline/x -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>
              </div>
              <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Product</a>

                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Features</a>

                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Marketplace</a>

                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Company</a>
              </div>
              <a href="#" class="block w-full px-5 py-3 text-center font-medium text-orange-600 bg-gray-50 hover:bg-gray-100"> Log in </a>
            </div>
          </div>
        </div>

        <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
          <div class="sm:text-center lg:text-center">
            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
              <span class="block xl:inline">Red Tecnoparque </span>
              <span class="block text-white xl:inline">Colombia</span>
            </h1>
            <p class="mt-3 text-base text-white sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">Es un programa de innovación tecnológica del Servicio Nacional de Aprendizaje dirigida a todos los Colombianos, que actúa como acelerador para el desarrollo de proyectos de I+D+i materializados en prototipos funcionales en cuatro líneas tecnológicas: Electrónica y Telecomunicaciones, Tecnologías Virtuales, Ingeniería y diseño y Biotecnología nanotecnología, que promueva el emprendimiento de base tecnológica.</p>
            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
              <div class="rounded-md shadow">
                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10"> Get started </a>
              </div>
              <div class="mt-3 sm:mt-0 sm:ml-3">
                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10"> Live demo </a>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
    <div class=" lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 ">
      <img class=" h-full w-full mr-8  object-cover overflow-hidden pt-4" src="https://gestionredtecnoparquecolombia.com.co/inicio/wp-content/uploads/2021/03/robotics-18.png" alt="">
    </div>
  </div>
  <!-- This example requires Tailwind CSS v2.0+ -->
<div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      {{-- <div class="lg:text-center">
        <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Transactions</h2>
        <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">A better way to send money</p>
        <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis in accusamus quisquam.</p>
      </div>

      <div class="mt-10">
        <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
          <div class="relative">
            <dt>
              <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/globe-alt -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                </svg>
              </div>
              <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Competitive exchange rates</p>
            </dt>
            <dd class="mt-2 ml-16 text-base text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</dd>
          </div>

          <div class="relative">
            <dt>
              <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/scale -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                </svg>
              </div>
              <p class="ml-16 text-lg leading-6 font-medium text-gray-900">No hidden fees</p>
            </dt>
            <dd class="mt-2 ml-16 text-base text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</dd>
          </div>

          <div class="relative">
            <dt>
              <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/lightning-bolt -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
              </div>
              <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Transfers are instant</p>
            </dt>
            <dd class="mt-2 ml-16 text-base text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</dd>
          </div>

          <div class="relative">
            <dt>
              <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/annotation -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                </svg>
              </div>
              <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Mobile notifications</p>
            </dt>
            <dd class="mt-2 ml-16 text-base text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</dd>
          </div>
        </dl>
      </div> --}}
      <div class="grid grid-cols-4 gap-2">
          <div class="col-span-2">

          </div>
          <div class="col-span-2">
            <h2 class="text-black text-5xl font-extrabold text-center">Lo que ofrecemos</h2>
            <p class="text-black text-base text-justify mt-6">Somos un programa de innovación tecnológica del Servicio Nacional de Aprendizaje dirigida a todos los Colombianos, que actúa como acelerador para el desarrollo de proyectos de I+D+i materializados en prototipos funcionales en cuatro líneas tecnológicas: Biotecnología y Nanotecnología, Ingeniería y diseño, Electrónica y Telecomunicaciones, y Tecnologías Virtuales, que promueva el emprendimiento de base tecnológica.</p>
          </div>
      </div>
    </div>
  </div>
  <!-- Component Start -->
<div class="flex flex-col w-screen h-screen overflow-auto text-gray-700 bg-gradient-to-tr from-blue-200 via-indigo-200 to-pink-200">
	<div class="flex items-center flex-shrink-0 w-full h-16 px-10 bg-white bg-opacity-75">
		<img src="http://gestionredtecnoparquecolombia.com.co/inicio/wp-content/uploads/2021/06/red-tecnoparque-colombia.png" width="251" height="51" alt="Tecnoparque Colombia" id="logo" data-height-percentage="54" data-actual-width="0" data-actual-height="0">
		<input class="flex items-center h-10 px-4 ml-10 text-sm bg-gray-200 rounded-full focus:outline-none focus:ring" type="search" placeholder="Search for anything…">
		<div class="ml-10">
			<a class="mx-2 text-sm font-semibold text-indigo-700" href="#">Projects</a>
			<a class="mx-2 text-sm font-semibold text-gray-600 hover:text-indigo-700" href="#">Team</a>
			<a class="mx-2 text-sm font-semibold text-gray-600 hover:text-indigo-700" href="#">Activity</a>
		</div>
		<buton class="flex items-center justify-center w-8 h-8 ml-auto overflow-hidden rounded-full cursor-pointer">
			<img src="https://assets.codepen.io/5041378/internal/avatars/users/default.png?fit=crop&format=auto&height=512&version=1600304177&width=512" alt="">
		</buton>
	</div>
	<div class="px-10 mt-6">
		<h1 class="text-2xl font-bold">Team Project Board</h1>
	</div>
	<div class="flex flex-grow px-10 mt-4 space-x-6 overflow-auto">
		<div class="flex flex-col flex-shrink-0 w-72">
			<div class="flex items-center flex-shrink-0 h-10 px-2">
				<span class="block text-sm font-semibold">Backlog</span>
				<span class="flex items-center justify-center w-5 h-5 ml-2 text-sm font-semibold text-indigo-500 bg-white rounded bg-opacity-30">6</span>
				<button class="flex items-center justify-center w-6 h-6 ml-auto text-indigo-500 rounded hover:bg-indigo-500 hover:text-indigo-100">
					<svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
					</svg>
				</button>
			</div>
			<div class="flex flex-col pb-2 overflow-auto">
				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<button class="absolute top-0 right-0 flex items-center justify-center hidden w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
						<svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
						</svg>
					</button>
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Design</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
					<div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
						<div class="flex items-center">
							<svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">Dec 12</span>
						</div>
						<div class="relative flex items-center ml-4">
							<svg class="relative w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">4</span>
						</div>
						<div class="flex items-center ml-4">
							<svg class="w-4 h-4 text-gray-300 fill-current"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">1</span>
						</div>
						<img class="w-6 h-6 ml-auto rounded-full" src='https://randomuser.me/api/portraits/women/26.jpg'/>
					</div>
				</div>
				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<button class="absolute top-0 right-0 flex items-center justify-center hidden w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
						<svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
						</svg>
					</button>
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-green-500 bg-green-100 rounded-full">Dev</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
					<div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
						<div class="flex items-center">
							<svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">Dec 12</span>
						</div>
						<div class="relative flex items-center ml-4">
							<svg class="relative w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">4</span>
						</div>
						<div class="flex items-center ml-4">
							<svg class="w-4 h-4 text-gray-300 fill-current"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">1</span>
						</div>
						<img class="w-6 h-6 ml-auto rounded-full" src='https://randomuser.me/api/portraits/women/44.jpg'/>
					</div>
				</div>
				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<button class="absolute top-0 right-0 flex items-center justify-center hidden w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
						<svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
						</svg>
					</button>
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-green-500 bg-green-100 rounded-full">Dev</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
					<div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
						<div class="flex items-center">
							<svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">Dec 12</span>
						</div>
						<div class="relative flex items-center ml-4">
							<svg class="relative w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">4</span>
						</div>
						<div class="flex items-center ml-4">
							<svg class="w-4 h-4 text-gray-300 fill-current"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">1</span>
						</div>
						<img class="w-6 h-6 ml-auto rounded-full" src='https://randomuser.me/api/portraits/men/46.jpg'/>
					</div>
				</div>
				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<button class="absolute top-0 right-0 flex items-center justify-center hidden w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
						<svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
						</svg>
					</button>
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-yellow-500 bg-yellow-100 rounded-full">Copywriting</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
					<div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
						<div class="flex items-center">
							<svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">Dec 12</span>
						</div>
						<div class="relative flex items-center ml-4">
							<svg class="relative w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">4</span>
						</div>
						<div class="flex items-center ml-4">
							<svg class="w-4 h-4 text-gray-300 fill-current"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">1</span>
						</div>
						<img class="w-6 h-6 ml-auto rounded-full" src='https://uifaces.co/our-content/donated/vIqzOHXj.jpg'/>
					</div>
				</div>
				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<button class="absolute top-0 right-0 flex items-center justify-center hidden w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
						<svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
						</svg>
					</button>
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-green-500 bg-green-100 rounded-full">Dev</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
					<div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
						<div class="flex items-center">
							<svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">Dec 12</span>
						</div>
						<div class="relative flex items-center ml-4">
							<svg class="relative w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">4</span>
						</div>
						<div class="flex items-center ml-4">
							<svg class="w-4 h-4 text-gray-300 fill-current"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">1</span>
						</div>
						<img class="w-6 h-6 ml-auto rounded-full" src='https://randomuser.me/api/portraits/women/48.jpg'/>
					</div>
				</div>
				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<button class="absolute top-0 right-0 flex items-center justify-center hidden w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
						<svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
						</svg>
					</button>
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-yellow-500 bg-yellow-100 rounded-full">Copywriting</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
					<div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
						<div class="flex items-center">
							<svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">Dec 12</span>
						</div>
						<div class="relative flex items-center ml-4">
							<svg class="relative w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">4</span>
						</div>
						<div class="flex items-center ml-4">
							<svg class="w-4 h-4 text-gray-300 fill-current"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">1</span>
						</div>
						<img class="w-6 h-6 ml-auto rounded-full" src='https://randomuser.me/api/portraits/women/26.jpg'/>
					</div>
				</div>
			</div>
		</div>
		<div class="flex flex-col flex-shrink-0 w-72">
			<div class="flex items-center flex-shrink-0 h-10 px-2">
				<span class="block text-sm font-semibold">Ready</span>
				<span class="flex items-center justify-center w-5 h-5 ml-2 text-sm font-semibold text-indigo-500 bg-white rounded bg-opacity-30">3</span>
				<button class="flex items-center justify-center w-6 h-6 ml-auto text-indigo-500 rounded hover:bg-indigo-500 hover:text-indigo-100">
					<svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
					</svg>
				</button>
			</div>
			<div class="flex flex-col pb-2 overflow-auto">
				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<button class="absolute top-0 right-0 flex items-center justify-center hidden w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
						<svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
						</svg>
					</button>
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Design</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
					<div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
						<div class="flex items-center">
							<svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">Dec 12</span>
						</div>
						<div class="relative flex items-center ml-4">
							<svg class="relative w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">4</span>
						</div>
						<div class="flex items-center ml-4">
							<svg class="w-4 h-4 text-gray-300 fill-current"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">1</span>
						</div>
						<img class="w-6 h-6 ml-auto rounded-full" src='https://randomuser.me/api/portraits/women/26.jpg'/>
					</div>
				</div>
				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<button class="absolute top-0 right-0 flex items-center justify-center hidden w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
						<svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
						</svg>
					</button>
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-green-500 bg-green-100 rounded-full">Dev</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
					<div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
						<div class="flex items-center">
							<svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">Dec 12</span>
						</div>
						<div class="relative flex items-center ml-4">
							<svg class="relative w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">4</span>
						</div>
						<div class="flex items-center ml-4">
							<svg class="w-4 h-4 text-gray-300 fill-current"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">1</span>
						</div>
						<img class="w-6 h-6 ml-auto rounded-full" src='https://randomuser.me/api/portraits/men/64.jpg'/>
					</div>
				</div>
				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<button class="absolute top-0 right-0 flex items-center justify-center hidden w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
						<svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
						</svg>
					</button>
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Design</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
					<div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
						<div class="flex items-center">
							<svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">Dec 12</span>
						</div>
						<div class="relative flex items-center ml-4">
							<svg class="relative w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">4</span>
						</div>
						<div class="flex items-center ml-4">
							<svg class="w-4 h-4 text-gray-300 fill-current"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">1</span>
						</div>
						<img class="w-6 h-6 ml-auto rounded-full" src='https://randomuser.me/api/portraits/women/26.jpg'/>
					</div>
				</div>
			</div>
		</div>
		<div class="flex flex-col flex-shrink-0 w-72">
			<div class="flex items-center flex-shrink-0 h-10 px-2">
				<span class="block text-sm font-semibold">Doing</span>
				<span class="flex items-center justify-center w-5 h-5 ml-2 text-sm font-semibold text-indigo-500 bg-white rounded bg-opacity-30">2</span>
				<button class="flex items-center justify-center w-6 h-6 ml-auto text-indigo-500 rounded hover:bg-indigo-500 hover:text-indigo-100">
					<svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
					</svg>
				</button>
			</div>
			<div class="flex flex-col pb-2 overflow-auto">
				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<button class="absolute top-0 right-0 flex items-center justify-center hidden w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
						<svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
						</svg>
					</button>
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Design</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
					<div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
						<div class="flex items-center">
							<svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">Dec 12</span>
						</div>
						<div class="relative flex items-center ml-4">
							<svg class="relative w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">4</span>
						</div>
						<div class="flex items-center ml-4">
							<svg class="w-4 h-4 text-gray-300 fill-current"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">1</span>
						</div>
						<img class="w-6 h-6 ml-auto rounded-full" src='https://randomuser.me/api/portraits/women/26.jpg'/>
					</div>
				</div>
				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<button class="absolute top-0 right-0 flex items-center justify-center hidden w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
						<svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
						</svg>
					</button>
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-green-500 bg-green-100 rounded-full">Dev</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
					<div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
						<div class="flex items-center">
							<svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">Dec 12</span>
						</div>
						<div class="relative flex items-center ml-4">
							<svg class="relative w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">4</span>
						</div>
						<div class="flex items-center ml-4">
							<svg class="w-4 h-4 text-gray-300 fill-current"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">1</span>
						</div>
						<img class="w-6 h-6 ml-auto rounded-full" src='https://randomuser.me/api/portraits/men/64.jpg'/>
					</div>
				</div>
			</div>
		</div>
		<div class="flex flex-col flex-shrink-0 w-72">
			<div class="flex items-center flex-shrink-0 h-10 px-2">
				<span class="block text-sm font-semibold">Review</span>
				<span class="flex items-center justify-center w-5 h-5 ml-2 text-sm font-semibold text-indigo-500 bg-white rounded bg-opacity-30">3</span>
				<button class="flex items-center justify-center w-6 h-6 ml-auto text-indigo-500 rounded hover:bg-indigo-500 hover:text-indigo-100">
					<svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
					</svg>
				</button>
			</div>
			<div class="flex flex-col pb-2 overflow-auto">
				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<button class="absolute top-0 right-0 flex items-center justify-center hidden w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
						<svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
						</svg>
					</button>
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-green-500 bg-green-100 rounded-full">Dev</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
					<div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
						<div class="flex items-center">
							<svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">Dec 12</span>
						</div>
						<div class="relative flex items-center ml-4">
							<svg class="relative w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">4</span>
						</div>
						<div class="flex items-center ml-4">
							<svg class="w-4 h-4 text-gray-300 fill-current"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">1</span>
						</div>
						<img class="w-6 h-6 ml-auto rounded-full" src='https://randomuser.me/api/portraits/men/64.jpg'/>
					</div>
				</div>
				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<button class="absolute top-0 right-0 flex items-center justify-center hidden w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
						<svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
						</svg>
					</button>
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-yellow-500 bg-yellow-100 rounded-full">Copywriting</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
					<div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
						<div class="flex items-center">
							<svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">Dec 12</span>
						</div>
						<div class="relative flex items-center ml-4">
							<svg class="relative w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">4</span>
						</div>
						<div class="flex items-center ml-4">
							<svg class="w-4 h-4 text-gray-300 fill-current"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">1</span>
						</div>
						<img class="w-6 h-6 ml-auto rounded-full" src='https://randomuser.me/api/portraits/women/44.jpg'/>
					</div>
				</div>
				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<button class="absolute top-0 right-0 flex items-center justify-center hidden w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
						<svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
						</svg>
					</button>
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Design</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
					<div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
						<div class="flex items-center">
							<svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">Dec 12</span>
						</div>
						<div class="relative flex items-center ml-4">
							<svg class="relative w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">4</span>
						</div>
						<div class="flex items-center ml-4">
							<svg class="w-4 h-4 text-gray-300 fill-current"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">1</span>
						</div>
						<img class="w-6 h-6 ml-auto rounded-full" src='https://randomuser.me/api/portraits/women/44.jpg'/>
					</div>
				</div>
			</div>
		</div>
		<div class="flex flex-col flex-shrink-0 w-72">
			<div class="flex items-center flex-shrink-0 h-10 px-2">
				<span class="block text-sm font-semibold">Blocked</span>
				<span class="flex items-center justify-center w-5 h-5 ml-2 text-sm font-semibold text-indigo-500 bg-white rounded bg-opacity-30">1</span>
				<button class="flex items-center justify-center w-6 h-6 ml-auto text-indigo-500 rounded hover:bg-indigo-500 hover:text-indigo-100">
					<svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
					</svg>
				</button>
			</div>
			<div class="flex flex-col pb-2 overflow-auto">
				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<button class="absolute top-0 right-0 flex items-center justify-center hidden w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
						<svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
						</svg>
					</button>
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Design</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
					<div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
						<div class="flex items-center">
							<svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">Dec 12</span>
						</div>
						<div class="relative flex items-center ml-4">
							<svg class="relative w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">4</span>
						</div>
						<div class="flex items-center ml-4">
							<svg class="w-4 h-4 text-gray-300 fill-current"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">1</span>
						</div>
						<img class="w-6 h-6 ml-auto rounded-full" src='https://randomuser.me/api/portraits/women/26.jpg'/>
					</div>
				</div>
			</div>
		</div>
		<div class="flex flex-col flex-shrink-0 w-72">
			<div class="flex items-center flex-shrink-0 h-10 px-2">
				<span class="block text-sm font-semibold">Done</span>
				<span class="flex items-center justify-center w-5 h-5 ml-2 text-sm font-semibold text-indigo-500 bg-white rounded bg-opacity-30">3</span>
				<button class="flex items-center justify-center w-6 h-6 ml-auto text-indigo-500 rounded hover:bg-indigo-500 hover:text-indigo-100">
					<svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
					</svg>
				</button>
			</div>
			<div class="flex flex-col pb-2 overflow-auto">
				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<button class="absolute top-0 right-0 flex items-center justify-center hidden w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
						<svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
						</svg>
					</button>
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-yellow-500 bg-yellow-100 rounded-full">Copywriting</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
					<div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
						<div class="flex items-center">
							<svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">Dec 12</span>
						</div>
						<div class="relative flex items-center ml-4">
							<svg class="relative w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">4</span>
						</div>
						<div class="flex items-center ml-4">
							<svg class="w-4 h-4 text-gray-300 fill-current"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">1</span>
						</div>
						<img class="w-6 h-6 ml-auto rounded-full" src='https://randomuser.me/api/portraits/women/26.jpg'/>
					</div>
				</div>
				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<button class="absolute top-0 right-0 flex items-center justify-center hidden w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
						<svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
						</svg>
					</button>
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-yellow-500 bg-yellow-100 rounded-full">Copywriting</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
					<div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
						<div class="flex items-center">
							<svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">Dec 12</span>
						</div>
						<div class="relative flex items-center ml-4">
							<svg class="relative w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">4</span>
						</div>
						<div class="flex items-center ml-4">
							<svg class="w-4 h-4 text-gray-300 fill-current"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">1</span>
						</div>
						<img class="w-6 h-6 ml-auto rounded-full" src='https://randomuser.me/api/portraits/women/44.jpg'/>
					</div>
				</div>
				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<button class="absolute top-0 right-0 flex items-center justify-center hidden w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
						<svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
						</svg>
					</button>
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Design</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
					<div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
						<div class="flex items-center">
							<svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">Dec 12</span>
						</div>
						<div class="relative flex items-center ml-4">
							<svg class="relative w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">4</span>
						</div>
						<div class="flex items-center ml-4">
							<svg class="w-4 h-4 text-gray-300 fill-current"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">1</span>
						</div>
						<img class="w-6 h-6 ml-auto rounded-full" src='https://randomuser.me/api/portraits/men/46.jpg'/>
					</div>
				</div>
				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<button class="absolute top-0 right-0 flex items-center justify-center hidden w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
						<svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
						</svg>
					</button>
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Design</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
					<div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
						<div class="flex items-center">
							<svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">Dec 12</span>
						</div>
						<div class="relative flex items-center ml-4">
							<svg class="relative w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">4</span>
						</div>
						<div class="flex items-center ml-4">
							<svg class="w-4 h-4 text-gray-300 fill-current"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">1</span>
						</div>
						<img class="w-6 h-6 ml-auto rounded-full" src='https://randomuser.me/api/portraits/men/46.jpg'/>
					</div>
				</div>
				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<button class="absolute top-0 right-0 flex items-center justify-center hidden w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
						<svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
						</svg>
					</button>
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-green-500 bg-green-100 rounded-full">Dev</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
					<div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
						<div class="flex items-center">
							<svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">Dec 12</span>
						</div>
						<div class="relative flex items-center ml-4">
							<svg class="relative w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">4</span>
						</div>
						<div class="flex items-center ml-4">
							<svg class="w-4 h-4 text-gray-300 fill-current"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
							</svg>
							<span class="ml-1 leading-none">1</span>
						</div>
						<img class="w-6 h-6 ml-auto rounded-full" src='https://randomuser.me/api/portraits/women/26.jpg'/>
					</div>
				</div>
			</div>
		</div>
		<div class="flex-shrink-0 w-6"></div>
	</div>




</div>
<!-- Component End -->

<a class="fixed bottom-0 right-0 flex items-center justify-center h-8 pl-1 pr-2 mb-6 mr-4 text-blue-100 bg-blue-600 rounded-full shadow-lg hover:bg-blue-600" href="https://twitter.com/lofiui" target="_top">
	<div class="flex items-center justify-center w-6 h-6 bg-blue-500 rounded-full">
		<svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" class="r-jwli3a r-4qtqp9 r-yyyyoo r-16y2uox r-1q142lx r-8kz0gk r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1srniue"><g><path d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z"></path></g></svg>
	</div>
	<span class="ml-1 text-sm leading-none">@lofiui</span>
</a>

<header class="text-gray-700 body-font border-b border-gray-200">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="https://tailblocks.cc" target="_blank">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">TAILBLOCKS</span>
      </a>
      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
        <a class="mr-5 hover:text-gray-900">First Link</a>
        <a class="mr-5 hover:text-gray-900">Second Link</a>
        <a class="mr-5 hover:text-gray-900">Third Link</a>
        <a class="mr-5 hover:text-gray-900">Fourth Link</a>
      </nav>
      <button class="inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0">Button
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </button>
    </div>
  </header>
  <section class="text-gray-700 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Before they sold out
          <br class="hidden lg:inline-block">readymade gluten
        </h1>
        <p class="mb-8 leading-relaxed">Copper mug try-hard pitchfork pour-over freegan heirloom neutra air plant cold-pressed tacos poke beard tote bag. Heirloom echo park mlkshk tote bag selvage hot chicken authentic tumeric truffaut hexagon try-hard chambray.</p>
        <div class="flex justify-center">
          <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
          <button class="ml-4 inline-flex text-gray-700 bg-gray-200 border-0 py-2 px-6 focus:outline-none hover:bg-gray-300 rounded text-lg">Button</button>
        </div>
      </div>
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
        <img class="object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600/edf2f7/a5afbd">
      </div>
    </div>
  </section>
  <section class="text-gray-700 body-font border-t border-gray-200">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">ROOF PARTY POLAROID</h2>
        <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">Master Cleanse Reliac Heirloom</h1>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="p-4 md:w-1/3">
          <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
            <div class="flex items-center mb-3">
              <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                </svg>
              </div>
              <h2 class="text-gray-900 text-lg title-font font-medium">Shooting Stars</h2>
            </div>
            <div class="flex-grow">
              <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
              <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/3">
          <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
            <div class="flex items-center mb-3">
              <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg>
              </div>
              <h2 class="text-gray-900 text-lg title-font font-medium">The Catalyzer</h2>
            </div>
            <div class="flex-grow">
              <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
              <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/3">
          <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
            <div class="flex items-center mb-3">
              <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <circle cx="6" cy="6" r="3"></circle>
                  <circle cx="6" cy="18" r="3"></circle>
                  <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                </svg>
              </div>
              <h2 class="text-gray-900 text-lg title-font font-medium">Neptune</h2>
            </div>
            <div class="flex-grow">
              <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
              <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="text-gray-700 body-font border-t border-gray-200">
    <div class="container px-5 py-24 mx-auto flex flex-wrap">
      <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
        <img alt="feature" class="object-cover object-center h-full w-full" src="https://dummyimage.com/600x600/edf2f7/a5afbd">
      </div>
      <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
        <div class="flex flex-col mb-10 lg:items-start items-center">
          <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
              <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
            </svg>
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Shooting Stars</h2>
            <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
            <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
        <div class="flex flex-col mb-10 lg:items-start items-center">
          <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
              <circle cx="6" cy="6" r="3"></circle>
              <circle cx="6" cy="18" r="3"></circle>
              <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
            </svg>
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">The Catalyzer</h2>
            <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
            <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
        <div class="flex flex-col mb-10 lg:items-start items-center">
          <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Neptune</h2>
            <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
            <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="text-gray-700 body-font border-t border-gray-200">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Pitchfork Kickstarter Taxidermy</h1>
        <p class="lg:w-1/2 w-full leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table.</p>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="xl:w-1/3 md:w-1/2 p-4">
          <div class="border border-gray-300 p-6 rounded-lg">
            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
              </svg>
            </div>
            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Shooting Stars</h2>
            <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
          </div>
        </div>
        <div class="xl:w-1/3 md:w-1/2 p-4">
          <div class="border border-gray-300 p-6 rounded-lg">
            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                <circle cx="6" cy="6" r="3"></circle>
                <circle cx="6" cy="18" r="3"></circle>
                <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
              </svg>
            </div>
            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">The Catalyzer</h2>
            <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
          </div>
        </div>
        <div class="xl:w-1/3 md:w-1/2 p-4">
          <div class="border border-gray-300 p-6 rounded-lg">
            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg>
            </div>
            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Neptune</h2>
            <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
          </div>
        </div>
        <div class="xl:w-1/3 md:w-1/2 p-4">
          <div class="border border-gray-300 p-6 rounded-lg">
            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1zM4 22v-7"></path>
              </svg>
            </div>
            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Melanchole</h2>
            <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
          </div>
        </div>
        <div class="xl:w-1/3 md:w-1/2 p-4">
          <div class="border border-gray-300 p-6 rounded-lg">
            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
              </svg>
            </div>
            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Bunker</h2>
            <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
          </div>
        </div>
        <div class="xl:w-1/3 md:w-1/2 p-4">
          <div class="border border-gray-300 p-6 rounded-lg">
            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
              </svg>
            </div>
            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Ramona Falls</h2>
            <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
          </div>
        </div>
      </div>
      <button class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
    </div>
  </section>
  <section class="text-gray-700 body-font border-t border-gray-200">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Our Team</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them.</p>
      </div>
      <div class="flex flex-wrap -m-2">
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/80x80/edf2f7/a5afbd">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Holden Caulfield</h2>
              <p class="text-gray-500">UI Designer</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/84x84/edf2f7/a5afbd">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Henry Letham</h2>
              <p class="text-gray-500">CTO</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/88x88/edf2f7/a5afbd">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Oskar Blinde</h2>
              <p class="text-gray-500">Founder</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/90x90/edf2f7/a5afbd">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">John Doe</h2>
              <p class="text-gray-500">DevOps</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/94x94/edf2f7/a5afbd">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Martin Eden</h2>
              <p class="text-gray-500">Software Engineer</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/98x98/edf2f7/a5afbd">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Boris Kitua</h2>
              <p class="text-gray-500">UX Researcher</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/100x90/edf2f7/a5afbd">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Atticus Finch</h2>
              <p class="text-gray-500">QA Engineer</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/104x94/edf2f7/a5afbd">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Alper Kamu</h2>
              <p class="text-gray-500">System</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/108x98/edf2f7/a5afbd">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Rodrigo Monchi</h2>
              <p class="text-gray-500">Product Manager</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="text-gray-700 body-font overflow-hidden border-t border-gray-200">
    <div class="container px-5 py-24 mx-auto flex flex-wrap">
      <div class="lg:w-1/4 mt-48 hidden lg:block">
        <div class="mt-px border-t border-gray-300 border-b border-l rounded-tl-lg rounded-bl-lg overflow-hidden">
          <p class="bg-gray-100 text-gray-900 h-12 text-center px-4 flex items-center justify-start -mt-px">Fingerstache disrupt</p>
          <p class="text-gray-900 h-12 text-center px-4 flex items-center justify-start">Franzen hashtag</p>
          <p class="bg-gray-100 text-gray-900 h-12 text-center px-4 flex items-center justify-start">Tilde art party</p>
          <p class="text-gray-900 h-12 text-center px-4 flex items-center justify-start">Banh mi cornhole</p>
          <p class="bg-gray-100 text-gray-900 h-12 text-center px-4 flex items-center justify-start">Waistcoat squid hexagon</p>
          <p class="text-gray-900 h-12 text-center px-4 flex items-center justify-start">Pinterest occupy authentic</p>
          <p class="bg-gray-100 text-gray-900 h-12 text-center px-4 flex items-center justify-start">Brooklyn helvetica</p>
          <p class="text-gray-900 h-12 text-center px-4 flex items-center justify-start">Long Feature Two</p>
          <p class="bg-gray-100 text-gray-900 h-12 text-center px-4 flex items-center justify-start">Feature One</p>
        </div>
      </div>
      <div class="flex lg:w-3/4 w-full flex-wrap lg:border border-gray-300 rounded-lg">
        <div class="lg:w-1/3 lg:mt-px w-full mb-10 lg:mb-0 border-2 border-gray-300 lg:border-none rounded-lg lg:rounded-none">
          <div class="px-2 text-center h-48 flex flex-col items-center justify-center">
            <h3 class="tracking-widest">START</h3>
            <h2 class="text-5xl text-gray-900 font-medium leading-none mb-4 mt-2">Free</h2>
            <span class="text-sm text-gray-600">Next 3 months</span>
          </div>
          <p class="bg-gray-100 text-gray-600 h-12 text-center px-2 flex items-center -mt-px justify-center border-t border-gray-300">Schlitz single-origin</p>
          <p class="text-gray-600 text-center h-12 flex items-center justify-center">
            <span class="w-5 h-5 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>
          </p>
          <p class="bg-gray-100 text-gray-600 text-center h-12 flex items-center justify-center">
            <span class="w-5 h-5 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>
          </p>
          <p class="h-12 text-gray-600 px-6 text-center leading-relaxed flex items-center justify-center">Feature</p>
          <p class="bg-gray-100 text-gray-600 text-center h-12 flex items-center justify-center">
            <span class="w-5 h-5 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>
          </p>
          <p class="text-gray-600 text-center h-12 flex items-center justify-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" class="w-5 h-5 text-gray-500" viewBox="0 0 24 24">
              <path d="M18 6L6 18M6 6l12 12"></path>
            </svg>
          </p>
          <p class="bg-gray-100 text-gray-600 text-center h-12 flex items-center justify-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" class="w-5 h-5 text-gray-500" viewBox="0 0 24 24">
              <path d="M18 6L6 18M6 6l12 12"></path>
            </svg>
          </p>
          <p class="text-gray-600 text-center h-12 flex items-center justify-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" class="w-5 h-5 text-gray-500" viewBox="0 0 24 24">
              <path d="M18 6L6 18M6 6l12 12"></path>
            </svg>
          </p>
          <p class="bg-gray-100 text-gray-600 text-center h-12 flex items-center justify-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" class="w-5 h-5 text-gray-500" viewBox="0 0 24 24">
              <path d="M18 6L6 18M6 6l12 12"></path>
            </svg>
          </p>
          <div class="border-t border-gray-300 p-6 text-center rounded-bl-lg">
            <button class="flex items-center mt-auto text-white bg-indigo-500 border-0 py-2 px-4 w-full focus:outline-none hover:bg-indigo-600 rounded">Button
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </button>
            <p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.</p>
          </div>
        </div>
        <div class="lg:w-1/3 lg:-mt-px w-full mb-10 lg:mb-0 border-2 rounded-lg border-indigo-500 relative">
          <span class="bg-indigo-500 text-white px-3 py-1 tracking-widest text-xs absolute right-0 top-0 rounded-bl">POPULAR</span>
          <div class="px-2 text-center h-48 flex flex-col items-center justify-center">
            <h3 class="tracking-widest">PRO</h3>
            <h2 class="text-5xl text-gray-900 font-medium flex items-center justify-center leading-none mb-4 mt-2">$38
              <span class="text-gray-600 text-base ml-1">/mo</span>
            </h2>
            <span class="text-sm text-gray-600">Charging $456 per year</span>
          </div>
          <p class="bg-gray-100 text-gray-600 h-12 text-center px-2 flex items-center -mt-px justify-center border-t border-gray-300">Schlitz single-origin</p>
          <p class="text-gray-600 text-center h-12 flex items-center justify-center">
            <span class="w-5 h-5 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>
          </p>
          <p class="bg-gray-100 text-gray-600 text-center h-12 flex items-center justify-center">
            <span class="w-5 h-5 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>
          </p>
          <p class="h-12 text-gray-600 text-center leading-relaxed flex items-center justify-center">Feature</p>
          <p class="bg-gray-100 text-gray-600 text-center h-12 flex items-center justify-center">
            <span class="w-5 h-5 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>
          </p>
          <p class="text-gray-600 text-center h-12 flex items-center justify-center">
            <span class="w-5 h-5 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>
          </p>
          <p class="bg-gray-100 text-gray-600 text-center h-12 flex items-center justify-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" class="w-5 h-5 text-gray-500" viewBox="0 0 24 24">
              <path d="M18 6L6 18M6 6l12 12"></path>
            </svg>
          </p>
          <p class="text-gray-600 text-center h-12 flex items-center justify-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" class="w-5 h-5 text-gray-500" viewBox="0 0 24 24">
              <path d="M18 6L6 18M6 6l12 12"></path>
            </svg>
          </p>
          <p class="bg-gray-100 text-gray-600 text-center h-12 flex items-center justify-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" class="w-5 h-5 text-gray-500" viewBox="0 0 24 24">
              <path d="M18 6L6 18M6 6l12 12"></path>
            </svg>
          </p>
          <div class="p-6 text-center border-t border-gray-300">
            <button class="flex items-center mt-auto text-white bg-indigo-500 border-0 py-2 px-4 w-full focus:outline-none hover:bg-indigo-600 rounded">Button
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </button>
            <p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.</p>
          </div>
        </div>
        <div class="lg:w-1/3 w-full lg:mt-px border-2 border-gray-300 lg:border-none rounded-lg lg:rounded-none">
          <div class="px-2 text-center h-48 flex flex-col items-center justify-center">
            <h3 class="tracking-widest">BUSINESS</h3>
            <h2 class="text-5xl text-gray-900 font-medium flex items-center justify-center leading-none mb-4 mt-2">$54
              <span class="text-gray-600 text-base ml-1">/mo</span>
            </h2>
            <span class="text-sm text-gray-600">Charging $648 per year</span>
          </div>
          <p class="bg-gray-100 text-gray-600 h-12 text-center px-2 flex items-center -mt-px justify-center border-t border-gray-300">Schlitz single-origin</p>
          <p class="text-gray-600 text-center h-12 flex items-center justify-center">
            <span class="w-5 h-5 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>
          </p>
          <p class="bg-gray-100 text-gray-600 text-center h-12 flex items-center justify-center">
            <span class="w-5 h-5 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>
          </p>
          <p class="h-12 text-gray-600 text-center leading-relaxed flex items-center justify-center">Feature</p>
          <p class="bg-gray-100 text-gray-600 text-center h-12 flex items-center justify-center">
            <span class="w-5 h-5 inline-flex items-center justify-center bg-gray-500 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>
          </p>
          <p class="text-gray-600 text-center h-12 flex items-center justify-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" class="w-5 h-5 text-gray-500" viewBox="0 0 24 24">
              <path d="M18 6L6 18M6 6l12 12"></path>
            </svg>
          </p>
          <p class="bg-gray-100 text-gray-600 text-center h-12 flex items-center justify-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" class="w-5 h-5 text-gray-500" viewBox="0 0 24 24">
              <path d="M18 6L6 18M6 6l12 12"></path>
            </svg>
          </p>
          <p class="text-gray-600 text-center h-12 flex items-center justify-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" class="w-5 h-5 text-gray-500" viewBox="0 0 24 24">
              <path d="M18 6L6 18M6 6l12 12"></path>
            </svg>
          </p>
          <p class="bg-gray-100 text-gray-600 text-center h-12 flex items-center justify-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" class="w-5 h-5 text-gray-500" viewBox="0 0 24 24">
              <path d="M18 6L6 18M6 6l12 12"></path>
            </svg>
          </p>
          <div class="p-6 text-center border-t border-gray-300">
            <button class="flex items-center mt-auto text-white bg-indigo-500 border-0 py-2 px-4 w-full focus:outline-none hover:bg-indigo-600 rounded">Button
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </button>
            <p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="text-gray-700 body-font border-t border-gray-200">
    <div class="container px-5 py-24 mx-auto">
      <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-gray-400 mb-8" viewBox="0 0 975.036 975.036">
          <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
        </svg>
        <p class="leading-relaxed text-lg">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware. Man bun next level coloring book skateboard four loko knausgaard. Kitsch keffiyeh master cleanse direct trade indigo juice before they sold out gentrify plaid gastropub normcore XOXO 90's pickled cindigo jean shorts. Slow-carb next level shoindigoitch ethical authentic, yr scenester sriracha forage franzen organic drinking vinegar.</p>
        <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-8 mb-6"></span>
        <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">HOLDEN CAULFIELD</h2>
        <p class="text-gray-500">Senior Product Designer</p>
      </div>
    </div>
  </section>
  <section class="text-gray-700 body-font relative">
    <div class="absolute inset-0 bg-gray-300">
      <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=%C4%B0zmir+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
    </div>
    <div class="container px-5 py-24 mx-auto flex">
      <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10">
        <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
        <p class="leading-relaxed mb-5 text-gray-600">Post-ironic portland shabby chic echo park, banjo fashion axe</p>
        <input class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4" placeholder="Email" type="email">
        <textarea class="bg-white rounded border border-gray-400 focus:outline-none h-32 focus:border-indigo-500 text-base px-4 py-2 mb-4 resize-none" placeholder="Message"></textarea>
        <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
        <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
      </div>
    </div>
  </section>
  <footer class="text-gray-700 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap md:text-left text-center -mb-10 -mx-4">
        <div class="lg:w-1/6 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">First Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Second Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Third Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/6 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">First Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Second Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Third Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/6 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">First Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Second Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Third Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/6 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">First Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Second Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Third Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/6 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">First Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Second Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Third Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/6 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">First Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Second Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Third Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
            </li>
          </nav>
        </div>
      </div>
    </div>
    <div class="border-t border-gray-200">
      <div class="container px-5 py-8 flex flex-wrap mx-auto items-center">
        <div class="flex md:flex-no-wrap flex-wrap justify-center md:justify-start">
          <input class="sm:w-64 w-40 bg-gray-100 rounded sm:mr-4 mr-2 border border-gray-400 focus:outline-none focus:border-indigo-500 text-base py-2 px-4" placeholder="Placeholder" type="text">
          <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Button</button>
          <p class="text-gray-500 text-sm md:ml-6 md:mt-0 mt-2 sm:text-left text-center">Bitters chicharrones fanny pack
            <br class="lg:block hidden">waistcoat green juice
          </p>
        </div>
        <span class="inline-flex lg:ml-auto lg:mt-0 mt-6 w-full justify-center md:justify-start md:w-auto">
          <a class="text-gray-500">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
              <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
              <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
          </a>
        </span>
      </div>
    </div>
    <div class="bg-gray-200">
      <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
        <p class="text-gray-500 text-sm text-center sm:text-left">© 2020 Tailwind Blocks —
          <a href="https://twitter.com/knyttneve" class="text-gray-600 ml-1" target="_blank" rel="noopener noreferrer">@knyttneve</a>
        </p>
        <span class="sm:ml-auto sm:mt-0 mt-2 sm:w-auto w-full sm:text-left text-center text-gray-500 text-sm">Enamel pin tousled raclette tacos irony</span>
      </div>
    </div>
  </footer>
  <a href="https://github.com/mertJF/tailblocks" class="rounded-full w-12 h-12 bg-gray-100 fixed bottom-0 right-0 flex items-center justify-center text-gray-800 mr-8 mb-8 shadow-sm border-gray-300 border" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
    </svg></a>




<!-- This is an example component -->
<div class="bg-white relative">

    <nav class="bg-white fixed top-0 shadow-lg w-full">
        <div class="px-4 mx-auto">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                        <div class="justify-center hover:text-blue-500 hover:bg-blue-100 rounded-full p-2 text-center">

                            <svg class="w-4 h-4 mx-auto"  xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 477.867 477.867"><path fill-rule="evenodd" d="M119.467 0h-102.4C7.641 0 0 7.641 0 17.067v102.4c0 9.426 7.641 17.067 17.067 17.067h102.4c9.426 0 17.067-7.641 17.067-17.067v-102.4C136.533 7.641 128.892 0 119.467 0zM102.4 102.4H34.133V34.133H102.4V102.4zM290.133 0h-102.4c-9.426 0-17.067 7.641-17.067 17.067v102.4c0 9.426 7.641 17.067 17.067 17.067h102.4c9.426 0 17.067-7.641 17.067-17.067v-102.4C307.2 7.641 299.559 0 290.133 0zm-17.066 102.4H204.8V34.133h68.267V102.4zM460.8 0H358.4c-9.426 0-17.067 7.641-17.067 17.067v102.4c0 9.426 7.641 17.067 17.067 17.067h102.4c9.426 0 17.067-7.641 17.067-17.067v-102.4C477.867 7.641 470.226 0 460.8 0zm-17.067 102.4h-68.267V34.133h68.267V102.4zM119.467 170.667h-102.4C7.641 170.667 0 178.308 0 187.733v102.4c0 9.426 7.641 17.067 17.067 17.067h102.4c9.426 0 17.067-7.641 17.067-17.067v-102.4c-.001-9.425-7.642-17.066-17.067-17.066zm-17.067 102.4H34.133V204.8H102.4v68.267zM290.133 170.667h-102.4c-9.426 0-17.067 7.641-17.067 17.067v102.4c0 9.426 7.641 17.067 17.067 17.067h102.4c9.426 0 17.067-7.641 17.067-17.067v-102.4c0-9.426-7.641-17.067-17.067-17.067zm-17.066 102.4H204.8V204.8h68.267v68.267zM460.8 170.667H358.4c-9.426 0-17.067 7.641-17.067 17.067v102.4c0 9.426 7.641 17.067 17.067 17.067h102.4c9.426 0 17.067-7.641 17.067-17.067v-102.4c0-9.426-7.641-17.067-17.067-17.067zm-17.067 102.4h-68.267V204.8h68.267v68.267zM119.467 341.333h-102.4C7.641 341.333 0 348.974 0 358.4v102.4c0 9.426 7.641 17.067 17.067 17.067h102.4c9.426 0 17.067-7.641 17.067-17.067V358.4c-.001-9.426-7.642-17.067-17.067-17.067zm-17.067 102.4H34.133v-68.267H102.4v68.267zM290.133 341.333h-102.4c-9.426 0-17.067 7.641-17.067 17.067v102.4c0 9.426 7.641 17.067 17.067 17.067h102.4c9.426 0 17.067-7.641 17.067-17.067V358.4c0-9.426-7.641-17.067-17.067-17.067zm-17.066 102.4H204.8v-68.267h68.267v68.267zM460.8 341.333H358.4c-9.426 0-17.067 7.641-17.067 17.067v102.4c0 9.426 7.641 17.067 17.067 17.067h102.4c9.426 0 17.067-7.641 17.067-17.067V358.4c0-9.426-7.641-17.067-17.067-17.067zm-17.067 102.4h-68.267v-68.267h68.267v68.267z"/></svg>

                        </div>
                    <div class="flex px-2 py-1 self-center text-sm font-medium text-gray-800 antialiased rounded-md focus:outline-none hover:bg-blue-100 hover:text-blue-500 focus:bg-blue-100">
                        <div class="justify-center mt-1 mr-1">
                            <img class="h-5 w-5" src="https://biltrax.atlassian.net/s/-egccmf/b/23/b6b48b2829824b869586ac216d119363/_/favicon-software.ico">
                        </div>
                        <div class="justify-center text-xl font-semibold text-center">
                            Jira Software
                        </div>
                    </div>

                    <div class="hidden md:block">
                        <div class="flex items-center ml-3 ">
                            <a href="#" class="px-3 py-1 ml-2 self-center text-sm font-medium text-gray-800 antialiased rounded-md focus:outline-none hover:bg-blue-100 hover:text-blue-500 focus:bg-blue-100">Your work
                            </a>
                            <div class="flex px-3 py-1 ml-2 self-center text-sm font-medium text-gray-800 antialiased rounded-md focus:outline-none bg-blue-100 text-blue-500 focus:bg-blue-100">
                                <a href="#" class="">Projects</a>
                                <svg class="h-4 w-4 mt-1 ml-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4.516 7.548c.436-.446 1.043-.481 1.576 0L10 11.295l3.908-3.747c.533-.481 1.141-.446 1.574 0 .436.445.408 1.197 0 1.615-.406.418-4.695 4.502-4.695 4.502a1.095 1.095 0 01-1.576 0S4.924 9.581 4.516 9.163c-.409-.418-.436-1.17 0-1.615z"/>
                                </svg>
                            </div>
                            <div class="flex px-3 py-1 ml-2 self-center text-sm font-medium text-gray-800 antialiased rounded-md focus:outline-none hover:bg-blue-100 hover:text-blue-500 focus:bg-blue-100">
                                <a href="#" class="">Filters</a>
                                <svg class="h-4 w-4 mt-1 ml-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4.516 7.548c.436-.446 1.043-.481 1.576 0L10 11.295l3.908-3.747c.533-.481 1.141-.446 1.574 0 .436.445.408 1.197 0 1.615-.406.418-4.695 4.502-4.695 4.502a1.095 1.095 0 01-1.576 0S4.924 9.581 4.516 9.163c-.409-.418-.436-1.17 0-1.615z"/>
                                </svg>
                            </div>
                            <div class="flex px-3 py-1 ml-2 self-center text-sm font-medium text-gray-800 antialiased rounded-md focus:outline-none hover:bg-blue-100 hover:text-blue-500 focus:bg-blue-100">
                                <a href="#" class="">Dashboards</a>
                                <svg class="h-4 w-4 mt-1 ml-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4.516 7.548c.436-.446 1.043-.481 1.576 0L10 11.295l3.908-3.747c.533-.481 1.141-.446 1.574 0 .436.445.408 1.197 0 1.615-.406.418-4.695 4.502-4.695 4.502a1.095 1.095 0 01-1.576 0S4.924 9.581 4.516 9.163c-.409-.418-.436-1.17 0-1.615z"/>
                                </svg>
                            </div>
                            <a href="#" class="px-3 py-1 ml-2 self-center text-sm font-medium text-gray-800 antialiased rounded-md focus:outline-none hover:bg-blue-100 hover:text-blue-500 focus:bg-blue-100">People</a>

                            <div class="flex px-3 py-1 ml-2 self-center text-sm font-medium text-gray-800 antialiased rounded-md focus:outline-none hover:bg-blue-100 hover:text-blue-500 focus:bg-blue-100">
                                <a href="#" class="">App</a>
                                <svg class="h-4 w-4 mt-1 ml-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4.516 7.548c.436-.446 1.043-.481 1.576 0L10 11.295l3.908-3.747c.533-.481 1.141-.446 1.574 0 .436.445.408 1.197 0 1.615-.406.418-4.695 4.502-4.695 4.502a1.095 1.095 0 01-1.576 0S4.924 9.581 4.516 9.163c-.409-.418-.436-1.17 0-1.615z"/>
                                </svg>
                            </div>
                            <a href="#" class="px-3 py-1 self-center ml-2 text-sm font-medium antialiased rounded bg-blue-800 text-white">Create</a>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="flex items-center ml-4 md:ml-6">
                        <input type="text" class="hidden px-4 py-1 text-sm text-gray-600 border-2 rounded focus:outline-none focus:shadow-none lg:block" placeholder="Search ...">
<!--                            <button class="p-1 text-gray-400 border-2 border-transparent rounded-full hover:text-white focus:outline-none focus:text-white focus:bg-gray-700" aria-label="Notifications">-->
<!--                                <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">-->
<!--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />-->
<!--                                </svg>-->
<!--                            </button>-->
                        <button class="p-1 ml-2 hover:text-blue-500 text-gray-700 border-2 border-transparent rounded-full hover:bg-blue-100 focus:outline-none" aria-label="Notifications">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 511.156 511.156" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M184.904 465.044c11.999 27.127 39.154 46.112 70.674 46.112s58.674-18.985 70.674-46.112zM255.573 48.836c20.8 0 40.772 3.67 59.306 10.389v-2.283C314.879 25.544 289.335 0 257.938 0h-4.719c-31.398 0-56.942 25.544-56.942 56.942v2.254c18.524-6.699 38.49-10.36 59.296-10.36zM442.747 435.044H68.409c-7.082 0-13.569-4.776-15.042-11.704-1.458-6.859 1.668-13.629 8.01-16.559 1.505-.976 12.833-8.897 24.174-32.862 20.829-44.01 25.201-106.005 25.201-150.263 0-79.855 64.967-144.82 144.821-144.82 79.665 0 144.512 64.652 144.82 144.245.007.191.011.383.011.575 0 44.258 4.372 106.253 25.201 150.263 11.341 23.965 22.668 31.887 24.174 32.862 6.342 2.93 9.469 9.699 8.01 16.559-1.473 6.927-7.959 11.704-15.042 11.704zm7.2-28.157h.01z"/>
                            </svg>
                        </button>

                        <button class="p-1 ml-2 hover:text-blue-500 text-gray-700 border-2 border-transparent rounded-full hover:bg-blue-100 focus:outline-none" aria-label="Notifications">
                            <svg class="w-5 h-5" fill="currentColor"  viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M256 0C114.836 0 0 114.836 0 256s114.836 256 256 256 256-114.836 256-256S397.164 0 256 0zm0 405.332c-11.777 0-21.332-9.555-21.332-21.332s9.555-21.332 21.332-21.332 21.332 9.555 21.332 21.332-9.555 21.332-21.332 21.332zm33.77-135.637c-7.551 3.477-12.438 11.094-12.438 19.395v9.578c0 11.773-9.535 21.332-21.332 21.332s-21.332-9.559-21.332-21.332v-9.578c0-24.899 14.633-47.723 37.227-58.156 21.738-10.004 37.437-36.567 37.437-49.602C309.332 151.937 285.418 128 256 128s-53.332 23.937-53.332 53.332c0 11.777-9.54 21.336-21.336 21.336S160 193.109 160 181.332c0-52.926 43.07-96 96-96s96 43.074 96 96c0 28.824-25.004 71.191-62.23 88.363zm0 0"/>
                            </svg>
                        </button>
                        <button class="p-1 ml-2 hover:text-blue-500 text-gray-700 border-2 border-transparent rounded-full hover:bg-blue-100 focus:outline-none" aria-label="Notifications">
                            <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 477.867 477.867">
                                <path fill-rule="evenodd" d="M460.8 170.667h-28.894a203.036 203.036 0 00-8.226-19.934l20.48-20.48c6.663-6.664 6.663-17.468 0-24.132l-72.482-72.346c-6.665-6.663-17.468-6.663-24.132 0l-20.48 20.48a206.392 206.392 0 00-19.866-8.294V17.067C307.2 7.641 299.559 0 290.133 0h-102.4c-9.426 0-17.067 7.641-17.067 17.067v28.894a206.34 206.34 0 00-19.951 8.226l-20.48-20.48c-6.665-6.662-17.468-6.662-24.132 0l-72.329 72.482c-6.663 6.664-6.663 17.468 0 24.132l20.48 20.48a202.631 202.631 0 00-8.294 19.866H17.067C7.641 170.667 0 178.308 0 187.733v102.4c0 9.426 7.641 17.067 17.067 17.067h28.894a202.79 202.79 0 008.226 19.934l-20.48 20.48c-6.662 6.665-6.662 17.468 0 24.132l72.414 72.414c6.665 6.662 17.468 6.662 24.132 0l20.48-20.48a206.65 206.65 0 0019.934 8.226V460.8c0 9.426 7.641 17.067 17.067 17.067h102.4c9.426 0 17.067-7.641 17.067-17.067v-28.894a206.34 206.34 0 0019.951-8.226l20.48 20.48c6.665 6.662 17.468 6.662 24.132 0l72.414-72.414c6.662-6.664 6.662-17.468 0-24.132l-20.48-20.48a202.67 202.67 0 008.209-19.934H460.8c9.426 0 17.067-7.641 17.067-17.067v-102.4c0-9.425-7.641-17.066-17.067-17.066zM238.933 358.4c-65.98 0-119.467-53.487-119.467-119.467s53.487-119.467 119.467-119.467S358.4 172.954 358.4 238.933c-.075 65.949-53.518 119.392-119.467 119.467z"/>
                            </svg>
                        </button>

                        <div class="relative ml-2">
                            <button class="p-1 flex hover:bg-blue-100 items-center max-w-xs text-sm text-white rounded-full focus:outline-none focus:shadow-solid" id="user-menu" aria-label="User menu" aria-haspopup="true">
                                <img class="w-6 h-6 rounded-full" src="https://media-exp1.licdn.com/dms/image/C4E03AQH1yPpzWPPbwA/profile-displayphoto-shrink_100_100/0/1597572102197?e=1616630400&v=beta&t=bKny37OM7-qwl1IyJQNjKOj7wSeBmDE8ScYAto5Ul3s" alt="" />
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex -mr-2 md:hidden">
                    <button class="inline-flex items-center justify-center p-2 text-gray-400 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white">
                        <svg class="block w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <div class="flex">
        <div class="flex-col border-r mt-16 pl-5 w-1/5 bg-gray-100 h-auto">
            <div class="flex ml-3 py-8">
                <div class="h-8 w-8 rounded">
                    <img class="h- w-20 mt-1 rounded " src="https://noeticitservices.com/project-assets/images/noetic_logo.png">
                </div>
                <div class="flex-col">
                    <div class="items-center cursor-pointer px-2  mb-1 text-sm font-medium text-gray-700 hover:underline">
                        Noetic IT Service
                    </div>

                    <div class="px-2 text-xs leading-none text-gray-600">
                        Classic software company
                    </div>
                </div>
            </div>
            <div class=" px-3">
                <div class="flex py-2 px-4 cursor-pointer hover:bg-blue-100 rounded">
                    <svg class="h-3 w-3 mt-1 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 447.243 447.243">
                        <path fill-rule="evenodd" d="M420.361 192.229a31.967 31.967 0 00-5.535-.41H99.305l6.88-3.2a63.998 63.998 0 0018.08-12.8l88.48-88.48c11.653-11.124 13.611-29.019 4.64-42.4-10.441-14.259-30.464-17.355-44.724-6.914a32.018 32.018 0 00-3.276 2.754l-160 160c-12.504 12.49-12.515 32.751-.025 45.255l.025.025 160 160c12.514 12.479 32.775 12.451 45.255-.063a32.084 32.084 0 002.745-3.137c8.971-13.381 7.013-31.276-4.64-42.4l-88.32-88.64a64.002 64.002 0 00-16-11.68l-9.6-4.32h314.24c16.347.607 30.689-10.812 33.76-26.88 2.829-17.445-9.019-33.88-26.464-36.71z"/>
                    </svg>
                    <div class="ml-5 text-sm text-gray-600  font-normal antialiased tracking-normal">
                        Back to project
                    </div>
                </div>
            </div>

            <div class="border border-gray-300 mt-5"></div>
            <div class="overflow-auto" style="height: 430px">
                <div class="flex-col px-3">
                    <div class="items-center ml-2 py-4  mb-1 text-sm font-medium text-gray-700">
                        Issues and filters
                    </div>
                    <div class="py-3 px-3 hover:bg-blue-100 cursor-pointer rounded text-sm text-gray-600  font-normal antialiased tracking-normal">
                        My open issues
                    </div>
                    <div class="py-3 px-3 hover:bg-blue-100 cursor-pointer rounded text-sm text-gray-600  font-normal antialiased tracking-normal">
                        Reported by me
                    </div>
                    <div class="py-3 px-3 bg-blue-100 cursor-pointer rounded text-sm text-gray-600  font-normal antialiased tracking-normal">
                        All issues
                    </div>
                    <div class="py-3 px-3 hover:bg-blue-100 cursor-pointer rounded text-sm text-gray-600  font-normal antialiased tracking-normal">
                        Open issues
                    </div>
                    <div class="py-3 px-3 hover:bg-blue-100 cursor-pointer rounded text-sm text-gray-600  font-normal antialiased tracking-normal">
                        Done issues
                    </div>
                    <div class="py-3 px-3 hover:bg-blue-100 cursor-pointer rounded text-sm text-gray-600  font-normal antialiased tracking-normal">
                        Viewed recently
                    </div>
                    <div class="py-3 px-3 hover:bg-blue-100 cursor-pointer rounded text-sm text-gray-600  font-normal antialiased tracking-normal">
                        Created recently
                    </div>
                    <div class="py-3 px-3 hover:bg-blue-100 cursor-pointer rounded text-sm text-gray-600  font-normal antialiased tracking-normal">
                        Resolved recently
                    </div>
                    <div class="py-3 px-3 hover:bg-blue-100 cursor-pointer rounded text-sm text-gray-600  font-normal antialiased tracking-normal">
                        Updated recently
                    </div>
                    <div class="border border-gray-300 mt-5"></div>
                    <div class="cursor-pointer py-3 px-3 mb-5 mt-5 hover:bg-blue-100 rounded text-sm text-gray-600  font-normal antialiased tracking-normal">
                        View all filters
                    </div>
                </div>
            </div>

        </div>
        <div class="flex w-4/5 mt-24 h-auto">
            <div class=" ml-10 h-full" style="width: 400px">
                <div class="text-sm text-gray-600 font-normal antialiased tracking-normal">
                    Projects &nbsp; / &nbsp; Biltrax IT Project
                </div>
                <div class="text-2xl mt-3 text-black font-semibold antialiased tracking-normal">
                    All Issues
                </div>
                <div class="flex mt-5 w-full">
                    <input type="text" class="w-1/2 h-7 px-2 text-gray-500 border rounded text-xs" placeholder="Filter Issue ...">
                    <div class="items-center cursor-pointer px-2  mb-1 text-sm text-blue-500 hover:underline">Advanced search</div>
                </div>
                <div class="bg-gray-100 mt-4 rounded">
                    <div class="flex  justify-between px-1 text-center items-center">
                        <div class="flex px-3 py-1 self-center text-sm font-medium text-gray-800 antialiased rounded-md focus:outline-none hover:bg-blue-100 text-blue-500 focus:bg-blue-100">
                            <a href="#" class="">Priority</a>
                            <svg class="h-4 w-4 mt-1 ml-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4.516 7.548c.436-.446 1.043-.481 1.576 0L10 11.295l3.908-3.747c.533-.481 1.141-.446 1.574 0 .436.445.408 1.197 0 1.615-.406.418-4.695 4.502-4.695 4.502a1.095 1.095 0 01-1.576 0S4.924 9.581 4.516 9.163c-.409-.418-.436-1.17 0-1.615z"/>
                            </svg>
                        </div>
                        <div class="p-2">
                            <button class="flex rounded px-4 py-2 focus:outline-none text-gray-500 hover:bg-blue-100 justify-around">
                                <svg class="h-3 w-3 " xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512"><path fill-rule="evenodd" d="M441.156 322.876L392.49 275.49a8.523 8.523 0 00-11.93.017l-81.894 80.299V8.533A8.536 8.536 0 00290.133 0h-68.267a8.536 8.536 0 00-8.533 8.533v347.273l-81.894-80.299a8.528 8.528 0 00-11.921-.017l-48.666 47.386a8.503 8.503 0 00-2.586 6.11c0 2.304.939 4.506 2.586 6.11l179.2 174.481A8.508 8.508 0 00256 512c2.15 0 4.292-.811 5.956-2.423l179.2-174.481a8.526 8.526 0 002.577-6.11c0-2.304-.93-4.506-2.577-6.11z"/></svg>
                            </button>
                        </div>
                    </div>
                    <div class="mx-2 bg-white rounded">
                        <div class="overflow-auto flex-col" style="height: 308px">
                            <div class="flex-col cursor-pointer rounded hover:bg-blue-100">
                                <div class="py-3 px-3 cursor-pointer text-gray-700 rounded text-sm font-normal antialiased tracking-normal">
                                    Selected Options : Tracked
                                </div>
                                <div class="flex px-3 justify-between">
                                    <div class="flex">
                                        <div class="bg-red-500 rounded h-4 w-4 p-1">
                                            <svg class="h-2 w-2 text-white" fill="currentColor " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 3a7 7 0 10.001 13.999A7 7 0 0010 3z"/></svg>
                                        </div>
                                        <div class="font-bold text-gray-500 ml-1 text-xs">
                                            NITSWEBAPP-01
                                        </div>
                                    </div>
                                    <button class="flex rounded-full p-1 pb-1 h-6 w-6 bg-orange-500 justify-around">
                                        <span class="text-xs font-bold">AS</span>
                                    </button>
                                </div>
                                <div class="border mt-3"></div>
                            </div>
                            <div class="flex-col cursor-pointer bg-blue-100">
                                <div class="py-3 px-3 cursor-pointer text-gray-700 rounded text-sm font-normal antialiased tracking-normal">
                                    Project & Company Slug
                                </div>
                                <div class="flex px-3 justify-between">
                                    <div class="flex">
                                        <div class="bg-red-500 rounded h-4 w-4 p-1">
                                            <svg class="h-2 w-2 text-white" fill="currentColor " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 3a7 7 0 10.001 13.999A7 7 0 0010 3z"/></svg>
                                        </div>
                                        <div class="font-bold line-through text-gray-500 ml-1 text-xs">
                                            NITSWEBAPP-02
                                        </div>
                                    </div>
                                    <button class="flex rounded-full p-1 pb-1 h-6 w-6 bg-orange-500 justify-around">
                                        <span class="text-xs font-bold">AS</span>
                                    </button>
                                </div>
                                <div class="border mt-3"></div>
                            </div>
                            <div class="flex-col cursor-pointer hover:bg-blue-100">
                                <div class="py-3 px-3 cursor-pointer text-gray-700 rounded text-sm font-normal antialiased tracking-normal">
                                    Selected Options : Tracked
                                </div>
                                <div class="flex px-3 justify-between">
                                    <div class="flex">
                                        <div class="bg-red-500 rounded h-4 w-4 p-1">
                                            <svg class="h-2 w-2 text-white" fill="currentColor " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 3a7 7 0 10.001 13.999A7 7 0 0010 3z"/></svg>
                                        </div>
                                        <div class="font-bold text-gray-500 ml-1 text-xs">
                                            NITSWEBAPP-03
                                        </div>
                                    </div>
                                    <button class="flex rounded-full p-1 pb-1 h-6 w-6 bg-orange-500 justify-around">
                                        <span class="text-xs font-bold">AS</span>
                                    </button>
                                </div>
                                <div class="border mt-3"></div>
                            </div>
                            <div class="flex-col cursor-pointer hover:bg-blue-100">
                                <div class="py-3 px-3 cursor-pointer text-gray-700 rounded text-sm font-normal antialiased tracking-normal">
                                    Project & Company Slug
                                </div>
                                <div class="flex px-3 justify-between">
                                    <div class="flex">
                                        <div class="bg-red-500 rounded h-4 w-4 p-1">
                                            <svg class="h-2 w-2 text-white" fill="currentColor " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 3a7 7 0 10.001 13.999A7 7 0 0010 3z"/></svg>
                                        </div>
                                        <div class="font-bold line-through text-gray-500 ml-1 text-xs">
                                            NITSWEBAPP-04
                                        </div>
                                    </div>
                                    <button class="flex rounded-full p-1 pb-1 h-6 w-6 bg-orange-500 justify-around">
                                        <span class="text-xs font-bold">AS</span>
                                    </button>
                                </div>
                                <div class="border mt-3"></div>
                            </div>
                            <div class="flex-col cursor-pointer hover:bg-blue-100">
                                <div class="py-3 px-3 cursor-pointer text-gray-700 rounded text-sm font-normal antialiased tracking-normal">
                                    Selected Options : Tracked
                                </div>
                                <div class="flex px-3 justify-between">
                                    <div class="flex">
                                        <div class="bg-red-500 rounded h-4 w-4 p-1">
                                            <svg class="h-2 w-2 text-white" fill="currentColor " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 3a7 7 0 10.001 13.999A7 7 0 0010 3z"/></svg>
                                        </div>
                                        <div class="font-bold text-gray-500 ml-1 text-xs">
                                            NITSWEBAPP-05
                                        </div>
                                    </div>
                                    <button class="flex rounded-full p-1 pb-1 h-6 w-6 bg-orange-500 justify-around">
                                        <span class="text-xs font-bold">AS</span>
                                    </button>
                                </div>
                                <div class="border mt-3"></div>
                            </div>
                            <div class="flex-col cursor-pointer hover:bg-blue-100">
                                <div class="py-3 px-3 cursor-pointer text-gray-700 rounded text-sm font-normal antialiased tracking-normal">
                                    Project & Company Slug
                                </div>
                                <div class="flex px-3 justify-between">
                                    <div class="flex">
                                        <div class="bg-red-500 rounded h-4 w-4 p-1">
                                            <svg class="h-2 w-2 text-white" fill="currentColor " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 3a7 7 0 10.001 13.999A7 7 0 0010 3z"/></svg>
                                        </div>
                                        <div class="font-bold text-gray-500 ml-1 text-xs">
                                            NITSWEBAPP-06
                                        </div>
                                    </div>
                                    <button class="flex rounded-full p-1 pb-1 h-6 w-6 bg-orange-500 justify-around">
                                        <span class="text-xs font-bold">AS</span>
                                    </button>
                                </div>
                                <div class="border mt-3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="flex  justify-between px-1 text-center items-center">

                        <div class="p-2">
                            <button class="flex rounded px-4 py-2 focus:outline-none text-gray-500 hover:bg-blue-100 justify-around">
<!--                                    <svg class="h-3 w-3 " xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512"><path fill-rule="evenodd" d="M441.156 322.876L392.49 275.49a8.523 8.523 0 00-11.93.017l-81.894 80.299V8.533A8.536 8.536 0 00290.133 0h-68.267a8.536 8.536 0 00-8.533 8.533v347.273l-81.894-80.299a8.528 8.528 0 00-11.921-.017l-48.666 47.386a8.503 8.503 0 00-2.586 6.11c0 2.304.939 4.506 2.586 6.11l179.2 174.481A8.508 8.508 0 00256 512c2.15 0 4.292-.811 5.956-2.423l179.2-174.481a8.526 8.526 0 002.577-6.11c0-2.304-.93-4.506-2.577-6.11z"/></svg>-->
                                <svg class="h-4 w-4 " xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.516 14.224c-2.262-2.432-2.222-6.244.128-8.611a6.074 6.074 0 013.414-1.736L8.989 1.8a8.112 8.112 0 00-4.797 2.351c-3.149 3.17-3.187 8.289-.123 11.531l-1.741 1.752 5.51.301-.015-5.834-2.307 2.323zm6.647-11.959l.015 5.834 2.307-2.322c2.262 2.434 2.222 6.246-.128 8.611a6.07 6.07 0 01-3.414 1.736l.069 2.076a8.122 8.122 0 004.798-2.35c3.148-3.172 3.186-8.291.122-11.531l1.741-1.754-5.51-.3z"/>
                                </svg>
                            </button>
                        </div>
                        <div class="flex px-3 py-1 self-center text-sm antialiased rounded-md text-gray-600 ">
                            issue 48 of 88
                        </div>
                    </div>

                </div>
            </div>

            <div class="w-full relative ml-10  pt-32" >
                <div class="absolute hover:text-blue-500 mb-64 right-0 top-0 underline cursor-pointer mr-16 mt-5 text-sm text-gray-700  font-semibold antialiased tracking-normal">Give feedback</div>

                <div class="flex w-full justify-between px-1 text-center items-center">
                    <div class="p-2 flex">
                        <div class="py-3 cursor-pointer text-sm text-gray-600  font-normal antialiased tracking-normal">
                            NITSWEBAPP-49 /
                        </div>
                        <div class="flex ml-2 mt-3">
                            <div class="bg-red-500 mt-1 rounded h-4 w-4 p-1">
                                <svg class="h-2 w-2 text-white" fill="currentColor " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 3a7 7 0 10.001 13.999A7 7 0 0010 3z"/></svg>
                            </div>
                            <div class="cursor-pointer ml-1 text-sm text-gray-600  font-normal antialiased tracking-normal">
                                NITSWEBAPP-05
                            </div>
                        </div>
                    </div>
                    <div class="flex mr-6">
                        <div class="p-2 rounded hover:bg-blue-100 text-blue-700">
                            <svg class="h-5 w-5 " xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 4.4C3.439 4.4 0 9.232 0 10c0 .766 3.439 5.6 10 5.6 6.56 0 10-4.834 10-5.6 0-.768-3.44-5.6-10-5.6zm0 9.907c-2.455 0-4.445-1.928-4.445-4.307S7.545 5.691 10 5.691s4.444 1.93 4.444 4.309-1.989 4.307-4.444 4.307zM10 10c-.407-.447.663-2.154 0-2.154-1.228 0-2.223.965-2.223 2.154s.995 2.154 2.223 2.154c1.227 0 2.223-.965 2.223-2.154 0-.547-1.877.379-2.223 0z"/>
                            </svg>
                        </div>
                        <div class="p-2 rounded ml-2 hover:bg-blue-100 text-gray-700">
                            <svg class="h-5 w-5 " xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M15 13.442c-.633 0-1.204.246-1.637.642l-5.938-3.463c.046-.188.075-.384.075-.584s-.029-.395-.075-.583L13.3 6.025A2.48 2.48 0 0015 6.7c1.379 0 2.5-1.121 2.5-2.5S16.379 1.7 15 1.7s-2.5 1.121-2.5 2.5c0 .2.029.396.075.583L6.7 8.212A2.485 2.485 0 005 7.537c-1.379 0-2.5 1.121-2.5 2.5s1.121 2.5 2.5 2.5a2.48 2.48 0 001.7-.675l5.938 3.463a2.339 2.339 0 00-.067.546A2.428 2.428 0 1015 13.442z"/>
                            </svg>
                        </div>
                        <div class="p-2 rounded ml-2 hover:bg-blue-100 text-gray-700">
                            <svg class="h-5 w-5 " xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10.001 7.8a2.2 2.2 0 100 4.402A2.2 2.2 0 0010 7.8zm-7 0a2.2 2.2 0 100 4.402A2.2 2.2 0 003 7.8zm14 0a2.2 2.2 0 100 4.402A2.2 2.2 0 0017 7.8z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="flex overflow-auto" style="height: 350px">
                    <div class="mr-10" style="width: 458px">
                        <div class="w-full px-2 hover:bg-blue-100 py-2 text-2xl font-semibold">
                            Project & Company Slug
                        </div>
                        <div class="flex mt-1">
                            <div class="flex py-1 px-3 mr-2 cursor-pointer bg-gray-200 hover:bg-gray-300 rounded">
                                <svg class="h-5 w-5 text-gray-700" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.602 19.8c-1.293 0-2.504-.555-3.378-1.44-1.695-1.716-2.167-4.711.209-7.116l9.748-9.87c.988-1 2.245-1.387 3.448-1.06 1.183.32 2.151 1.301 2.468 2.498.322 1.22-.059 2.493-1.046 3.493l-9.323 9.44c-.532.539-1.134.858-1.738.922-.599.064-1.17-.13-1.57-.535-.724-.736-.828-2.117.378-3.337l6.548-6.63c.269-.272.705-.272.974 0s.269.714 0 .986l-6.549 6.631c-.566.572-.618 1.119-.377 1.364.106.106.266.155.451.134.283-.029.606-.216.909-.521l9.323-9.439c.64-.648.885-1.41.69-2.145a2.162 2.162 0 00-1.493-1.513c-.726-.197-1.48.052-2.12.7l-9.748 9.87c-1.816 1.839-1.381 3.956-.209 5.143 1.173 1.187 3.262 1.629 5.079-.212l9.748-9.87a.683.683 0 01.974 0 .704.704 0 010 .987L9.25 18.15c-1.149 1.162-2.436 1.65-3.648 1.65z"/></svg>
                                <div class="ml-2 text-sm text-gray-700  font-normal antialiased tracking-normal">
                                    Attach
                                </div>
                            </div>
                            <div class="flex py-1 px-3 mr-2 cursor-pointer bg-gray-200 hover:bg-gray-300 rounded">
                                <svg class="h-5 w-5 text-gray-700" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M11 0H3a1 1 0 00-1 1v12a1 1 0 001 1h5v2h2v-2H8.001v-2H10v-2H8v2H4V2h6v4h2V1a1 1 0 00-1-1zM8 7v1h2V6H9a1 1 0 00-1 1zm4 13h2v-2h-2v2zm0-12h2V6h-2v2zM8 19a1 1 0 001 1h1v-2H8v1zm9-13h-1v2h2V7a1 1 0 00-1-1zm-1 14h1a1 1 0 001-1v-1h-2v2zm0-8h2v-2h-2v2zm0 4h2v-2h-2v2z"/></svg>
                                <div class="ml-2 text-sm text-gray-700  font-normal antialiased tracking-normal">
                                    Create Subtask
                                </div>
                            </div>
                            <div class="flex py-1 px-3 mr-1 cursor-pointer bg-gray-200 hover:bg-gray-300 rounded">
                                <svg class="h-5 w-5 text-gray-700" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.859 14.691l-.81.805a1.814 1.814 0 01-2.545 0 1.762 1.762 0 010-2.504l2.98-2.955c.617-.613 1.779-1.515 2.626-.675a.992.992 0 101.397-1.407c-1.438-1.428-3.566-1.164-5.419.675l-2.98 2.956A3.719 3.719 0 002 14.244a3.72 3.72 0 001.108 2.658c.736.73 1.702 1.096 2.669 1.096s1.934-.365 2.669-1.096l.811-.805a.988.988 0 00.005-1.4.995.995 0 00-1.403-.006zm9.032-11.484c-1.547-1.534-3.709-1.617-5.139-.197l-1.009 1.002a.99.99 0 101.396 1.406l1.01-1.001c.74-.736 1.711-.431 2.346.197.336.335.522.779.522 1.252s-.186.917-.522 1.251l-3.18 3.154c-1.454 1.441-2.136.766-2.427.477a.99.99 0 10-1.396 1.406c.668.662 1.43.99 2.228.99.977 0 2.01-.492 2.993-1.467l3.18-3.153A3.732 3.732 0 0018 5.866a3.726 3.726 0 00-1.109-2.659z"/></svg>
                                <div class="ml-2 text-sm text-gray-700  font-normal antialiased tracking-normal">
                                    Link Issue
                                </div>
                            </div>
                            <div class="py-1 px-2 cursor-pointer bg-gray-200 hover:bg-gray-300 rounded">
                                <svg class="h-4 w-4 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4.516 7.548c.436-.446 1.043-.481 1.576 0L10 11.295l3.908-3.747c.533-.481 1.141-.446 1.574 0 .436.445.408 1.197 0 1.615-.406.418-4.695 4.502-4.695 4.502a1.095 1.095 0 01-1.576 0S4.924 9.581 4.516 9.163c-.409-.418-.436-1.17 0-1.615z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="items-center py-1 mt-5 mb-1 text-sm font-medium text-gray-800">
                            Description
                        </div>
                        <div class="flex-col p-2 rounded hover:bg-gray-200">
                            <div class="flex">
                                <div class="h-5 w-5">
                                    <svg class="h-5 w-5 text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.8 10a2.2 2.2 0 004.4 0 2.2 2.2 0 00-4.4 0z"/></svg>
                                </div>
                                <div class="text-sm ml-1 text-gray-800 antialiased tracking-normal font-normal ">
                                    Lorem ipsum is typically a corrupted version of De finibus bonorum et malorum, a first-century BC text by the Roman statesman and philosopher
                                    Cicero, with words altered, added, and removed to make it nonsensical, improper Latin.
                                </div>
                            </div>
                            <div class="flex mt-10">
                                <div class="h-5 w-5">
                                    <svg class="h-5 w-5 text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.8 10a2.2 2.2 0 004.4 0 2.2 2.2 0 00-4.4 0z"/></svg>
                                </div>
                                <div class="text-sm ml-1 text-gray-800 antialiased tracking-normal font-normal ">
                                    Lorem ipsum is typically a corrupted version of De finibus bonorum et malorum, a first-century BC text by the Roman statesman and philosopher
                                    Cicero, with words altered, added, and removed to make it nonsensical, improper Latin.
                                </div>
                            </div>
                        </div>
                        <div class="items-center py-1 mt-5 text-sm font-medium text-gray-800">
                            Environment
                        </div>
                        <div class="flex-col p-2 rounded hover:bg-gray-200">
                            <div class="flex">
                                <div class="text-sm ml-1 text-gray-800 antialiased tracking-normal font-normal ">
                                    None
                                </div>
                            </div>
                        </div>
                        <div class="items-center py-1 mt-5 text-sm font-medium text-gray-800">
                            Activity
                        </div>
                        <div class="flex p-2 rounded">
                            <div class="flex">
                                <div class="text-sm ml-1 py-1 text-gray-800 antialiased tracking-normal font-normal ">
                                    Show :
                                </div>
                                <div class="text-sm ml-2 py-1 cursor-pointer rounded px-2 text-white bg-gray-700 antialiased tracking-normal font-normal ">
                                    Comments
                                </div>
                                <div class="text-sm ml-2 py-1 cursor-pointer rounded px-2 text-gray-800 bg-gray-200 antialiased tracking-normal font-normal ">
                                    History
                                </div>
                                <div class="text-sm ml-2 py-1 cursor-pointer rounded px-2 text-gray-800 bg-gray-200 text-gray-800 antialiased tracking-normal font-normal ">
                                    Work Log
                                </div>
                            </div>
                        </div>
                        <div class="border mt-3"></div>
                        <div class="items-center flex py-1 mt-5 text-sm font-medium text-gray-800">
                            <img class="h-10 w-10 rounded-full mr-8" src="https://media-exp1.licdn.com/dms/image/C4E03AQH1yPpzWPPbwA/profile-displayphoto-shrink_100_100/0/1597572102197?e=1616630400&v=beta&t=bKny37OM7-qwl1IyJQNjKOj7wSeBmDE8ScYAto5Ul3s">
                            <input type="text" placeholder="Add a Comment" class="text-xs rounded border border-gray-500 py-2 px-2 w-full">
                        </div>
                    </div>
                    <div class="bg-white rounded" style="width: 240px">
                        <div class=" px-1 text-center items-center">
                            <div class="flex w-24 px-3 py-2 self-center text-sm font-medium antialiased rounded bg-blue-800 text-white">
                                <a href="#" class="">Testing</a>
                                <svg class="h-4 w-4 mt-1 ml-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4.516 7.548c.436-.446 1.043-.481 1.576 0L10 11.295l3.908-3.747c.533-.481 1.141-.446 1.574 0 .436.445.408 1.197 0 1.615-.406.418-4.695 4.502-4.695 4.502a1.095 1.095 0 01-1.576 0S4.924 9.581 4.516 9.163c-.409-.418-.436-1.17 0-1.615z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="mx-2 bg-white rounded">
                            <div class="flex-col">
                                <div class="flex-col mt-3 rounded">
                                    <div class="py-1 px-1 text-gray-700 rounded text-xs font-semibold antialiased tracking-normal">
                                        Assignee
                                    </div>
                                    <div class="flex px-2 py-2 hover:bg-gray-200">
                                        <img class="w-6 h-6 rounded-full" src="https://media-exp1.licdn.com/dms/image/C4E03AQH1yPpzWPPbwA/profile-displayphoto-shrink_100_100/0/1597572102197?e=1616630400&v=beta&t=bKny37OM7-qwl1IyJQNjKOj7wSeBmDE8ScYAto5Ul3s" alt="" />

                                        <div class="font-normal text-gray-700 ml-3 text-xs">
                                            Abuzaid Sayyad
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-col mt-3 rounded">
                                    <div class="py-1 px-1 text-gray-700 rounded text-xs font-semibold antialiased tracking-normal">
                                        Reporter
                                    </div>
                                    <div class="flex px-2 py-2 hover:bg-gray-200">
                                        <img class="w-6 h-6 rounded-full" src="https://media-exp1.licdn.com/dms/image/C4E35AQFvDRbBk0Ousw/profile-framedphoto-shrink_400_400/0/1610941682185?e=1611381600&v=beta&t=W-wz9MDSoHzY8ApKoSKoSCW41lsP98UqsvjtitjBnQ4" alt="" />
                                        <div class="font-normal text-gray-700 ml-3 text-xs">
                                            Nitish Kumar
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-col mt-3 rounded">
                                    <div class="py-1 px-1 text-gray-700 rounded text-xs font-semibold antialiased tracking-normal">
                                        Labels
                                    </div>
                                    <div class="px-2 py-2 hover:bg-gray-200">
                                        <div class="font-normal text-gray-700 ml-3 text-xs">
                                            None
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-col mt-3 rounded">
                                    <div class="py-1 px-1 text-gray-700 rounded text-xs font-semibold antialiased tracking-normal">
                                        Epic Link
                                    </div>
                                    <div class="flex px-1 py-2 hover:bg-gray-200">
                                        <div class="font-normal bg-purple-300 p-1 underline hover:bg-transparent rounded text-gray-700 ml-3 text-xs">
                                            Nitseditor-frontend
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-col mt-3 rounded">
                                    <div class="py-1 px-1 text-gray-700 rounded text-xs font-semibold antialiased tracking-normal">
                                        Sprint
                                    </div>
                                    <div class="px-2 py-2 hover:bg-gray-200">
                                        <div class="font-normal text-gray-700 hover:text-blue-500 hover:underline ml-3 text-xs">
                                            Bugs, Subs Excel, Forecast
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-col mt-3 rounded">
                                    <div class="py-1 px-1 text-gray-700 rounded text-xs font-semibold antialiased tracking-normal">
                                        Priority
                                    </div>
                                    <div class="flex px-2 py-2 hover:bg-gray-200">
                                        <svg class="h-4 w-4 text-yellow-500 " fill="currentColor " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 .75L15.5 6H12v13H8V6H4.5L10 .75z"/>
                                        </svg>
                                        <div class="font-normal text-gray-700 ml-3 text-xs">
                                            Medium
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-col mt-3 rounded">
                                    <div class="px-2 py-2 hover:bg-gray-200">
                                        <div class="flex self-center text-sm font-medium antialiased rounded text-blue-500">
                                            <svg class="h-4 w-4 mt-1 ml-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M4.516 7.548c.436-.446 1.043-.481 1.576 0L10 11.295l3.908-3.747c.533-.481 1.141-.446 1.574 0 .436.445.408 1.197 0 1.615-.406.418-4.695 4.502-4.695 4.502a1.095 1.095 0 01-1.576 0S4.924 9.581 4.516 9.163c-.409-.418-.436-1.17 0-1.615z"/>
                                            </svg>
                                            <a href="#" class="text-blue-600">Show 5 More Field</a>
                                        </div>
                                        <div class="text-xs pl-3 font-light antialiased rounded text-gray-500">
                                            Original Estimate, Time tracking
                                        </div>
                                    </div>
                                </div>
                                <div class="border mt-2"></div>
                            </div>
                        </div>
                        <div class="flex justify-between px-1 text-left ">
                            <div class="p-2 text-xs text-gray-600 antialiased tracking-normal">
                                Created July 3, 2020, 6:24 PM<br>
                                Updated 4 days ago<br>
                                Configure
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- component -->
<div class="bg-white">
    <nav class="bg-gray-900">
      <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
          <div class="flex items-center">
            <div class="flex-shrink-0">
              <div class="justify-center w-1/5 text-center">
                <svg class="w-8 h-8 mx-auto text-gray-200 cursor-pointer fill-current hover:text-gray-300" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
              </div>
            </div>
            <div class="hidden md:block">
              <div class="flex items-center ml-10">
                <input type="text" class="hidden px-4 py-1 text-sm text-white placeholder-white bg-gray-700 rounded-lg focus:outline-none focus:shadow-none lg:block" placeholder="Search or jump to...">
                <a href="#" class="px-3 py-2 ml-4 text-sm font-semibold text-white bg-gray-900 rounded-md focus:outline-none hover:bg-gray-700 focus:text-white focus:bg-gray-700">Dashboard
                </a>
                <a href="#" class="px-3 py-2 ml-4 text-sm font-semibold text-gray-300 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Pull requests
                </a>
                <a href="#" class="px-3 py-2 ml-4 text-sm font-semibold text-gray-300 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Issues
                </a>
                <a href="#" class="px-3 py-2 ml-4 text-sm font-semibold text-gray-300 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Marketplace
                </a>
                <a href="#" class="px-3 py-2 ml-4 text-sm font-semibold text-gray-300 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Explore</a>
              </div>
            </div>
          </div>
          <div class="hidden md:block">
            <div class="flex items-center ml-4 md:ml-6">
              <button class="p-1 text-gray-400 border-2 border-transparent rounded-full hover:text-white focus:outline-none focus:text-white focus:bg-gray-700" aria-label="Notifications">
                <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
              </button>

              <div class="relative ml-3">
                <div>
                  <button class="flex items-center max-w-xs text-sm text-white rounded-full focus:outline-none focus:shadow-solid" id="user-menu" aria-label="User menu" aria-haspopup="true">
                    <img class="w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1592242481757-a0519c3d0d89?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" />
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="flex -mr-2 md:hidden">
            <button class="inline-flex items-center justify-center p-2 text-gray-400 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white">
              <svg class="block w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </nav>
    <div class="px-6 mt-4 overflow-x-hidden lg:px-10">
      <div class="flex flex-col md:flex-row md:justify-between">
        <div class="flex items-center">
          <span>
            <svg class="w-4 h-4 mr-2 text-gray-600 fill-current" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M2 2.5A2.5 2.5 0 014.5 0h8.75a.75.75 0 01.75.75v12.5a.75.75 0 01-.75.75h-2.5a.75.75 0 110-1.5h1.75v-2h-8a1 1 0 00-.714 1.7.75.75 0 01-1.072 1.05A2.495 2.495 0 012 11.5v-9zm10.5-1V9h-8c-.356 0-.694.074-1 .208V2.5a1 1 0 011-1h8zM5 12.25v3.25a.25.25 0 00.4.2l1.45-1.087a.25.25 0 01.3 0L8.6 15.7a.25.25 0 00.4-.2v-3.25a.25.25 0 00-.25-.25h-3.5a.25.25 0 00-.25.25z"></path>
            </svg>
          </span>
          <div class="text-xl font-medium text-blue-700 cursor-pointer hover:underline">tailwindcss</div>
          <span class="mx-1 text-xl font-medium text-gray-800">/</span>
          <div class="text-xl font-semibold text-blue-700 cursor-pointer hover:underline">tailwindcss</div>
        </div>
        <div class="mt-4 mb-2 md:hidden">
          <span class="text-sm">
          A utility-first CSS framework for rapid UI development.
          </span>
          <div class="my-2">
            <a class="flex items-center mb-1 text-sm font-semibold text-blue-600 hover:underline" href="#">
              <svg class="w-4 h-4 mr-2 text-gray-700" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
              tailwindcss.com/</a>
            <a href="" class="flex items-center mb-1 text-sm font-medium text-gray-700 hover:underline">
              <svg height="16" class="w-4 h-4 mr-2 text-gray-700 fill-current" mr="2" viewBox="0 0 16 16" version="1.1" width="16" aria-hidden="true">
                <path fill-rule="evenodd" d="M8.75.75a.75.75 0 00-1.5 0V2h-.984c-.305 0-.604.08-.869.23l-1.288.737A.25.25 0 013.984 3H1.75a.75.75 0 000 1.5h.428L.066 9.192a.75.75 0 00.154.838l.53-.53-.53.53v.001l.002.002.002.002.006.006.016.015.045.04a3.514 3.514 0 00.686.45A4.492 4.492 0 003 11c.88 0 1.556-.22 2.023-.454a3.515 3.515 0 00.686-.45l.045-.04.016-.015.006-.006.002-.002.001-.002L5.25 9.5l.53.53a.75.75 0 00.154-.838L3.822 4.5h.162c.305 0 .604-.08.869-.23l1.289-.737a.25.25 0 01.124-.033h.984V13h-2.5a.75.75 0 000 1.5h6.5a.75.75 0 000-1.5h-2.5V3.5h.984a.25.25 0 01.124.033l1.29.736c.264.152.563.231.868.231h.162l-2.112 4.692a.75.75 0 00.154.838l.53-.53-.53.53v.001l.002.002.002.002.006.006.016.015.045.04a3.517 3.517 0 00.686.45A4.492 4.492 0 0013 11c.88 0 1.556-.22 2.023-.454a3.512 3.512 0 00.686-.45l.045-.04.01-.01.006-.005.006-.006.002-.002.001-.002-.529-.531.53.53a.75.75 0 00.154-.838L13.823 4.5h.427a.75.75 0 000-1.5h-2.234a.25.25 0 01-.124-.033l-1.29-.736A1.75 1.75 0 009.735 2H8.75V.75zM1.695 9.227c.285.135.718.273 1.305.273s1.02-.138 1.305-.273L3 6.327l-1.305 2.9zm10 0c.285.135.718.273 1.305.273s1.02-.138 1.305-.273L13 6.327l-1.305 2.9z"></path></svg>
              MIT License
            </a>
            <div class="flex">
              <a href="" class="flex items-center mb-1 text-sm font-medium text-gray-700 hover:underline hover:text-blue-500">
                <svg class="w-4 h-4 mr-2 fill-current" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                  <path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                </svg>
              24.1k stars
            </a>
            <a href="" class="flex items-center mb-1 ml-2 text-sm font-medium text-gray-700 hover:underline hover:text-blue-500">
              <svg class="w-4 h-4 mr-1 fill-current" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">
                <path fill-rule="evenodd" d="M5 3.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm0 2.122a2.25 2.25 0 10-1.5 0v.878A2.25 2.25 0 005.75 8.5h1.5v2.128a2.251 2.251 0 101.5 0V8.5h1.5a2.25 2.25 0 002.25-2.25v-.878a2.25 2.25 0 10-1.5 0v.878a.75.75 0 01-.75.75h-4.5A.75.75 0 015 6.25v-.878zm3.75 7.378a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm3-8.75a.75.75 0 100-1.5.75.75 0 000 1.5z"></path>
              </svg>
              1.1k forks
            </a>
            </div>
          </div>
        </div>
        <div class="hidden md:block md:flex md:justify-between">
          <div class="flex text-center border rounded-lg md:border-none">
            <div class="flex items-center px-2 py-1 bg-gray-200 border-gray-400 cursor-pointer md:rounded-l-lg md:border-t md:border-l md:border-b hover:bg-gray-300">
              <svg class="hidden w-4 h-4 mr-1 text-gray-700 md:block" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                <path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
              </svg>
              <span class="self-center text-sm font-medium">Watch</span>
              <svg class="w-3 h-3 ml-1 text-gray-700 fill-current" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
            <div class="px-2 py-1 text-sm font-semibold border border-t border-gray-400 rounded-r-lg cursor-pointer hover:text-blue-600">423</div>
          </div>
          <div class="flex mx-4">
            <div class="flex items-center px-2 py-1 bg-gray-200 border-t border-b border-l border-gray-400 rounded-l-lg cursor-pointer hover:bg-gray-300">
              <svg class="w-4 h-4 mr-1 text-gray-700" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
              <span class="self-center text-sm font-medium">Unstar</span>
            </div>
            <div class="px-2 py-1 text-sm font-semibold border border-t border-gray-400 rounded-r-lg cursor-pointer hover:text-blue-600">24.1k</div>
          </div>
          <div class="flex">
            <div class="flex items-center px-2 py-1 bg-gray-200 border-t border-b border-l border-gray-400 rounded-l-lg cursor-pointer hover:bg-gray-200">
              <svg class="w-4 h-4 mr-1 text-gray-700" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M5 3.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm0 2.122a2.25 2.25 0 10-1.5 0v.878A2.25 2.25 0 005.75 8.5h1.5v2.128a2.251 2.251 0 101.5 0V8.5h1.5a2.25 2.25 0 002.25-2.25v-.878a2.25 2.25 0 10-1.5 0v.878a.75.75 0 01-.75.75h-4.5A.75.75 0 015 6.25v-.878zm3.75 7.378a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm3-8.75a.75.75 0 100-1.5.75.75 0 000 1.5z"></path>
              </svg>
              <span class="self-center text-sm font-medium">Fork</span>
            </div>
            <div class="px-2 py-1 text-sm font-semibold border border-t border-gray-400 rounded-r-lg cursor-pointer hover:text-blue-600">1.1k</div>
          </div>
        </div>
        <div class="flex justify-between md:hidden">
          <button type="button" class="flex justify-center w-1/2 py-1 mr-2 text-center bg-gray-100 border border-gray-400 rounded-lg focus:outline-none hover:bg-gray-200">
            <div class="flex items-center px-2">
              <svg class="w-4 h-4 mr-1 text-gray-700" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
              <span class="self-center text-sm font-medium">Unstar</span>
            </div>
          </button>
          <button type="button" class="flex justify-center w-1/2 py-1 ml-2 text-center bg-gray-100 border border-gray-400 rounded-lg focus:outline-none hover:bg-gray-300">
            <div class="flex items-center px-2">
              <svg class="w-4 h-4 mr-1 text-gray-700" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                <path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
              </svg>
              <span class="self-center text-sm font-medium">Watch</span>
              <svg class="w-3 h-3 ml-1 text-gray-700 fill-current" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
          </button>
        </div>
      </div>
      <div class="flex items-center justify-between px-10 mt-6 -mx-10 border-b select-none md:mt-4">
        <div class="flex">
          <div class="flex items-center px-4 pb-2 text-sm border-b-2 border-orange-400 cursor-pointer">
            <svg class="hidden w-5 h-5 mr-1 text-gray-700 md:block" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
            Code</div>
          <div class="flex items-center px-4 pb-2 text-sm border-b-2 border-transparent cursor-pointer hover:border-gray-300">
            <svg class="hidden w-5 h-5 mr-1 text-gray-700 md:block" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            Issues
            <span class="flex items-center justify-center w-6 h-6 p-1 ml-1 text-xs bg-gray-200 rounded-full">129</span>
          </div>
          <div class="flex items-center px-4 pb-2 text-sm border-b-2 border-transparent cursor-pointer hover:border-gray-300">
            <svg class="hidden w-5 h-5 mr-1 text-gray-600 fill-current md:block" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M5 3.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm0 2.122a2.25 2.25 0 10-1.5 0v.878A2.25 2.25 0 005.75 8.5h1.5v2.128a2.251 2.251 0 101.5 0V8.5h1.5a2.25 2.25 0 002.25-2.25v-.878a2.25 2.25 0 10-1.5 0v.878a.75.75 0 01-.75.75h-4.5A.75.75 0 015 6.25v-.878zm3.75 7.378a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm3-8.75a.75.75 0 100-1.5.75.75 0 000 1.5z"></path>
            </svg>
            Pull requests
            <span class="flex items-center justify-center w-6 h-6 p-1 ml-1 text-xs bg-gray-200 rounded-full">38</span>
          </div>
          <div class="flex items-center hidden px-4 pb-2 text-sm border-b-2 border-transparent cursor-pointer hover:border-gray-300 md:flex md:block">
            <svg class="hidden w-5 h-5 mr-1 text-gray-700 md:block" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
              <path d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path></svg>
            Discussions
          </div>
          <div class="flex items-center hidden px-4 pb-2 text-sm border-b-2 border-transparent cursor-pointer hover:border-gray-300 md:block md:flex">
            <svg class="hidden w-5 h-5 mr-1 text-gray-700 md:block" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
              <path d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            Actions
          </div>
          <div class="flex items-center hidden px-4 pb-2 text-sm border-b-2 border-transparent cursor-pointer hover:border-gray-300 lg:flex lg:block">
            <svg class="hidden w-5 h-5 mr-1 text-gray-700 md:block" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
              <path d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016zM12 9v2m0 4h.01"></path></svg>
            Security
          </div>
          <div class="flex items-center hidden px-4 pb-2 text-sm border-b-2 border-transparent cursor-pointer hover:border-gray-300 lg:flex lg:block">
            <svg  class="hidden w-5 h-5 mr-1 text-gray-700 md:block" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            Insights
          </div>
        </div>
        <div class="flex items-start pb-2 cursor-pointer md:hidden">
          <svg class="w-5 h-5 text-gray-700 fill-current" fill="currentColor" viewBox="0 0 20 20"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path></svg>
        </div>
      </div>
      <div class="container pb-10 mx-auto mt-8">
        <div class="md:flex">
          <div class="w-full mr-4 md:w-3/4">
            <div class="flex justify-between">
              <button type="button" class="flex items-center justify-center px-4 py-1 text-center bg-gray-100 border border-gray-400 rounded-lg focus:outline-none hover:bg-gray-300">
                <svg class="w-5 h-5 mr-1 text-gray-600 fill-current" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M5 3.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm0 2.122a2.25 2.25 0 10-1.5 0v.878A2.25 2.25 0 005.75 8.5h1.5v2.128a2.251 2.251 0 101.5 0V8.5h1.5a2.25 2.25 0 002.25-2.25v-.878a2.25 2.25 0 10-1.5 0v.878a.75.75 0 01-.75.75h-4.5A.75.75 0 015 6.25v-.878zm3.75 7.378a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm3-8.75a.75.75 0 100-1.5.75.75 0 000 1.5z"></path>
                </svg>
                <span class="self-center text-sm font-medium">master</span>
                <svg class="w-3 h-3 ml-1 text-gray-700 fill-current" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M19 9l-7 7-7-7"></path>
                </svg>
              </button>
              <div class="flex hidden md:block md:flex">
                <button type="button" class="flex items-center justify-center px-4 py-1 ml-2 text-center bg-gray-100 border border-gray-400 rounded-lg focus:outline-none hover:bg-gray-300">
                  <span class="self-center text-sm font-medium">Go to file</span>
                </button>
                <button type="button" class="flex items-center justify-center px-4 py-1 ml-2 text-center bg-gray-100 border border-gray-400 rounded-lg focus:outline-none hover:bg-gray-300">
                  <span class="self-center text-sm font-medium">Add file</span>
                  <svg class="w-3 h-3 ml-1 text-gray-700 fill-current" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M19 9l-7 7-7-7"></path>
                  </svg>
                </button>
                <button type="button" class="flex items-center justify-center px-4 py-1 ml-2 text-center text-white bg-green-600 border border-green-700 rounded-lg focus:outline-none hover:bg-green-700">
                  <svg class="w-5 h-5 mr-1" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                  </svg>
                  <span class="self-center text-sm font-medium">Clone</span>
                  <svg class="w-3 h-3 ml-1 fill-current" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M19 9l-7 7-7-7"></path>
                  </svg>
                </button>
              </div>
              <button type="button" class="flex items-center justify-center px-6 py-1 ml-2 text-center bg-gray-100 border border-gray-400 rounded-lg md:hidden focus:outline-none hover:bg-gray-300">
                <svg class="w-5 h-5 text-gray-700 fill-current" fill="currentColor" viewBox="0 0 20 20"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path></svg>
              </button>
            </div>
            <div class="my-4">
              <div class="flex justify-between px-4 py-3 bg-indigo-100 border border-indigo-200 rounded-t-lg">
                <div class="flex items-center">
                  <img class="w-6 h-6 mr-2 rounded-md" src="https://avatars3.githubusercontent.com/in/2141?s=60&v=4" alt="">
                  <p class="text-sm font-semibold">dependabot-preview</p>
                  <span class="ml-2 text-sm text-gray-600">committed 3 days ago</span>
                </div>
                <div class="hidden md:block md:flex">
                  <a href="" class="flex items-center mb-1 text-sm font-medium text-gray-700 hover:underline hover:text-blue-500">
                    <svg class="w-4 h-4 mr-2 fill-current" height="16" class="octicon octicon-history text-gray" text="gray" viewBox="0 0 16 16" version="1.1" width="16" aria-hidden="true"><path fill-rule="evenodd" d="M1.643 3.143L.427 1.927A.25.25 0 000 2.104V5.75c0 .138.112.25.25.25h3.646a.25.25 0 00.177-.427L2.715 4.215a6.5 6.5 0 11-1.18 4.458.75.75 0 10-1.493.154 8.001 8.001 0 101.6-5.684zM7.75 4a.75.75 0 01.75.75v2.992l2.028.812a.75.75 0 01-.557 1.392l-2.5-1A.75.75 0 017 8.25v-3.5A.75.75 0 017.75 4z"></path>
                    </svg>
                    2,954 commits
                  </a>
                  <a href="" class="flex items-center mb-1 ml-4 text-sm font-medium text-gray-700 hover:underline hover:text-blue-500 hidden lg:block lg:flex">
                    <svg class="w-4 h-4 mr-1 fill-current" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">
                      <path fill-rule="evenodd" d="M5 3.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm0 2.122a2.25 2.25 0 10-1.5 0v.878A2.25 2.25 0 005.75 8.5h1.5v2.128a2.251 2.251 0 101.5 0V8.5h1.5a2.25 2.25 0 002.25-2.25v-.878a2.25 2.25 0 10-1.5 0v.878a.75.75 0 01-.75.75h-4.5A.75.75 0 015 6.25v-.878zm3.75 7.378a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm3-8.75a.75.75 0 100-1.5.75.75 0 000 1.5z"></path>
                    </svg>
                    22 branches
                  </a>
                  <a href="" class="items-center mb-1 ml-4 text-sm font-medium text-gray-700 hover:underline hover:text-blue-500 hidden lg:block lg:flex">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                      <path d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                    </svg>
                    76 tags
                  </a>
                </div>
              </div>
              <div class="hidden text-center border-b border-l border-r rounded-b-lg md:block">
                <div class="flex px-4 py-2 text-sm hover:bg-gray-200">
                  <div class="flex w-1/4">
                    <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20"><path d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"></path></svg>
                    <p class="ml-2 cursor-pointer hover:underline hover:text-blue-500">.github</p>
                  </div>
                    <p class="w-1/2 text-left cursor-pointer hover:underline hover:text-blue-500">Drop fs-extra version to..</p>
                    <p class="w-1/4 text-right">2 months ago</p>
                </div>
                <div class="flex px-4 py-2 text-sm hover:bg-gray-200">
                  <div class="flex w-1/4">
                    <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20"><path d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"></path></svg>
                    <p class="ml-2 cursor-pointer hover:underline hover:text-blue-500">dist</p>
                  </div>
                    <p class="w-1/2 text-left cursor-pointer hover:underline hover:text-blue-500">Add empty .npmignore so dist files are distributed with releases</p>
                    <p class="w-1/4 ml-2 text-right">3 years ago</p>
                </div>
                <div class="flex px-4 py-2 text-sm hover:bg-gray-200">
                  <div class="flex w-1/4">
                    <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20"><path d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"></path></svg>
                    <p class="ml-2 cursor-pointer hover:underline hover:text-blue-500">scripts</p>
                  </div>
                    <p class="w-1/2 text-left cursor-pointer hover:underline hover:text-blue-500">Don't generate color opacity code in color plugins if not necessary</p>
                    <p class="w-1/4 ml-2 text-right">3 months ago</p>
                </div>
                <div class="flex px-4 py-2 text-sm hover:bg-gray-200">
                  <div class="flex w-1/4">
                    <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20"><path d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"></path></svg>
                    <p class="ml-2 cursor-pointer hover:underline hover:text-blue-500">src</p>
                  </div>
                    <p class="w-1/2 text-left cursor-pointer hover:underline hover:text-blue-500">Throw if contains a class</p>
                    <p class="w-1/4 ml-2 text-right">last months</p>
                </div>
                <div class="flex px-4 py-2 text-sm hover:bg-gray-200">
                  <div class="flex w-1/4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                      <path d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                    <p class="ml-2 cursor-pointer hover:underline hover:text-blue-500">LICENSE</p>
                  </div>
                    <p class="w-1/2 text-left cursor-pointer hover:underline hover:text-blue-500">Avoid updating license every year</p>
                    <p class="w-1/4 ml-2 text-right">3 years ago</p>
                </div>
                <div class="flex px-4 py-2 text-sm hover:bg-gray-200">
                  <div class="flex w-1/4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                      <path d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                    <p class="ml-2 cursor-pointer hover:underline hover:text-blue-500">README.md</p>
                  </div>
                    <p class="w-1/2 text-left cursor-pointer hover:underline hover:text-blue-500">Replace logo in README</p>
                    <p class="w-1/4 ml-2 text-right">2 months ago</p>
                </div>
                <div class="flex px-4 py-2 text-sm hover:bg-gray-200">
                  <div class="flex w-1/4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                      <path d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                    <p class="ml-2 cursor-pointer hover:underline hover:text-blue-500">package.json</p>
                  </div>
                    <p class="w-1/2 text-left cursor-pointer hover:underline hover:text-blue-500">1.4.6</p>
                    <p class="w-1/4 ml-2 text-right">last month</p>
                </div>
                <div class="flex px-4 py-2 text-sm hover:bg-gray-200">
                  <div class="flex w-1/4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                      <path d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                    <p class="ml-2 cursor-pointer hover:underline hover:text-blue-500">tailwind.css</p>
                  </div>
                    <p class="w-1/2 text-left cursor-pointer hover:underline hover:text-blue-500">Undo accidental changes to CDN build process</p>
                    <p class="w-1/4 ml-2 text-right">6 months ago</p>
                </div>
              </div>
              <div class="py-2 text-center border-b border-l border-r rounded-b-lg md:hidden">
                <p class="text-blue-600 cursor-pointer hover:underline">View code</p>
              </div>
            </div>
            <div class="py-6 border-b md:border md:rounded-lg md:px-8">
              <div class="font-semibold text-black">README.md</div>
              <div class="my-6">
                <img class="w-64" src="https://camo.githubusercontent.com/87d7034892fd41dc88f3606bb44b853f87cd2c51/68747470733a2f2f7265666163746f72696e6775692e6e7963332e63646e2e6469676974616c6f6365616e7370616365732e636f6d2f7461696c77696e642d6c6f676f2e737667" alt="">
                <p>A utility-first CSS framework for rapidly building custom user interfaces. </p>
                <div class="flex">
                  <div class="flex mr-2 items-center my-4">
                    <div class="flex items-center px-2 leading-none py-1 text-white bg-gray-800 rounded-l-md cursor-pointer">
                      <span class="self-center text-xs font-medium">build</span>
                    </div>
                    <div class="px-2 text-xs font-semibold text-white leading-none py-1 bg-green-500 rounded-r-md cursor-pointer">passing</div>
                  </div>
                  <div class="flex mr-2 items-center my-4">
                    <div class="flex items-center px-2 leading-none py-1 text-white bg-gray-800 rounded-l-md cursor-pointer">
                      <span class="self-center text-xs font-medium">downloads</span>
                    </div>
                    <div class="px-2 text-xs font-semibold text-white leading-none py-1 bg-green-500 rounded-r-md cursor-pointer">8.7M</div>
                  </div>
                </div>
                <hr>
              </div>
              <div class="mb-6">
                <div class="flex items-center pb-2 -mx-4 text-lg font-bold leading-normal text-transparent hover:text-gray-700">
                  <svg class="w-4 h-4 mr-1 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                  <p class="text-black">Documentation</p>
                </div>
                <hr>
                <div class="my-4">For full documentation, visit <a href="#" class="text-blue-600 hover:underline">tailwindcss.com</a></div>
              </div>
              <div class="mb-6">
                <div class="flex items-center pb-2 -mx-4 text-lg font-bold leading-normal text-transparent hover:text-gray-700">
                  <svg class="w-4 h-4 mr-1 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                  <p class="text-black">Community</p>
                </div>
                <hr>
                <div class="my-4">For help, discussion about best practices, or any other conversation that would benefit from being searchable:</div>
                <a href="#" class="my-4 text-blue-600 hover:underline">Discuss Tailwind CSS on GitHub</a>
                <div class="my-4">For casual chit-chat with others using the framework:</div>
                <a href="#" class="my-4 text-blue-600 hover:underline">Join the Tailwind CSS Discord Server</a>
              </div>
              <div class="mb-6">
                <div class="flex items-center pb-2 -mx-4 text-lg font-bold leading-normal text-transparent hover:text-gray-700">
                  <svg class="w-4 h-4 mr-1 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                  <p class="text-black">Contributing</p>
                </div>
                <hr>
                <div class="my-4">If you're interested in contributing to Tailwind CSS, please read our <a href="#" class="text-blue-600 hover:underline">contributing docs</a> <span class="font-semibold text-black">before submitting a pull request.</span></div>
              </div>
            </div>
          </div>
          <div class="ml-4 md:w-1/4">
            <div class="hidden md:block">
              <p class="text-base font-semibold text-black">About</p>
              <div class="pb-2 mt-4 border-b">
                <span class="text-sm lg:text-base">
                A utility-first CSS framework for rapid UI development.
                </span>
                <div class="my-4">
                  <a class="flex items-center mb-2 text-base font-semibold text-blue-600 hover:underline" href="#">
                    <svg class="w-4 h-4 mr-2 text-gray-700" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                    tailwindcss.com/</a>
                  <div class="flex flex-wrap gap-2 my-4">
                    <a href="#" class="px-2 py-1 text-xs leading-none text-blue-600 bg-blue-100 rounded-full hover:bg-blue-200">tailwindcss</a>
                    <a href="#" class="px-2 py-1 text-xs leading-none text-blue-600 bg-blue-100 rounded-full hover:bg-blue-200">css</a>
                    <a href="#" class="px-2 py-1 text-xs leading-none text-blue-600 bg-blue-100 rounded-full hover:bg-blue-200">css-framework</a>
                    <a href="#" class="px-2 py-1 text-xs leading-none text-blue-600 bg-blue-100 rounded-full hover:bg-blue-200">postcss</a>
                    <a href="#" class="px-2 py-1 text-xs leading-none text-blue-600 bg-blue-100 rounded-full hover:bg-blue-200">functional-css</a>
                    <a href="#" class="px-2 py-1 text-xs leading-none text-blue-600 bg-blue-100 rounded-full hover:bg-blue-200">utility-classes</a>
                    <a href="#" class="px-2 py-1 text-xs leading-none text-blue-600 bg-blue-100 rounded-full hover:bg-blue-200">responsive</a>
                  </div>
                  <a href="" class="flex items-center mb-2 text-base font-medium text-gray-700 hover:underline">
                    <svg class="w-4 h-4 mr-2 text-gray-700 fill-current" height="16" class="mr-2 octicon octicon-book" mr="2" viewBox="0 0 16 16" version="1.1" width="16" aria-hidden="true"><path fill-rule="evenodd" d="M0 1.75A.75.75 0 01.75 1h4.253c1.227 0 2.317.59 3 1.501A3.744 3.744 0 0111.006 1h4.245a.75.75 0 01.75.75v10.5a.75.75 0 01-.75.75h-4.507a2.25 2.25 0 00-1.591.659l-.622.621a.75.75 0 01-1.06 0l-.622-.621A2.25 2.25 0 005.258 13H.75a.75.75 0 01-.75-.75V1.75zm8.755 3a2.25 2.25 0 012.25-2.25H14.5v9h-3.757c-.71 0-1.4.201-1.992.572l.004-7.322zm-1.504 7.324l.004-5.073-.002-2.253A2.25 2.25 0 005.003 2.5H1.5v9h3.757a3.75 3.75 0 011.994.574z"></path>
                    </svg>
                    Readme
                  </a>
                  <a href="" class="flex items-center mb-2 text-base font-medium text-gray-700 hover:underline">
                    <svg height="16" class="w-4 h-4 mr-2 text-gray-700 fill-current" mr="2" viewBox="0 0 16 16" version="1.1" width="16" aria-hidden="true">
                      <path fill-rule="evenodd" d="M8.75.75a.75.75 0 00-1.5 0V2h-.984c-.305 0-.604.08-.869.23l-1.288.737A.25.25 0 013.984 3H1.75a.75.75 0 000 1.5h.428L.066 9.192a.75.75 0 00.154.838l.53-.53-.53.53v.001l.002.002.002.002.006.006.016.015.045.04a3.514 3.514 0 00.686.45A4.492 4.492 0 003 11c.88 0 1.556-.22 2.023-.454a3.515 3.515 0 00.686-.45l.045-.04.016-.015.006-.006.002-.002.001-.002L5.25 9.5l.53.53a.75.75 0 00.154-.838L3.822 4.5h.162c.305 0 .604-.08.869-.23l1.289-.737a.25.25 0 01.124-.033h.984V13h-2.5a.75.75 0 000 1.5h6.5a.75.75 0 000-1.5h-2.5V3.5h.984a.25.25 0 01.124.033l1.29.736c.264.152.563.231.868.231h.162l-2.112 4.692a.75.75 0 00.154.838l.53-.53-.53.53v.001l.002.002.002.002.006.006.016.015.045.04a3.517 3.517 0 00.686.45A4.492 4.492 0 0013 11c.88 0 1.556-.22 2.023-.454a3.512 3.512 0 00.686-.45l.045-.04.01-.01.006-.005.006-.006.002-.002.001-.002-.529-.531.53.53a.75.75 0 00.154-.838L13.823 4.5h.427a.75.75 0 000-1.5h-2.234a.25.25 0 01-.124-.033l-1.29-.736A1.75 1.75 0 009.735 2H8.75V.75zM1.695 9.227c.285.135.718.273 1.305.273s1.02-.138 1.305-.273L3 6.327l-1.305 2.9zm10 0c.285.135.718.273 1.305.273s1.02-.138 1.305-.273L13 6.327l-1.305 2.9z"></path></svg>
                    MIT License
                  </a>
                </div>
              </div>
            </div>
            <div class="px-6 py-6 -mx-10 border-b md:mx-0 md:px-0">
              <p class="text-base font-semibold text-black">Latest release</p>
              <div class="flex mt-4 text-sm font-semibold text-black">
                <svg class="w-4 h-4 mt-1 mr-2 text-green-600" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                </svg>
                <div>
                  v1.4.6 <br>
                  <span class="text-xs text-gray-600">on May 8</span>
                </div>
              </div>
              <div class="mt-4 text-xs text-blue-600">+ 75 releases</div>
            </div>
            <div class="px-6 py-6 -mx-10 border-b md:mx-0 md:px-0">
              <p class="text-base font-semibold text-black">User by
                <span class="w-4 h-4 px-2 py-1 ml-1 text-xs bg-gray-300 rounded-full">5,000 +</span>
              </p>
              <div class="flex items-center mt-4 overflow-hidden text-blue-600 cursor-pointer hover:underline">
                <img class="inline-block object-cover w-10 h-10 text-white border-2 border-gray-400 rounded-full shadow-sm" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                <img class="inline-block object-cover w-10 h-10 -ml-2 text-white border-2 border-gray-400 rounded-full shadow-sm" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                <img class="inline-block object-cover w-10 h-10 -ml-2 text-white border-2 border-gray-400 rounded-full shadow-sm" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="" />
                <img class="inline-block object-cover w-10 h-10 -ml-2 text-white border-2 border-gray-400 rounded-full shadow-sm" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="" />
                <img class="inline-block object-cover w-10 h-10 -ml-2 text-white border-2 border-gray-400 rounded-full shadow-sm" src="https://images.unsplash.com/photo-1553521041-d168abd31de3?ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80" alt="" />
                <img class="inline-block object-cover w-10 h-10 -ml-2 text-white border-2 border-gray-400 rounded-full shadow-sm" src="https://images.unsplash.com/photo-1497551060073-4c5ab6435f12?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=667&q=80" alt="" />
                <img class="inline-block object-cover w-10 h-10 -ml-2 text-white border-2 border-gray-400 rounded-full shadow-sm" src="https://images.unsplash.com/photo-1460904577954-8fadb262612c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1240&q=80" alt="" />
                <p class="pl-2 text-sm font-medium text-blue-600">+ 49,635</p>
              </div>
            </div>
            <div class="px-6 py-6 -mx-10 border-b md:mx-0 md:px-0">
              <p class="text-base font-semibold text-black">Contributors
                <span class="w-4 h-4 px-2 py-1 ml-1 text-xs bg-gray-300 rounded-full">109</span>
              </p>
              <div class="flex flex-wrap items-center mt-4 -mx-2 overflow-hidden">
                <img class="object-cover w-10 h-10 mx-2 mt-2 text-white border-2 border-gray-400 rounded-full shadow-sm cursor-pointer md:mt-0" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                <img class="object-cover w-10 h-10 mx-2 mt-2 text-white border-2 border-gray-400 rounded-full shadow-sm cursor-pointer md:mt-0" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                <img class="object-cover w-10 h-10 mx-2 mt-2 text-white border-2 border-gray-400 rounded-full shadow-sm cursor-pointer md:mt-0" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="" />
                <img class="object-cover w-10 h-10 mx-2 mt-2 text-white border-2 border-gray-400 rounded-full shadow-sm cursor-pointer md:mt-0" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="" />
                <img class="object-cover w-10 h-10 mx-2 mt-2 text-white border-2 border-gray-400 rounded-full shadow-sm cursor-pointer md:mt-0" src="https://images.unsplash.com/photo-1553521041-d168abd31de3?ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80" alt="" />
                <img class="object-cover w-10 h-10 mx-2 mt-2 text-white border-2 border-gray-400 rounded-full shadow-sm cursor-pointer md:mt-0" src="https://images.unsplash.com/photo-1497551060073-4c5ab6435f12?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=667&q=80" alt="" />
                <img class="object-cover w-10 h-10 mx-2 mt-2 text-white border-2 border-gray-400 rounded-full shadow-sm cursor-pointer md:mt-0" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="" />
                <img class="object-cover w-10 h-10 mx-2 mt-2 text-white border-2 border-gray-400 rounded-full shadow-sm cursor-pointer md:mt-0" src="https://images.unsplash.com/photo-1460904577954-8fadb262612c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1240&q=80" alt="" />
              </div>
              <p class="pt-2 text-xs font-medium text-blue-700 hover:underline">+ 98 contributors</p>
            </div>
            <div class="px-6 py-6 -mx-10 border-b md:mx-0 md:px-0">
              <p class="text-base font-semibold text-black">Languages</p>
              <div class="w-full mt-4 bg-yellow-500 rounded-full shadow">
                <div class="w-11/12 py-1 text-xs leading-none text-center text-white bg-purple-800 rounded-full"></div>
              </div>
              <div class="flex mt-4">
                <div class="flex items-center text-sm">
                  <div class="w-2 h-2 mr-2 bg-purple-800 rounded-full"></div>
                  CSS 94.1 %
                </div>
                <div class="flex items-center ml-4 text-sm">
                  <div class="w-2 h-2 mr-2 bg-yellow-500 rounded-full"></div>
                  Javascript 5.9%
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-8">
          <div class="w-full px-8 mx-auto hidden md:block md:container">
              <div class="items-center justify-between py-8 border-t md:flex">
                <div class="flex justify-start justify-between text-xs md:mt-0 md:w-2/5">
                  <div class="mr-4 text-gray-600">
                    &copy; 2020 GitHub, Inc.
                  </div>
                  <div class="mr-4">
                    <a href="#" class="text-blue-600 hover:underline focus:outline-none">
                      Terms
                    </a>
                  </div>
                  <div class="mr-4">
                    <a href="#" class="text-blue-600 hover:underline focus:outline-none">
                      Privacy
                    </a>
                  </div>
                  <div class="mr-4">
                    <a href="#" class="text-blue-600 hover:underline focus:outline-none">
                      Security
                    </a>
                  </div>
                  <div class="mr-4">
                    <a href="#" class="text-blue-600 hover:underline focus:outline-none">
                      Status
                    </a>
                  </div>
                  <div class="mr-4">
                    <a href="#" class="text-blue-600 hover:underline focus:outline-none">
                      Help
                    </a>
                  </div>
                </div>
                <div class="justify-center hidden w-1/5 text-center md:block">
                  <svg class="w-6 h-6 mx-auto text-gray-500 cursor-pointer fill-current hover:text-gray-600" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                </div>
                <div class="flex justify-end justify-between mt-2 text-xs text-right md:mt-0 md:w-2/5">
                  <div class="ml-4">
                    <a href="#" class="text-blue-600 hover:underline focus:outline-none">
                      Contact GitHub
                    </a>
                  </div>
                  <div class="ml-4">
                    <a href="#" class="text-blue-600 hover:underline focus:outline-none">
                      Pricing
                    </a>
                  </div>
                  <div class="ml-4">
                    <a href="#" class="text-blue-600 hover:underline focus:outline-none">
                      Api
                    </a>
                  </div>
                  <div class="ml-4">
                    <a href="#" class="text-blue-600 hover:underline focus:outline-none">
                      Training
                    </a>
                  </div>
                  <div class="ml-4">
                    <a href="#" class="text-blue-600 hover:underline focus:outline-none">
                      Blog
                    </a>
                  </div>
                  <div class="ml-4">
                    <a href="#" class="text-blue-600 hover:underline focus:outline-none">
                      About
                    </a>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="mt-12 border-t md:hidden border-gray-200 pt-8 mx-auto">
          <p class="text-base leading-6 text-gray-600 xl:text-center">
            © 2020 GitHub, Inc.,
          </p>
        </div>
      </div>
    </div>
</div>
</x-app-layout>
