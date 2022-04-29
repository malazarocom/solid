# solid
S.O.L.I.D. principles

L. Principio de sustitución de Liskov LSP
===================================================================================
El comportamiento de subclases debe respetar el contrato de la superclase.

Todos los hijos deberían ser capaces de sustituir a la super-clase.

Si un método sobrescrito no hace nada o lanza una excepción, es muy probable que estés violando el principio de sustitución de Liskov.

"If it looks like a duck, quacks like a duck, but needs batteries – you probably have the wrong abstraction"