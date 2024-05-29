document.getElementById('search-input').addEventListener('keydown', function (event) {
    if (event.keyCode === 13) {
        search();
    }
});
document.getElementById('search-button').addEventListener('click', search);


var filter = document.getElementById('types');

filter.addEventListener('change', search);

function search() {
    const input = document.getElementById('search-input').value;
    const type = filter.value;

    const rideRows = document.querySelectorAll('.park-ride');

    if (type === "all"){
        rideRows.forEach(function (row){
            row.style.display = '';
        });
    } else
    {
        rideRows.forEach(function (row){
            if (row.classList.contains(type)){
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }

    if (input !== '') {
        const rideRows = document.querySelectorAll('.park-ride');
        rideRows.forEach(function (row) {
            rideRows.forEach(function (row) {
                if (row.cells[0]){
                    var rideName = row.cells[0].innerText;
                }
                if (rideName.includes(input)) {
                } else {
                    row.style.display = 'none';
                }
            });
            console.log(row);
        });
        console.log(input);
    }
}

