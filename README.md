# solid
S.O.L.I.D. principles

Todos los principios son una buena base pero siempre hay que utilizarlos con cuidado. En general son muy útiles y casi siempre aplicables, pero en el desarrollo web a veces cuesta un poco llevarlos a cabo, por el hecho de que mostramos muchas cosas y complejas a la vez.

S. Principio de responsabilidad única SRP
===================================================================================
Debería existir un método público en la clase, de esta manera, querrá decir que su única responsabilidad es la que está definida en dicho método.

Podría ser una clase de servicio mailing que además de mandar mail, se encarga de formatear la plantilla, gestionar spam y va acumulando responsabilidades a lo largo del tiempo...
Si una acción, por ejemplo, tiene más de 20 líneas podemos preguntaros si está haciendo demasiadas cosas, ¿son todas necesarias e inherentes a esta acción? ¿podrían ser varias acciones? ¿tiene 2 o más foreachs? ¿muchos ifs/switches?. 

Si llevamos al extremo el principio SRP, podrías acabar teniendo un code smell llamado "Shotgun Surgery".

L. Principio de sustitución de Liskov LSP
===================================================================================
El comportamiento de subclases debe respetar el contrato de la superclase.

Todos los hijos deberían ser capaces de sustituir a la super-clase.

Si un método sobrescrito no hace nada o lanza una excepción, es muy probable que estés violando el principio de sustitución de Liskov.

"If it looks like a duck, quacks like a duck, but needs batteries – you probably have the wrong abstraction"

