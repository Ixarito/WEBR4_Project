var filter = document.getElementById('types');

filter.addEventListener('change', function() {
    const type = this.value;
    const rideRows = document.querySelectorAll('#park-ride');
    console.log(rideRows.length);
    rideRows.forEach(function (row){
        if (row.classList.contains(type)){
            console.log("display");
            row.style.display = '';
        } else {
            console.log("hidden");
            row.style.display = 'none';
        }
    });
});
