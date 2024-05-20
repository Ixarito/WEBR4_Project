const urlParams = new URLSearchParams(window.location.search);
const destinationId = urlParams.get('id');

fetch('../assets/private/data/destination.json')
    .then(response => response.json())
    .then(data => {
        const cardsDisplayArea = document.getElementById('park-display-area');

        for (park of data.parks) {
            const cardHTML = `
            <a class="card destination-card" href="park.html?id=${data.id}">
                <img class="card-image" src="${park.image}">
                <div class="card-text">
                    <h2 class="card-title">${park.name}</h2>
                </div>
            </a>
            `;
            cardsDisplayArea.innerHTML += cardHTML;
        }

        //ouvrir une autre page html
        
        

    });