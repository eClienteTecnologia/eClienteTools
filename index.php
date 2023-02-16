<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title>eClientTools</title>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/imagens/logo_ecliente.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
.form-range::-webkit-slider-thumb{
-webkit-appearance: none;
appearance: none;
height:20px;
width:20px;
border-radius: 50%;
background: rgb(240, 7, 150);

}
.form-range::-moz-range-thumb{
-webkit-appearance: none;
    appearance: none;
     
}
.b1{
   padding: 5px;
   font-weight: bold;
   color: #00B4FF;
   font-size: 20px;
}
#marker{
    position:relative;
    right:0px;
    height:20px;
    width:30px;
    z-index:100;
}
.fa{
    font-size: 38px;
    color: #00B4FF;
    text-align: center;
}
#para{
    height:20px;
    width:30px;
   margin-left: -23px; 
    position: absolute;
    padding:5px 0px;
    font-weight: bold;
}
    </style>
</head>
<body> 
    
    <div id="header">
        <div class="logoecliente">
            <a href="index.php">
            <img src="assets/imagens/Panel-white-detail2 1.svg" alt="">
            </a>
        </div>
        <div class="logomenu">
            <a href="index.php">
            <img src="assets/imagens/vector.svg" alt="">
            </a>
        </div>
       

    </div> 
        <div>
            <h1>Gerador de Senhas Fortes</h1>
        </div>
        <div .class="subtitulo">
            <h2>Crie senhas fortes e seguras para <br> proteger as suas contas na internet.</h2>
        </div>
                    <div class="card-body">
                        <div id='setorcopy'>
                        <div id="senhacontainer">
                                    <input class="form-control" id="displaysenha" readonly>
                                    <button class="botaocopy" type="submit" onclick="copyfunc()"> Copiar <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                </button> </div> 
                            </div>
                        <form id="geradorform" class="form">
                                
                               
                                <div class="labelcar">
                                    <label for="quantidadenumeros">Quantidade de caracter:</label>
                                </div>   
                                <div class="range">
                                    <div class="sliderValue">
                                    <span>10</span>
                                    </div>
                                    </div>
                                    <div class="caracter">   
                                    <div id="rangeValue">
                                        <input type="hidden" readonly class="form-control" min="8" max="20" value="10" id="demo3">
                                    </div>
                                <div id='range-box'>
                                <!-- <div class="input-char"><button class="input-menos" id="diminuirQuantidade" type="button">-</button> -->
                                <span class="b1">8</span>
                                <input type="range" min="8" max="20" value="10"  class="form-range" id="quantidadeletras">
                                <span class="b1">20</span>
                                <!-- <button class="input-mais" id="aumentaQuantidade" type="button">+</button></span></div> -->
                                </div>
                                <div class="labelcar">
                                    <label for="quantidadenumeros">Caracteres Utilizados:</label>
                                </div> 
                                <div class="multiselecao">
                                    <div class="checkbutton">
                                        <input class="check" type="checkbox" id="incluirmaiusculas" value="option1" checked>
                                        <label class="label-check" for="incluirmaiusculas">ABC</label>
                                    </div>
                                    <div class="checkbutton">
                                        <input class="check" type="checkbox" id="incluirnumeros" value="option1" >
                                        <label class="label-check" for="incluirnumeros">1234</label>
                                    </div>
                                    
                                    <div class="checkbutton">
                                        <input class="check" type="checkbox" id="incluirsimbolos" value="option1" >
                                        <label class="label-check" for="incluirsimbolos">!@#*$</label>
                                    </div>
                            </div>
                            <div id="conteiner-btn">
                                <button type="submit" id="btn-gerar-senha" onload="generatePassword()">Gerar a senha</button>
                            </div>
                        </form> 
                        
                    </div>
        <script src="gerador.js"></script>
        <script>
               const slideValue = document.querySelector("span");
                const inputSlider = document.querySelector("#quantidadeletras");
                inputSlider.oninput = (()=>{
                    let value = inputSlider.value;
                    slideValue.textContent = value;
                    slideValue.style.left = (value*20)-278+"px";
                    slideValue.classList.add("show");
                });

                // slideValue.style.left = (value*20)-278+"px";
                // slideValue.style.left = (value*8.78)-120+"px";  

        </script>
        
                            
</body>
</html>





