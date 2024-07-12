function EditPlanes(id){
    document.querySelector('.modal-edit-airport').style.display = "block";
    document.querySelector('.modal-edit-planes-header span').addEventListener("click", function(e){
        e.preventDefault()
        document.querySelector('.modal-edit-airport').style.display = "none";


        // ambil semua form nya
        const Forms = document.querySelectorAll('.modal-edit-planes-content input[type="text"]');
        console.log(Forms)
    })
}