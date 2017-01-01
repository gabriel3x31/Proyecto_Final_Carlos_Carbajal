# Proyecto_Final_Carlos_Carbajal
Pagina web

Lo que tenemos en esta pagina web es un mercado de peliculas tipo netflix donde podemos ver review de peliculas nuevas, ver calificaciones de estas utilizamos plantillas usando nuestro framework para las viztas podemos agregar un administrador de la pagina para poder entrar solo basta con agregar un usuario en usuario.php

Utilzamos lo que es  MVC para nuestra applicacion tenemos por separado lo que son nuestro controladores los que haran las peticiones a nuestros modelos para gestionar la base de datos  de los usuarios hacemos uso de un CRUD tenemos tambien las viztas de cada sitio por separado que deacuerdo a las peticiones del usuario realiza un evento 

loc controladores los tenemos en la carpeta app/http/cotroller,los modelos los tenemos ne la carpeta services y las viztas la tenemos en resources todas con sus enrutamientos para que se comuniquenentre ellos.  

Para utilizar la pagina web solo debemos de clonar la applicacionque se encuentra en https://github.com/gabriel3x31/Proyecto_Final_Carlos_Carbajal.git y poner a correr un servidor local como wamp y utilizar artisan serve para gestionar el proyecto para poderlo mandar a llamar desde localhost estan nuestras clases index.blade.php que es nuestra clase principal que se encuentra en proyecto_final\laravel\resources\views 

Para utilizar la aplicacion primero debemos de cambiar las credenciales de la base de datos esto se encuentar en el archivo .env ya que se tiene que crear la base de datos

Para poder entrar como administrador primero debemos entrar a la pagina proyecto_final\laravel\resources\views\usuario
y ahi podemos crear un usuario editar u eliminar de la base de datos los usuarios creados