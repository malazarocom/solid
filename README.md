# SOLID
S.O.L.I.D. principles

Todos los principios son una buena base pero siempre hay que utilizarlos con cuidado. En general son muy útiles y casi siempre aplicables.
Cuidado con intentar aplicarlos siempre en el desarrollo web, por el hecho de que mostramos muchas cosas y complejas a la vez.

S. Principio de responsabilidad única SRP
===================================================================================
Debería existir un método público en la clase, de esta manera, querrá decir que su única responsabilidad es la que está definida en dicho método.

Ejemplo de aplicación incorrecta => Podría ser una clase de servicio mailing que además de mandar mail, se encarga de formatear la plantilla, gestionar spam y va acumulando responsabilidades a lo largo del tiempo...
Si una acción, por ejemplo, tiene más de 20 líneas podemos preguntaros si está haciendo demasiadas cosas, ¿son todas necesarias e inherentes a esta acción? ¿podrían ser varias acciones? ¿tiene 2 o más foreachs? ¿muchos ifs/switches?. 

Si llevamos al extremo el principio SRP, podrías acabar teniendo un code smell llamado "Shotgun Surgery".

O. Principio abierto/cerrado OCP
===================================================================================
Software abierto a extensión y cerrado a modificación.
Código  más testable y con mayor tolerancia al cambio.
De algún modo este principio es la esendia del diseño orientado a objetos. Aplicándolo de forma correcta podremos obtener los mayores beneficios de la POO ( flexibilidad, reusabilidad, mantenibilidad). 
No es buena idea aplicar abstracción a cada parte de nuestra aplicación, de ser así terminaremos agregando complejidad innecesaria. 
Intentaremos aplicar esta abstracción solo a las partes del programa que cambian frecuentemente y no caer en la abstracción prematura. 

Ejemplo de aplicación incorrecta => Switch case en base a rol de usuario que puede ir creciendo sin control.
Aplicación correcta con interface => no modifica el árbol de jerarquía.
Aplicación correcta con abstrac class => patrón "Template method" empujando la lógica al modelo.
"Tell dont ask" => no le preguntes a las clases, dile a tu clase 

L. Principio de sustitución de Liskov LSP
===================================================================================
El comportamiento de subclases debe respetar el contrato de la superclase.
Todos los hijos deberían ser capaces de sustituir a la super-clase.

Si un método sobrescrito no hace nada o lanza una excepción, es muy probable que estés violando el principio de sustitución de Liskov.
"If it looks like a duck, quacks like a duck, but needs batteries – you probably have the wrong abstraction"

