# UNIVERSIDADPRIVADADETACNA

# FACULTADDEINGENIERÍA

# EscuelaProfesionaldeIngenieríadeSistemas

## DesarrollodeunSistemadeGestióndeTareasy

## NotificacionesPersonalizadasparalaMejoradela

## Productividad

## Curso: CalidadyPruebasdeSoftware

## Docente: Mag.PatrickCuadrosQuiroga

## Integrantes:

## AYMACHOQUE,ERICKYOEL (2021072616)

## POMAMACHICADO,FABIOLAESTEFANI

## (2021070030)

## TAPIAVARGAS,DYLANYARIET(2021072630)

## Tacna–Perú


##### CONTROLDEVERSIONES

Versió
n

```
Hecha
por
```
```
Revisada
por
```
```
Aprobada
por Fecha Motivo
```
```
1.0 MPV ELV ARV 12/12/2024 VersiónOriginal
```
```
DesarrollodeunSistemadeGestióndeTareasy
NotificacionesPersonalizadasparalaMejoradela
Productividad
DocumentodeArquitecturadeSoftware
```
**Versión** **_{1.0}_**


## CONTROLDEVERSIONES

Versión Hechapor Revisadapor Aprobadapor Fecha Motivo

1.0 MPV ELV ARV 12/12/2024 VersiónOriginal

- 1. INTRODUCCIÓN ÍNDICEGENERAL
   - 1.1. Propósito(Diagrama4+1)
   - 1.2. Alcance
   - 1.3. Definición,siglasyabreviaturas
   - 1.4. Organizacióndeldocumento
- 2. OBJETIVOSYRESTRICCIONESARQUITECTÓNICAS
      - 2.1.1. RequerimientosFuncionales
      - 2.1.2. RequerimientosNoFuncionales–AtributosdeCalidad
- 3. REPRESENTACIÓNDELAARQUITECTURADELSISTEMA
   - 3.1. VistadeCasodeuso
      - 3.1.1. DiagramasdeCasosdeuso
   - 3.2. VistaLógica
      - 3.2.1. DiagramadeSubsistemas(paquetes)
      - 3.2.2. DiagramadeSecuencia(vistadediseño)
      - 3.2.3. DiagramadeColaboración(vistadediseño)
      - 3.2.4. DiagramadeObjetos
      - 3.2.5. DiagramadeClases
      - 3.2.6. DiagramadeBasededatos(relacionalonorelacional)
   - 3.3. VistadeImplementación(vistadedesarrollo)
      - 3.3.1. Diagramadearquitecturasoftware(paquetes)
      - 3.3.2. Diagramadearquitecturadelsistema(Diagramadecomponentes)
   - 3.4. Vistadeprocesos
      - 3.4.1. DiagramadeProcesosdelsistema(diagramadeactividad)
   - 3.5. VistadeDespliegue(vistafísica)
      - 3.5.1. Diagramadedespliegue
- 4. ATRIBUTOSDECALIDADDELSOFTWARE
   - EscenariodeFuncionalidad
   - EscenariodeUsabilidad
   - Escenariodeconfiabilidad
   - Escenarioderendimiento
   - Escenariodemantenibilidad


## 1. INTRODUCCIÓN ÍNDICEGENERAL

Lagestióndetareasesunodelosaspectosmásdesafiantesenlavida
personalyprofesionaldelaspersonas.Enmuchoscasos,losindividuosse
enfrentanadificultadessignificativasaltratardeorganizarypriorizarsus
responsabilidadesdiarias.Losdesafíoscomunesincluyensentirse"abrumado,
sobrecargadoytenerquegestionarseaunomismo,lamotivación,la
concentraciónylaconstancia"(Mathews,2023).

Estosproblemasnosoloafectanlaproductividaddelosusuarios,sinotambién
subienestaremocional,yaqueelesfuerzoconstantepormantenersealdía
conlastareaspuedegenerarestrésyagotamiento.Además,elhechodetener
quemantenerlamotivaciónylaconstanciasinunaestructuraadecuadapuede
llevaralaprocrastinación,loqueagravaaúnmáslacargadetrabajo.

Enrespuestaaestosdesafíos,hansurgidodiversassolucionestecnológicas,
especialmenteenelámbitodelasaplicacionesmóviles.Estasherramientas
proporcionanunenfoqueestructuradoparalagestióndetareasysonútiles
paraorganizarelflujodetrabajodemaneramáseficiente.Unejemplonotable
esTaskCO,unaaplicacióndeAndroidquehasidodiseñadaparafacilitarla
gestióndetareas."TaskCOesunaaplicacióndeAndroidconfuncionescomo
carpetassegregadas,modosclarosyoscuros,iniciodesesiónúnicoy
notificaciones,loquelahaceatractivaparalosusuarios"(Jaiswal,Jhawar,
Jadhav,&Mahato,2022).

Lasfuncionalidadesdelaplicativo,talescomolacapacidaddeorganizarlas
tareas,permitenalosusuariosgestionarsusactividadesdemaneramás
intuitiva.Además,eliniciodesesiónúnicofacilitaelaccesosincomplicaciones,
ylasnotificacionesaseguranquelosusuariosnoolvidentareasimportantes.

Laintegracióndenotificacionesenestasaplicacionesesparticularmente
valiosa,yaqueactúacomounrecordatorioconstante,ayudandoalosusuarios
amantenerseenfocadosensusobjetivosyevitandoquesedesvíendesus
planes.Estasaplicacionestambiéncontribuyenalamejoradelaproductividad
alproporcionarunamaneramásorganizadayeficientedemanejarlas
responsabilidadesdiarias,loqueresultaenunamayorsatisfacciónyreducción
delestrés.Laevolucióndelasherramientasdegestióndetareas,como
TaskCO,muestracómolatecnologíapuedeabordardemaneraefectivalos
problemastradicionalesasociadosconlagestióndeltiempoylastareas.


### 1.1. Propósito(Diagrama4+1)

```
Sepresentanlosdiagramasdescritosconunmodelodediseñoencual
yaseusantérminosparalaprogramaciónespecificandovaloresy
métodosarealizar.
```
### 1.2. Alcance

```
Elsistemapropuestosecentraráenlagestióndetareas,la
categorizacióndelasmismasylagestióndenotificaciones
personalizadasparacadausuario.
Elalcancedelsistemaincluye:
```
- Gestióndeusuarios:Losusuariospodránregistrarse,
iniciarsesiónygestionarsuperfilbásico,concontraseñasalmacenadas
deformasegura.
- Gestióndetareas:Losusuariospodráncrear,editar,
eliminaryvisualizartareas.Cadatareaestaráasociadaaunacategoría
ypodráteneratributoscomotítulo,descripción,fechadevencimientoy
estadodecompletitud.
- Categoríasdetareas:Sepodráncrearygestionar
categorías,loquepermitiráalosusuariosorganizarsustareasporáreas
detrabajooproyectos.
- Notificacionesautomáticas:Elsistemaenviará
notificacionesalosusuariosparamantenerlosinformadossobreel
estadodesustareasycualquiercambiorelevanteensuentornode
trabajo.

### 1.3. Definición,siglasyabreviaturas


```
GT : GestióndeTareas - Procesodecreación,organizacióny
seguimientodetareas.
CAT : CategoríasdeTareas - Clasificaciónparaorganizarlastareaspor
áreasoproyectos.
NA : NotificacionesAutomáticas - Alertasenviadasporelsistemaal
usuario.
CRUD : Create,Read,Update,Delete - Operacionesbásicasparala
gestióndedatosenelsistema.
```
### 1.4. Organizacióndeldocumento

```
Eldocumentoseorganizademaneraclarayeficiente,estructurándose
entornoalasfuncionalidadesybeneficiosdeldesarrollodelsistemade
gestióndetareasynotificacionespersonalizadas.Esteenfoque
aseguraunacomunicaciónefectivayaccesibledelainformación,
facilitandolacomprensióndelfuncionamientoyalcancedelsistema
tantoparalosusuarioscomoparalosinteresadosenelproyecto.
```
## 2. OBJETIVOSYRESTRICCIONESARQUITECTÓNICAS

```
2.1.Priorizaciónderequerimientos
```
#### 2.1.1. RequerimientosFuncionales

##### ID

```
Requerimiento
Funcional Descripción
```
```
Autorida
d
```
##### RF-

##### 1

```
Registro de nueva
cuenta
```
```
El sistema permitirá a los usuarios
registrarseproporcionandosusdatos. Alta
```
##### RF-

##### 2

```
Iniciodesesión Losusuariospodrániniciarsesiónconsus
credenciales. Alta
```
##### RF-

```
3 Vertareas Losusuariospodránverlastareas
asignadas.
```
```
Media
```
##### RF-

##### 4

```
Recibirnotificaciones El sistema enviará notificaciones
automáticasalusuariosobrecambios. Alta
```

##### RF-

##### 5

```
Eliminartarea Losusuariospodráneliminartareasdesu
lista. Media
```
##### RF-

##### 6

```
Editartarea Los usuarios podrán editar las tareas
existentes. Alta
```
##### RF-

##### 7

```
Vernotificaciones Los usuarios podrán visualizar las
notificacionesrecibidas. Alta
```
##### RF-

##### 8

```
Eliminar
notificaciones
```
```
Los usuarios podrán eliminar
notificacionesdesulista. Media
```
##### RF-

##### 9

```
Editar estado de
tarea
```
```
Los usuarios podrán modificar el estado
deunatarea(pendiente,completada). Alta
```
#### 2.1.2. RequerimientosNoFuncionales–AtributosdeCalidad

```
ID RequerimientoFuncional Descripción
```
```
RN-F1 Usabilidad El sistema debe ser
fácildeusar,conuna
interfaz intuitiva para
usuarios sin
conocimientos
técnicos.
RN-F2 Rendimiento El sistema debe
permitir realizar
operaciones de
gestión de tareas y
notificaciones en un
tiempo máximo de 2
segundos.
```
```
RN-F3 Mantenibilidad El sistema debe ser
fácil de mantener,
permitiendo
actualizaciones y
modificaciones sin
afectar la
funcionalidad
existente.
```

##### 3. REPRESENTACIÓNDELAARQUITECTURADELSISTEMA

```
3.1.VistadeCasodeuso
```
```
3.2.VistaLógica
```
#### 3.2.1. DiagramadeSubsistemas(paquetes)

#### 3.2.2. DiagramadeSecuencia(vistadediseño)

```
CasodeUso:IniciarSesión
```

CasodeUso:RecibirNotificaciones

CasodeUso:VerTareas


CasodeUso:EliminarTarea

CasodeUso:EditarTarea


CasodeUso:VerNotificaciones

CasodeUso:EliminarNotificaciones

CasodeUso:Editarestado


```
CasodeUso:RegistrarnuevaCuenta
```
#### 3.2.3. DiagramadeColaboración(vistadediseño)


#### 3.2.4. DiagramadeObjetos


#### 3.2.5. DiagramadeClases


## 4. ATRIBUTOSDECALIDADDELSOFTWARE

```
4.1.EscenariodeSeguridad
LaseguridadenelSistemadeGestióndeTareasyNotificaciones
Personalizadasesfundamentalparaprotegerlaconfidencialidad,
integridadydisponibilidaddelosdatosdelosusuarios.Se
implementaránmedidasdeseguridadtantoanivelfísicocomológico,
garantizandolaproteccióndelainformaciónpersonal,lastareasylas
notificacionesdentrodelsistema.Además,seaplicaránpolíticasde
seguridadquepermitandetectarypreveniramenazascibernéticas,
asegurandoquelosusuariospuedangestionarsustareasyrecibir
notificacionesconconfianza.
```
```
4.2.EscenariodeUsabilidad
LausabilidadseráunfactorclaveeneldiseñodelSistemadeGestión
deTareasyNotificaciones.Nosaseguraremosdequelainterfazsea
intuitivayfácildenavegar,permitiendoquelosusuariosgestionensus
tareas,recibannotificacionesyeditenoeliminenelementoscon
facilidad.Lafacilidaddeaprendizajedelsistemaylaeficienciaensu
usoseránunaprioridad,minimizandoerroresymaximizandola
satisfaccióndelusuarioparaoptimizarlaproductividad.
4.3.EscenariodeAdaptabilidad
LausabilidadseráunfactorclaveeneldiseñodelSistemadeGestión
deTareasyNotificaciones.Nosaseguraremosdequelainterfazsea
intuitivayfácildenavegar,permitiendoquelosusuariosgestionensus
tareas,recibannotificacionesyeditenoeliminenelementoscon
facilidad.Lafacilidaddeaprendizajedelsistemaylaeficienciaensu
usoseránunaprioridad,minimizandoerroresymaximizandola
satisfaccióndelusuarioparaoptimizarlaproductividad.
4.4.EscenariodeDisponibilidad
Elsistemadebeseraltamenteadaptableparapoderajustarsealas
necesidadescambiantesdelosusuariosydelentorno.Estoincluyela
posibilidaddeincorporarnuevasfunciones,comolapersonalizaciónde
notificacionesylagestióndetareas,singenerarinterrupcionesni
afectarelrendimiento.Elsistemadebepermitiragregarnuevas
característicasorealizarmodificacionesfácilmenteamedidaque
evolucionanlasnecesidadesdelnegocioolaspreferenciasdelos
usuarios.
4.5.EscenariodePerformance
ElSistemadeGestióndeTareasdebeseraccesibleentodomomento,
garantizandoladisponibilidadcontinuadelastareasylas
notificaciones.Estoincluyelacapacidadderecuperaciónantefallosy
desastres,asícomolagestióndeinterrupcionesprogramadaso
```

```
imprevistas.Unsistemarobusto,contiemposdeinactividadmínimos,
garantizaráquelosusuariospuedangestionarsustareassin
inconvenientes.
```
##### REFERENCIASBIBLIOGRÁFICAS

```
Mathews,B.(2023).Elproblemadelbuffet:labúsquedadeltiempopara
lacuraduría.JournalofLibraryAdministration,63,1065-1074.
https://doi.org/10.1080/01930826.2023.
```
```
Jaiswal,A.,Jhawar,V.,Jadhav,Y.yMahato,M.(2022).TaskCO:
aplicaciónAndroidparalagestióndetareas. 2022 5.ªConferencia
internacionalsobreavancesencienciaytecnología(ICAST),358-361.
https://doi.org/10.1109/ICAST55766.2022.1003951 1
```

