function validaCPF(cpf) {
  cpf = cpf.replace(/[^\d]+/g, ''); // Remove todos os caracteres não numéricos do CPF
  if (cpf == '') { // Verifica se o CPF está vazio
    return false; // Retorna falso, indicando um CPF inválido
  }
  // Elimina CPFs inválidos conhecidos
  if (
    cpf.length != 11 || // Verifica se o CPF possui 11 dígitos
    cpf == "00000000000" || 
    cpf == "11111111111" || 
    cpf == "22222222222" || 
    cpf == "33333333333" || 
    cpf == "44444444444" ||
    cpf == "55555555555" || 
    cpf == "66666666666" || 
    cpf == "77777777777" || 
    cpf == "88888888888" || 
    cpf == "99999999999"
  ) {
    return false; // Retorna falso, indicando um CPF inválido
  }
  // Valida o 1º dígito verificador
  var add = 0;
  for (var i = 0; i < 9; i++) { // Percorre os primeiros 9 dígitos do CPF
    add += parseInt(cpf.charAt(i)) * (10 - i); // Soma a multiplicação do dígito pelo seu peso
  }
  var rest = 11 - (add % 11); // Calcula o dígito verificador
  if (rest == 10 || rest == 11) {
    rest = 0;
  }
  if (rest != parseInt(cpf.charAt(9))) { // Verifica se o dígito verificador é igual ao esperado
    return false; // Retorna falso, indicando um CPF inválido
  }
  // Valida o 2º dígito verificador
  add = 0;
  for (var i = 0; i < 10; i++) { // Percorre os primeiros 10 dígitos do CPF
    add += parseInt(cpf.charAt(i)) * (11 - i); // Soma a multiplicação do dígito pelo seu peso
  }
  rest = 11 - (add % 11); // Calcula o dígito verificador
  if (rest == 10 || rest == 11) {
    rest = 0;
  }
  if (rest != parseInt(cpf.charAt(10))) { // Verifica se o dígito verificador é igual ao esperado
    return false; // Retorna falso, indicando um CPF inválido
  }
  return true; // Retorna verdadeiro, indicando um CPF válido
}

// Função para exibir mensagem de CPF inválido
function cpfinvalido() {
  $("#cpf").addClass("is-invalid"); // Adiciona a classe "is-invalid" ao campo de CPF para destacar o erro
  $("#cpf-feedback").html("CPF inválido"); // Define o texto de feedback para indicar que o CPF é inválido
}

// Evento de validação do CPF ao perder o foco do campo
$("#cpf").on("blur", function() {
  var cpf = $(this).val(); // Obtém o valor digitado no campo de CPF
  if (!validaCPF(cpf)) { // Verifica se o CPF é inválido
    cpfinvalido(); // Chama a função para exibir a mensagem de CPF inválido
  } else {
    $("#cpf").removeClass("is-invalid"); // Remove a classe "is-invalid" do campo de CPF
    $("#cpf-feedback").html(""); // Remove o texto de feedback
  }
});
