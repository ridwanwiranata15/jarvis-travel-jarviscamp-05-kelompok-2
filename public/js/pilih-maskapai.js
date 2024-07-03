const listsDetailPlanes = document.querySelectorAll('.modal-detail-ticket-content-header ul li');
const showListDetailTicket = document.querySelectorAll('.show-list-detail-ticket');

listsDetailPlanes.forEach(function(list, index){
    list.addEventListener("click", function(e){
        showListDetailTicket.forEach(function(show, showIndex){
            if (index === showIndex) {
                show.style.display = "block";
            } else {
                show.style.display = "none";
            }
        });
    });
})

document.addEventListener('DOMContentLoaded', function() {
    // Select semua elemen dengan kelas .show-list-detail-ticket
    const ticketSections = document.querySelectorAll('.show-list-detail-ticket');
  
    // Loop melalui setiap section
    ticketSections.forEach(section => {
      // Ambil header untuk mengetahui kategori (Refund atau Reschedule)
      const header = section.querySelector('h1').textContent;
  
      // Ambil semua elemen li dalam section tersebut
      const listItems = section.querySelectorAll('.description-content ul li');
  
      // Loop melalui setiap li
      listItems.forEach(item => {
        // Tambahkan event listener untuk klik
        item.addEventListener('click', function() {
          // Ambil deskripsi dari atribut data-description
          const description = item.textContent;
  
          // Tampilkan deskripsi sesuai dengan kategori dan deskripsi yang diklik
          document.getElementById('description-display').textContent = `${header}: ${description}`;
        });
      });
    });
  });
  