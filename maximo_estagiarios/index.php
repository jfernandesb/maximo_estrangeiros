<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/newadm/CONTROLLER/trava.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="cache-control" content="no-cache" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>...:::: Calcular Quantidade de Estagiários ::::...</title>
  <link rel="shortcut icon" href="../imagens/favicon.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../css/estilo_modelo_simples.css" />
  <link rel="stylesheet" href="../newadm/include/css/estilo_header_footer.css" />

</head>

<body>
  <?php
  include "../newadm/include/header.php";
  require_once $_SERVER['DOCUMENT_ROOT'] . "/newadm/autoload.php";
  ?>
  <main>
    <div id='atualiza'>
      <?php
      $id_ferramentas = 42;
      $todosavisos = Avisos_DAO::buscarAvisos($id_ferramentas);
      foreach ($todosavisos as $avisosatual) {
        echo "
        <li class='lista_atualiza'>
          <p> $avisosatual->desc_avisos</p>
        </li>
	";
      }
      ?>
    </div>
    <div id="ferramenta">
      <div id="tit_ferramenta">
        <h2>Calcular Quantidade de Estagiários</h2>
        <p>
          Preencha o campo abaixo para calcular a quantidade de estagiários permitida de acordo com o número de empregados.
        </p>
      </div>
      <form method="post" name="form_ferramenta">
        <div class="formulario">
          <label>Número de Empregados:</label>
          <input
            class="input"
            type="text"
            id="teste"
            maxlength="10"
            placeholder="00" />
          <button class="ajuda esconder" type="button">?</button>
        </div>
        <div id="bloco_botao">
          <button class="botao" id="bt_calcular" type="button"><i class="fa-solid fa-calculator"></i> Calcular</button>
        </div>
        <div id="aviso" class="sumir">
          <p></p>
        </div>
        <div id="resultado" class="sumir">
          <div class="overflow">
            <table>
              <tr class="tit_resul">
                <td colspan="3">Dados Informados</td>
              </tr>
              <tr>
                <th class="border" colspan="2">Número de Empregados</th>
              </tr>
              <tr>
                <td id="teste_i" colspan="2"></td>
              </tr>
              <tr class="tit_resul">
                <td colspan="3">Resultado</td>
              </tr>
              <tr>
                <th class="border">Quantidade máxima permitida de Estagiários</th>
              </tr>
              <tr>
                <td class="border" id="quant_estag_i"></td>

              </tr>
            </table>
          </div>

        </div>
      </form>
      <div id="txt_formulario">
        <p class="tit_txt_formulario">Base Legal:</p>
        <p>O artigo 17 da Lei n°11.788/2008, traz a quantidade máxima permitida de estagiários.</p>
        <p><strong>O número máximo de estagiários em relação ao quadro de pessoal das entidades concedentes de estágio deverá atender às seguintes proporções:</strong></p>
        <p>I - de 1 (um) a 5 (cinco) empregados: 1 (um) estagiário;</p>
        <p>II - de 6 (seis) a 10 (dez) empregados: até 2 (dois) estagiários;</p>
        <p>III - de 11 (onze) a 25 (vinte e cinco) empregados: até 5 (cinco) estagiários;</p>
        <p>IV - acima de 25 (vinte e cinco) empregados: até 20% (vinte por cento) de estagiários.</p> <br> <br>

        <p><strong>Observações:</strong></p>
        <p>- Considera-se quadro de pessoal o conjunto de trabalhadores empregados existentes no estabelecimento do estágio.</p>
        <p>- Na hipótese de a parte concedente (empresa) contar com várias filiais ou estabelecimentos, os quantitativos serão aplicados a cada um deles.</p>
        <p>- Quando o cálculo do percentual resultar em fração, poderá ser arredondado para o número inteiro imediatamente superior.</p>
        <p>- Não se aplica o disposto aos estágios de nível superior e de nível médio profissional.</p>
        <p>- Fica assegurado às pessoas portadoras de necessidades especais o percentual de 10% (dez por cento) das vagas oferecidas pela parte concedente do estágio.</p>
      </div>
  </main>

  <?php
  include "../newadm/include/footer.php"
  ?>
  <script src="js/script.js"></script>
  <script src="../newadm/include/js/script.js"></script>

</body>

</html>