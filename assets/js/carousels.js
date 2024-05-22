let carousel = new Object(); 

carousel.item1 = {
    'company_es' : 'Enrique Pineda - CoCoDA',
    'company_en' : 'Enrique Pineda - CoCoDA',
    'quote_es'   : 'La asesoría resultó excepcional. Isaac demuestra gran dominio de los temas y de como aplicarlos de manera dinámica, así como una facilidad para explicarlos. Logré ampliar mis conocimientos en materia de Experiencia del Usuario (UX) aplicados a sitios web de organizaciones cuya meta es captar donaciones. Además, la asesoría me brindó perspectivas a tomar en cuenta, así como la necesidad de aplicar un prototipado y testeo. La experiencia fue muy inspiradora y motivadora.',
    'quote_en'   : 'The advice was exceptional. Isaac demonstrates great mastery of the topics and how to apply them dynamically, as well as an ease in explaining them. I managed to expand my knowledge in terms of User Experience (UX) applied to websites of organizations whose goal is to attract donations. In addition, the advice gave me perspectives to take into account, as well as the need to apply prototyping and testing. The experience was very inspiring and motivating.'
};

carousel.item2 = {
    'company_es' : 'Jorge Martínez - Ministerio de Vivienda de El Salvador',
    'company_en' : 'Jorge Martínez - Ministry of Housing of El Salvador',
    'quote_es'   : 'Isaac formo parte del equipo de la Unidad de Tecnologías de la Información por dos años y medio, específicamente como Técnico de Desarrollo. En este tiempo, su desempeño fue de firma ágil y eficiente, mostrando los conocimientos necesarios para desarrollar los proyectos de forma creativa y aplicando las tecnologías necesarias para el desarrollo de sistemas institucionales. Con relación al ambiente de trabajo, una persona responsable, colaboradora y entusiasta de aprender nuevas formas y herramientas para hacer más eficiente el trabajo.',
    'quote_en'   : 'Isaac was part of the Information Technology Unit team for two and a half years, specifically as a Development Technician. During this time, its performance was agile and efficient, showing the necessary knowledge to develop projects creatively and applying the necessary technologies for the development of institutional systems. In relation to the work environment, a responsible, collaborative person who is enthusiastic about learning new ways and tools to make work more efficient.'
};

carousel.item3 = {
    'company_es' : 'Edu Superior',
    'company_en' : 'Edu Superior',
    'quote_es'   : 'Isaac nos apoyó como líder del equipo de desarrollo y nos brindó acompañamiento en la implementación de mejoras en el sitio web: https://edusuperior.org.sv/, en este proyecto fue el responsable de las actualizaciones del CMS WordPress y sus plugins, implementación de herramientas que fortalecen la seguridad del CMS y el rediseño del sitio, aplicando de manera efectiva el nuevo diseño y la implementación para los diferentes dispositivos (responsive web design). El apoyo es invaluable y se lograron las metas proyectos en los tiempos establecidos.',
    'quote_en'   : 'Isaac supported us as leader of the development team and provided us with support in the implementation of improvements to the website: https://edusuperior.org.sv/, in this project he was responsible for the updates of the WordPress CMS and its plugins, implementation of tools that strengthen the security of the CMS and the redesign of the site, effectively applying the new design and implementation for different devices (responsive web design). The support is invaluable and the project goals were achieved within the established times.'
};


let carouselItemsES = "";
for (const [key, value] of Object.entries(carousel)) {
    carouselItemsES += "<div class='relative float-left -mr-[100%] w-full transition-transform duration-[700ms] ease-in-out motion-reduce:transition-none h-80 md:h-96' data-twe-carousel-active data-twe-carousel-item style='backface-visibility: hidden'>";
    carouselItemsES += "    <img src='https://mdbootstrap.com/img/new/textures/full/243.jpg' class='block h-full md:h-auto w-full' alt='"+value.company_es+"' />";
    carouselItemsES += "    <div class='absolute inset-x-[10%] bottom-5 py-5 text-center text-white h-full flex flex-col justify-center items-center'>";
    carouselItemsES += "        <h5 class='mb-3 text-md md:text-xl'>"+value.company_es+"</h5>";
    carouselItemsES += "        <p class='mb-3 text-sm md:text-base'>";
    carouselItemsES += "            \""+value.quote_es+"\"";
    carouselItemsES += "        </p>";
    carouselItemsES += "    </div>";
    carouselItemsES += "</div>";
}

let carouselItemsEN = "";
for (const [key, value] of Object.entries(carousel)) {
    carouselItemsEN += "<div class='relative float-left -mr-[100%] w-full transition-transform duration-[700ms] ease-in-out motion-reduce:transition-none h-80 md:h-96' data-twe-carousel-active data-twe-carousel-item style='backface-visibility: hidden'>";
    carouselItemsEN += "    <img src='https://mdbootstrap.com/img/new/textures/full/243.jpg' class='block h-full md:h-auto w-full' alt='"+value.company_en+"' />";
    carouselItemsEN += "    <div class='absolute inset-x-[10%] bottom-5 py-5 text-center text-white h-full flex flex-col justify-center items-center'>";
    carouselItemsEN += "        <h5 class='mb-3 text-md md:text-xl'>"+value.company_en+"</h5>";
    carouselItemsEN += "        <p class='mb-3 text-sm md:text-base'>";
    carouselItemsEN += "            \""+value.quote_en+"\"";
    carouselItemsEN += "        </p>";
    carouselItemsEN += "    </div>";
    carouselItemsEN += "</div>";
}