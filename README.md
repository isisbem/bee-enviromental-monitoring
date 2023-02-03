# Bee Environmental Monitoring

### Come avviare l'ambiente di sviluppo
Il sito è basato su un backend [Flask](https://flask.palletsprojects.com) (Python). Come framework CSS è stato utilizzato [TailwindCSS](https://tailwindcss.com) (Node.js).

Le seguenti istruzioni mostrano come avviare l'ambiente di sviluppo.

> Se non lo hai già fatto, installa [Python](https://www.python.org/downloads/) e [Node.js](https://nodejs.org/en/download/).

_Tutti i comandi devono essere eseguiti nella cartella del progetto._

#### Step 1
Crea un ambiente virtuale Python:

```powershell
python -m venv venv
```

Attiva l'ambiente virtuale:

```powershell
.\venv\Scripts\activate
```

#### Step 2
Installa le dipendenze Python:

```powershell
pip install -r requirements.txt
```

#### Step 3
**OPZIONALE:** Installa le dipendenze Node.js:

```powershell
npm install
```

#### Step 4
Avvia il server Flask:

```powershell
python .\server.py
```

> Per visualizzare il sito, apri il browser all'indirizzo [http://localhost:5000](http://localhost:5000).
