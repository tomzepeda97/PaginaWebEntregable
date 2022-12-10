<?php 
    session_start();
    echo "";
    print_r($_SESSION['user_id']);
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Noto+Sans&display=swap" rel="stylesheet">
    <title>Plantas Medicinales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
</head> 
<body>
    <header>
    <nav class="navbar navbar-light" style="background-color: #BABA3B;" font-color="black"> <!--para el encabezado-->
        <a class="navbar-brand" href="#"> P  O  X  E  T  I  K</a>
        <ul class="nav">
            <li class="nav-item active" +>
              <a class="nav-link" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Plantas</a>
            </li>
            <?php if ( !isset ($_SESSION['user_id'])){ ?>
            <li class="nav-item">
                <a class="nav-link" href="index2.php">Registrar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
            <?php } ?>
            <li class="nav-item">
              <m href="background" class="nav-link">Acerca de</m>
              
            </li>
           
          </ul>
    </nav>
    <div class="cover d-flex justify-content-center align-items-center flex-column" >
        <h1>POXETIK</h1>
        <P>Medicamentos naturales de alta calidad</P>
        <button class="btn btn-primary">Conoce más</button>
    </div>
</header>
<section>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center"> <!--clase para aliniar las cajas-->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-2">
                <div class="card">
                    <div title="plantas para el tratamiento de la diabetes" class="cover cover-small" style="background-image: url(https://www.cuerpomente.com/medio/2020/01/14/judia-diabetes_4c780216_1280x853.jpg);">
                    </div>

                <div class="card-body">
                <h5 class="card-title">Pantas para la Diabetes</h5>
                <p class="card-text">Ante la diabetes, un trastorno cada vez más común, la fitoterapia puede servir de freno. Algunas plantas medicinales poseen la virtud de emular a la insulina.</p>
                <a href="#" class="btn btn-primary">Ingresar</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-2">
        <div class="card">
            <div title="plantas para la perdida de peso" class="cover cover-small" style="background-image: url(https://t2.uc.ltmcdn.com/es/posts/7/9/8/cola_de_caballo_39897_2_600.jpg);">
            </div>
            <div class="card-body">
              <h5 class="card-title">Plantas perdida de peso</h5>
              <p class="card-text">¿Quieres perder peso de forma saludable? Estas infusiones para adelgazar te ayudarán a eliminar de forma natural esa grasa que te sobra.</p>
              <a href="#" class="btn btn-primary">Ingresar</a>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-2">
          <div class="card">
            <div title="plantas para el tratamiento de las artritis"  class="cover cover-small" style="background-image: url(https://www.webconsultas.com/sites/default/files/styles/wc_adaptive_image__small/public/articulos/propiedades-romero.jpg);">
            </div>
            <div class="card-body">
              <h5 class="card-title">Pantas para las artritis</h5>
              <p class="card-text">Los ingredientes activos de los remedios a base de hierbas son similares a los de los medicamentos convencionales.</p>
             <a href="#" class="btn btn-primary">Ingresar</a>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-2">
            <div class="card">
             <div title="plantas para el tratamiento de la colitis" class="cover cover-small" style="background-image: url(https://viviendosanos.com//wp-content/uploads/2018/01/remedios-para-la-colitis-ulcerosa-aloe-vera.jpg);">
             </div>
            <div class="card-body">
            <h5 class="card-title">Pantas para la colitis</h5>
            <p class="card-text">La colitis se puede prevenir manteniendo mediante una dieta adecuada, el ejercicio y una vida saludable.</p>
            <a href="#" class="btn btn-primary">Ingresar</a>
    
        </div>
    </div>
</section>
<section>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-5">
                <img src="open-doodles-plant.svg" 
                alt="Persona abrazando una maseta"/>
            </div>
            <div class="col-12 col-sm-6">
                <h3>!Mejor tu vida con algo natural¡</h3>
                <P>
                  Ordena tu medicamento en Poxetik o acerca a nuestra sucursal más cercano.   
                </P>
                <a href="#">Ingresar a la tienda</a>
            </div>
        </div>
    
</div>
</section>
<!--seccion 3 carrusel de imagenes-->
<section>
    <div class="container mt-5 mb-5">
        <div class="product-stripe">
            <div class="stripe-container">
                <div class="card">
                    <div title="plantas diente de leòn" 
                    class="cover cover-small" 
                    style="background-image: url(https://t1.ev.ltmcdn.com/es/posts/7/0/1/como_es_la_planta_diente_de_leon_y_para_que_sirve_2107_600.jpg);">
                    </div>
                     <div class="card-body">
                     <h5 class="card-title">Diente de leon</h5>
                     <span class="badge bg-info text-dark">$150 pesos</span>
                     
                  </div>
                 </div>


                 <div class="card">
                     <div title="plantas Hierbabuena" 
                     class="cover cover-small" 
                     style="background-image: url(https://revistalacampina.mx/wp-content/uploads/2018/05/1-35.jpg);">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Hierbabuena</h5>
                        <span class="badge bg-info text-dark">$130 pesos</span>
                        
                    </div>
                </div>


            <div class="card">
                <div title="Tè verde" 
                class="cover cover-small" 
                style="background-image: url(https://plantasmedicinalespara.com/wp-content/uploads/2018/03/camilina-te-verde_01.jpg);">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Tè Verde</h5>
                    <span class="badge bg-info text-dark">$180 pesos</span>
                </div>
            </div>
            <div class="card">
                <div title="planta Eucalipto" 
                class="cover cover-small" 
                style="background-image: url(https://mercadoacasa.com/wp-content/uploads/2021/10/Eucalipto.jpg);">
            </div>
            <div class="card-body">
                <h5 class="card-title">Eucalipto</h5>
                <span class="badge bg-info text-dark">$250 pesos</span>
                
                
  
   
      </div>
     </div>
     <div class="card">
         
        <div title="planta TOMILLO" 
        class="cover cover-small" 
        style="background-image: url(https://frutasyverdurasacosta.com/wp-content/uploads/2018/10/TOMILLO-OK.jpg);">
    </div>
    <div class="card-body">
        <h5 class="card-title">Tomillo</h5>
        <span class="badge bg-info text-dark">$50 pesos</span>


</div>
</div>
            </div>
        </div>
    </div>
</section>

</body>
</html>