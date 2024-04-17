<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="/css/miestilo.css" rel="stylesheet">
    <title>Hospital Regional</title>
</head>
<body>
    <header>
    <h1>Hospital Reginal Oriental</h1>
    </header>
    <main>

       <section class='contenido'>
       <center><img src="hos.jpg" alt=""></center>
        <h2>Prototipo de Proyecto Medico</h2>
        <p>Una clínica privada abrirá sus puertas próximamente contará con una serie de
médicos y enfermeras para la atención al cliente y además del director único
que gestionará todo; pero para realizar una mejor gestión de dicha clínica el
director necesita un programa que le facilite este propósito</p>

<h2>Subir Archivo medico de Paciente</h2>

<form id="uploadForm" enctype="multipart/form-data">
<label for="fileInput">Seleccionar Archivo</label>
    <input type="file" name="file" id="fileInput">
    <button type="button" onclick="uploadFile()">Subir Archivo</button>

</form>
       

       </section>

    </main>

            <footer>       
            <h3>Conocenos</h3>
            </footer>
   
    
</body>
</html>