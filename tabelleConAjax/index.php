<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Esercizio con Ajax</title>
</head>
<body>


<button id="nuova-riga">Inserire Persona</button>
					
<div id="tabella-container"></div>

	
		<script>
		let persone;
		let inserisciBtn = document.querySelector('#nuova-riga');
		let tabellaContainer = document.querySelector("#tabella-container");
		inserisciBtn.addEventListener('click', inserisciPersona);
		
		generaTabella();
		
		function generaTabella(){
			
			fetch('./select.php', {
			    method: 'POST',
			    headers: {
			        'Content-Type': 'application/json'
			    }
			})
			.then((response)  => response.json())
			.then(data => {
			    persone = data;
			    console.log('Dati ricevuti: ', data);
			    
			    let tabella = ` 
			    	<table>
					<thead>
						
						<tr>
							<td>ID</td>
							<td>Nome</td>
							<td>Cognome</td>
							<td>Email</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						${generaRighe(data)}
					
				
					</tbody>
				</table>
				`;
				
				
				tabellaContainer.insertAdjacentHTML('beforeend', tabella);
				let modificaBtn = document.querySelectorAll('.modifica-persona');
				let eliminaBtn = document.querySelectorAll('.elimina-persona');
				
				for(let i=0; i < modificaBtn.length;i++){
					
				modificaBtn[i].addEventListener('click', modificaPersona);
				}
				
				for(let i=0; i < modificaBtn.length;i++){
				eliminaBtn[i].addEventListener('click', eliminaPersona);
				}
			})
			.catch((error)=> {
			    console.error('Errore: ', error);
			});
			
		}


		
		function generaRighe(persone){
			let righe = '';
			persone.forEach(persona=> {
				let riga = `
					<tr>
						<td>${persona.id}</td>
						<td>${persona.nome}</td>
						<td>${persona.cognome}</td>
						<td>${persona.email}</td>
						<td>
							<button class="modifica-persona" data-val="${persona.id}">Modifica</button>
							<button class="elimina-persona" data-val="${persona.id}">Elimina</button>
								
						</td>
				</tr>
				`;
				
				righe += riga;
			});
			return righe;
		}
		
		function inserisciPersona(){
			//fetch per inserimento dati
			const formData = new FormData();
			formData.append('nome', 'Edo');
			formData.append('cognome', 'Berlotto');
			formData.append('email', 'nEdo@gmail.com');
			fetch('./insert.php', {
			    method: 'POST',
			    
			    body: formData
			})
			.then((response)  => response.json())
			.then(data => {
			    console.log(data);
			    aggiornaTabella();
			}).catch((error)=> {
				    console.error('Errore: ', error);
				});
		}
		
		function eliminaPersona(e){
			let id = e.target.getAttribute('data-val');
			console.log('Elimino persona: ', id);
			const formData = new FormData();
			formData.append('id', id);
			
			fetch('./delete.php', {
			    method: 'POST',
			    body: new URLSearchParams({ id }),
			})
			.then((response)  => response.json())
			.then(data => {
			    console.log(data);
			    aggiornaTabella();
			}).catch((error)=> {
				    console.error('Errore: ', error);
				});
		}
		
		
		function modificaPersona(e){
			let id = e.target.getAttribute('data-val');
			let email = 'fica@gmail.com';
			console.log('Modifico persona: ', id);
			const formData = new FormData();
			formData.append('id', id);
			formData.append('email', email);
			
			fetch('./update.php', {
			    method: 'POST',
			    
			    body: formData
			})
			.then((response)  => response.json())
			.then(data => {
			    console.log(data);
			    aggiornaTabella();
			}).catch((error)=> {
				    console.error('Errore: ', error);
				});
		}
		
		function aggiornaTabella(){
			let tabella = document.querySelector('table');
		    tabellaContainer.removeChild(tabella);
		    generaTabella();
			
		}
		
	
		
		
		</script>

</body>
</html>