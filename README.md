# laravel
Introducció
Biorritmes
La naturalesa i tot el que ella comprèn: clima, estacions, reproducció dels animals, collites, etc., es regeixen per
cicles biològics o ritmes. Hi ha diferents bioritmes que afecten el nostre comportament en diferents maneres. S'ha
comprovat estadísticament que l'energia física es comporta cíclicament en períodes de 23 dies, l'energia emotiva
en períodes 28 dies i l'energia intel·lectual en 33 dies. Al moment de néixer, cada cicle comença des de zero i
comença a pujar en una fase positiva, durant la qual les energies i les capacitats són altes
Enunciat
Realitzar una estructura WEB Laravel que ens permeti recollir en un formulari (vista) les dades necessaries per a
calcular els biorritmes d’un usuari.
 L’usuari serà un objecte (model) que mantindrà les dades de l’usuari i els resultats dels càlculs.
 L’encarregat de gestionar la interacció de l’usuari amb el model serà un controlador (controller) específic.
 El mateix controlador gestionarà la vista que permetrà visualitzar graficament els resultats obtinguts
 Cal control·lar les dades introduïdes per l’usuari, tant en el front-end com en el back-end, i validar les dades
resultants del càlcul.
 Els resultats del càlcul de biorritmes és mostraran en una vista en valors numèrics i amb la seva
representació gràfica (graph). Es valorarà l’us d’elements gràfics interactius.
FULL DE PROJECTES
IMO20FP16
REV 00 07/18
IMO20FP16 DAM2MP15 BIO.docx 4/6
Requeriments
Frameworks a utilitzar
 Laravel
 Bootstrap
 Graph
o Per a la representació gràfica de les dades podeu utilitzar llibreries JS o packages compatibles amb
Laravel o amb Bootstrap
Template
 Definició de Master de les que heretaran les vistes utilitzant Blade com a llenguatge de template
 Cap vista realitzarà cap procés amb les dades, només reben valors/variables i els mostren per pantalla.
Càlcul de Biorritmes
Els càlculs i el control de la validesa de les dades les fa el controlador o el mòdel.
Dades necessàries i indicacions per a calcular el biorritme en funció de la data de naixement d’una persona
Cada biorritme a calcular té un període (P) determinat. Nombre de dies en que es realitza un cicle complert
 FÍSIC: 23 dies
 EMOTIU: 28 dies
 INTELECTUAL: 33 dies
Necessitem calcular quan dies fa que va néixer (D) la persona. En funció de la seva data de naixement (DN)
i del dia actual (DA).
Hem de calcular els cicles (C), quantitat de períodes (P) que s’han complert en funció dels dies des del
naixement.
Els cicles obtinguts (C), s’han de passar a RADIANS (R): 1 cicle = 2*PI radians
Per obtenir un valor circular, que ens permetrà obtenir un valor entre -1 i 1, cal calcular el sinus dels radians
obtinguts. Això ens permetrà fer una representació gràfica temporal
Vista INDEX.
 Indicacions de la finalitat del portal
 Presentació del grup creador de l’aplicació
Vista LOGIN
• Un text amb l’explicació del concepte de biorritme
• Controls HTML per a recollir el nom de l’usuari i la seva data de naixement
Vista FORM
• Mostra el nom de l’usuari, la seva data de naixement
• Mostra la data actual
• Permet modificar la data de naixement i la data actual
• Mostra els valors obtinguts del càlcul de cada biorritme FISIC, EMOTIU, INTELECTUAL (3 valors)
• Mostra una representació gràfica de cada valor.
• Cal generar un gràfic sinusoidal on és mostri l’evolució dels valors dels biorritmes per una finestra temporal
de 30 dies, 15 abans de la data actual i 15 dies després de la data actual
• La modificació de la data actual i/o de la data de naixement provoca el recalculat de les dades (valors del
càlcul dels biorritmes) i la regeneració del gràfic amb els nous valors obtinguts.
FULL DE PROJECTES
IMO20FP16
REV 00 07/18
IMO20FP16 DAM2MP15 BIO.docx 5/6
Vista ERROR
 Mostra un missatge d’error personalitzat
 Error de valors introduïts no correctes
 Error en el càlcul
Controller BioController
• Recull les peticions de les vistes
• Redirigeix cap al model adient o cap a la vista pertinent
 Revisa la integritat i validesa de les dades recollides a les vistes
Model Usuari
• Classe que representa un usuari
• Realitza tots els càlculs necessaris
Models o JS
• Models o arxius addicionals per a la configuració i representació del gràfic, en funció del complement
implementat
Errors de servidor
• Cal personalitzar les pàgines d’error del servidor necessaries, com per exemple, un 404.
Cal entregar el lloc web laravel complert en una carpeta zip amb el nom P003_cognom1_cognom2_nom responent
a la tasca de la plataforma Moodle
