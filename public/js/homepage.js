const TanggalPulang = document.querySelector('.date-home input[type="date"]');
const CheckboxDate = document.querySelector('.date-home-choose input[type="checkbox"]');
TanggalPulang.classList.add('input-disabled');

CheckboxDate.addEventListener('change', function() {
    if (this.checked) {
        TanggalPulang.classList.remove('input-disabled');
    } else {
        TanggalPulang.classList.add('input-disabled');
    }
});

const FromContent  = document.querySelector('.from-content')
const ToContent = document.querySelector('.to-content');
const dari = document.querySelector('.dari');
const tujuan = document.querySelector('.tujuan');

FromContent.addEventListener("click", function(e){
    e.preventDefault;
    dari.classList.toggle('show')
})
ToContent.addEventListener("click", function(e){
    e.preventDefault();
    tujuan.classList.toggle('show')
})
document.querySelector('.choose-people-pasenger').addEventListener("click", function(e){
    e.preventDefault();
    document.querySelector('.modal-choose-people').style.display = "block";
})
document.querySelector('.modal-choose-people p').addEventListener("click", function(event){
    event.preventDefault();
    document.querySelector('.modal-choose-people').style.display = "none";
})

const InputsNumber = document.querySelectorAll('.modal-choose-people-body input[type="number"]');
const ValueNumber = document.querySelectorAll('.choose-people-pasenger span');
const adultIndex = 0; // Asumsi bahwa input untuk dewasa adalah input pertama
const childIndex = 1; // Asumsi bahwa input untuk anak-anak adalah input kedua

document.querySelector('.done').addEventListener("click", function(e) {
    e.preventDefault();
    let hasAdult = false;
    let hasChildren = false;
    
    InputsNumber.forEach(function(input, index) {
        if (index === adultIndex && input.value > 0) {
            hasAdult = true;
        }
        if (index === childIndex && input.value > 0) {
            hasChildren = true;
        }
        
        if (ValueNumber[index]) {
            ValueNumber[index].textContent = input.value || 0;
        }
    });

    if (hasChildren && !hasAdult) {
        alert("Anak-anak harus didampingi oleh orang dewasa!");
    } else {
        document.querySelector('.modal-choose-people').style.display = "none";
    }
});
// Ambil list nama bandara
const Airports = document.querySelectorAll('.modal-choose-airport-content-body ul');
const Pilih = document.querySelectorAll('.pilih p');

Airports.forEach(function(airport, airportIndex) {
    const lists = airport.querySelectorAll("li");
    lists.forEach(function(list) {
        list.addEventListener('click', function(e) {
            e.preventDefault();
            if (Pilih[airportIndex]) { // Memastikan elemen p ada untuk menghindari error
                Pilih[airportIndex].textContent = list.textContent;
            }
        });
    });
});
