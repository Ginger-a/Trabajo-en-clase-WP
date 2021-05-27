<?php get_header(); ?>
<main>

<div class="text-2xl flex justify-center "><p class="text-9xl ...">MY BLOG</p></div>
<div class="flex items-center space-x-10">
<div class="w-1/14">
<div class="border-4 border-light-blue-500 border-opacity-50 ...">
<img 
src="<?php echo get_template_directory_uri()?>/assets/img/Ginger.jpeg" 
alt="Mi foto">
</div>
</div>
<div class="border-4 border-light-blue-500 border-opacity-25 ">

</div>
<div class="shadow ..."><p class="font-black ...">Mi nombre es  Ginger Muñoz naci el 4 de mayo tengo 21 años soy estudiante del 
            Instituto Tecnologico Quito de la carrera analisis de sistemas estoy en sexto semestre y 
             mis propisitos es llegar hacer una gran profesional y seguir ejerciendo en mi carrera 
             y tener nuevos conocimientos</p></div>
</div>   
<div class="text-2xl flex justify-center "><p class="italic ...">My pasatiempo</p></div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 m-5">
                <div class="bg-blue-50">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/descarga-4.jpg" alt="imagen de perfil">
                    <p class="italic">Es escuchar musica
        que puede beneficiar la salud mental y física. De hecho, la música tiene una gran influencia en la neuroquímica. La música puede estimular el sistema inmunológico 
        del cuerpo, disminuir los niveles de estrés y ansiedad y aliviar la depresión. </p>
                </div>
                <div class="bg-blue-50">
                    <img class="w-5/12" src="<?php echo get_template_directory_uri() ?>/assets/img/mascotas.jpeg" alt="imagen de perfil">
                    <p class="italic">Mis mascotas se llaman layka y cachito</p>
                </div>
                <div class="bg-blue-50">
                    <img class="" src="<?php echo get_template_directory_uri() ?>/assets/img/deporte.jpg" alt="imagen de perfil">
                    <p class="italic">Es un buen motivo para reunirte con tus amigos y amigas.</p>
                </div>
                
            </div>

    <div class="divide-y divide-light-blue-400 ...">
    <div class= "text-2xl flex justify-center space-x-10 " ><p class="italic ...">Lenguajes de programacion</p></div>
  <div class="grid grid-cols-3 gap-4">
        <div>
        
            <img class="rounded-full" src="<?php echo get_template_directory_uri() ?>/assets/img/php-2.png" alt="imagen de perfil">
            <p class="italic">PHP completamente orientado al desarroll de aplicaciones web dinaminas con acceso a informacion. </p></div>
  <div></div>
  
  <div class="grid grid-cols-3 gap-4">
        <div>
            <img class="rounded-full" src="<?php echo get_template_directory_uri() ?>/assets/img/450_1000.jpg" alt="imagen de perfil">
            <p class=> JAVA Multiplaformas gracias a que es interpretado por laJVM. </p></div>
  <div></div>
</div> 
<div class="max-w-md mx-auto bg-gray-50 rounded-xl shadow-md overflow-hidden md:max-w-5xl mt-6 m-8">
            <div class="p-8">
                <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold"><p class="italic text-3x1">Mi meta</p></div>
                <p class="mt-2 text-gray-500"><p class="italic">Es graduarme de Analista de Sistemas y poder aportar  mis conocimientos
                    a diferentes empresas o poder  implementar mis propios conocimientos.</p>
                </p>
            </div>

<?php get_footer(); ?>

