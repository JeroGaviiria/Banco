<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconne ct" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
</head>

<body class="min-h-[100vh] flex justify-center items-center ">
    <main class="w-[380px] h-[600px] bg-white/10 rounded-2xl">
        <header class="flex justify-center items-center border-b border-red-600/70 bg-red-500 rounded pt-2 pb-2">        
            <h1 class="text-3xl text-white ">Enviar Dinero</h1>
        </header>
        <section class="h-[500px] overflow-y-auto my-7 mx-4 ">
            <nav class=" flex ml-3 gap-6 mt-1 pb-4">
            <form action="acc/transaccion.php" method="post">
            <h1 class=" text-2xl text-white border-b border-red-600/70 bg-red-500 rounded pt-2 pb-2 pl-1">DATOS DE LA CUENTA DE ENVIO</h1 >
    <div class="flex   display-flex gap-2  md-20">
        
    <h1  class="  text-white w-[150px] items-center rounded flex gap-2 ">Ingrese el id de la cuenta</h1>
        </div>   
        <input class="rounded mt-1   p-1 w-[330px] bg-white/40" type="text" name="id_cuentaA">
        <div class="flex  display-flex gap-2  md-20">
    <h1  class="  text-white w-[150px] items-center rounded flex gap-1 "> Ingrese el monto</h1>
        </div>   
     <input class="rounded mt-1  p-1 w-[330px] bg-white/40" type="text" name="monto">
     <h1 class="text-white mb-2">_____________________________</h1>
     <h1 class=" text-2xl text-white border-b border-red-600/70 bg-red-500 rounded  pl-1 first:pt-3 pb-1">DATOS DE LA CUENTA DEL DESTINATARIO</h1 >
     <div class="flex  display-flex gap-2  md-20">
    <h1  class="  text-white w-[150px] items-center rounded flex gap-2 ">Ingrese el id de la cuenta</h1>
        </div>   
     <input class="rounded  mt-1 mb-2 p-1 w-[330px] bg-white/40" type="text" name="id_cuentaB">

     
    
    
    
    <button type="submit" name="submit" class= " ml-1 bg-red-500 px-2 py-2 text-white w-[322px] justify-center  rounded flex gap-2 hover:bg-red-600/70 hover:scale-105">Efectuar Transaccion</button>
    </form>
</nav>    
        </section>  
    </main>
    <script src="js/tailwind-3.2.4.js"></script>

</body>

</html>
