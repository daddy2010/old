
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div id="demo"></div>
        <script>
        function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    myFunction(this);
    }
  };
  xhttp.open("GET", "new.xml", true);
  xhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>Title</th></tr>";
  var x = xmlDoc.getElementsByTagName("DATA");
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("WAIT")[0].childNodes[0].nodeValue +
    "</td><td>";
  }
  document.getElementById("demo").innerHTML = table;
}
</script>
        <?php
       
        ?>
    </body>
</html>
