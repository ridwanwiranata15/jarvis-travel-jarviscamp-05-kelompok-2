const buttonsAdd = document.querySelectorAll('.more-header button');
const modals = document.querySelectorAll('.modal-add-data');

buttonsAdd.forEach(function(button, index) {
    button.addEventListener("click", function(e) {
        e.preventDefault()
        FormsSaveUpdate.action = "link"
        FormsSaveUpdate.submit();;
        // Hide all modals first
        modals.forEach(function(modal) {
            modal.style.display = "none";
        });
        // Show the specific modal corresponding to the clicked button
        modals[index].style.display = "block";
    });
});

// Adding functionality to close the modals
const closeButtons = document.querySelectorAll('.modal-add-data-content-header span');

closeButtons.forEach(function(closeButton, index) {
    closeButton.addEventListener("click", function() {
        modals[index].style.display = "none";
    });
});



const BtnSaveCreate = document.querySelectorAll('.modal-add-data-content-footer button');
const FormsAdd = document.querySelectorAll('.modal-add-data-content-body form');
const links = ['url1', 'url2', 'url3']; // contoh array links

BtnSaveCreate.forEach(function(btnSave, index) {
    btnSave.addEventListener("click", function(e) {
        e.preventDefault()
        FormsSaveUpdate.action = "link"
        FormsSaveUpdate.submit();;
        const form = FormsAdd[index];
        const inputs = form.querySelectorAll('input');
        const alerts = form.querySelectorAll(".alert-message");
        let allFieldsFilled = true; // Flag untuk memeriksa apakah semua kolom terisi

        inputs.forEach(function(input, idx) {
            if (input.value.trim() === "") {
                input.classList.add('input-error');
                if (alerts[idx]) {
                    alerts[idx].innerText = "kolom '" + input.name + "' jangan kosong";
                }
                allFieldsFilled = false; // Set flag ke false jika ada kolom yang kosong
            } else {
                input.classList.remove('input-error');
                if (alerts[idx]) {
                    alerts[idx].innerText = "";
                }
            }

            // Tambahkan event listener untuk menghapus pesan saat pengguna mengetik
            input.addEventListener('input', function() {
                if (input.value.trim() !== "") {
                    input.classList.remove('input-error');
                    input.classList.add('input-success');
                    if (alerts[idx]) {
                        alerts[idx].innerText = "";
                    }
                }
            });
        });

        if (allFieldsFilled && links.length > index) {
            form.action = links[index]; // Menggunakan URL sesuai dengan index
            form.submit();
        } else if (!allFieldsFilled) {
            console.error('Some fields are empty');
        } else {
            console.error('No links available for this index');
        }
    });
});


const ModalEditData = document.querySelectorAll('.modal-edit-data')
const FormEditData = document.querySelectorAll('.modal-edit-data-content-body input');
const ButtonsSaveUpdate = document.querySelectorAll('.modal-edit-data-content-footer button')
const FormsSaveUpdate = document.querySelectorAll('.modal-edit-data-content-body form');




function editDataSyarat(id) {
    ModalEditData[0].style.display = "block"
    const Values = document.querySelectorAll('tr[data-id="'+id+'"] td:nth-child(2)')[0]
    FormEditData[0].value = Values.textContent;
    ButtonsSaveUpdate[0].addEventListener("click", function(e){
        e.preventDefault()
        FormsSaveUpdate[0].action = "link"
        FormsSaveUpdate[0].submit();

    })
          
}
function editDataRefundSyarat(id) {
    ModalEditData[1].style.display = "block"
    const Values = document.querySelectorAll('tr[data-id="'+id+'"] td:nth-child(2)')[1]
    FormEditData[1].value = Values.textContent;
    ButtonsSaveUpdate[1].addEventListener("click", function(e){
        e.preventDefault()
        FormsSaveUpdate[1].action = "link"
        FormsSaveUpdate[1].submit();

    })
    
      
}
function editDataKebijakanrefund(id) {
    ModalEditData[2].style.display = "block"
    const Values = document.querySelectorAll('tr[data-id="'+id+'"] td:nth-child(2)')[2]
    FormEditData[2].value = Values.textContent;
    ButtonsSaveUpdate[2].addEventListener("click", function(e){
        e.preventDefault()
        FormsSaveUpdate[2].action = "link"
        FormsSaveUpdate[2].submit();

    })
    
      
}
function editDataEstinasiRefund(id) {
    ModalEditData[3].style.display = "block"
    const Values = document.querySelectorAll('tr[data-id="'+id+'"] td:nth-child(2)')[3]
    FormEditData[3].value = Values.textContent;
    ButtonsSaveUpdate[3].addEventListener("click", function(e){
        e.preventDefault()
        FormsSaveUpdate[3].action = "link"
        FormsSaveUpdate[3].submit();

    })
    
      
}
function editDataProsesrefund(id) {
    ModalEditData[4].style.display = "block"
    const Values = document.querySelectorAll('tr[data-id="'+id+'"] td:nth-child(2)')[4]
    FormEditData[4].value = Values.textContent;
    ButtonsSaveUpdate[4].addEventListener("click", function(e){
        e.preventDefault()
        FormsSaveUpdate[4].action = "link"
        FormsSaveUpdate[4].submit();

    })
    
      
}
function editDataInformasilainnya(id) {
    ModalEditData[5].style.display = "block"
    const Values = document.querySelectorAll('tr[data-id="'+id+'"] td:nth-child(2)')[5]
    FormEditData[5].value = Values.textContent;
    ButtonsSaveUpdate[5].addEventListener("click", function(e){
        e.preventDefault()
        FormsSaveUpdate[5].action = "link"
        FormsSaveUpdate[5].submit();

    })
    
      
}
function editDataKebijakanUmumReschedule(id) {
    ModalEditData[6].style.display = "block"
    const Values = document.querySelectorAll('tr[data-id="'+id+'"] td:nth-child(2)')[6]
    FormEditData[6].value = Values.textContent;
    ButtonsSaveUpdate[6].addEventListener("click", function(e){
        e.preventDefault()
        FormsSaveUpdate[6].action = "link"
        FormsSaveUpdate[6].submit();

    })
    
      
}
function editDataPeriodereschedule(id) {
    ModalEditData[7].style.display = "block"
    const Values = document.querySelectorAll('tr[data-id="'+id+'"] td:nth-child(2)')[7]
    FormEditData[7].value = Values.textContent;
    ButtonsSaveUpdate[7].addEventListener("click", function(e){
        e.preventDefault()
        FormsSaveUpdate[7].action = "link"
        FormsSaveUpdate[7].submit();

    })
    
      
}
function editDataBiayareschedule(id) {
    ModalEditData[8].style.display = "block"
    const Values = document.querySelectorAll('tr[data-id="'+id+'"] td:nth-child(2)')[8]
    FormEditData[8].value = Values.textContent;
    ButtonsSaveUpdate[8].addEventListener("click", function(e){
        e.preventDefault()
        FormsSaveUpdate[8].action = "link"
        FormsSaveUpdate[8].submit();

    })
    
      
}
function editDataProsesreschedule(id) {
    ModalEditData[9].style.display = "block"
    const Values = document.querySelectorAll('tr[data-id="'+id+'"] td:nth-child(2)')[9]
    FormEditData[9].value = Values.textContent;
    ButtonsSaveUpdate[9].addEventListener("click", function(e){
        e.preventDefault()
        FormsSaveUpdate[9].action = "link"
        FormsSaveUpdate[9].submit();

    })
    
      
}
function editDataInformasilainnyaReschedule(id) {
    ModalEditData[10].style.display = "block"
    const Values = document.querySelectorAll('tr[data-id="'+id+'"] td:nth-child(2) ')[10]

    
    FormEditData[10].value = Values.textContent;
    ButtonsSaveUpdate[10].addEventListener("click", function(e){
        e.preventDefault()
        FormsSaveUpdate[10].action = "link"
        FormsSaveUpdate[10].submit();

    })
    
      
}
function EditPromo(id) {
    ModalEditData[11].style.display = "block"
    const Values = document.querySelectorAll('tr[data-id="'+id+'"] td:nth-child(2)')[11]
    FormEditData[11].value = Values.textContent;
    ButtonsSaveUpdate[11].addEventListener("click", function(e){
        e.preventDefault()
        FormsSaveUpdate[11].action = "link"
        FormsSaveUpdate[11].submit();

    })
          
}

const closeModalEdit = document.querySelectorAll('.modal-edit-data-content-header span');
closeModalEdit.forEach(function(close, index){
    ModalEditData.forEach(function(modal){
        close.addEventListener("click", function(e){
            e.preventDefault()
            modal.style.display = "none";
        })
    })
}) 


const listMore = document.querySelectorAll('.list-more')
const listMoreContent = document.querySelectorAll('.list-more-content')

listMore.forEach(function(more, index){
    more.addEventListener("click", function(e){
        e.preventDefault()
        listMoreContent[index].classList.toggle('show-list');
    })
})