const apr = document.querySelector('#apr');
const term = document.querySelector('#term');
const amount = document.querySelector('#amount');
const payment = document.querySelector('#payment');
const btnSend = document.querySelector('#btnSend');


const calcPayment = () => {
    return (parseFloat(apr.value)/parseInt(term.value)*parseFloat(amount.value)).toFixed(2) ;
}

btnSend.addEventListener('click', (event) => {
    event.preventDefault();
    payment.innerText = calcPayment();
});