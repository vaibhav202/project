//display payment options
const link = document.querySelector(".contact-detail-link");
const btn = document.querySelector('.contact-detail-btn');
btn.addEventListener('click', ShowContactDetails, false);
function ShowContactDetails() {
    link.classList.toggle('show');
}

const qr = document.querySelector('.payment-with-qr');
const btn2 = document.querySelector('.contact-detail-btn2');
btn2.addEventListener('click', ShowQr, false);
function ShowQr() {
    qr.classList.toggle('show');
}