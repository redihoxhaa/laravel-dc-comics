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