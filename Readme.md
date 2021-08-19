**Proyecto: SALVAVIDAS - Sistema de Control y Manejo de Préstamos y Devoluciones de Equipo y Suministros**

Oscar Roberto Coto Calderón

Steven Gabriel Dávila Corea

Juan Carlos Gaitán Putoy

Teresita de Jesús Guido López

Mauricio Jesús Mondragón Hernández

Universidad Latina de Costa Rica

Facultad de Ingenierías

Escuela de Ingeniería en Sistemas Computacionales

BIS15 - Análisis y Diseño de Sistemas II

Prof. Jacqueline Méndez Montero

Heredia, Costa Rica

20 de agosto, 2021

# **Tabla de Contenido**

**[Tabla de Contenido](#_de45et3p7iob) 1**

**[Introducción](#_frwf1g7bo02y) 3**

**[Objetivos](#_mhi68f122695) 4**

**[Requerimientos](#_3xftdi251h5e) 5**

**[Casos de uso](#_aunyb6u35rqn) 10**

[Página Principal](#_cd06okghojsj) 10

[Administración de equipos](#_k2o7t1csns4) 10

[Administración de Suministros](#_7n62olmb6rbm) 11

[Inventario](#_45s1wl5a478i) 12

[Administración de técnicos](#_rtqpybx4e489) 13

[Préstamos](#_cpi7gyd4jfuv) 14

[Devolución](#_lkq4xev46zg6) 15

[Reportes](#_lfpfbi1udwpy) 17

**[Diagramas de Casos de Uso](#_ytm2bmmio2wn) 19**

[Página Principal](#_m0iokz7haq01) 19

[Administración de Equipos](#_ji7jahcsakp1) 20

[Administración de Suministros](#_3gybq4bwt733) 21

[Inventario](#_exiww7vkej68) 22

[Administración de Técnicos](#_6pbhiczfm4vw) 23

[Préstamos](#_ee3inlmac8uw) 24

[Devoluciones](#_sylypvxhic1q) 25

[Reportes](#_wkjhhxxbct4b) 26

[Diagrama de casos de uso General del sistema](#_y5tjo7vcqvlw) 27

**[Diagrama de clases](#_cg0w8fmni0z2) 28**

[Inventario](#_dz5duei9trw5) 28

[Técnicos](#_vehk5e47vise) 29

[Préstamos](#_9xaln4brxguk) 30

[Devoluciones](#_2hihbq35dmvm) 30

[Reportes](#_5vkxo35o5ghv) 31

[Diagrama General de Clases](#_denxsi4pby9) 32

**[Diagrama de secuencia](#_6569yxqs3b0) 33**

**[Diagrama de colaboración](#_c5t8pd38h56b) 35**

**[Diagrama de componentes](#_10c0vcfpmogn) 36**

**[Diagrama de despliegue](#_1b7qs0o96sps) 37**

**[Contrato del proyecto](#_xt4gorejwtmr) 38**

**[Mockups del sistema](#_f8d0plwo415k) 38**

[Página Principal](#_cg69c86lbsr1) 38

[Equipos](#_t412apz85p4y) 39

[Suministros](#_xbg49hxtnwbn) 40

[Inventario](#_tfsoh0rr2bsh) 41

[Técnico](#_1wg993l3v22a) 42

[Préstamos](#_i0uw57jr7etn) 42

[Devoluciones](#_jgmele2vieul) 43

[Reportes](#_kip4fgvm669f) 44

**[Plan de pruebas con las respectivas evidencias sobre la funcionalidad del sistema](#_6hy3k7jsfi4d) 46**

**[Manual de usuario del sistema](#_8onbuobdj5tz) 47**

**[Manual técnico del sistema](#_v9kech5afg69) 47**

**[Conclusión](#_1jpla3lbk97i) 48**

**[Bibliografía](#_z6iltqqrbbv6) 49**

#

# **Introducción**

En un mundo globalizado, la competencia en el mercado implica para las empresas introducir mejoras en cada una de las aristas y matrices de negocio con el fin de controlar los costos, gastos y ganancias en su operación, y por consecuencia, mejorar la experiencia del cliente.

Para potenciar esto último es fundamental que la operación del negocio sea planteada de manera en la que los esfuerzos de los colaboradores de la empresa no resulten redundantes y el desperdicio o merma (cuando se habla de materias primas o activos) sea el mínimo posible. A su vez, se debe procurar la maximización y potenciación de los recursos internos como parte fundamental de la política empresarial.

La empresa SALVAVIDAS en su misión de alcanzar los objetivos planteados anteriormente, desea implementar un sistema que le permita el manejo y control adecuado de los préstamos y devoluciones de equipos y suministros a los técnicos encargados, y que se brinde una vista panorámica de su operación en este ámbito para así ser capaces de reconocer áreas de mejora granularmente.

En el presente trabajo se detallan los requerimientos del sistema, diferentes casos de uso, diagramas que plantean el diseño de la aplicación, y un modelo de pruebas que una vez realizado asegure la calidad durante la implementación y uso final de la solución.

# **Objetivos**

Objetivo General

Diseñar un sistema de información, para la gestión y control eficiente de los préstamos y devoluciones de inventario, en la empresa SALVAVIDAS.

Objetivos Específicos

- Analizar los procesos de préstamo y devolución de inventario, para hacerlos más eficientes y confiables.
- Determinar los requerimientos del sistema necesarios para el correcto desarrollo de la aplicación web.
- Identificar los recursos mínimos necesarios para la puesta en marcha del sistema propuesto.

# **Requerimientos**

**RN** : Requerimiento de Negocio
**RU** : Requerimiento de Usuario
**RNF** : Requerimiento No Funcional
**RF** : Requerimiento Funcional

| Código | Descripción | Prioridad |
| --- | --- | --- |
| RN01 | La empresa SALVAVIDAS, que se dedica a la instalación, mantenimiento y reparación de sistemas contra incendios, desea contar con un sistema de registro de préstamo y devolución de equipo y control de suministros. | Alta |
| RNF01 | El sistema debe funcionar en plataforma WEB (no es necesario que funcione en internet, sino a nivel de intranet) | Alta |
| RNF02 | El sistema debe funcionar desde una computadora personal, laptop o dispositivo móvil (celular, tableta) | Alta |
| RNF03 | El sistema debe trabajar con una conexión a una Base de Datos MySQL desde la cuál extraerá, ingresará, modificará y eliminará datos. | Alta |
| RU01 | El sistema será utilizado inicialmente por un único usuario, por lo cual el módulo de registro de usuarios no será contemplado. El usuario necesita poder ingresar, modificar, borrar y administrar (préstamo y devolución) el inventario de equipos y suministros dentro del sistema. De la misma manera, el usuario debe poder crear, modificar, y borrar Técnicos en el sistema. | Alta |
| RF01 | El sistema deberá contar con un módulo de Inventario, desde el cuál se tendrán las siguientes opciones: Agregar, Modificar, Borrar Tipo de Equipo; Agregar, Modificar, Borrar Equipo; Agregar, Modificar, Borrar Tipo de Suministro; Agregar, Modificar, Borrar Suministro. El módulo de Inventario debe mostrar la cantidad de unidades en inventario, unidades prestadas y unidades dañadas para cada Tipo de Equipo y para cada Tipo de Suministro. Además, deberá contar con una vista para visualizar todas las unidades en inventario de Equipos y otra vista para visualizar todas las unidades en inventario de Suministros. | Alta |
| RF02 | El sistema debe permitir registrar Tipos de Equipo de los cuales se conocerá: identificador de tipo de equipo, nombre del tipo de equipo, descripción, marca y existencia mínima. | Alta |
| RF03 | El sistema debe permitir registrar un Equipo del cual se conocerá su identificador, tipo de equipo, condición actual, estado en inventario (inventario, prestado, dañado, irreparable) y fecha de inclusión a inventario. | Alta |
| RF04 | El sistema debe permitir registrar Tipos de Suministro de los cuales se conocerá: identificador de tipo de suministro, nombre del tipo de suministro, descripción, categoría (Accesorio, Consumible o Repuesto), unidades, marca y existencia mínima. | Alta |
| RF05 | El sistema debe registrar los Suministros de los cuales se conocerá su identificador, tipo de suministro, condición actual, estado en inventario (inventario, prestado, dañado, irreparable) y fecha de inclusión al sistema. | Alta |
| RF06 | El sistema debe permitir registrar Técnicos, de los cuales se conoce; su identificación, primer nombre, segundo nombre, primer apellido, segundo apellido, teléfono, correo electrónico, dirección y fecha de inclusión al sistema. | Alta |
| RF07 | El sistema debe permitir la modificación de Registros de Técnicos al usuario. | Alta |
| RF08 | El sistema debe permitir la eliminación de los Registros de Técnicos al usuario. | Alta |
| RF09 | El sistema debe permitir el registro de Préstamo, del cual se conocerá: Técnico Responsable, Fecha de Préstamo, Fecha Esperada de Devolución y el Cliente. Dentro del formulario de Préstamo se debe permitir agregar 1 o más Equipos, de los cuales se conocerá: Tipo de Equipo, Identificador de Equipo Prestado y Condición Actual del Equipo. Así mismo se debe permitir agregar 0 o más Suministros, de los cuales se conocerá el Tipo de Suministro, Identificador del Suministro y Condición Actual del Suministro. Una vez realizado el préstamo, para cada uno de los Equipos y Suministros agregados, se debe actualizar su campo de estado en el inventario a &quot;Prestado&quot;. | Alta |
| RF10 | El sistema debe permitir el registro de Devolución, de la cual se conocerá: el identificador del Préstamo correspondiente con todos sus datos, además de Fecha Real de Devolución, Estado de Devolución (Buen Estado – sin daños, Con Daños, Con Pérdidas – Robos). Para cada uno de los Equipos registrados en el Préstamo se debe conocer: Estado de Devolución (Buen Estado, Daños Reparables, Irreparable, Perdido, Robado) y Detalle del Estado de Devolución. En caso de que el Estado de Devolución sea &quot;Buen Estado&quot; se debe actualizar el estado en el inventario de &quot;Prestado&quot; a &quot;Inventario&quot;; En caso de que el Estado de Devolución sea &quot;Daños Reparables&quot; se debe actualizar el estado en el inventario de &quot;Prestado&quot; a &quot;Dañado&quot; y agregar una nota en el campo condición actual que detalle el daño; En caso de que el Estado de Devolución sea &quot;Irreparable&quot; se debe actualizar el estado en el inventario de &quot;Prestado&quot; a &quot;Irreparable&quot; y agregar una nota en el campo condición actual que detalle el daño; En caso de que el Estado de Devolución sea &quot;Perdido&quot; el usuario debe proceder a eliminar el registro de Equipo; En caso de que el Estado de Devolución sea &quot;Robado&quot; el usuario debe proceder a eliminar el registro de Equipo. Para cada uno de los Suministros registrados en el Préstamo se debe conocer: Estado de Devolución (Buen Estado, Gasto de uso, Daños reparables, Irreparable, Perdido, Robado) y Detalle del Estado de Devolución. En caso de que el Estado de Devolución sea &quot;Buen Estado&quot; se debe actualizar el estado en el inventario de &quot;Prestado&quot; a &quot;Inventario&quot;; En caso de que el Estado de Devolución sea &quot;Gasto de Uso&quot; se debe actualizar el estado en el inventario de &quot;Prestado&quot; a &quot;Dañado&quot; y se debe agregar una nota en el campo Condición actual que detalle el gasto; En caso de que el Estado de Devolución sea &quot;Irreparable&quot; se debe actualizar el estado en el inventario de &quot;Prestado&quot; a &quot;Irreparable&quot; y agregar una nota en el campo condición actual que detalle el daño; en caso que el Estado de Devolución sea &quot;Perdido&quot; el usuario debe proceder a eliminar el registro de Suministro; en caso que el Estado de Devolución sea &quot;Robado&quot; el usuario debe proceder a eliminar el registro de Suministro. | Alta |
| RF11 | El sistema debe contar con un módulo de reportes donde se ofrezcan los siguientes informes:
1. Equipos Dañados: Detalla los equipos que se encuentran actualmente con un daño.
2. Suministros Dañados: Detalla los suministros que se encuentran actualmente con un daño.
3. Préstamos atrasados: Detalla los préstamos que sobrepasan la fecha prevista de devolución.
4. Informe de Técnico-Préstamos-Daños: Detalla los técnicos que han efectuado devoluciones con daños en el equipo.
5. Informe de Técnico-Préstamos-Pérdidas: Detalla los técnicos que han efectuado devoluciones con pérdidas o robos en el equipo.
6. Equipos con inventario bajo: Detalla los tipos de equipo que tienen una cantidad de unidades en inventario menores a su cantidad mínima de existencias.
7. Suministros con inventario bajo: Detalla los tipos de suministro que tienen una cantidad de unidades en inventario menores a su cantidad mínima de existencias.
 | Alta |

#

# **Casos de uso**

| Caso de Uso: |
## Página Principal
 |
| --- | --- |
| Descripción: | Este caso de uso describe cómo será administrado el menú principal, ligado al proyecto del sistema de registro de préstamo y devolución de equipo y control de suministros de la empresa Salvavidas. |
| Actores: | Usuario |
| Dependencias: | **No existen dependencias.** |
| Precondiciones: |
- El usuario debe verificar que puede ingresar al sistema sin problemas.
- El sistema debe funcionar en plataforma web (intranet) en cualquier dispositivo (móvil, Tablet, laptop, computadora).
 |
| Flujo Básico: |
1. El usuario debe ingresar al sistema de registro de préstamo y devolución de equipo y control de suministros.
2. El usuario debe poder elegir en el menú principal la opción que convenga, siendo éstas; Administración de Inventario, Administración de técnicos, Préstamos, Devoluciones o Reportes.
 |
| Excepciones | No existen excepciones. |
| Flujo Alterno: | No existe flujo alterno. |
| Post-condiciones: | **No** existen post-condiciones. |

| Caso de Uso: |
## Administración de equipos
 |
| --- | --- |
| Descripción: | Este caso de uso describe cómo será administrado el equipo (inventario) ligado al proyecto del sistema de registro de préstamo y devolución de equipo y control de suministros de la empresa Salvavidas. |
| Actores: | Usuario |
| Dependencias: | **\&lt;\&lt;extends\&gt;\&gt;:** Inventario. |
| Precondiciones: |
- El usuario debe verificar que puede ingresar al sistema sin problemas.
- El sistema debe funcionar en plataforma web (intranet) en cualquier dispositivo (móvil, Tablet, laptop, computadora).
 |
| Flujo Básico: |
1. El usuario debe ingresar al sistema de registro de préstamo y devolución de equipo y control de suministros.
2. El usuario debe ingresar al apartado de administración inventario.
3. El usuario debe poder agregar, modificar, borrar información perteneciente a los &quot; **Equipos**&quot; o &quot; **Tipos de equipos**&quot;. Para los &quot; **Equipos**&quot;, la información ingresada debe ser el identificador de equipo, tipo de equipo, condición actual del equipo, estado en inventario (disponible, prestado, dañado, irreparable) y fecha de inclusión al inventario. Para los &quot; **Tipos de Equipo**&quot;, el usuario debe ingresar la siguiente información: Identificador del tipo de equipo, nombre del tipo de equipo, descripción del tipo de equipo, marca del tipo de equipo y existencia mínima del tipo de equipo. ( **E1** ) ( **A1** )
 |
| Excepciones | (E1) – El sistema debe impedir que los ítems del equipo/tipo de equipo que estén &quot;prestados&quot; o &quot;irreparables&quot; sean prestados. |
| Flujo Alterno: | (A1) – Si el equipo está dañado, el usuario debe poder enviarlo a reparar o bien, reemplazar el equipo, borrando el mismo y colocando un nuevo ítem en su lugar. |
| Post-condiciones: | **No** existen post-condiciones. |

| Caso de Uso: |
## Administración de Suministros
 |
| --- | --- |
| Descripción: | Este caso de uso describe cómo serán administrados los suministros (inventario) ligado al proyecto del sistema de registro de préstamo y devolución de equipo y control de suministros de la empresa Salvavidas. |
| Actores: | Usuario |
| Dependencias: | **\&lt;\&lt;extends\&gt;\&gt;:** Inventario. |
| Precondiciones: |
- El usuario debe verificar que puede ingresar al sistema sin problemas.
- El sistema debe funcionar en plataforma web (intranet) en cualquier dispositivo (móvil, Tablet, laptop, computadora).
 |
| Flujo Básico: |
1. El usuario debe ingresar al sistema de registro de préstamo y devolución de equipo y control de suministros.
2. El usuario debe ingresar al apartado de inventario.
3. El usuario debe poder agregar, modificar, borrar información perteneciente a los &quot; **Suministros**&quot; o &quot; **Tipos de suministro**&quot;. Para los &quot; **Suministros**&quot;, la información ingresada debe ser el identificador de suministro, condición actual del suministro, estado en inventario (en inventario, prestado, dañado e irreparable) y la fecha de inclusión al sistema. Para los &quot; **Tipos de suministro**&quot;, el usuario debe colocar información como el identificador del tipo de suministro, nombre del tipo de suministro, descripción del suministro, marca del suministro y existencia mínima del suministro. ( **E1** ) ( **A1** )
 |
| Excepciones | (E1) – El sistema debe impedir que los ítems del menú de suministros/tipos de suministro que estén &quot;prestados&quot; o &quot;irreparables&quot; sean prestados. |
| Flujo Alterno: | (A1) – Si el suministro está dañado, el usuario debe poder enviarlo a reparar o bien, reemplazar el equipo, borrando el mismo y colocando un nuevo ítem en su lugar. |
| Post-condiciones: | **No** existen post-condiciones. |

| Caso de Uso: |
## Inventario
 |
| --- | --- |
| Descripción: | Este caso de uso describe cómo será administrado el inventario ligado al proyecto del sistema de registro de préstamo y devolución de equipo y control de suministros de la empresa Salvavidas. |
| Actores: | Usuario |
| Dependencias: | **\&lt;\&lt;include\&gt;\&gt;:** Página principal. **\&lt;\&lt;extends\&gt;\&gt;:** Administración de equipos, **\&lt;\&lt; extends \&gt;\&gt;:** Administración de suministros. |
| Precondiciones: |
- El usuario debe verificar que puede ingresar al sistema sin problemas.
- El sistema debe funcionar en plataforma web (intranet) en cualquier dispositivo (móvil, Tablet, laptop, computadora).
 |
| Flujo Básico: |
1. El usuario debe ingresar al sistema de registro de préstamo y devolución de equipo y control de suministros.
2. El usuario debe ser capaz de elegir el menú (vista del sistema) que desea observar; ya sea de Administración de suministros o bien, de Administración de equipo. ( **A1** )
3. El sistema debe mostrar al usuario la cantidad de unidades en inventario, unidades prestadas y unidades dañadas para cada tipo de equipo y tipo de suministro.
 |
| Excepciones | No existen excepciones |
| Flujo Alterno: | ( **A1** ) – Si el usuario selecciona Equipo, se le mostrará solamente el menú de Equipo. Si selecciona el menú de Suministro, se le mostrará un el menú de Suministros y puede realizar tantas modificaciones como necesite. |
| Post-condiciones: | No existen post-condiciones. |

| Caso de Uso: |
## Administración de técnicos
 |
| --- | --- |
| Descripción: | Este caso de uso describe cómo se lleva a cabo la administración de técnicos, ligado al proyecto del sistema de registro de préstamo y devolución de equipo y control de suministros de la empresa Salvavidas. |
| Actores: | Usuario |
| Dependencias: | No existen dependencias. |
| Precondiciones: |
- El usuario debe verificar que puede ingresar al sistema sin problemas.
- El sistema debe funcionar en plataforma web (intranet) en cualquier dispositivo (móvil, Tablet, laptop, computadora).
 |
| Flujo Básico: |
1. El usuario debe ingresar al sistema de registro de préstamo y devolución de equipo y control de suministros.
2. El usuario busca la opción que desea realizar con respecto al menú de técnicos: registrar, modificar o eliminar.
3. El usuario debe poder ingresar la siguiente información sobre los técnicos: identificación, primer nombre, segundo nombre, primer apellido, segundo apellido, teléfono, correo electrónico, dirección y fecha de inclusión al sistema.
 |
| Excepciones | No existen excepciones. |
| Flujo Alterno: | No existe un flujo alterno. |
| Post-condiciones: | El usuario debe tener en cuenta que necesita tener técnicos agregados para poder llevar a cabo los trabajos y préstamos. |

| Caso de Uso: |
## Préstamos
 |
| --- | --- |
| Descripción: | Este caso de uso describe cómo se lleva a cabo la administración de préstamos, ligado al proyecto del sistema de registro de préstamo y devolución de equipo y control de suministros de la empresa Salvavidas. |
| Actores: | Usuario |
| Dependencias: | **\&lt;\&lt;include\&gt;\&gt;:** Inventario. |
| Precondiciones: |
- El usuario debe verificar que existan equipos y suministros en el inventario disponibles.
 |
| Flujo Básico: |
1. El usuario debe ingresar al sistema de registro de préstamo y devolución de equipo y control de suministros.
2. El usuario busca el menú de préstamos para crear uno nuevo.
3. El usuario debe colocar la siguiente información ligada a los préstamos: técnico responsable, fecha de préstamo, fecha esperada de devolución, fecha real de devolución y el cliente.
4. El usuario, además, procede a colocar información sobre equipo que se vaya a prestar (pueden ser uno o más) la cual considera: tipo de equipo, identificador de equipo y condición actual del equipo. ( **A1** )( **A3** ) ( **E2** )
 |
| Excepciones | **E2 –** Si el equipo o suministro tiene de estado &quot;prestado&quot; o &quot;irreparable&quot; el usuario no podrá ingresarlo en el registro del préstamo. |
| Flujo Alterno: | **A1**** – **El usuario tiene permitido también agregar de cero a más suministros, colocando la siguiente información de ser elegido; tipo de suministro, identificador de suministro y condición actual del suministro.** A3 –** Una vez realizado el registro el préstamo, para cada equipo o suministro agregado se actualizará el estado de este o estos a &quot;prestado&quot;. |
| Post-condiciones: | No existen post-condiciones. |

| Caso de Uso: |
## Devolución
 |
| --- | --- |
| Descripción: | Este caso de uso describe cómo se lleva a cabo la administración de devoluciones, ligadas al proyecto del sistema de registro de préstamo y devolución de equipo y control de suministros de la empresa Salvavidas. |
| Actores: | Usuario |
| Dependencias: | **\&lt;\&lt;include\&gt;\&gt;:** Préstamos. |
| Precondiciones: |
- El usuario debe verificar que exista un préstamo vigente para proceder a realizar el registro de devolución.
 |
| Flujo Básico: |
1. El usuario debe ingresar al sistema de registro de préstamo y devolución de equipo y control de suministros.
2. El usuario busca el menú de devoluciones.
3. El usuario debe ingresar el identificador del préstamo correspondiente a la devolución, así como la fecha real de devolución, estado de devolución (Buen Estado – Daños Reparables – Irreparable – Perdido – Robado), esto con respecto a cada equipo o suministro que esté registrado en el préstamo. ( **A1** ) ( **A2** )
4. El usuario también debe poder visualizar la lista de todas las devoluciones y el detalle de cada devolución.
 |
| Excepciones | No existen excepciones. |
| Flujo Alterno: | **A1 –** En caso que el &quot;Estado de devolución&quot; sea &quot;Buen estado&quot;, el equipo/suministro es actualizado en el inventario a &quot;Inventario&quot; nuevamente. En caso que sea &quot;daño reparable&quot;, se debe actualizar el estado del equipo/suministro a &quot;dañado&quot; y se debe agregar una nota en el campo de condición actual que describa el daño. **A2 –** En caso que el &quot;Estado de devolución&quot; sea &quot;irreparable&quot; se debe actualizar el estado en inventario y además, agregar una nota con la condición actual que detalle el daño. Si el estado es &quot;perdido&quot; o &quot;robado&quot;, el usuario debe eliminar el registro del equipo. |
| Post-condiciones: | No existen post-condiciones. |

| Caso de Uso: |
## Reportes
 |
| --- | --- |
| Descripción: | Este caso de uso describe cómo se lleva a cabo la administración de reportes, ligados al proyecto del sistema de registro de préstamo y devolución de equipo y control de suministros de la empresa Salvavidas. |
| Actores: | Usuario |
| Dependencias: | **\&lt;\&lt; extends \&gt;\&gt;:** Inventario. **\&lt;\&lt; extends \&gt;\&gt;:** Préstamos. **\&lt;\&lt; extends \&gt;\&gt;:** Devoluciones. |
| Precondiciones: |
- El usuario debe verificar que puede ingresar al sistema sin problemas.
- El sistema debe funcionar en plataforma web (intranet) en cualquier dispositivo (móvil, Tablet, laptop, computadora).
 |
| Flujo Básico: |
1. El usuario debe ingresar al sistema de registro de préstamo y devolución de equipo y control de suministros.
2. El usuario puede generar reportes con informes de los siguientes puntos: equipos dañados el cual detalla equipos que se encuentren con un daño, suministros dañados el cual detalla suministros que se encuentren con un daño, préstamos atrasados el cual refleja aquellos préstamos que sobrepasan la fecha prevista de devolución y además, no tienen un registro de devolución, informe técnico-préstamos-daños que detalla una lista de técnicos que efectúen devoluciones con daños en equipos, informe técnico-préstamos-pérdidas que detalla qué técnicos efectuaron devoluciones con pérdida o robo de equipo, equipo con inventario bajo detalla tipos de equipo que tienen una cantidad de unidades en inventario menor a la cantidad mínima de existencias, suministros con inventario bajo detalla tipos de suministro que tienen una cantidad de unidades en inventario muy baja o en cero.
 |
| Excepciones | No existen excepciones. |
| Flujo Alterno: | No existe flujo alterno. |
| Post-condiciones: | No existen post-condiciones. |

# **Diagramas de Casos de Uso**

## Página Principal

![](/screenshots/DiagCUPP.png?raw=true)

## Administración de Equipos

![](/screenshots/DiagCUAE.png?raw=true)

## Administración de Suministros

![](/screenshots/DiagCUAS.png?raw=true)

## Inventario

![](/screenshots/DiagCUI.png?raw=true)

## Administración de Técnicos

![](/screenshots/DiagCUAT.png?raw=true)

## Préstamos

![](/screenshots/DiagCUP.png?raw=true)

## Devoluciones

![](/screenshots/DiagCUD.png?raw=true)

## Reportes

![](/screenshots/DiagCUR.png?raw=true)

##


## Diagrama de casos de uso General del sistema

![](/screenshots/DiagCUGS.png?raw=true)

# **Diagrama de clases**

## Inventario

![](/screenshots/DiagCI.png?raw=true)

##


## Técnicos

![](/screenshots/DiagCT.png?raw=true)

## Préstamos

![](/screenshots/DiagCP.png?raw=true)

## Devoluciones

![](/screenshots/DiagCD.png?raw=true)

## Reportes

![](/screenshots/DiagCR.png?raw=true)

## Diagrama General de Clases

![](/screenshots/DiagCG.png?raw=true)

# **Diagrama de secuencia**

![](/screenshots/DiagS1.png?raw=true)

![](/screenshots/DiagS2.png?raw=true)

![](/screenshots/DiagS3.png?raw=true)

![](/screenshots/DiagS4.png?raw=true)

![](/screenshots/DiagS5.png?raw=true)

#

# **Diagrama de colaboración**

![](/screenshots/DiagC.png?raw=true)

# **Diagrama de componentes**

![](/screenshots/DiagCs.png?raw=true)

#

# **Diagrama de despliegue**

![](/screenshots/DiagD1.png?raw=true)

![](/screenshots/DiagD2.png?raw=true)

#

# **Contrato del proyecto**

El contrato se adjunta en un documento anexo.

# **Mockups del sistema**

## Página Principal

![](/screenshots/MuPP.png?raw=true)

**Inventario**

![](/screenshots/MuI1.png?raw=true)
![](/screenshots/MuI2.png?raw=true) 
![](/screenshots/MuI3.png?raw=true) 
![](/screenshots/MuI4.png?raw=true)

**Equipos**

![](/screenshots/MuE1.png?raw=true)
![](/screenshots/MuE2.png?raw=true)

## Suministros

![](/screenshots/MuS1.png?raw=true)

![](/screenshots/MuS2.png?raw=true)

# **Técnico**

![](/screenshots/MuT1.png?raw=true) 
![](/screenshots/MuT2.png?raw=true)

# **Préstamos**
 ![](/screenshots/MuP1.png?raw=true) 
 ![](/screenshots/MuP2.png?raw=true)
 ![](/screenshots/MuP3.png?raw=true)

# **Préstamo de Equipo**
![](/screenshots/MuPE1.png?raw=true)

![](/screenshots/MuPE2.png?raw=true)

![](/screenshots/MuPE3.png?raw=true)

# **Préstamo de Suministro**

![](/screenshots/MuPS1.png?raw=true)

## ![](/screenshots/MuPS2.png?raw=true)

![](/screenshots/MuPS3.png?raw=true)

## Devoluciones 
![](/screenshots/MuD1.png?raw=true)

![](/screenshots/MuD2.png?raw=true)

![](/screenshots/MuD3.png?raw=true)

![](/screenshots/MuD4.png?raw=true)

![](/screenshots/MuD5.png?raw=true)

![](/screenshots/MuD6.png?raw=true)

## Reportes

![](/screenshots/MuR1.png?raw=true)

![](/screenshots/MuR2.png?raw=true)

# **Plan de pruebas con las respectivas evidencias sobre la funcionalidad del sistema**

**Página Principal:**

| **Nombre del Caso de Prueba** | _Ingreso a la página principal y sus distintas funciones_ |
| --- | --- |
| **Aplicación/Módulo** | Página principal |
| **Identificador y Nombre del Caso de Uso** | _ **Página Principal** _ |
 |
 |
 |
 |
 |
 |
| **Secuencia normal** | _[xx a yy]_ |
| **Objetivo** | _Probar que el usuario puede acceder al menú principal del sistema y puede ingresar a los distintos del sistema._ |
| **Pasos de ejecución** | _-El usuario debe ingresar a su navegador e ingresar a la página principal utilizando el URL proveído
 -El usuario debe ingresar a los distintos menús disponibles_ |
| **Precondición** | _- El dispositivo a utilizar debe estar conectado a la intranet de la empresa._ |
| **Escenario** | **Descripción** | **Resultado Esperado** | **Resultado** | **Prioridad** |
| **1- Se da click al navegador de preferencia** | 1.1- apertura del navegador por parte del usuario | Se abre el navegador de preferencia y permite al usuario agregar el URL | Se logró ingresar al navegador | Media |
| **2- Se ingresa el URL: xxxxxxx dentro de la barra de búsqueda del navegador y presione enter en el teclado** | 2.2- El usuario ingresa la dirección de la página y procede a ingresar | El menú principal del sistema se inicia y se le muestran las distintas opciones que tiene al usuario | Se ingresó al sistema de manera exitosa | Media |
| **3- Seleccione la opción de ingresar al sistema de administrar inventario** | 3.1- El usuario ingresa al sistema de inventarios | La página direccióna la interfaz de inventario | Se ingresó a inventario de manera exitosa | Alta |
| **4- Seleccione la opción de ingresar al sistema de administrar técnicos** | 4.1- El usuario ingresa al sistema de inventarios | La página redirecciona a la interfaz de técnicos | Se ingresó a técnicos de manera exitosa. | Alta |
| **5-Seleccione la opción de ingresar al sistema de devoluciones** | 5.1- El usuario ingresa al sistema de devoluciones | La página dirección a la interfaz de devoluciones | Se ingresa a la interfaz de manera exitosa | Alta |
| **6- Seleccione la opción de ingresar al sistema de administrar préstamos** | 6.1- El usuario ingresa al sistema de préstamos | La página dirección a la interfaz de préstamos | Se ingresa a la interfaz de préstamos | Alta |
| **7- Seleccione la opción de ingresar al sistema de reportes** | 7.1El usuario ingresa al sistema de reportes | La página redirecciona a la interfaz de reportes | Se ingresa a la | Alta |
| **Comentarios** |
 |

**Administración de equipos:**

| **Nombre del Caso de Prueba** | _Ingreso a la página de administración de equipos y sus funciones_ |
| --- | --- |
| **Aplicación/Módulo** | Administración de equipos |
| **Identificador y Nombre del Caso de Uso** | _ **Administración de equipos** _ |
 |
 |
 |
 |
 |
 |
| **Secuencia normal** | _[xx a yy]_ |
| **Objetivo** | _Probar que el usuario puede acceder al menu de administracion de equipos y realizar las funciones disponibles en este_ |
| **Pasos de ejecución** | _-El usuario debe ingresar al sistema de registro de préstamo y devolución de equipo y control de suministros.__-El usuario debe ser capaz de elegir el menú (vista del sistema) que desea observar; ya sea de Administración de suministros o bien, de Administración de equipo. (A1)__-El sistema debe mostrar al usuario la cantidad de unidades en inventario, unidades prestadas y unidades dañadas para cada tipo de equipo y tipo de suministro.__._ |
| **Precondición** | _- El dispositivo a utilizar debe estar conectado a la intranet de la empresa.__-El usuario ya se encuentra en la página de inventario_ |
| **Escenario** | **Descripción** | **Resultado Esperado** | **Resultado** | **Prioridad** |
| **1- Ingreso a la opción equipos** | 1.1- El el menú de despliegue escoger la opción de equipos | - Se despliega el menú y permite escoger la opción de equipos
- Se despliega la información de equipos | Se seleccionó la opción de equipos y la información de los mismos se pudo visualizar de manera exitosa. | Alta |
| **2- Ingreso a la opción tipo de equipo** | 2.2- El el menú de despliegue escoger la opción de tipo de equipos | - Se despliega el menú y permite escoger la opción de tipo de equipos
- Se despliega la información de tipo de equipos | Se seleccionó la opción de equipos y la información de los mismos se pudo visualizar de manera exitosa. | Alta |
| **3- Agregar información válida de equipos** | 3.1- Seleccione la opción añadir3.2- Seleccione la caja de texto respecto al dato que desea ingresar3.3- Ingrese la información válida del dato3.4- Guardar información | -el sistema permite crear un elemento nuevo y muestra los espacio donde ingresar información
-El usuario puede ingresar la información válida.
-la nueva información es grabada | Se pudo ingresar un nuevo dato de equipo de manera exitosa | Alta |
| **4- Agregar información válida de tipo de equipos** | 4.1- Seleccione la opción de añadir4.2- Seleccione la caja de texto respecto al dato que desea ingresar4.3- Ingrese la información válida del dato4.4- Guardar información | -el sistema permite crear un elemento nuevo y muestra los espacios donde ingresar información
-El usuario puede ingresar la información válida.
-la nueva información es grabada | Se pudo ingresar un nuevo dato de tipo de equipo de manera exitosa | Alta |
| **5- Modificar con información válida de equipos** | 5.1- Seleccione la opción de editar equipo5.2- Seleccione el equipo que desea modificar5.3- Ingrese la información válida del dato5.4- Guardar información | -el sistema permite modificar la información
-El usuario modifica la información válida.
-la nueva información es grabada | Se logró editar los detalles de equipo | Alta |
| **6- Modificar con información válida de tipo de equipos** | 6.1- Seleccione la opción de editar tipo de equipo6.2- Seleccione el tipo de equipo que desea modificar6.3- Ingrese la información válida del dato6.4- Guardar información | -el sistema permite modificar la información
-El usuario modifica la información válida.
-la nueva información es grabada | Se editaron los detalles de equipo | Alta |
| **7- Eliminar información de equipos** | 7.1- Seleccione la opción de eliminar equipo
7.2- Seleccione el equipo que desea borrar7.3- Guardar información | - El sistema elimina el equipo seleccionado
- Se muestra un mensaje reportando &quot;Equipo eliminado&quot; | Se eliminó el equipo de manera exitosa. | Alta |
| **8- Eliminar tipos de equipos** | 8.1- Seleccione la opción de eliminar el tipo de equipo8.2- Seleccione el tipo de equipo que desea borrar8.3- Guardar información | - El sistema elimina el tipo de equipo seleccionado
- Se muestra un mensaje reportando &quot;Tipo de Equipo eliminado&quot; | Se eliminó el tipo de equipo de manera exitosa. | Alta |
| **Comentarios** |
 |
 |
 |
 |

**Administración de Suministros:**

| **Nombre del Caso de Prueba** | _Ingreso a la pagina de administracion de suministros y sus funciones_ |
| --- | --- |
| **Aplicación/Módulo** | Inventario |
| **Identificador y Nombre del Caso de Uso** | _ **Inventario** _ |
 |
 |
 |
 |
 |
 |
| **Secuencia normal** | _[xx a yy]_ |
| **Objetivo** | _Probar que el usuario puede acceder al inventario y realizar acciones de administración de suministros._ |
| **Pasos de ejecución** | _-El usuario debe ingresar al sistema de registro de préstamo y devolución de suministro y control de suministros.__-El usuario debe ser capaz de elegir el menú (vista del sistema) que desea observar; ya sea de Administración de suministros o bien, de Administración de suministro. (A1)__-El sistema debe mostrar al usuario la cantidad de unidades en inventario, unidades prestadas y unidades dañadas para cada tipo de suministro y tipo de suministro.__._ |
| **Precondición** | _- El dispositivo a utilizar debe estar conectado a la intranet de la empresa.__-El usuario ya se encuentra en la página de suministros_ |
| **Escenario** | **Descripción** | **Resultado Esperado** | **Resultado** | **Prioridad** |
| **1- Ingreso a la opción suministros** | 1.1- El el menú de despliegue escoger la opción de suministros | - Se despliega el menú y permite escoger la opción de suministro
- Se despliega la información de suministros | Se selecciona la opción de equipos y la información de los mismos se pudo visualizar de manera exitosa. | Alta |
| **2- Ingreso a la opción tipo de suministro** | 2.2- El el menú de despliegue escoger la opción de tipo de suministro | - Se despliega el menú y permite escoger la opción de tipo de suministro
- Se despliega la información de tipo de suministro | Se selecciona la opción de tipo de suministro y la información de los mismos se pudo visualizar de manera exitosa. | Alta |
| **3- Agregar información válida de suministro** | 3.1- Seleccione la opción añadir3.2- Seleccione la caja de texto respecto al dato que desea ingresar3.3- Ingrese la información válida del dato3.4- Guardar información | -el sistema permite crear un elemento nuevo y muestra los espacio donde ingresar información
-El usuario puede ingresar la información válida.
-la nueva información es grabada | Se pudo ingresar un nuevo dato de suministro de manera exitosa | Alta |
| **4- Agregar información válida de tipo de suministro** | 4.1- Seleccione la opción de añadir4.2- Seleccione la caja de texto respecto al dato que desea ingresar4.3- Ingrese la información válida del dato4.4- Guardar información | -el sistema permite crear un elemento nuevo y muestra los espacios donde ingresar información
-El usuario puede ingresar la información válida.
-la nueva información es grabada | Se pudo ingresar un nuevo dato de tipo de suministro de manera exitosa | Alta |
| **5- Modificar con información válida de suministro** | 5.1- Seleccione la opción de editar equipo5.2- Seleccione el equipo que desea modificar5.3- Ingrese la información válida del dato5.4- Guardar información | -el sistema permite modificar la información
-El usuario modifica la información válida.
-la nueva información es grabada | Se logró editar los detalles de equipo | Alta |
| **6- Modificar con información válida de tipo de suministro** | 6.1- Seleccione la opción de editar tipo de equipo6.2- Seleccione el tipo de equipo que desea modificar6.3- Ingrese la información válida del dato6.4- Guardar información | -el sistema permite modificar la información
-El usuario modifica la información válida.
-la nueva información es grabada | Se editaron los detalles de equipo | Alta |
| **7- Eliminar información de suministro** | 7.1- Seleccione la opción de eliminar equipo
7.2- Seleccione el equipo que desea borrar7.3- Guardar información | - El sistema elimina el equipo seleccionado
- Se muestra un mensaje reportando &quot;Equipo eliminado&quot; | Se eliminó el equipo de manera exitosa. | Alta |
| **8- Eliminar tipos de suministro** | 8.1- Seleccione la opción de eliminar el tipo de equipo8.2- Seleccione el tipo de equipo que desea borrar8.3- Guardar información | - El sistema elimina el tipo de equipo seleccionado
- Se muestra un mensaje reportando &quot;Tipo de Equipo eliminado&quot; | Se eliminó el tipo de equipo de manera exitosa. | Alta |
| **Comentarios** |
 |
 |
 |
 |

**Inventario:**

**Administración de Técnicos:**

| **Nombre del Caso de Prueba** | _Ingreso a la pagina de administracion de y sus funciones_ |
| --- | --- |
| **Aplicación/Módulo** | Administracion de tecnicos |
| **Identificador y Nombre del Caso de Uso** | _ **Administracion de tecnicos** _ |
 |
 |
 |
 |
 |
 |
| **Secuencia normal** | _[xx a yy]_ |
| **Objetivo** | _Probar que el usuario puede acceder al menu de administracion de técnicos y realizar las funciones disponibles en este_ |
| **Pasos de ejecución** | _-El usuario debe ingresar al sistema de registro de préstamo y devolución de equipo y control de suministros. __-El usuario busca la opción que desea realizar con respecto al menú de técnicos: registrar, modificar o eliminar.__ -El usuario debe poder ingresar la siguiente información sobre los técnicos: identificación, primer nombre, segundo nombre, primer apellido, segundo apellido, teléfono, correo electrónico, dirección y fecha de inclusión al sistema._ |
| **Precondición** | _- El dispositivo a utilizar debe estar conectado a la intranet de la empresa.__- El usuario ya se encuentra en la página de técnicos_ |
| **Escenario** | **Descripción** | **Resultado Esperado** | **Resultado** | **Prioridad** |
| **1.- Agregar informacion valida de tecnicos** | 1.1- Seleccione la opción de crear técnico1.2- Seleccione la caja de texto respecto al dato que desea ingresar1.3- Ingrese la información válida del dato1.4- Guardar información | -el sistema permite crear un elemento nuevo y muestra los espacios donde ingresar información
-El usuario puede ingresar la información válida.
-la nueva información es grabada | Se pudo ingresar los datos del técnico y crear un dato nuevo en el sistema. | Alta |
| **2- Modificar con información válida de técnicos** | 2.1- Seleccione la opción de modificar técnico2.2- Seleccione el técnico que desea modificar2.3- Ingrese la información válida del dato2.4- Guardar información | -el sistema permite modificar la información
-El usuario modifica la información válida.
-la nueva información es grabada | Se logró editar los detalles de técnico | Alta |
| **3- Eliminar información de técnicos** | 3.1- Selecciona la opción de borrar técnico3.2- Seleccione el técnico que desea borrar3.3- Guardar información | - El sistema elimina el técnico seleccionado
- Se muestra un mensaje reportando &quot;técnico eliminado&quot; | Se eliminó el técnico de manera exitosa. | Alta |
| **4- Crear técnico con información inválida** | 4.1- Seleccione la opción de crear técnico4.2- Seleccione la caja de texto respecto al dato que desea ingresar4.3- Ingrese la información inválida del dato4.4- Guardar información | -mensaje de error aparece reportando al usuario que la información agregada es errónea, la forma correcta de ingresar la información es: xxxxx | El sistema no permitió la creación del técnico | Alta |
| **5- Modificar con información inválida de técnicos** | 5.1- Seleccione la opción de modificar técnico5.2- Seleccione el técnico que desea modificar5.3- Ingrese la información inválida del dato5.4- Guardar | -mensaje de error aparece reportando al usuario que la información agregada es errónea, la forma correcta de ingresar la información es: xxxxx | El sistema no permitió realizar el cambio de información. | Alta |
| **6- Modificar con información inválida de tipo de** | 6.1- Seleccione la opción de modificar tipo de técnico6.2- Seleccione el tipo de técnico que desea modificar6.3- Ingrese la información inválida del dato6.4- Guardar información | -mensaje de error aparece reportándose al usuario que la información agregada es errónea, la forma correcta de ingresar la información es: xxxxx | El sistema no permitió modificar la información. | Alta |
| **Comentarios** |
 |
 |
 |
 |

**Préstamos:**

| **Nombre del Caso de Prueba** | _Préstamo_ |
| --- | --- |
| **Aplicación/Módulo** | Préstamos |
| **Identificador y Nombre del Caso de Uso** | _ **Préstamos** _ |
 |
 |
 |
 |
 |
 |
| **Secuencia normal** | _[xx a yy]_ |
| **Objetivo** | _Probar que el usuario puede acceder al menú de devoluciones y realizar las funciones en este._ |
| **Pasos de ejecución** | _-El usuario debe ingresar al sistema de registro de préstamo y devolución de equipo y control de suministros. __-El usuario busca el menú de préstamos para crear uno nuevo.__ -El usuario debe colocar la siguiente información ligada a los préstamos: técnico responsable, fecha de préstamo, fecha esperada de devolución, fecha real de devolución y el cliente. (E1)__-El usuario, además, procede a colocar información sobre equipo que se vaya a prestar (pueden ser uno o más) la cual considera: tipo de equipo, identificador de equipo y condición actual del equipo. (A1)(A3) (E2)_ |
| **Precondición** | _- El dispositivo a utilizar debe estar conectado a la intranet de la empresa.__- El usuario ya se encuentra en la página de técnicos_ |
| **Escenario** | **Descripción** | **Resultado Esperado** | **Resultado** | **Prioridad** |
| **1.- Añadir préstamo con equipos y suministros disponibles** | 1.1- Seleccione la opción de añadir préstamo1.2- Ingrese la información válida de equipos1.3- Guarde la información | -Se muestran los espacios para insertar información
-La información es ingresada de manera exitosa
-Un mensaje aparece que reporta &#39;préstamo creado con el siguiente id:xxxx | Se logró crear un préstamo con los detalles requeridos | Alta |
| **2- Creación de préstamo con equipo dañado** | 2.1- Seleccione opción de crear préstamo2.2- Ingrese un equipo que se encuentra dañado2.3- Ingrese el resto de los datos correctamente2.4- Cree el préstamo | -El sistema no permite escoger un equipo que se encuentre dañado | El sistema no permitió seleccionar el equipo que se encuentra dañado | Alta |
| **3- Creación de préstamo con equipo no disponible** | 3.1- Seleccione opcion de crear préstamo3.2- Ingrese un equipo que no se encuentra disponible3.3- Ingrese el resto de los datos correctamente3.4- Cree el préstamo | -El sistema no permite escoger un equipo que se encuentre no disponible. | El sistema no permitió seleccionar el equipo que se encuentra no disponible | Alta |
| **4- Creación de préstamo con suministros no disponible** | 4.1- Seleccione opcion de crear préstamo4.2- Ingrese un suministro que no se encuentra disponible4.3- Ingrese el resto de los datos correctamente4.4- Cree el préstamo | -El sistema no permite escoger un suministro que se encuentre no disponible. | El sistema no permitió seleccionar el suministro que se encuentra no disponible. | Alta |
| **5- Creación de préstamo con técnico que no se encuentra disponible** | 5.1- Seleccione opción de crear préstamo5.2- Ingrese un técnico que no se encuentra disponible5.3- Ingrese el resto de los datos correctamente5.4- Cree el préstamo | -El sistema no permite escoger un técnico que no está disponible | El sistema no permitió la selección de un técnico no disponible. | Alta |
| **Comentarios** |
 |
 |
 |
 |

**Devolución:**

| **Nombre del Caso de Prueba** | _Ingreso a la página de devoluciones_ |
| --- | --- |
| **Aplicación/Módulo** | Devolución |
| **Identificador y Nombre del Caso de Uso** | _ **Devolución** _ |
 |
 |
 |
 |
 |
 |
| **Secuencia normal** | _[xx a yy]_ |
| **Objetivo** | _Probar que el usuario puede acceder al menú de devoluciones y realizar las funciones en este._ |
| **Pasos de ejecución** | _-El usuario debe verificar que puede ingresar al sistema sin problemas.__-El sistema debe funcionar en plataforma web (intranet) en cualquier dispositivo (móvil, Tablet, laptop, computadora).__-El usuario debe verificar que exista un préstamo vigente para proceder a realizar el registro de devolución._
 |
| **Precondición** | _- El dispositivo a utilizar debe estar conectado a la intranet de la empresa.__- El usuario ya se encuentra en la página de devoluciones._ |
| **Escenario** | **Descripción** | **Resultado Esperado** | **Resultado** | **Prioridad** |
| **1.- Ingreso al sistema de devoluciones** | 1.1- Seleccione la opción del menú de devolución | se redirecciona al usuario a la página de devolución | Se muestra la interfaz de devolución | Alta |
| **2- Creación de reporte de devolución** | 2.1 Seleccione la caja de texto respecto al dato que desea ingresar2.2 Ingrese la información válida de equipos y suministros2.3 Ingrese el ID de préstamo2.3 Guarde la información | -El marcador se remueve y él se puede ingresar información-La información es ingresada de manera exitosa-Un mensaje aparece que reporta &quot;devolución reportada con el siguiente id:xxxx&quot; | Se logró ingresar los datos de la , se pudo indicar el estado del equipo de manera correcta y se generó el id de devolución | Alta |
| **3- Creación de reporte de devolución con id de préstamo incorrecto** | 3.1 Seleccione la caja de texto respecto al dato que desea ingresar3.2 Ingrese un id de préstamo incorrecto3.3 Ingrese el resto de los datos correctamente3.4 Cree La devolución | -El sistema no permite la selección de un ID que no existe. | El sistema no permitió la selección de un id inexistente o inserción del mismo. | Alta |
| **Comentarios** |
 |
 |
 |
 |

**Reportes:**

| **Nombre del Caso de Prueba** | _Ingreso a la página de reportes_ |
| --- | --- |
| **Aplicación/Módulo** | Reportes |
| **Identificador y Nombre del Caso de Uso** | _ **Reportes** _ |
 |
 |
 |
 |
 |
 |
| **Secuencia normal** | _[xx a yy]_ |
| **Objetivo** | _Probar que el usuario puede acceder al menú de reportes y realizar las funciones en este._ |
| **Pasos de ejecución** | _-El usuario debe ingresar al sistema de registro de préstamo y devolución de equipo y control de suministros.__-El usuario puede generar reportes con informes de los siguientes puntos: equipos dañados el cual detalla equipos que se encuentren con un daño, suministros dañados el cual detalla suministros que se encuentren con un daño, préstamos atrasados el cual refleja aquellos préstamos que sobrepasan la fecha prevista de devolución y además, no tienen un registro de devolución, informe técnico-préstamos-daños que detalla una lista de técnicos que efectúen devoluciones con daños en equipos, informe técnico-préstamos-pérdidas que detalla qué técnicos efectuaron devoluciones con pérdida o robo de equipo, equipo con inventario bajo detalla tipos de equipo que tienen una cantidad de unidades en inventario menor a la cantidad mínima de existencias, suministros con inventario bajo detalla tipos de suministro que tienen una cantidad de unidades en inventario muy baja o en cero._

 |
| **Precondición** | _- El dispositivo a utilizar debe estar conectado a la intranet de la empresa.__- El usuario ya se encuentra en la página de devoluciones._ |
| **Escenario** | **Descripción** | **Resultado Esperado** | **Resultado** | **Prioridad** |
| **1- Generar un reporte de equipos dañados** | 1.1 Seleccione la opción de reporte de equipos dañados1.2 Click en el botón de exportar | -Se resalta la opción seleccionada
-se genera un documento con el respaldo solicitado
- Se muestra un mensaje diciendo: &quot;Se genero el reporte de equipos dañados&quot; | Se genero el reporte el cual puede ser convertido a Excel sin ningún problema | Alta |
| **2- Generar un reporte de suministros dañados** | 2.1 Seleccione la opción de reporte de suministros dañados2.2 Click en el botón de exportar | -Se resalta la opción seleccionada
-se genera un documento con el respaldo solicitado
- Se muestra un mensaje diciendo: &quot;Se genero el reporte de suministros dañados&quot; |
 | Alta |
| **3- Generar un reporte de préstamos atrasados** | 3.1 Seleccione la opción de reporte de préstamos atrasados3.2 Click en el botón de exportar | -Se resalta la opción seleccionada
-se genera un documento con el respaldo solicitado
- Se muestra un mensaje diciendo: &quot;Se genero el reporte de préstamos atrasados&quot; | Se genero el reporte el cual puede ser convertido a Excel sin ningún problema | Alta |
| **4- Generar un reporte de técnico-préstamos-daños** | 4.1 Seleccione la opción de reporte de técnico-préstamos-daños4.2 Click en el botón de exportar | -Se resalta la opción seleccionada
-se genera un documento con el respaldo solicitado
- Se muestra un mensaje diciendo: &quot;Se genero el reporte de técnico-préstamos-daños&quot; | Se genero el reporte el cual puede ser convertido a Excel sin ningún problema | Alta |
| **5- Generar un reporte de técnico-préstamos-pérdidas** | 5.1 Seleccione la opción de reporte de técnico-préstamos-pérdidas5.2 Click en el botón de exportar | -Se resalta la opción seleccionada
-se genera un documento con el respaldo solicitado
- Se muestra un mensaje diciendo: &quot;Se genero el reporte de técnico-préstamos-pérdidas&quot; | Se genero el reporte el cual puede ser convertido a Excel sin ningún problema | Alta |
| **6- Generar un reporte de equipo con inventario bajo** | 6.1 Seleccione la opción de reporte de equipo con inventario bajo6.2 Click en el botón de exportar | -Se resalta la opción seleccionada
-se genera un documento con el respaldo solicitado
- Se muestra un mensaje diciendo: &quot;Se genero el reporte de equipo con inventario bajo&quot; | Se genero el reporte el cual puede ser convertido a Excel sin ningún problema | Alta |
| **7- Generar un reporte de suministro con inventario bajo** | 7.1 Seleccione la opción de reporte de Suministros bajos7.2 Click en el botón de exportar | -Se resalta la opción seleccionada
-se genera un documento con el respaldo solicitado
- Se muestra un mensaje diciendo: &quot;Se genero el reporte de suministros con inventario bajo&quot; | Se genero el reporte el cual puede ser convertido a Excel sin ningún problema | Alta |
| **Comentarios** |


# **Manual de usuario del sistema**

Se adjunta el Manual de Usuario del Sistema en un archivo por separado.

# **Manual técnico del sistema**

Se adjunta el Manual Técnico del Sistema en un archivo por separado.

#

# **Conclusión**

En conclusión, un proyecto de desarrollo de un Sistema de Información comprende varias etapas que se llevan a cabo desde la concepción de la idea. Esto es fundamental para traducir las necesidades del cliente en un modelo de sistema completo en el cual se incluirán todos los aspectos que juegan un rol durante el proceso, como el software, hardware, personas de interés, la arquitectura de los componentes, documentación y procedimientos.

Antes de comenzar con el desarrollo de cualquier proyecto, se debe conducir un estudio de requerimientos para detectar todos los detalles y objetivos del sistema a desarrollar. La información reunida con este estudio sirve como base para crear la estrategia de diseño y desarrollo, así como su implementación y mantenimiento.

Para potenciar la experiencia del cliente o usuario es fundamental que la operación del negocio sea planteada de manera en la que los esfuerzos de los colaboradores de la empresa no resulten redundantes, el desperdicio o merma (cuando se habla de materias primas o activos) sea el mínimo posible. A su vez, se debe procurar la maximización y potenciación de los recursos internos como parte fundamental de la política empresarial.

Las necesidades de cada empresa son diferentes por lo cual no se garantiza que las soluciones propuestas para un proyecto sean aplicables a cualquier otro. Sin embargo, los temas, dinámicas, diagramas y pruebas comprendidos en este trabajo ayudan a establecer un marco de trabajo correcto que facilitó el cumplimiento de cada etapa.

Con respecto a la información recolectada, analizada y transformada en este trabajo, tenemos como resultado final que se logró concluir de manera satisfactoria cada uno de los objetivos anteriormente propuestos.

Gracias a la aplicación de los conocimientos adquiridos durante el curso y además, aplicando lógicas aprendidas durante el desarrollo y finalización del mismo, se realizó un diseño de sistema que cumplió con las expectativas del cliente, un diseño que facilitó el proceso de la gestión de préstamos y devoluciones de la empresa SALVAVIDAS.

# **Bibliografía**

- Northware (15 de Enero, 2012) Técnicas efectivas para la toma de requerimientos. Recuperado de:[https://www.northware.mx/2012/01/15/tecnicas-efectivas-para-la-toma-de-requerimientos/#:~:text=Los%20Requerimientos%20de%20Software%20son,las%20entradas%20para%20producir%20salidas](https://www.northware.mx/2012/01/15/tecnicas-efectivas-para-la-toma-de-requerimientos/#:~:text=Los%20Requerimientos%20de%20Software%20son,las%20entradas%20para%20producir%20salidas)
- Junta de Andalucía (Sin fecha) Guía para la redacción de casos de uso. Recuperado de:[http://www.juntadeandalucia.es/servicios/madeja/contenido/recurso/416](http://www.juntadeandalucia.es/servicios/madeja/contenido/recurso/416)
- Ionos (23 de Septiembre, 2020) Diagrama de componentes: modelado eficiente de sistemas con módulos de software. Recuperado de:[https://www.ionos.es/digitalguide/paginas-web/desarrollo-web/diagrama-de-componentes/](https://www.ionos.es/digitalguide/paginas-web/desarrollo-web/diagrama-de-componentes/)
- Javier J. Gutiérrez, María J. Escalona, Manuel Mejías, Arturo H. Torres, Jesús Torres (Sin fecha) Implementación de pruebas del sistema. Un caso práctico [archivo pdf]. Recuperado de:[http://www.lsi.us.es/~javierj/publications/PRIS07.pdf](http://www.lsi.us.es/~javierj/publications/PRIS07.pdf)
- VC.EHU (Sin fecha) Diagramas de Estado [archivo pdf]. Recuperado de:[http://www.vc.ehu.es/jiwotvim/IngenieriaSoftware/Teoria/BloqueII/UML-5.pdf](http://www.vc.ehu.es/jiwotvim/IngenieriaSoftware/Teoria/BloqueII/UML-5.pdf)