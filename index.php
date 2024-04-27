<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/css/tw-elements.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  <link rel="stylesheet" href="assets/style.css">
  <script src="https://cdn.tailwindcss.com/3.3.0"></script>
  <script src="assets/script.js"></script>
  <title>Isaac Cruz - Portafolio</title>
</head>

<body>
  <div class="w-full">
    <!-- Main navigation container -->
    <nav class="relative flex w-full flex-nowrap items-center justify-between bg-[#1C282E] py-2 shadow-dark-mild dark:bg-[#1C282E] lg:flex-wrap lg:justify-start lg:py-4" data-twe-navbar-ref>
      <div class="flex w-full lg:container lg:mx-auto flex-wrap items-center justify-between px-3">
        <div class="ms-2">
          <a class="text-xl text-[#A1AFBA] dark:text-[#A1AFBA]" href="#">Isaac Cruz</a>
        </div>
        <!-- Hamburger button for mobile view -->
        <button class="block border-0 bg-transparent px-2 text-[#A1AFBA]/50 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden" type="button" data-twe-collapse-init data-twe-target="#navbarSupportedContent3" aria-controls="navbarSupportedContent3" aria-expanded="false" aria-label="Toggle navigation">
          <!-- Hamburger icon -->
          <span class="[&>svg]:w-7 [&>svg]:stroke-black/50 dark:[&>svg]:stroke-neutral-200">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
              <path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
            </svg>
          </span>
        </button>

        <!-- Collapsible navbar container -->
        <div class="!visible mt-2 hidden basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto" id="navbarSupportedContent3" data-twe-collapse-item>
          <ul class="list-style-none me-auto flex flex-col ps-0 lg:mt-1 lg:flex-row" data-twe-navbar-nav-ref>
            <li class="my-4 ps-2 lg:my-0 lg:pe-1 lg:ps-2" data-twe-nav-item-ref>
              <a class="text-[#A1AFBA] dark:text-white lg:px-2" aria-current="page" href="#" data-twe-nav-link-ref>Inicio</a>
            </li>
            <li class="mb-4 ps-2 lg:mb-0 lg:pe-1 lg:ps-0" data-twe-nav-item-ref>
              <a class="p-0 text-[#A1AFBA]/60 transition duration-200 hover:text-[#A1AFBA]/80 hover:ease-in-out focus:text-[#A1AFBA]/80 active:text-[#A1AFBA]/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2" href="#" data-twe-nav-link-ref>Habilidades</a>
            </li>
            <li class="mb-4 ps-2 lg:mb-0 lg:pe-1 lg:ps-0" data-twe-nav-item-ref>
              <a class="p-0 text-[#A1AFBA]/60 transition duration-200 hover:text-[#A1AFBA]/80 hover:ease-in-out focus:text-[#A1AFBA]/80 active:text-[#A1AFBA]/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2" href="#" data-twe-nav-link-ref>Proyectos</a>
            </li>
            <li class="mb-4 ps-2 lg:mb-0 lg:pe-1 lg:ps-0" data-twe-nav-item-ref>
              <a class="p-0 text-[#A1AFBA]/60 transition duration-200 hover:text-[#A1AFBA]/80 hover:ease-in-out focus:text-[#A1AFBA]/80 active:text-[#A1AFBA]/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2" href="#" data-twe-nav-link-ref>Asesorías</a>
            </li>
          </ul>
          <!-- <span class="ms-2 text-[#A1AFBA]/60 dark:text-white/60">Navbar text with an inline element</span> -->
        </div>
      </div>
    </nav>
  </div>

  <!-- Presentation -->
  <section class="lg:container lg:mx-auto py-5 lg:py-12 px-3 flex flex-col md:flex-row gap-5 justify-center">
    <div class="basis-1/4 px-2 flex justify-center items-center">
      <img src="assets/img/Image-Header.png" alt="isaac-presentation-photo" class="max-w-lg rounded-md">
    </div>
    <div class="basis-2/4 flex flex-col px-2 py-2 gap-5">
      <h2 class="text-3xl font-bold text-[#273F4B]">Hola soy Isaac!</h2>
      <p class="w-full text-base md:text-md xl:text-lg">
        <?php print date('Y'); ?> Tengo 13 años de experiencia como desarrollador Fullstack creando aplicaciones web con PHP utilizando el Framework Laravel. Además, tengo la habilidad de crear aplicaciones full responsive utilizando los frameworks Bootstarp 5 o Tailwind CSS. Asimismo, tengo experiencia con el uso de bases de datos relacionales MySql y SQL. Me gusta dedicarme a simplificar procesos y funcionalidades de los sistemas con base en los requerimientos de los usuarios y así brindarles una mejor experiencia.
      </p>
      <div class="flex justify-around md:justify-start md:gap-4 text-base sm:text-sm md:text-md lg:text-lg">
        <p>
          <i class="fa-solid fa-envelope"></i>
          zack115010@gmail.com
        </p>
        <p>
          <i class="fa-brands fa-whatsapp"></i>
          +503 7602-2471
        </p>
      </div>
      <div class="flex justify-center md:justify-start">
        <a href="#!" type="button" class="rounded bg-[#6A8595] p-3 px-4 lg:px-6 font-medium leading-normal text-surface text-xl lg:text-2xl transition duration-150 ease-in-out hover:bg-gray-700 focus:outline-none focus:ring-0 dark:text-white dark:hover:bg-secondary-900" data-twe-ripple-init>
          Contáctame
        </a>
      </div>
    </div>
  </section>

  <!-- Tools -->
  <section class="lg:container lg:mx-auto py-8 lg:py-12 px-3 md:px-5 flex flex-col gap-5 justify-center">
    <h2 class="w-full text-2xl xl:text-3xl font-bold text-[#273F4B] text-center md:text-left underline underline-offset-8 px-2 mb-5">Herramientas</h2>
    <div class="w-full px-2 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
      <!-- Card -->
      <div class="flex flex-row gap-3 shadow-md py-3 px-5 rounded-md items-center">
        <!-- Card Icon -->
        <div>
          <img src="assets/img/skills/Logo-Laravel.png" alt="">
        </div>
        <!-- Card Info -->
        <div class="flex flex-col gap-3">
          <p class="text-xl font-bold">Laravel</p>
          <p>Desarrollo backend y APIs</p>
        </div>
      </div>
      <!-- Card -->
      <div class="flex flex-row gap-3 shadow-md py-3 px-5 rounded-md items-center">
        <!-- Card Icon -->
        <div>
          <img src="assets/img/skills/Logo-Bootstrap.png" alt="">
        </div>
        <!-- Card Info -->
        <div class="flex flex-col gap-3">
          <p class="text-xl font-bold">Bootstarp</p>
          <p>Desarrollo frontend responsive</p>
        </div>
      </div>
      <!-- Card -->
      <div class="flex flex-row gap-3 shadow-md py-3 px-5 rounded-md items-center">
        <!-- Card Icon -->
        <div>
          <img src="assets/img/skills/Logo-Wordpress.png" alt="">
        </div>
        <!-- Card Info -->
        <div class="flex flex-col gap-3">
          <p class="text-xl font-bold">Wordpress</p>
          <p>Desarrollo de temas y bloques personalizados</p>
        </div>
      </div>
      <!-- Card -->
      <div class="flex flex-row gap-3 shadow-md py-3 px-5 rounded-md items-center">
        <!-- Card Icon -->
        <div>
          <img src="assets/img/skills/Logo-React.png" alt="">
        </div>
        <!-- Card Info -->
        <div class="flex flex-col gap-3">
          <p class="text-xl font-bold">React JS</p>
          <p>Desarrollo de aplicaciones reactivas e interactivas</p>
        </div>
      </div>
      <!-- Card -->
      <div class="flex flex-row gap-3 shadow-md py-3 px-5 rounded-md items-center">
        <!-- Card Icon -->
        <div>
          <img src="assets/img/skills/Logo-Laravel.png" alt="">
        </div>
        <!-- Card Info -->
        <div class="flex flex-col gap-3">
          <p class="text-xl font-bold">Laravel</p>
          <p>Desarrollo backend y APIs</p>
        </div>
      </div>
      <!-- Card -->
      <div class="flex flex-row gap-3 shadow-md py-3 px-5 rounded-md items-center">
        <!-- Card Icon -->
        <div>
          <img src="assets/img/skills/Logo-Bootstrap.png" alt="">
        </div>
        <!-- Card Info -->
        <div class="flex flex-col gap-3">
          <p class="text-xl font-bold">Bootstarp</p>
          <p>Desarrollo frontend responsive</p>
        </div>
      </div>
      <!-- Card -->
      <div class="flex flex-row gap-3 shadow-md py-3 px-5 rounded-md items-center">
        <!-- Card Icon -->
        <div>
          <img src="assets/img/skills/Logo-Wordpress.png" alt="">
        </div>
        <!-- Card Info -->
        <div class="flex flex-col gap-3">
          <p class="text-xl font-bold">Wordpress</p>
          <p>Desarrollo de temas y bloques personalizados</p>
        </div>
      </div>
      <!-- Card -->
      <div class="flex flex-row gap-3 shadow-md py-3 px-5 rounded-md items-center">
        <!-- Card Icon -->
        <div>
          <img src="assets/img/skills/Logo-React.png" alt="">
        </div>
        <!-- Card Info -->
        <div class="flex flex-col gap-3">
          <p class="text-xl font-bold">React JS</p>
          <p>Desarrollo de aplicaciones reactivas e interactivas</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects -->
  <section class="lg:container lg:mx-auto py-8 lg:py-12 px-3 md:px-5 flex flex-col gap-5 justify-center">
    <h2 class="w-full text-2xl xl:text-3xl font-bold text-[#273F4B] text-center md:text-left underline underline-offset-8 px-2 mb-5">Proyectos</h2>
    <div class="w-full px-2 grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-5">
      <!-- Card -->
      <div class="flex flex-col gap-3 shadow-md py-3 px-5 rounded-md items-center">
        <!-- Card Title -->
        <!-- <p class="w-full text-2xl font-bold text-center hidden lg:block">Recepción de Documentos Electrónicos Tributarios</p> -->
        <!-- Card Icon -->
        <div class="relative max-h-96 h-96 w-full flex justify-end items-end card-image rounded-md">
          <div class="max-h-96 h-96 w-full overflow-hidden bg-[url('/assets/img/projects/edu-superior-index.png')] bg-top bg-cover rounded-md background-image shadow-sm">
          </div>
          <h3 class="absolute text-xl font-bold bg-[#6A8595] hover:bg-gray-700 px-4 py-2 rounded text-white cursor-pointer">Ver galería</h3>
        </div>
        <!-- Card Info -->
        <div class="flex flex-col gap-3 w-full py-3">
          <!-- <p class="text-xl font-bold block lg:hidden">Recepción de Documentos Electrónicos Tributarios</p> -->
          <p class="text-xl font-bold">Recepción de Documentos Electrónicos Tributarios</p>
          <p><b>Empresa:</b> Ministerio de Vivienda de El Salvador</p>
          <p><b>Roles:</b> Analista, Diseñador UX/UI, Desarrollador y SCRUM Master</p>
          <p><b>Tecnologías:</b> Laravel, Livewire, Tailwind y Alpine JS</p>
          <p><b>Descripción:</b><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi possimus cupiditate iste? Quo, consequatur obcaecati qui cumque distinctio neque, laborum, dignissimos facilis iste voluptatem cupiditate quam unde tempora a delectus.</p>
        </div>
      </div>
      <!-- Card -->
      <div class="flex flex-col gap-3 shadow-md py-3 px-5 rounded-md items-center">
        <!-- Card Title -->
        <!-- <p class="w-full text-2xl font-bold text-center hidden lg:block">Recepción de Documentos Electrónicos Tributarios</p> -->
        <!-- Card Icon -->
        <div class="relative max-h-96 h-96 w-full flex justify-end items-end card-image rounded-md">
          <div class="max-h-96 h-96 w-full overflow-hidden bg-[url('/assets/img/projects/edu-superior-index.png')] bg-top bg-cover rounded-md background-image shadow-sm">
          </div>
          <h3 class="absolute text-xl font-bold bg-[#6A8595] hover:bg-gray-700 px-4 py-2 rounded text-white cursor-pointer">Ver galería</h3>
        </div>
        <!-- Card Info -->
        <div class="flex flex-col gap-3 w-full py-3">
          <!-- <p class="text-xl font-bold block lg:hidden">Recepción de Documentos Electrónicos Tributarios</p> -->
          <p class="text-xl font-bold">Gestión de Usuarios para Múltiples Sistemas</p>
          <p><b>Empresa:</b> Ministerio de Vivienda de El Salvador</p>
          <p><b>Roles:</b> Analista, Diseñador UX/UI, Desarrollador y SCRUM Master</p>
          <p><b>Tecnologías:</b> Laravel, Livewire, Tailwind y Alpine JS</p>
          <p><b>Descripción:</b><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi possimus cupiditate iste? Quo, consequatur obcaecati qui cumque distinctio neque, laborum, dignissimos facilis iste voluptatem cupiditate quam unde tempora a delectus.</p>
        </div>
      </div>
      <!-- Card -->
      <div class="flex flex-col gap-3 shadow-md py-3 px-5 rounded-md items-center">
        <!-- Card Title -->
        <!-- <p class="w-full text-2xl font-bold text-center hidden lg:block">Recepción de Documentos Electrónicos Tributarios</p> -->
        <!-- Card Icon -->
        <div class="relative max-h-96 h-96 w-full flex justify-end items-end card-image rounded-md">
          <div class="max-h-96 h-96 w-full overflow-hidden bg-[url('/assets/img/projects/edu-superior-index.png')] bg-top bg-cover rounded-md background-image shadow-sm">
          </div>
          <h3 class="absolute text-xl font-bold bg-[#6A8595] hover:bg-gray-700 px-4 py-2 rounded text-white cursor-pointer">Ver galería</h3>
        </div>
        <!-- Card Info -->
        <div class="flex flex-col gap-3 w-full py-3">
          <!-- <p class="text-xl font-bold block lg:hidden">Recepción de Documentos Electrónicos Tributarios</p> -->
          <p class="text-xl font-bold">Proveeduría - Gestión de Insumos</p>
          <p><b>Empresa:</b> Ministerio de Vivienda de El Salvador</p>
          <p><b>Roles:</b> Analista, Diseñador UX/UI, Desarrollador y SCRUM Master</p>
          <p><b>Tecnologías:</b> Laravel, Livewire, Tailwind y Alpine JS</p>
          <p><b>Descripción:</b><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi possimus cupiditate iste? Quo, consequatur obcaecati qui cumque distinctio neque, laborum, dignissimos facilis iste voluptatem cupiditate quam unde tempora a delectus.</p>
        </div>
      </div>
      <!-- Card -->
      <div class="flex flex-col gap-3 shadow-md py-3 px-5 rounded-md items-center">
        <!-- Card Title -->
        <!-- <p class="w-full text-2xl font-bold text-center hidden lg:block">Recepción de Documentos Electrónicos Tributarios</p> -->
        <!-- Card Icon -->
        <div class="relative max-h-96 h-96 w-full flex justify-end items-end card-image rounded-md">
          <div class="max-h-96 h-96 w-full overflow-hidden bg-[url('/assets/img/projects/edu-superior-index.png')] bg-top bg-cover rounded-md background-image shadow-sm">
          </div>
          <h3 class="absolute text-xl font-bold bg-[#6A8595] hover:bg-gray-700 px-4 py-2 rounded text-white cursor-pointer">Ver galería</h3>
        </div>
        <!-- Card Info -->
        <div class="flex flex-col gap-3 w-full py-3">
          <!-- <p class="text-xl font-bold block lg:hidden">Recepción de Documentos Electrónicos Tributarios</p> -->
          <p class="text-xl font-bold">Assesstment - E-learning y evaluación del personal</p>
          <p><b>Empresa:</b> Ministerio de Vivienda de El Salvador</p>
          <p><b>Roles:</b> Analista, Diseñador UX/UI, Desarrollador y SCRUM Master</p>
          <p><b>Tecnologías:</b> Laravel, Livewire, Tailwind y Alpine JS</p>
          <p><b>Descripción:</b><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi possimus cupiditate iste? Quo, consequatur obcaecati qui cumque distinctio neque, laborum, dignissimos facilis iste voluptatem cupiditate quam unde tempora a delectus.</p>
        </div>
      </div>
      <!-- Card -->
      <div class="flex flex-col gap-3 shadow-md py-3 px-5 rounded-md items-center">
        <!-- Card Title -->
        <!-- <p class="w-full text-2xl font-bold text-center hidden lg:block">Recepción de Documentos Electrónicos Tributarios</p> -->
        <!-- Card Icon -->
        <div class="relative max-h-96 h-96 w-full flex justify-end items-end card-image rounded-md">
          <div class="max-h-96 h-96 w-full overflow-hidden bg-[url('/assets/img/projects/edu-superior-index.png')] bg-top bg-cover rounded-md background-image shadow-sm">
          </div>
          <h3 class="absolute text-xl font-bold bg-[#6A8595] hover:bg-gray-700 px-4 py-2 rounded text-white cursor-pointer">Ver galería</h3>
        </div>
        <!-- Card Info -->
        <div class="flex flex-col gap-3 w-full py-3">
          <!-- <p class="text-xl font-bold block lg:hidden">Recepción de Documentos Electrónicos Tributarios</p> -->
          <p class="text-xl font-bold">RenaRecursos - Gestión de documentos internos</p>
          <p><b>Empresa:</b> Ministerio de Vivienda de El Salvador</p>
          <p><b>Roles:</b> Analista, Diseñador UX/UI, Desarrollador y SCRUM Master</p>
          <p><b>Tecnologías:</b> Laravel, Livewire, Tailwind y Alpine JS</p>
          <p><b>Descripción:</b><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi possimus cupiditate iste? Quo, consequatur obcaecati qui cumque distinctio neque, laborum, dignissimos facilis iste voluptatem cupiditate quam unde tempora a delectus.</p>
        </div>
      </div>
      <!-- Card -->
      <div class="flex flex-col gap-3 shadow-md py-3 px-5 rounded-md items-center">
        <!-- Card Title -->
        <!-- <p class="w-full text-2xl font-bold text-center hidden lg:block">Recepción de Documentos Electrónicos Tributarios</p> -->
        <!-- Card Icon -->
        <div class="relative max-h-96 h-96 w-full flex justify-end items-end card-image rounded-md">
          <div class="max-h-96 h-96 w-full overflow-hidden bg-[url('/assets/img/projects/ccsa-index.png')] bg-top bg-cover rounded-md background-image shadow-sm">
          </div>
          <h3 class="absolute text-xl font-bold bg-[#6A8595] hover:bg-gray-700 px-4 py-2 rounded text-white cursor-pointer">Ver galería</h3>
        </div>
        <!-- Card Info -->
        <div class="flex flex-col gap-3 w-full py-3">
          <!-- <p class="text-xl font-bold block lg:hidden">Recepción de Documentos Electrónicos Tributarios</p> -->
          <p class="text-xl font-bold">Sistema de Notas - Ingreso de notas para bachillerato</p>
          <p><b>Empresa:</b> Ministerio de Vivienda de El Salvador</p>
          <p><b>Roles:</b> Analista, Diseñador UX/UI, Desarrollador y SCRUM Master</p>
          <p><b>Tecnologías:</b> Laravel, Livewire, Tailwind y Alpine JS</p>
          <p><b>Descripción:</b><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi possimus cupiditate iste? Quo, consequatur obcaecati qui cumque distinctio neque, laborum, dignissimos facilis iste voluptatem cupiditate quam unde tempora a delectus.</p>
        </div>
      </div>
    </div>
  </section>

  <section>
    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="relative h-96" data-twe-carousel-init data-twe-ride="carousel">
      <!--Carousel indicators-->
      <div class="absolute bottom-0 left-0 right-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0" data-twe-carousel-indicators>
        <button type="button" data-twe-target="#carouselExampleCaptions" data-twe-slide-to="0" data-twe-carousel-active class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-twe-target="#carouselExampleCaptions" data-twe-slide-to="1" class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none" aria-label="Slide 2"></button>
        <button type="button" data-twe-target="#carouselExampleCaptions" data-twe-slide-to="2" class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none" aria-label="Slide 3"></button>
      </div>

      <!--Carousel items-->
      <div class="relative w-full overflow-hidden after:clear-both after:block after:content-[''] h-96">
        <!--First item-->
        <div class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none h-96" data-twe-carousel-active data-twe-carousel-item style="backface-visibility: hidden">
          <img src="https://mdbootstrap.com/img/new/textures/full/243.jpg" class="block w-full " alt="15 years of experience in the IT industry" />
          <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
            <h5 class="mb-3 text-xl">
              15 years of experience in the IT industry
            </h5>
            <p class="mb-3">
              I am in love with technology and have spent half my life
              developing it
            </p>
          </div>
        </div>

        <!--Second item-->
        <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none h-96" data-twe-carousel-item style="backface-visibility: hidden">
          <img src="https://mdbootstrap.com/img/new/textures/full/102.jpg" class="block w-full " alt="243 completed projects" />
          <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
            <h5 class="mb-3 text-xl">243 completed projects</h5>
            <p class="mb-3">
              I love challenges and treat each project as my own
            </p>
          </div>
        </div>

        <!--Third item-->
        <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none h-96" data-twe-carousel-item style="backface-visibility: hidden">
          <img src="https://mdbootstrap.com/img/new/textures/full/107.jpg" class="block w-full " alt="53 satisfied customers" />
          <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
            <h5 class="mb-3 text-xl">53 satisfied customers</h5>
            <p class="mb-3">
              There is no better reward for me than a happy customer
            </p>
          </div>
        </div>
      </div>

      <!--Carousel controls - prev item-->
      <button class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none" type="button" data-twe-target="#carouselExampleCaptions" data-twe-slide="prev">
        <span class="inline-block h-8 w-8">
          <svg xmlns="https://mdbootstrap.com/img/new/textures/full/107.jpg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
          </svg>
        </span>
        <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
      </button>

      <!--Carousel controls - next item-->
      <button class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none" type="button" data-twe-target="#carouselExampleCaptions" data-twe-slide="next">
        <span class="inline-block h-8 w-8">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
          </svg>
        </span>
        <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
      </button>
    </div>
    <!-- Carousel -->
  </section>

  <!--Footer container-->
  <footer class="flex flex-col items-center bg-[#1C282E] text-center text-surface dark:bg-[#1C282E] dark:text-[#A1AFBA]">
    <div class="w-full pt-7">
      <!-- Social media icons container -->
      <h2 class="text-4xl mb-7 text-[#A1AFBA] px-3">¿Tienes Un Proyecto En Mente?</h2>
      <div class="mb-7 flex justify-center space-x-2">
        <!-- 
        <a href="#!" type="button"
          class="rounded-full bg-transparent p-3 font-medium uppercase leading-normal text-surface transition duration-150 ease-in-out hover:bg-gray-700 focus:outline-none focus:ring-0 dark:text-white dark:hover:bg-secondary-900"
          data-twe-ripple-init>
          <span class="[&>svg]:h-5 [&>svg]:w-5">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 320 512">
              <path
                d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
            </svg>
          </span>
        </a>
        -->
        <a href="#!" type="button" class="rounded bg-[#6A8595] p-3 px-4 lg:px-6 font-medium leading-normal text-surface text-xl lg:text-2xl transition duration-150 ease-in-out hover:bg-gray-700 focus:outline-none focus:ring-0 dark:text-white dark:hover:bg-secondary-900" data-twe-ripple-init>
          Contáctame
        </a>
      </div>
    </div>

    <!--Copyright section-->
    <div class="w-full bg-black/5 pb-7 text-center">
      © 2024
      <a href="https://zackpenado.github.io/" class="mx-3">Isaac Cruz - Portafolio</a>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/tw-elements/js/tw-elements.umd.min.js"></script>
</body>

</html>