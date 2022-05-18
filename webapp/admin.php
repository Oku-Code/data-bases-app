<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bases de datos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <header>
            <div class="title">
                <h2>Bases de datos</h2>
            </div> 
            <div class="nicks">
                <a href="#">Oku</a>
                <a href="#">MacheWD</a>
            </div>
        </header>
        <section>
            <div class="title-two">
                <h2>Bienvenido Administrador</h2>
                <p>Que quieres hacer hoy</p>
           </div>
           <div class="check-tablas">
               <fieldset>
                   <legend>Selecciona una tabla para comenzar</legend>
                   <div>
                       <input type="radio" name="table" id="predio" value="predio">
                       <label for="predio">Predio</label> 
                   </div>
                   <div>
                       <input type="radio" name="table"  id="arrendador" value="arrendador">
                       <label for="arrendador">Arrendador</label> 
                   </div>
                   <div>
                       <input type="radio" name="table"  value="arrendatario" id="arrendatario">
                       <label for="arrendatario">Arrendatario</label> 
                   </div>
                   <div>
                       <input type="radio" name="table"  value="comprador" id="comprador">
                       <label for="comprador">Comprador</label> 
                   </div>
                   <div>
                       <input type="radio" name="table"  value="vendedor" id="vendedor">
                       <label for="vendedor">Vendedor</label> 
                   </div>
               </fieldset>
           </div>
            <article class="admin"> 
                <div class="crud-container">
                   <h3>Operaciones</h3>
                   <label for="create">Crear</label> 
                   <button type="button" class="create-btn">Crear</button>
                   <label for="create">Ver</label> 
                   <button type="button" class="read-btn">Ver</button>
                   <label for="create">Actualizar</label> 
                   <button type="button" class="up-btn">Actualizar</button>
                   <label for="create">Eliminar</label> 
                   <button type="button" class="delete-btn">Eliminar</button>
                </div>

                <div class="datos">
                    
                </div>
            </article>
        </section>    
    </main>
</body>
</html>
