# DC COMICS CRUD

#### CONSEGNA DELL'ESERCIZIO 

```
Milestone 1
Tramite gli appositi comandi artisan create un model con relativa migration e un resource controller.

Milestone 2
Iniziate a definire le prime operazioni CRUD con le relative view:
- index()
- show()
- create()
- store()

Bonus
creare il seeder per la tabella comics utilizzando il file in allegato. 
```

#### SVOLGIMENTO

Oggi mettiamo insieme tutti gli argomenti studiati fino ad ora aggiungendo un resource controller. Quest'ultimo infatti ci permetterà
di gestire diversi aspetti del nostro dato, tra i quali appunto la creazione, l'aggiornamento, il salvataggio e l'eliminazione.

Quindi come al solito creiamo un database, un resource controller, un model, e un seeder se abbiamo come in questo
caso un array di array associativi a disposizione per popolare la tabella.

Grazie al resource controller possiamo definire delle rotte che vengono gestite internamente a quest'ultimo.

All'interno di esso troveremo diverse funzioni di default con le quali andremo a listare tutti i nostri elementi tramite **index**,
a crearli tramite la funzione **create**, a salvarli tramite la funzione **store** e a visualizzarli
singolarmente tramite **show**.

In index() tramite il metodo all(), passiamo alla nostra pagina la collection di tutti i dati dei fumetti.

In create() mostriamo una form con input per inserire un nuovo fumetto (ricordiamoci di autenticare il form con @csrf). 

In store() definiamo una nuova istanza tramite il modello Comic, sul quale andiamo ad assegnare ai rispettivi campi, i rispettivi valori degli input del form.
Aggiungiamo infine un redirect facoltativo per visualizzare il nuovo record registrato.

In show() visualizziamo una pagina dinamica che si popola di dati in base al parametro che gli passiamo come secondo argomento, in questo caso l'id
della nostra istanza. In pratica è quello che vediamo quando clicchiamo su un singolo fumetto della lista, una pagina dedicata.

#### SVILUPPO ESERCIZIO

Oggi invece abbiamo implementato la funzione di edit dei nostri record. Per fare ciò, creaimo un link che rimanda alla funzione edit() nel controller, 
attraverso la quale visualizziamo una pagina contenente un form con @method=('PUT') oppure @method=('PATCH'), con i dati del record già precompilati 
pronti per la modifica. Ciò è possibile innanzitutto perché abbiamo incluso l'id come parametro della route nel tag **a**, e successivamente perchè 
abbiamo popolato i campi di input attraverso l'attributo value, che va a prendere tutti i valori dei rispettivi campi. Una volta effettuate le modifiche, 
con un pulsante update, andiamo ad invocare la funzione update() del nostro controller, presente come action nel form. In questo caso passiamo l'oggetto 
**$comic** per non dover usare il ::find() per la ricerca. L'update salverà le modifiche attraverso la funzione integrata nel modello update(), e possiamo 
fare un redirect alla pagina di dettaglio o a qualsiasi pagina vogliamo.

La funzione destroy lavora in modo analogo. Dobbiamo passare al form sempre l'id del nostro fumetto, ma questa volta avremo un @method('DELETE') con un 
relativo campo di input che funge da pulsante. Verrà invocata quindi la funzione destroy(), che attraverso il metodo delete(), andrà ad eliminare il dato 
corrispondente all'id che gli abbiamo passato.

BONUS:
Possiamo creare una modale come conferma di eliminazione per evitare che l'utente clicchi per sbaglio il pulsante di delete. In questo caso possiamo 
sfruttare bootstrap, attraverso l'utilizzo di una sola modale. Questo perchè nel pulsante di apertura modale, che per convenzione avrà stampato comunque 
DELETE, andiamo ad aggiungere un data-bs-target che sarà l'id della modale seguito da un trattino e dalla sintassi tipica di blade per stampare una variabile, 
in questo caso ```data-bs-target="#my-dialog-{{ $comic->id }}"```. Facendo così non ci dobbiamo servire di altro codice js, se non quello integrato di bootstrap 
per passare alla modale il dato di riferimento del fumetto. Ovviamente nel form di delete, possiamo accedere alla variabile come se non ci posse la modale, 
in questo caso ```action="{{ route('comics.destroy', $comic->id) }}"```.
