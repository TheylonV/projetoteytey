<?php

/**
 * TimeZone
 * Retorna o fuso horario local
 * que definira a hora e a data
 */
function timeZone(){
    date_default_timezone_set("America/Recife");
}
/**
 * DataAtual
 * Retorna a data atualizada
 */
function dataAtual(){
    return date("d/m/Y"); 
}
/**
 * horaAtual
 * Retorna a hora atualizada
 */
function horaAtual(){
    return date("h:i:sa");
}

/**
 * @param $texto
 * É o texto que será manupulado
 * Retorna Texto maiúsculo
 */
function textoMaiusculo($texto){
    if($texto){
        return strtoupper($texto);
    }
}
/**
 * @param $texto
 * É o texto que será manupulado
 * @param  $tipo
 * É o Número que indica o tipo de 
 * manipulação da string
 * Tipos:
 * 1 - Quantidade de caracters de um texto
 * 2 - Quantidade de palavras de um texto
 * 3 - Busca Posição da palavra na string
 */
function contar($texto, $tipo){
    if($texto && $tipo === 1){
        return strlen($texto);
    }
    if($texto && $tipo === 2){
        return str_word_count($texto);
    }
    if($texto && $tipo === 3){
        return strpos($texto, "Diogo");
    }
    return false;
}

/**
 * ReduzirStr
 * Reduzir o tamanho de um texto
 * @param $str que representa o texto a ser reduzido
 * @param $quantidade que reprenta quantos caracters vão ser exibidos
 */
function reduzirStr($str,$quantidade){
    $tamanho = strlen($str);
    if($str && $tamanho >= $quantidade){
      return substr($str,0,$quantidade)." [...]";
    }
  }

  /**
   * CriarLista
   * Popula as informações exibidas na tela principal
   */
  function criarLista(){
      $listaNoticia[0] = array(
          "titulo" => "Área de acampamento",
          "descricao" => "Descubra como você pode escolher uma boa área pro seu acampamento para evitar dores de cabeça nas madrugadas e nos dias em que você vai ficar no local escolhido.",
          "imagem" => "areaDeAcampamento.jpg",
      );
      $listaNoticia[1] = array(
          "titulo" => "Para que ter uma faca no acampamento?",
          "descricao" => "Clique e descubra o que fazer e para que serve uma faca no acampamento",
          "imagem" => "facão.jpg",
      );
      $listaNoticia[2] = array(
          "titulo" => "O que fazer quando o local escolhido tem muita grama ?",
          "descricao" => "Como limpar o local do acampamento para evitar acidentes e animais peçonhentos",
          "imagem" => "mato.jpg",
      );
      $listaNoticia[3] = array(
          "titulo" => "A barraca é um local bom para dormir?",
          "descricao" => "Descubra se a barraca combina com você!",
          "imagem" => "barraca.jpg",
      );
      $listaNoticia[4] = array(
          "titulo" => "O que é e para que serve uma pederneira ?",
          "descricao" => "Descubra o que é e para que serve a pederneira",
          "imagem" => "pederneira.jpg",
      );
      $listaNoticia[5] = array(
        "titulo" => "Qual fogueira ideial para o acampamento ?",
        "descricao" => "Descubra qual fogueira ideal para o seu acampamento",
        "imagem" => "fogueira.jpg",
    );
      return $listaNoticia;
    }

  function calcularImc($peso, $altura){
    $resposta = 0;
    if($peso && $altura){
        $resposta = $peso / ($altura * $altura);  
    }
    return round($resposta,2);
  }

  function imcBuscarPorId($id)
  {
      $pdo = Database::conexao();
      $sql = "SELECT * FROM imc WHERE id = $id";
      $stmt = $pdo->prepare($sql);
      $list = $stmt->execute();
      $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $list;
  }

  function cadastrar($nome,$email,$peso,$altura,$imc,$classificacao)
    {
        if(!$nome || !$email || !$peso || !$altura || !$imc || !$classificacao){return;}
        $sql = "INSERT INTO `imc_tb` (`nome`,`email`,`peso`,`altura`,`imc`,`classificacao`)
        VALUES(:nome,:email,:peso,:altura,:imc,:classificacao)";

        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':peso', $peso);
        $stmt->bindParam(':altura', $altura);
        $stmt->bindParam(':imc', $imc);
        $stmt->bindParam(':classificacao', $classificacao);
        $result = $stmt->execute();
        return ($result)?true:false;
    }

  

    function cadastrarContato($nome,$sobrenome,$email,$telefone,$mensagem)
    {
        if(!$nome ||!$sobrenome || !$email || !$telefone || !$mensagem){return;}
        $sql = "INSERT INTO `contato` (`nome`,`sobrenome`,`email`,`telefone`,`mensagem`)
        VALUES(:nome,:sobrenome,:email,:telefone,:mensagem)";

        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':sobrenome', $sobrenome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':mensagem', $mensagem);
        $result = $stmt->execute();
        return ($result)?true:false;
    }

    function classificarImc($imc){
        if($imc <= 16){
            return "magreza grave;";
        }elseif($imc > 16 && $imc <= 17){
            return "magreza moderada";
        }elseif($imc > 17 && $imc <= 18.5){
            return "magreza leve";
        }elseif($imc >= 18.6 && $imc<= 24.9){
            return "Peso Ideal";
        }elseif($imc >= 25 && $imc <= 29.9 ){
             return "Sobre Peso";
        }elseif($imc >= 30 && $imc <= 34.9){
            return "Obesidade grau 1";
        }elseif($imc >= 35 && $imc <= 39.9){
            return "Obesidade grau 2 ou severa";
        }elseif($imc >= 40){
            return "Obesidade grau 3 ou morbida";
        }
    }

    function criptografia($senha){
        if(!$senha)return false;
        return sha1($senha);
    }

    function listarNoticias()
    {
        $pdo = Database::conexao();
        $sql = "SELECT * FROM noticias";
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list;
    }

    function cadastrarRegistro($nome,$email,$telefone,$login,$senha)
    {
        if(!$nome || !$email || !$telefone || !$login || !$senha){return;}
        // var_dump($nome,$email,$telefone,$login,$senha);die;
        $sql = "INSERT INTO `registro` (`nome`,`email`,`telefone`,`login`,`senha`)
        VALUES(:nome,:email,:telefone,:login,:senha)";
        $senha = criptografia($senha);
        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':senha', $senha);
        $result = $stmt->execute();
        return ($result)?true:false;
    }  