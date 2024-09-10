<!--<?php echo "olá mundo";?>-->
<?php
if($_GET && isset($_GET['pagina'])){
    $paginaUrl = $_GET['pagina'];
}else{
    $paginaUrl = null;
}

include_once('header.php');
    if($paginaUrl === "principal"){
        include_once('principal.php');
    }elseif($paginaUrl === "login"){
        include_once('login.php');
    }elseif($paginaUrl === "area"){
        include_once('areacamp.php');
    }else{
        echo "404 pagina não existe";
    }
include_once('footer.php');

/** 
 * pegando informação url
 */

/**if($_GET && isset($_GET['pagina'])) {
    $paginaUrl = $_GET['pagina'];
}else{
    $paginaUrl = null;
}
var_dump($paginaUrl);die;
*/