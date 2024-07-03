const OpenModalAddPlanes =document.querySelector('.seperator-pesawat').children[0];
const ModalAddPlanes = document.querySelector('.modal-add-planes');
const BtnCloseModalAddPlanes = document.querySelector('.modal-add-planes-header').children[1];
const BtnSaveModalAddPlanes = document.querySelector('.modal-add-planes-footer').children[0]
const BtnCloseModalEditPlanes = document.querySelector('.modal-edit-planes-header').children[1];



OpenModalAddPlanes.addEventListener('click', function(e) {
    e.preventDefault();
    ModalAddPlanes.style.display = "block";

    BtnSaveModalAddPlanes.addEventListener("click", function(e) {
        e.preventDefault();
        const inputs = document.querySelectorAll(".add-planes input");
        const alerts = document.querySelectorAll(".add-planes .alert-message");
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



BtnCloseModalAddPlanes.addEventListener('click', function(e){
    e.preventDefault
    ModalAddPlanes.style.display = "none";
})


function EditPlanes(id){
    document.querySelector('.modal-edit-planes').style.display = "block";
    // ambil data dari tabel pesawat   
    const DataValue = document.querySelector('tr[data-id="'+id+'"]');
    const FormDataValue = document.querySelector('.edit-planes').children[0]
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
BtnCloseModalEditPlanes.addEventListener("click", function(e){
    e.preventDefault
    document.querySelector('.modal-edit-planes').style.display = "none";
    
})