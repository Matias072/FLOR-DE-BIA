
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlordeBia</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
      <!-- or -->
      <link rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">


    <link rel="stylesheet" href="http://localhost/FlorDeBia/Assets/CSS/style.css">
</head>



<body>
    
<!------------------------------MENU-------------------------------------------------------------------------------------------------------------->
    <nav class="navbar navbar-expand-md bg-body-tertiary">
        <div class="container-fluid">
          <a href="#" class="logo"><i class='bx bxs-diamond'></i>Flor de Bia</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0"> 
              <li class="nav-item">
                <a class="nav-link" href="#">ㅤHome</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="http://localhost/FlorDeBia/View/cadastro.php">Cadastro</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="http://localhost/FlorDeBia/View/contato.php">Contate-nos</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="https://localhost/FlorDeBia/View/perfil.php">Perfil</a>
              </li>
            </ul>

            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Digite o produto" aria-label="Pesquisar">
              <button class="btn-btn-outline-success" type="submit">Buscar</button>
            </form>
          </div>
        </div>
      </nav>

<!------------------------------MENU-------------------------------------------------------------------------------------------------------------->


<!------------------------------CARROSEL-------------------------------------------------------------------------------------------------------------->
     <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="http://localhost/FlorDeBia/Assets/imagens/anel.jpg" class="carrossel" alt="...">
          </div>
          <div class="carousel-item">
            <img src="http://localhost/FlorDeBia/Assets/imagens/anel.jpg" class="carrossel" alt="...">
          </div>
          <div class="carousel-item">
            <img src="http://localhost/FlorDeBia/Assets/imagens/anel.jpg" class="carrossel" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev next" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon next" aria-hidden="true" style="background-color: black"></span>
          <span class="visually-hidden next">Next</span>
        </button>
      </div>
      
<!------------------------------CARROSEL-------------------------------------------------------------------------------------------------------------->



<!------------------------------CARDS-------------------------------------------------------------------------------------------------------------->
      <section>
        <h1 class="text-center my-3 my-xl-5">NOVAS CATEGORIAS</h1>
        <div class="reponsividade">
          
          <div class="Container-card-1">
            <div class="cards">
              <img src="http://localhost/FlorDeBia/Assets/imagens/produto1.jpeg">
              <p>Pândora</p>
              <h5>R$500</h5>
              <ion-icon name="cart-outline"></ion-icon>
            </div><!--cards-->
            
            <div class="cards">
              <img src="http://localhost/FlorDeBia/Assets/imagens/produto1.jpeg">
              <p>Pândora</p>
              <h5>R$500</h5>
              <ion-icon name="cart-outline"></ion-icon>
            </div><!--cards-->
            
            <div class="cards">
              <img src="http://localhost/FlorDeBia/Assets/imagens/produto2.jpeg">
              <p>Pândora</p>
              <h5>R$500</h5>
              <ion-icon name="cart-outline"></ion-icon>
            </div><!--cards-->
            
            <div class="cards">
              <img src="http://localhost/FlorDeBia/Assets/imagens/produto2.jpeg">
              <p>Pândora</p>
              <h5>R$500</h5>
              <ion-icon name="cart-outline"></ion-icon>
            </div><!--cards-->
            
            <div class="cards">
              <img src="http://localhost/FlorDeBia/Assets/imagens/produto2.jpeg">
              <p>Pândora</p>
              <h5>R$500</h5>
              <ion-icon name="cart-outline"></ion-icon>
            </div><!--cards-->

            <div class="cards">
              <img src="http://localhost/FlorDeBia/Assets/imagens/produto2.jpeg">
              <p>Pândora</p>
              <h5>R$500</h5>
              <ion-icon name="cart-outline"></ion-icon>
            </div><!--cards-->

            <div class="cards">
              <img src="http://localhost/FlorDeBia/Assets/imagens/produto1.jpeg">
              <p>Pândora</p>
              <h5>R$500</h5>
              <ion-icon name="cart-outline"></ion-icon>
            </div><!--cards-->

            <div class="cards">
              <img src="http://localhost/FlorDeBia/Assets/imagens/produto1.jpeg">
              <p>Pândora</p>
              <h5>R$500</h5>
              <ion-icon name="cart-outline"></ion-icon>
            </div><!--cards-->

            <div class="cards">
              <img src="http://localhost/FlorDeBia/Assets/imagens/produto3.png">
              <p>Pândora</p>
              <h5>R$500</h5>
              <ion-icon name="cart-outline"></ion-icon>
            </div><!--cards-->
            
            <div class="cards">
              <img src="http://localhost/FlorDeBia/Assets/imagens/produto3.png">
              <p>Pândora</p>
              <h5>R$500</h5>
              <ion-icon name="cart-outline"></ion-icon>
            </div><!--cards-->
          </div><!--Container-card-1-->
        </section>
      </div>

    <section class="cta">
        <div class="text-cta">
            <p class="texto">INVERNO À VENDA</p>
            <h3><p class="texto">20% OFF<br>NOVAS CHEGADAS</p></h3>
            <a href="#" class="btn">Compre agora</a>
        </div><!--text-cta-->
    </section><!--cta-->
<!------------------------------CARDS-------------------------------------------------------------------------------------------------------------->



<!------------------------------CARDS2-------------------------------------------------------------------------------------------------------------->

    <section>
        <h1>JÓIAS NOVAS</h1>
        <div class="Container-joia">
          <div class="joia">
            <img src="http://localhost/FlorDeBia/Assets/imagens/main1.jpg" alt="" width="300px" height="100px">
           <p>Pândora</p>
           <h5>R$500</h5>
           <ion-icon name="cart-outline"></ion-icon>
        </div><!--roupa-->


            <div class="joia">
              <img src="http://localhost/FlorDeBia/Assets/imagens/main1.jpg" alt="" width="300px" height="100px" >
             <p>Pândora</p>
             <h5>R$500</h5>
             <ion-icon name="cart-outline"></ion-icon>
           </div><!--joia-->

            <div class="joia">
             <img src="http://localhost/FlorDeBia/Assets/imagens/main1.jpg" alt="" width="300px" height="100px">
             <p>Pândora</p>
             <h5>R$500</h5>
             <ion-icon name="cart-outline"></ion-icon>
            </div><!--joia-->

           <div class="joia">
              <img src="http://localhost/FlorDeBia/Assets/imagens/main2.jpg" alt="" width="300px" height="100px">
             <p>Pândora</p>
              <h5>R$500</h5>
              <ion-icon name="cart-outline"></ion-icon>
           </div><!--joia-->
        </div><!--container-joia-->
     </section>

<!------------------------------CARDS2-------------------------------------------------------------------------------------------------------------->



<!------------------------------RODAPÉ------------------------------------------------------------------------------------------------------------->

    <section class="Contato" id="Contato">
		<div class="meio-contato">
			<h3>Contato</h3>
			<h5>Nos envie uma mensagem</h5>
			<div class="icons">
				<a href="#"><i class='bx bxl-facebook-square' ></i></a>
				<a href="https://www.instagram.com/"><i class='bx bxl-instagram-alt' ></i></a>
				<a href="#"><i class='bx bxl-twitter' ></i></a>
			</div>
		</div>

		<div class="meio-contato">
			<h3>Explore</h3>
			<li><a href="#home">Home</a></li>
			<li><a href="#featured">Featured</a></li>
			<li><a href="#new">New</a></li>
			<li><a href="http://localhost/FlorDeBia/View/contato.php">Contact</a></li>
		</div>

    <div class="meio-contato">
    <h3>Temos vagas</h3>
    <input type="file" id="fileUpload" style="display: none;" />
    <li><a href="#" onclick="document.getElementById('fileUpload').click();">Envie seu currículo</a></li>
    <button onclick="sendFile()">Enviar</button>
</div>

<!-- Java Script para uploads-->
<script>
function sendFile() {
    var file = document.getElementById('fileUpload').files[0];
    var formData = new FormData();
    formData.append('file', file);

    fetch('http://localhost/FlorDeBia/Controler/upload.php', {
        method: 'POST',
        body: formData
    })
    .then(response => console.log(response))
    .catch(error => console.error(error));
}
</script>

	</section>

	<div class="last-text">
		<p>Copyright © 2022 All rights reserved | This template is made with  by Tahmid Ahmed</p>
	</div>
  <!-- Java Script para uploads-->

<!------------------------------RODAPÉ------------------------------------------------------------------------------------------------------------->



<!-----------------------------SCRIPT------------------------------------------------------------------------------------------------------------->
   
    <script src="https://unpkg.com/scrollreveal"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="personalizado.js"></script>
  </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>

<!------------------------------SCRIPT------------------------------------------------------------------------------------------------------------->
</body>
</html>