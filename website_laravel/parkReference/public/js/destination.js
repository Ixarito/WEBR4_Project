const urlParams = new URLSearchParams(window.location.search);
const destinationId = urlParams.get('id');


fetch('../assets/private/data/destination.json')
    .then(response => response.json())
    .then(data => {
        const cardsDisplayArea = document.getElementById('park-display-area');

        for (park of data.parks) {
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

        //ouvrir une autre page html



    });
