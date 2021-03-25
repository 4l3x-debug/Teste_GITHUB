<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/4dd14f3c9f.js" crossorigin="anonymous"></script>
            <title>Document</title>
            <link rel="stylesheet" href="./category.css">
            <link rel="stylesheet" href="./style.css">
            <link rel="stylesheet" href="./games.css">
        <style>
            @font-face{
                font-family: Hollow;
                src: url(./Trajan\ Pro\ Regular.ttf);
            }

            body{
                height: 130vh;
                background-color: #383333;
            }

            header{
                width:100%;
                height:3%;
                background-color :  #000000;
            }
                
            .sub{
                height:9%;
                width:100;
                background-color : #efefef;
                
            }

            main{
                height: 84%;
                width: 100%;
            }

            footer{
                height: 21%;
                width: 100%;

                display: flex;
                flex-direction: column;
                justify-content: center;

                background-color: #c51f1f;
                background-color: #efefef;
            }

            footer img{
                margin: 0px 0px 15px 10px;
            }

            .area{

                color:#db293b;
                background-color: #2b2a2a;

                border-radius: 5%;
                opacity:0.9;
                text-align: justify;
                height:18%;
                width: 18%;
                Position: absolute;
                bottom:-1200px;
                right: 30px;    
                font-family:Helvetica;
                font-size:16px;
                line-height: 30px;
            }

            .t{
                margin:10px;
            }

            .social{
                margin-left: 10px;
            }
            
            .r-social{
                display: inline;
                font-size: 15pt;
                font-weight: bold;
            }
        </style>
    </head>
    <body>

        <header>
        </header>

            <section class="sub">  <a href="index.php"><figure><img class="logo" src="logo1.png" alt="logo" height="75px" height="75px"></figure></a>
                
                <!--<section><a class="ola" href="sla.php">Categorias</a>
                            
                        <a class="ola2" href="sla.php">Categorias</a>-->
                
                </section><section> 

                    <section class="barra_pesq">
                        <input class="texto-s" type="text" placeholder="Pesquisa">
                        <a href="#" class="btn">
                            <i class="fas fa-search"></i>
                        </a>
                    </section>

                    <a class="ola3" href="index.php" >Perfil</a> 

                </section>
            </section>

        <main>
            
            <section class="game">
                <img src="../background_s2.jpg" alt="jogo1" class="game-img" width="100%" height="75%">
                <section class="g-description">
                    <img src="../Icons/horror.png" alt="dev1" width="15%" height="15%" class="g-dev">
                    <section class="text-desc">
                        <p class="title">HOLLOW NIGHT</p>
                        <p class="subtitle">Um incrível jogo de sei lá oq</p>
                    </section>
                </section>
            </section>
        
        </main>
        <footer>

            <img src="logofooter.png" header="12%" width="12%">
            <section class="social">
                <p class="r-social">Facebook: Indie Games</p><br>
                <p class="r-social">Instagram: Indie_games_br</p><br>
                <p class="r-social">Contatos: (11)944733194 </p>
            </section>
                    
        </footer>

        
        <script src="fontawesome/js/all.min.js"></script>
        <script>
            function spamn(){
                alert('Esta parte ainda está em desenvolvimento, volte mais tarde');
            }

            function redirect(url, category){
                location.href = url + '?category=' + category;
            }

            /*Animação Menu que Desce*/
            var barra = document.querySelectorAll('.seta');

            barra[0].addEventListener('click', ()=>{
                let menu = document.getElementById('menu_desce');
                if(menu.classList.contains('subir')){
                    menu.classList.add('descer');
                    menu.classList.remove('subir');
                }else{
                    menu.classList.add('subir');
                    menu.classList.remove('descer');
                }
            })
        </script>
    </body>
    </html>