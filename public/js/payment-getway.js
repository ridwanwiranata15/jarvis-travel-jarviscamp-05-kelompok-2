const paymentHeaders = document.querySelectorAll('.payment-header');
const paymentBodies = document.querySelectorAll('.payment-body');

paymentHeaders.forEach(function(header, index){
    header.addEventListener("click", function(e){
        e.preventDefault();
        paymentBodies[index].classList.toggle("show-payment-body");
    });
});
