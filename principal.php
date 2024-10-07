<?php 
$listaNoticia = criarLista();
foreach($listaNoticia as $noticia):
?>
<a class="pag-link" href="boxe.html">
<div class="categoryCard">
<img src="<?=$noticia['imagem']?>" alt="mainCardImg" class="mainCardImg" width=320px height=180px>
<p class="mainCategoryCardTitle"><?=$noticia['titulo']?></p>
<p class="mainCategoryCardDescription"><?= reduzirStr($noticia['descricao'],180)?></p>
</div>
</a>
<?php endforeach?>

<div class="di">
    <div>
        <br>
    <h2>BEM VINDO AO CAMPINGBR!!</h2>
        <p class="tex" >Aqui você conhecerá os preparativos de um acampamento!!</p>
        <br>
        <a href="http://localhost/projetoteytey/?pagina=area">
        <img src="./imagens/areaDeAcampamento.jpg">
        <p>Área de acampamento</p>
        <p>Descubra como você pode escolher uma boa área pro seu acampamento para evitar dores de cabeça nas madrugadas e nos dias em que você vai ficar no local escolhido.</p>
        <br>
        </a>
    
    </div>
    <div>
        <a href="faca.html">
        <img src="./imagens/facão.jpg"><br>
        <p>Para que ter uma faca no acampamento?</p>
        <p>Clique e descubra o que fazer e para que serve uma faca no acampamento</p>
            <br>
        </a>
    </div>
    <div>
        <a href="mato.html">
        <img src="./imagens/mato.jpg"><br>
        <p> O que fazer quando o local escolhido tem muita grama ?</p>
        <p>Como limpar o local do acampamento para evitar acidentes e animais peçonhentos</p>
        <?php echo "olá mundo"; ?>
        <br>
        </a>
    </div>
    <div>
        <a href="barraca.html">
        <img src="./imagens/barraca.jpg"><br>
        <p>A barraca é um local bom para dormir ?</p>
        <p> Descubra se a barraca combina com você!</p>
        <br>
        </a>
    </div>
    <div>
        <a href="pederneira.html">
        <img src="./imagens/pederneira.jpg"><br>
        <p> O que é e para que serve uma pederneira ?</p>
        <p> Descubra o que é e para que serve a pederneira</p>
        <br>
        </a>
    </div>
    <div>
        <a href="fogueira.html">
        <img src="./imagens/fogueira.jpg"><br>
        <p> Qual fogueira ideial para o acampamento ?</p>
        <p> Descubra qual fogueira ideal para o seu acampamento</p>
        <br>
        </a>
    </div>