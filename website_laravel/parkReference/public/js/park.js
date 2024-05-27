var filter = document.getElementById('types');

filter.addEventListener('change', function() {
    const type = this.value;
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

});
