document.getElementById('search-input').addEventListener('keydown', function(event) {
    if (event.keyCode === 13) {
        search();
    }
});
document.getElementById('search-button').addEventListener('click', search);

function search() {
    const input = document.getElementById('search-input').value;
    if (input !== '') {
        fetch(`/api/search/${input}`)
            .then(response => response.json())
            .then(data => {
                const cardsDisplayArea = document.getElementById('park-display-area');
                let cardsHTML = '';
                for (park of data) {
                    cardsHTML += `
                        <a class="card destination-card" href="/park/${park.id}">
                        `;
                        if(park.image){
                            cardsHTML += `<img class="card-image" src="${park.image}">`;
                        } else{
                            cardsHTML += `<img class="card-image" src="https://placehold.co/600x400?text=ParkReference">`;
                        }
                    cardsHTML += `<div class="card-text">
                            <h2 class="card-title">${park.name}</h2>
                        </div>
                    </a>`;
                }
                cardsDisplayArea.innerHTML = cardsHTML;
            })
    }
}
