const OpenModalAddAirport =document.querySelector('.seperator-airport').children[0];
const ModalAddAirport = document.querySelector('.modal-add-airport');
const BtnCloseModalAddAirport = document.querySelector('.modal-add-airport-header').children[1];
const BtnSaveModalAddAirport = document.querySelector('.modal-add-airport-footer').children[0]
const BtnCloseModalEditAirport = document.querySelector('.modal-edit-airport-header').children[1];



OpenModalAddAirport.addEventListener('click', function(e) {
    e.preventDefault();
    ModalAddAirport.style.display = "block";

    BtnSaveModalAddAirport.addEventListener("click", function(e) {
        e.preventDefault();
        const inputs = document.querySelectorAll(".add-airport input");
        const alerts = document.querySelectorAll(".add-airport .alert-message");
        let allFieldsFilled = true; // Flag untuk memeriksa apakah semua kolom terisi

        inputs.forEach(function(input, index) {
            if (input.value.trim() === "") {
                input.classList.add('input-error');
                if (alerts[index]) {
                    alerts[index].innerText = "kolom '" + input.name + "' jangan kosong";
                }
                allFieldsFilled = false; // Set flag ke false jika ada kolom yang kosong
            } else {
                input.classList.remove('input-error');
                if (alerts[index]) {
                    alerts[index].innerText = "";
                }
            }

            // Tambahkan event listener untuk menghapus pesan saat pengguna mengetik
            input.addEventListener('input', function() {
                if (input.value.trim() !== "") {
                    input.classList.add('input-success');
                    if (alerts[index]) {
                        alerts[index].innerText = "";
                    }
                }
            });
        });

        // Jika semua kolom terisi, lanjut ke halaman tambahan
        if (allFieldsFilled) {
            // Tambahkan logika untuk melanjutkan ke halaman tambahan di sini
           document.location.href = "/index"
        }
    }); // Menambahkan listener hanya sekali
});



BtnCloseModalAddAirport.addEventListener('click', function(e){
    e.preventDefault
    ModalAddAirport.style.display = "none";
})


function EditAirport(id){
    document.querySelector('.modal-edit-airport').style.display = "block";
    // ambil data dari tabel airport   
    const DataValue = document.querySelector('tr[data-id="'+id+'"]');
    const FormDataValue = document.querySelector('.edit-airport').children[0]
    FormDataValue.children[0].children[2].children[0].value  =  DataValue.children[1].innerText;
    FormDataValue.children[1].children[2].children[0].value  =  DataValue.children[2].innerText;
    FormDataValue.children[2].children[2].children[0].value  =  DataValue.children[3].innerText;
    FormDataValue.children[3].children[2].children[0].value  =  DataValue.children[4].innerText;
    FormDataValue.children[4].children[2].children[0].value  =  DataValue.children[5].innerText;
    FormDataValue.children[5].children[2].children[0].value  =  DataValue.children[6].innerText;
    FormDataValue.children[6].children[2].children[0].value  =  DataValue.children[7].innerText;
    FormDataValue.children[7].children[2].children[0].value  =  DataValue.children[8].innerText;
    FormDataValue.children[8].children[2].children[0].value  =  DataValue.children[9].innerText;
    
    

}
BtnCloseModalEditAirport.addEventListener("click", function(e){
    e.preventDefault
    document.querySelector('.modal-edit-airport').style.display = "none";
    
})