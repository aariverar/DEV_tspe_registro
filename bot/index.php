<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatBot with PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
       
            <div class="chatbox">
                    <div class="header">
                        <h4> <img src='img/perfil.jpg' class='imgRedonda'/> Tsoft-Bot </h4>
                                    
                    </div>
                    
                        <div class="body" id="chatbody">
                        <p class="alicia">Hola! soy T-Bot, estoy para responder preguntas relacionadas con calidad de software y algunos datos de TSOFT. Espero ayudarte...</p>
                            <div class="scroller"></div>
                        </div>

                    <form class="chat" method="post" autocomplete="off">
                    
                                <div>
                                    <input type="text" name="chat" id="chat" placeholder="Preguntale algo" style=" font-family: cursive; font-size: 20px;">
                                </div>
                                <div>
                                    <input type="submit" value="Enviar" id="btn">
                                </div>
                    </form>
        </div>
    </div>
    <form action="../home.php" method="post">
    <button type="btn-volver" style="font-family:verdana;color:white;font-weight:bold;background-color: #c00000;width:5%; height:5%" href="../home.php">Volver</button>
    </form>

    <script src="app.js"></script>
    <script>
        setInterval(function(){
document.getElementById('chatbody').scrollTop=5000;},200);
    </script>
        
</body>

</html>