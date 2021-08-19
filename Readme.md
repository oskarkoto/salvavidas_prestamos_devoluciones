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

![](RackMultipart20210819-4-1k9aygr_html_6f37779605256670.png)

## Administración de Equipos

![](RackMultipart20210819-4-1k9aygr_html_6aec19eb576c4db9.png)

## Administración de Suministros

![](RackMultipart20210819-4-1k9aygr_html_16aff0c96678ac60.png)

## Inventario

![](RackMultipart20210819-4-1k9aygr_html_672a59a9d3b245cb.png)

## Administración de Técnicos

![](RackMultipart20210819-4-1k9aygr_html_bd760dbaeaeb90df.png)

## Préstamos

![](RackMultipart20210819-4-1k9aygr_html_aa0e994b62df3fdb.png)

## Devoluciones

![](RackMultipart20210819-4-1k9aygr_html_cf2fb8175478b9d9.png)

## Reportes

![](RackMultipart20210819-4-1k9aygr_html_4b966d31da26d283.png)

##


## Diagrama de casos de uso General del sistema

![](RackMultipart20210819-4-1k9aygr_html_694a1afad7d9069d.png)

# **Diagrama de clases**

## Inventario

![](RackMultipart20210819-4-1k9aygr_html_f4cb840e5f2b8176.png)

##


## Técnicos

![](RackMultipart20210819-4-1k9aygr_html_b12fb085992a0c78.png)

## Préstamos

![](RackMultipart20210819-4-1k9aygr_html_736d894f2e8e6433.png)

## Devoluciones

![](RackMultipart20210819-4-1k9aygr_html_e8cc7489ae632f3c.png)

## Reportes

![](RackMultipart20210819-4-1k9aygr_html_a3e1fd99cd34e949.png)

## Diagrama General de Clases

![](RackMultipart20210819-4-1k9aygr_html_2592f1ebb04c7a75.png)

# **Diagrama de secuencia**

![](RackMultipart20210819-4-1k9aygr_html_dcf778575b4bac61.png)

![](RackMultipart20210819-4-1k9aygr_html_1bc7007f917c55a0.png)

![](RackMultipart20210819-4-1k9aygr_html_2325df376da933d7.png)

![](RackMultipart20210819-4-1k9aygr_html_e5e763e9a7a0a00f.png)

![](RackMultipart20210819-4-1k9aygr_html_e1f8fde0572417b0.png)

#

# **Diagrama de colaboración**

![](RackMultipart20210819-4-1k9aygr_html_5e2890304d9832f6.png)

# **Diagrama de componentes**

![](RackMultipart20210819-4-1k9aygr_html_8203ea9a890acff2.jpg)

#

# **Diagrama de despliegue**

![](RackMultipart20210819-4-1k9aygr_html_241e24a166ac2594.png)

![](RackMultipart20210819-4-1k9aygr_html_719ad00b87caf6f.png)

#

# **Contrato del proyecto**

El contrato se adjunta en un documento anexo.

# **Mockups del sistema**

## Página Principal

![](RackMultipart20210819-4-1k9aygr_html_2b43fa1cf0b34165.jpg)

**Inventario**

![](RackMultipart20210819-4-1k9aygr_html_fb67c8ddcd7e8f26.jpg) ![](RackMultipart20210819-4-1k9aygr_html_ce224cbc479e19d3.jpg) ![](RackMultipart20210819-4-1k9aygr_html_716b2f33511ec85e.jpg) ![](RackMultipart20210819-4-1k9aygr_html_76403282911acc34.jpg)

**Equipos**

![](RackMultipart20210819-4-1k9aygr_html_75941bb9fdd57a5f.jpg) ![](RackMultipart20210819-4-1k9aygr_html_c1dd697588512707.jpg)

## Suministros

![](RackMultipart20210819-4-1k9aygr_html_4e85dc4202331804.jpg)

![](RackMultipart20210819-4-1k9aygr_html_f798cb51040cb78.jpg)

# **Técnico**

![](RackMultipart20210819-4-1k9aygr_html_b284b8dfaf9883b8.jpg) ![](RackMultipart20210819-4-1k9aygr_html_5d5769df3b3e522a.jpg)

# ![](RackMultipart20210819-4-1k9aygr_html_cae0dfc27af0184d.jpg) **Préstamos**
 ![](RackMultipart20210819-4-1k9aygr_html_35b55a8585f0856e.jpg)

![](RackMultipart20210819-4-1k9aygr_html_7f06a09dd725aafc.jpg)

![](RackMultipart20210819-4-1k9aygr_html_9ce5e3496fbc396d.jpg)

# **Préstamo de Equipo**![](RackMultipart20210819-4-1k9aygr_html_2133b513b6424c51.jpg)

![](RackMultipart20210819-4-1k9aygr_html_4805edde73ce5cbe.jpg)

![](RackMultipart20210819-4-1k9aygr_html_d2ccdc7bd96600b2.jpg)

# **Préstamo de Suministro**

![](RackMultipart20210819-4-1k9aygr_html_658d266605ed8a1b.jpg)

## ![](RackMultipart20210819-4-1k9aygr_html_34ed1c69904f02b1.jpg)

![](RackMultipart20210819-4-1k9aygr_html_d86c32ca442b1094.jpg)

## Devoluciones ![](RackMultipart20210819-4-1k9aygr_html_a4db04fa78d17d87.jpg)

![](RackMultipart20210819-4-1k9aygr_html_a99d4aa83a581533.jpg)

![](RackMultipart20210819-4-1k9aygr_html_143dc1cf74d0b5fd.jpg)

![](RackMultipart20210819-4-1k9aygr_html_d5fc8d436434891f.jpg)

![](RackMultipart20210819-4-1k9aygr_html_2ea08a147dc30b28.jpg)

![](RackMultipart20210819-4-1k9aygr_html_5c71db31b68b8687.jpg)

## Reportes

![](RackMultipart20210819-4-1k9aygr_html_5646032ccb5d1d29.jpg)

![](RackMultipart20210819-4-1k9aygr_html_97a0e018720a5677.jpg)

# **Plan de pruebas con las respectivas evidencias sobre la funcionalidad del sistema**
Se adjunta el Plan de pruebas del Sistema en un archivo por separado.


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