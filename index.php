<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="scripts.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <title>Qual o seu modelo favorito?</title>
</head>
<body>
    <form action="gravarvoto" method="post">
    <div id="caixa_geral">

        <div class="titulo">
            <h2>Qual dos smartphones abaixo você prefere?</h2>
        </div>        

        <div id=caixa_opcao>     

            <div class="opcao1">
                <img 
                width="180px" height="200px" src="img/samsung.jpg" alt="Samsung S20">
                <div class="conteudo">
                    <h3>Samsung S20</h3>
                    <hr>
                        <div class="descricao">
                            <p>- 8 GB RAM</p>
                            <p>- 128 GB Armazenamento</p>
                            <p>- Processador Octa-Core 2.73 GHz</p>
                            <p>- Android 10.0</p>   
                        </div>
                        <div class="check">
                            <input type="radio" id="c1" name="celular" value="Samsung"> 
                        </div>
                                                   
                </div>
            </div>

            <div class="opcao2">
                <img 
                width="180px" height="200px" src="img/xiaomi.jpg" alt="Xiaomi MI 10">
                <div class="conteudo">
                    <h3>Xiaomi MI 10</h3>
                    <hr>
                        <div class="descricao">
                            <p>- 8 GB RAM</p>
                            <p>- 128 GB Armazenamento</p>
                            <p>- Processador Octa-Core 2.84 GHz</p>
                            <p>- Android 10.0</p>                             
                        </div>
                        <div class="check">
                            <input type="radio" id="c2" name="celular" value="Xiaomi">
                        </div>
                            
                </div>
            </div>
            
            
            <div class="opcao3">
                <img 
                width="180px" height="200px" src="img/apple.jpg" alt="Apple Iphone X">
                <div class="conteudo">
                    <h3>Apple Iphone X</h3>
                    <hr>
                        <div class="descricao">
                            <p>- 3 GB RAM</p>
                            <p>- 256 GB Armazenamento</p>
                            <p>- Processador 6-Core 2.1 GHz</p>
                            <p>- iOS 13</p>                            
                        </div>
                        <div class="check">
                            <input type="radio" id="c3" name="celular" value="Apple">
                        </div>
                                                     
                </div>
               
            </div> 
            
        </div>
    
            </select>
            <div class="caixa_cadastro">
                <h4>CPF : <input type="text" name="cpf" required="required" maxlength="14" pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}" 
                onkeypress="this.value = formataCpf(event)"></h4>  
            </div>

            <div class="botao">
                <input type="submit"  name="btsalvar" value="Enviar voto">
            </div>

    </form>

    </div>

    <div class="footer">
        <p>Developed by: Andre Costa, Alex Moreira e Brunno Henrique</p>
        <p>2020 ©</p>
    </div>

</body>
</html>