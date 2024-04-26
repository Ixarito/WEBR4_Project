const urlParams = new URLSearchParams(window.location.search);
const parkId = urlParams.get('id');

fetch('../assets/private/data/park.json')
	.then(response => response.json())
	.then(data => {
		const parkName = document.getElementById('park-name');
		const cardsInfoArea = document.getElementById('park-info-area');
		const parkImage = document.getElementById('park-image');
		const parkTable = document.getElementById('park-rides');

		const cardHTML = `
		<div id="park-info-area" class="text-area">
			<p>Marque : <span class="b-neon-text">${data.brand}</span></p>
			<p>Taille : <span class="b-neon-text">${data.size}</span></p>
			<p>Type : <span class="b-neon-text">${data.type}</span></p>
			<p>Pays : <span class="b-neon-text">${data.country}</span></p>
			<p>Région : <span class="b-neon-text">${data.location}</span></p>
			<p>Année de construction : <span class="b-neon-text">${data["year built"]}</span></p>
			<p>Prix : <span class="b-neon-text">${data.cost}</span></p>
			<p>Capacité : <span class="b-neon-text">${data.capacity}</span></p>
			<br>
			<p>Prix adulte : <span class="b-neon-text">${data.adultPrice}</span></p>
			<p>Prix enfant : <span class="b-neon-text">${data.childPrice}</span></p>
		</div>
		`;

		parkName.innerHTML = data.name;
		parkName.href = data.url;
		cardsInfoArea.innerHTML += cardHTML;
		parkImage.src = data.image;

		var rideHtml = `
		<tr>
			<th>Nom</th>
			<th>Type</th>
			<th>Capacité</th>
		</tr>	
		`;
		for (ride of data.rides){
			rideHtml += `
			<tr>
				<td>${ride.name}</td>
				<td>${ride.type}</td>
				<td>${ride.capacity}</td>
			</tr>
			`;
		}
		
		parkTable.innerHTML += rideHtml;
	});