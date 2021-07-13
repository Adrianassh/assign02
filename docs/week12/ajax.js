const startcity = document.querySelector('#startCity');
const startstate = document.querySelector('#startState');
const endcity = document.querySelector('#endCity');
const endstate = document.querySelector('#endState');
const boton2 = document.querySelector('#btnSend');
const outResponse = document.querySelector("#txtHint");

const llamar = (str) => {
  if (str.length == 0) {
    outResponse.innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        outResponse.innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "assign12.php?q=" + Http.responseText, true);
    xmlhttp.send();
  }
}


boton2.addEventListener('click', (event) => {
    const Http = new XMLHttpRequest();
    const url=`/cgi-bin/cs213/mileageAjaxJSON?startCity=${startcity}&startState=${startstate}&endCity=${endcity}&endState=${endstate}`;
    Http.open("GET", url);
    Http.send();

    Http.onreadystatechange = (e) => {
    llamar(Http.responseText)
}
})


