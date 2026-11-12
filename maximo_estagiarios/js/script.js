//Calcular (Não Mudar)
document.getElementById("bt_calcular").addEventListener("click", function () {
  //Declarar Variaveis do Input (Mudar)
  var myDiv_aviso = document.getElementById("aviso");

  var myDiv_resul = document.getElementById("resultado");

  var num_funcio = document.getElementById("teste").value;

  if (num_funcio == "") {
    var aviso_branco = "Número de empregados não informado.";

    //(Não Mudar)
    myDiv_aviso.classList.remove("sumir");
    myDiv_aviso.offsetHeight;
    myDiv_aviso.classList.add("show_result");

    //Sumir Resultado (Não Mudar)
    myDiv_resul.classList.add("sumir");

    document.getElementById("aviso").textContent = aviso_branco;
  } else {
    //Tabela de Resultado Aparecer (Não Mudar)
    myDiv_resul.classList.remove("sumir"); // Remove a classe 'hidden'
    myDiv_resul.offsetHeight; // Força o reflow para garantir que a transição aconteça
    myDiv_resul.classList.add("show_result"); // Adiciona a classe 'show' para iniciar a transição

    //Sumir Avisos (Não Mudar)
    myDiv_aviso.classList.add("sumir");
  }

  //Calculo maximo de estagiarios
  if (num_funcio <= 5) {
    var quant_estag = 1;
  }
  if (num_funcio >= 6 && num_funcio <= 10) {
    var quant_estag = 2;
  }
  if (num_funcio >= 11 && num_funcio <= 25) {
    var quant_estag = 5;
  }
  if (num_funcio > 25) {
    var quant_estag = num_funcio * (20 / 100);
  }

  //Mostrar no Resultado (Mudar)

  document.getElementById("teste_i").textContent = num_funcio;
  document.getElementById("quant_estag_i").textContent = quant_estag.toFixed(0);
});
