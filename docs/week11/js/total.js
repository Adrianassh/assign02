const item0 = document.querySelector('#item_0');
const item1 = document.querySelector('#item_1');
const item2 = document.querySelector('#item_2');
const item3 = document.querySelector('#item_3');
const payment = document.querySelector('#payment');
const total = document.querySelector('#total');

const calcPayment = () => {
	return (parseInt(item0.value)*1.3 + parseInt(item1.value)*1.7 + parseInt(item2.value)*2.4 + parseInt(item3.value)*3.5) ;
}


item0.addEventListener('change', (event) => {
	event.preventDefault();
    let cost = calcPayment().toFixed(2);
	payment.innerText = cost;
    total.innerText = cost;
});

item1.addEventListener('change', (event) => {
	event.preventDefault();
	let cost = calcPayment().toFixed(2);
	payment.innerText = cost;
    total.innerText = cost;
});

item2.addEventListener('change', (event) => {
	event.preventDefault();
	let cost = calcPayment().toFixed(2);
	payment.innerText = cost;
    total.innerText = cost;
});

item3.addEventListener('change', (event) => {
	event.preventDefault();
	let cost = calcPayment().toFixed(2);
	payment.innerText = cost;
    total.innerText = cost;
});