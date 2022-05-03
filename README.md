# SOLID
S.O.L.I.D. principles

Todos los principios son una buena base pero siempre hay que utilizarlos con cuidado. En general son muy útiles y casi siempre aplicables.
Cuidado con intentar aplicarlos siempre en el desarrollo web, por el hecho de que mostramos muchas cosas y complejas a la vez.

S. Principio de responsabilidad única SRP Single Responsability principle
===================================================================================
Debería existir un método público en la clase, de esta manera, querrá decir que su única responsabilidad es la que está definida en dicho método.

Ejemplo de aplicación incorrecta => Podría ser una clase de servicio mailing que además de mandar mail, se encarga de formatear la plantilla, gestionar spam y va acumulando responsabilidades a lo largo del tiempo...
Si una acción, por ejemplo, tiene más de 20 líneas podemos preguntaros si está haciendo demasiadas cosas, ¿son todas necesarias e inherentes a esta acción? ¿podrían ser varias acciones? ¿tiene 2 o más foreachs? ¿muchos ifs/switches?. 

Si llevamos al extremo el principio SRP, podrías acabar teniendo un code smell llamado "Shotgun Surgery".

O. Principio abierto/cerrado OCP Open close principle
===================================================================================
Software abierto a extensión y cerrado a modificación.
Código  más testable y con mayor tolerancia al cambio.
De algún modo este principio es la esendia del diseño orientado a objetos. Aplicándolo de forma correcta podremos obtener los mayores beneficios de la POO ( flexibilidad, reusabilidad, mantenibilidad). 
No es buena idea aplicar abstracción a cada parte de nuestra aplicación, de ser así terminaremos agregando complejidad innecesaria. 
Intentaremos aplicar esta abstracción solo a las partes del programa que cambian frecuentemente y no caer en la abstracción prematura. 

Ejemplo de aplicación incorrecta => Switch case en base a rol de usuario que puede ir creciendo sin control.
Aplicación correcta con interface => no modifica el árbol de jerarquía.
Aplicación correcta con abstrac class => patrón "Template method" empujando la lógica al modelo.
"Tell dont ask" => no le preguntes a las clases, dile a tu clase .

L. Principio de sustitución de Liskov LSP Liskov substitution principle
===================================================================================
El comportamiento de subclases debe respetar el contrato de la superclase.
Todos los hijos deberían ser capaces de sustituir a la super-clase.

Si un método sobrescrito no hace nada o lanza una excepción, es muy probable que estés violando el principio de sustitución de Liskov.
"If it looks like a duck, quacks like a duck, but needs batteries – you probably have the wrong abstraction"

I. Principio de segregación de interfaces ISP Interface segregation principle
===================================================================================
Ningún cliente debería verse forzado a depender de métodos que no usa.
Lo conseguimos definiendo interfaces basadas en los clientes que las usan y no en las implementaciones.
La finalidad es conseguir alta cohesión y bajo acoplamiento estructural.
No dividir una interfaz que ya es bastante específica.

D. Principio de inversión de dependencias DIP Dependency inversion principle
===================================================================================
Las clases de alto nivel(casos de uso) no deberían depender de las de bajo nivel.
Lo solucionamos inyectando dependencias en el constructor, acoplando nuestro caso de uso a interfaces en lugar de a implementaciones.
La inyección de dependencias es correcta cuando somos nosotros los que decidimos la lógica de nuestro caso de uso.
DPI nos ayuda a poner un muro de contención ante cambios que vengan promovidos por agentes externo que no dependen de nosotros, por ejemplo cambios en librerías de Mysql.
La inversión y uso de interfaz tiene sentido cuando entra en juego I/O entrada/salida, durante los test no interesa realizar I/O a una conexión real en base de datos sino ejecutarla en memoria para ganar velocidad.

Principio de sustitución de Liskov LSP como premisa.
Exponemos explícitamente las dependencias y relaciones entre clases.
Tolerancia al cambio: facilita la modificación y la substitución de implementaciones.
Mejora la testabilidad de clases para que no dependemos de la implementación del código de producción ni de la infraestructura.
Un indicativo para comprobar si estamos cumpliendo DIP es ir a nuestro capa de aplicación y ver si nuestros "uses" dependen del dominio, si apuntan fuera del dominio y dependen de implementaciones concretas(BBDD, mensajería) no lo estamos respetando.

kata
https://github.com/ivanbadia/solid-kata/blob/master/dip/src/main/java/com/codurance/dip/BirthdayGreeter.java