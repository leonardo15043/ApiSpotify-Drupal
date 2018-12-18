
SPOTIFY DRUPAL
---------------------

Este modulo  muestra información de spotify relacionada con los últimos Lanzamientos , información de los artistas y sus álbumes.

CONFIGURACION
--------------------------

Antes de instalar este modulo es necesario hacer las siguientes configuraciones:

 * Crear una integración en https://developer.spotify.com/dashboard/ , esta
   integración nos dara un client id , client secret y un Redirect URIs los cuales especificaremos
   en la clase LoginController de nuestro proyecto.

 Configuración de Playlist

 Para que nuestros playlist salgan en una vista debemos hacer lo siguiente:

 * En nuestro administrador de drupal debemos ir a estructura/tipos de contenido/ y añadir un nuevo tipo de contenido
 * A este tipo de contenido le llamaremos Playlist y le especificaremos una descripción
 * Luego nos mostrara una vista para administrar nuestros campos:

    titulo: campo tipo texto ,Banner: campo tipo imagen, Descripción: campo tipo texto,Genero: campo tipo termino de taxonomia,  id_categoria: campo tipo texto

* Ya teniendo el tipo de contenido nos faltaría crear la vista, para crear una nueva vista nos vamos a estructura/vistas
* Hacemos click en Agregar una nueva vista
* Especificamos el nombre de la vista , en opciones de vista le especificamos que sea contenido y en tipo especificamos el tipo de contenido que creamos (Playlist)
* En opciones de pagina hacemos click en crear nueva pagina en la que colocaremos nombre , ruta
* Guardamos y nos aparecerá una pantalla en la que cambiaremos los criterios de filtrado especificando el campo genero
* En el ítem que dice menú pondremos que es de tipo "Solapa de menú", agregaremos un titulo y un menú padre que en este caso seria Contenido
* Guardamos cambios y nos vamos a la pestaña contenido en la que podremos ver nuestra vista

Configurar Bloque

Para que nuestros play list salgan en las publicaciones debemos hacer lo siguiente:

* ir a estructura / diseño de bloques y en el item que dice contenido hacemos click en colocar cloque
* en el popup colocar bloque buscamos "Playlist Spotify" y lo agregamos

Agregar contenido a nuestra vista

Si queremos agregar información debemos ir a la pestaña contenido y hacer click en "agregar Contenido", luego nos pedirá un  tipo de contenido que en este caso seria "Playlist".

Por ultimo especificamos el contenido de los campos teniendo en cuenta que el id_categoria debe estar relacionado con el listado de categorías de spotify.

Algunas categorías de ejemplo podrían ser:

* toplists
* 2018
* latin
* focus
* pop
* arab
* workout
* mood
* rock
* afro
* chill
* party
* teenz
* popculture
* indie_alt
* edm_dance
* dinner
* sleep
* hiphop
* rnb
