let projects = new Object();

projects.p1 = {
    'image'       : 'bg-[url("/assets/img/projects/cocoda/CoCoDA-index-01.png")]',
    'title'       : 'Sitio web Libélula',
    'client'      : 'Libélula Spanish School',
    'url'         : 'http://libelulaschool.com/',
    'roles'       : '',
    'tools'       : 'Wordpress, CSS3 y Figma',
    'enddate'     : '23/04/2024',
    'description' : 'La asesoría para este sitio web consistió en una guía detallada sobre las funcionalidades de WordPress a través de un recorrido completo del sitio y una exposición de ejemplos asociados con el objetivo de brindar una noción más amplia de esta herramienta y aprovechar al máximo sus capacidades.Así como brindarles una perspectiva profesional sobre los cambios en apariencia y funcionalidad de su plataforma, atendiendo a sus necesidades particulares como organización sin fines de lucro.'
};
projects.p2 = {
    'image'       : 'bg-[url("/assets/img/projects/cocoda/CoCoDA-index-01.png")]',
    'title'       : 'Sitio web CoCoDA',
    'client'      : 'CoCoDA',
    'url'         : 'https://cocoda.org',
    'roles'       : 'Asesor para el uso de Wordpress',
    'tools'       : 'Wordpress, CSS3 y Figma',
    'enddate'     : '23/04/2024',
    'description' : ''
};
projects.p3 = {
    'image'       : 'bg-[url("/assets/img/projects/edusuperior/edu-superior-index-01.png")]',
    'title'       : 'Sitio web Edu Superior',
    'client'      : 'Edu Superior',
    'url'         : 'https://edusuperior.org.sv',
    'roles'       : 'Desarrollador Wordpress y Maquetador',
    'tools'       : 'Wordpress, HTML5, CSS3, Javascript y MySql',
    'enddate'     : '22/04/2024',
    'description' : ''
};
projects.p4 = {
    'image'       : 'bg-[url("/assets/img/projects/dtevivienda/DTE-index.jpeg")]',
    'title'       : 'Recepción de Documentos Electrónicos Tributarios',
    'client'      : 'Ministerio de Vivienda de El Salvador',
    'url'         : 'N/A',
    'roles'       : 'Analista, Diseñador UX/UI, Desarrollador y SCRUM Master',
    'tools'       : 'Laravel, Livewire, Tailwind y Alpine JS',
    'enddate'     : '22/03/2024',
    'description' : ''
};
projects.p5 = {
    'image'       : 'bg-[url("/assets/img/projects/usrvivienda/Gestion-Usuarios-index.jpeg")]',
    'title'       : 'Gestión de Usuarios para Múltiples Sistemas',
    'client'      : 'Ministerio de Vivienda de El Salvador',
    'url'         : 'N/A',
    'roles'       : 'Analista, Diseñador UX/UI, Desarrollador y SCRUM Master',
    'tools'       : 'Laravel, Livewire, Tailwind y Alpine JS',
    'enddate'     : '01/12/2023',
    'description' : ''
};
projects.p6 = {
    'image'       : 'bg-[url("/assets/img/projects/proveeduria/Proveeduria-index.jpeg")]',
    'title'       : 'Proveeduría - Gestión de Insumos',
    'client'      : 'Ministerio de Vivienda de El Salvador',
    'url'         : 'N/A',
    'roles'       : 'Analista, Diseñador UX/UI, Desarrollador y SCRUM Master',
    'tools'       : 'Laravel, Livewire, Tailwind y Alpine JS',
    'enddate'     : '24/04/2024',
    'description' : ''
};
projects.p7 = {
    'image'       : 'bg-[url("/assets/img/projects/assessment/Assessment-login.png")]',
    'title'       : 'Assessment - E-learning y evaluación del personal',
    'client'      : 'Rena Ware Internacional',
    'url'         : 'N/A',
    'roles'       : 'Analista, Diseñador UX/UI, Desarrollador y SCRUM Master',
    'tools'       : 'Laravel, Livewire, Tailwind y Alpine JS',
    'enddate'     : '24/04/2024',
    'description' : ''
};
projects.p8 = {
    'image'       : 'bg-[url("/assets/img/projects/renakit/renakit-index-01.png")]',
    'title'       : 'RenaRecursos - Gestión de documentos internos',
    'client'      : 'Rena Ware Internacional',
    'url'         : 'N/A',
    'roles'       : 'Analista, Diseñador UX/UI, Desarrollador y SCRUM Master',
    'tools'       : 'Laravel, Livewire, Tailwind y Alpine JS',
    'enddate'     : '24/04/2024',
    'description' : ''
};
projects.p9 = {
    'image'       : 'bg-[url("/assets/img/projects/ccsa/ccsa-index.png")]',
    'title'       : 'Sistema de Notas - Ingreso de notas para bachillerato',
    'client'      : 'Centro Cultural Salvadoreño Americano',
    'url'         : 'N/A',
    'roles'       : 'Analista, Diseñador UX/UI, Desarrollador y SCRUM Master',
    'tools'       : 'Laravel, Livewire, Tailwind y Alpine JS',
    'enddate'     : '24/04/2024',
    'description' : ''
};

let projectsCards = "";
for (const [key, value] of Object.entries(projects)) {
    projectsCards += "<!-- Card -->";
    projectsCards += "<div class='flex flex-col gap-3 shadow-md rounded-md items-center'>";
    projectsCards += "  <!-- Card Icon -->";
    projectsCards += "  <div class='relative max-h-72 h-80 lg:h-72 w-full flex justify-end items-end card-image rounded-md'>";
    projectsCards += "    <div class='max-h-72 h-80 lg:h-72 w-full overflow-hidden "+ value.image +" bg-top bg-contain bg-no-repeat rounded-md background-image shadow-sm'>";
    projectsCards += "    </div>";
    projectsCards += "  </div>";
    projectsCards += "  <!-- Card Info -->";
    projectsCards += "  <div class='flex flex-col gap-3 w-full py-5 px-5'>";
    projectsCards += "    <p class='text-xl font-bold'>"+ value.title +"</p>";
    projectsCards += "    <p><b>Empresa:</b> " + value.client +"</p>";
    projectsCards += "    <p><b>URL:</b> <a href='" + value.url +"' target='_blank'>" + value.url +"</a></p>";
    projectsCards += "    <p><b>Roles:</b> " + value.roles +"</p>";
    projectsCards += "    <p><b>Herramientas:</b> " + value.tools +"</p>";
    projectsCards += "    <p><b>Entrega del proyecto:</b> " + value.enddate +"</p>";
    projectsCards += "    <p class='text-justify'><b>Descripción:</b><br> " + value.description +"</p>";
    projectsCards += "  </div>";
    projectsCards += "</div>";
}