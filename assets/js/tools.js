let tools = new Object();

tools.t1 =  { 'logo': 'Logo-HTML.png',        'title': 'HTML' };
tools.t2 =  { 'logo': 'Logo-CSS3.png',        'title': 'CSS3' };
tools.t3 =  { 'logo': 'Logo-Javascript.png',  'title': 'Javascript' };
tools.t4 =  { 'logo': 'Logo-Jquery.png',      'title': 'JQuery' };
tools.t5 =  { 'logo': 'Logo-Bootstrap.png',   'title': 'Bootstarp 5' };
tools.t6 =  { 'logo': 'Logo-Tailwind.png',    'title': 'Tailwind CSS' };
tools.t7 =  { 'logo': 'Logo-PHP.png',         'title': 'PHP' };
tools.t8 =  { 'logo': 'Logo-Wordpress.png',   'title': 'Wordpress' };
tools.t9 =  { 'logo': 'Logo-Laravel.png',     'title': 'Laravel' };
tools.t10 = { 'logo': 'Logo-Livewire.png',    'title': 'Livewire' };
tools.t11 = { 'logo': 'Logo-React.png',       'title': 'React JS' };
tools.t12 = { 'logo': 'Logo-MySQL.png',       'title': 'Mysql' };
tools.t13 = { 'logo': 'Logo-SQL.png',         'title': 'SQL Server' };
tools.t14 = { 'logo': 'Logo-VS-Code.png',     'title': 'VS Code' };
tools.t15 = { 'logo': 'Logo-Figma.png',       'title': 'Figma' };
tools.t16 = { 'logo': 'Logo-SCRUM.png',       'title': 'SCRUM' };

let toolsCards = "";
for (const [key, value] of Object.entries(tools)) {
    toolsCards += "<!-- Card -->";
    toolsCards += "<div class='flex flex-row gap-3 shadow-md py-3 px-5 rounded-md items-center'>";
    toolsCards += "  <!-- Card Icon -->";
    toolsCards += "  <div>";
    toolsCards += "    <img src='assets/img/tools/"+value.logo+"' alt=''>";
    toolsCards += "  </div>";
    toolsCards += "  <!-- Card Info -->";
    toolsCards += "  <div class='flex flex-col gap-3'>";
    toolsCards += "    <p class='text-sm lg:text-xl font-bold'>" + value.title +"</p>";
    toolsCards += "  </div>";
    toolsCards += "</div>";
}