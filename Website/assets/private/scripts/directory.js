// include number from 0 (included) to max (excluded)
function getRandomInt(max) {
return Math.floor(Math.random() * max);
}


fetch('../assets/private/data/destination.json')
.then(response => response.json())
.then(data => {
	const cardsDisplayArea = document.getElementById('cards-display-area');
	// simulate several cards
	for (let i = 0; i < 20; i++) {
	for (let destination of data) {
		const cardHTML = `
		<div class="card">
			<img class="card-image" src="${destination.parks[getRandomInt(destination.parks.length)].image}">
			<div class="card-text">
				<h2 class="card-title">${destination.name}</h2>
				<p class="card-description">${destination.timezone}</p>
				<a class="neon-button" href="destination.html?id=${destination.id}">En savoir plus</a>
			</div>
		</div>
		`;
		cardsDisplayArea.innerHTML += cardHTML;
	}
	}
});