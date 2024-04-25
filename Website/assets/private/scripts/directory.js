// include number from 0 (included) to max (excluded)
function getRandomInt(max) {
	return Math.floor(Math.random() * max);
}


fetch('../assets/private/data/destination.json')
	.then(response => response.json())
	.then(data => {
		const cardsDisplayArea = document.getElementById('destination-display-area');
		// simulate several cards
		for (let i = 0; i < 20; i++) {

			const cardHTML = `
				<div class="card">
					<img class="card-image" src="${data.parks[getRandomInt(data.parks.length)].image}">
					<h2 class="card-title">${data.name}</h2>
					<div class="card-text">
						<p class="card-description">${data.timezone}</p>
						<a class="neon-button" href="destination.html?id=${data.id}">En savoir plus</a>
					</div>
				</div>
				`;
			cardsDisplayArea.innerHTML += cardHTML;
			
		}
	});
	