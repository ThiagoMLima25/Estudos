<!DOCTYPE html>
<html>
<body>

<h2>Store and retrieve data from local storage.</h2>

<p id="demo"></p>

<script>
var myObj, myJSON, text, obj;

//Se você tiver dados armazenados em um objeto JavaScript, poderá converter o objeto em JSON e enviá-lo para um servidor.
myObj = { "Nome":"John", "Idade":31, "Cidade":"New York" };
myJSON = JSON.stringify(myObj);
localStorage.setItem("testJSON", myJSON);

//Se você receber dados no formato JSON, poderá convertê-los em um objeto JavaScript.
text = localStorage.getItem("testJSON");
obj = JSON.parse(text);
document.getElementById("demo").innerHTML = obj.name + " " + obj.age + " " + obj.city;

</script>
</body>
</html>