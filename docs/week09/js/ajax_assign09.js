const selection = document.querySelector('#selection');
const response = document.querySelector('#response');
const btnSend = document.querySelector('#btnSend');
const student = document.querySelector('#stu');
const response2 = document.querySelector('#response2');
const files = ['files/colombia.txt','files/usa.txt','files/mexico.txt','files/canada.txt'];
const filesJson = ['files/student1.txt','files/student2.txt'];

selection.addEventListener('change', (event) => {
    let xhttp = new XMLHttpRequest();
    xhttp.open("GET", files[parseInt(selection.value)], true);
    xhttp.send();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200){
            response.innerHTML = this.responseText;
        }
    }
  
});

btnSend.addEventListener('click', (event) => {
    event.preventDefault();
    let xhttp = new XMLHttpRequest();
    xhttp.open("GET", filesJson[parseInt(student.value)], true);
    xhttp.send();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200){
            let rta = this.responseText;
            let rtaJson = JSON.parse(rta);
            let text = `First Name: ${rtaJson.first_name} <br>
            Last Name: ${rtaJson.last_name} <br>
            Address: ${rtaJson.address} <br>
            GPA: ${rtaJson.gpa} <br>
            Major: ${rtaJson.major}.`;
            response2.innerHTML = text;
        }
    } 
});