<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insertarCategoria" method="post">
        <label for="">
            Nombre de la categoria
        </label>

        <input 
        type="text" 
        name="nombre" 
        id="nombre" 
        placeholder="Escriba aqui"
        >

        <label for="">
            Status
        </label>
        
        <input 
        type="number" 
        name="status" 
        id="status" 
        placeholder="Escriba aqui"
        >

        <button type="submit"> Aceptar </button>

    </form>
    
</body>
</html>