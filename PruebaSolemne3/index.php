
<html>
    <head>
        <script type="text/javascript" src="./MaScript.js"></script>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="MaCss.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Prueba Solemne 3</title>
        <style>
            body{
                 background-image:url(image/Sanjo.jpg) ;
                 background-repeat: no-repeat;
                 background-size: 100% 100%;
            }
           h1{
                text-align: center;
                text-shadow:2px 4px white;
                font-family: algerian;
                font-size: 80px;
                position: relative;
                color: skyblue;
              }
              
        </style>
    </head>
    <body>
        <h1>PRUEBA SOLEMNE 3</h1>
        <div class="w3-card-4 w3-round-xlarge w3-teal w3 w3-display-middle" >
            <h2> Ingresar el Rut</h2>
            <form name="myForm" action="./ConnecterBase.php" onsubmit="return myFunction()" method="post">
                <input type="number" class="w3-input w3-round-xlarge"placeholder="Ingresar el rut"name="Rut" id="numb">
                <input type="submit" class="w3-input w3-round-xlarge"value="Enviar">
            </form>
             <p id="demo"></p>
        </div>
        
    </body>
</html>
