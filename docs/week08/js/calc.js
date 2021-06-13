const name = document.querySelector('#first_name');
const lastName = document.querySelector('#last_name');
const address = document.querySelector('#address');
const phone = document.querySelector('#phone');
const item0 = document.querySelector('#item_0');
const item1 = document.querySelector('#item_1');
const item2 = document.querySelector('#item_2');
const item3 = document.querySelector('#item_3');
const btnSend = document.querySelector('#btnSend');


const calcPayment = () => {
    return (parseInt(item0.value)*1.3 + parseInt(item1.value)*1.7 + parseInt(item2.value)*2.4 + parseInt(item3.value)*3.5) ;
}


item0.addEventListener('change', (event) => {
    event.preventDefault();
    payment.innerText = calcPayment().toFixed(2);
});

item1.addEventListener('change', (event) => {
    event.preventDefault();
    payment.innerText = calcPayment().toFixed(2);
});

item2.addEventListener('change', (event) => {
    event.preventDefault();
    payment.innerText = calcPayment().toFixed(2);
});

item3.addEventListener('change', (event) => {
    event.preventDefault();
    payment.innerText = calcPayment().toFixed(2);
});


btnSend.addEventListener('click', (event) => {
    $(document).ready(function () {
        $("#formulario").validate({
        });
    });
    event.preventDefault();
    payment.innerText = calcPayment().toFixed(2);
});