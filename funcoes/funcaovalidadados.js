const nomeInput = document.getElementById('idnome')
const spanNome = document.getElementById('idspanNome') 
const cpfInput = document.getElementById('idcpf')
const spanCpf = document.getElementById('idspanCpf')
const telefoneInput = document.getElementById('idtelefone') 
const spanTelefone = document.getElementById('idspanTelefone')
const emailInput = document.getElementById('idemail')
const cepInput = document.getElementById('idcep')
const ruaInput = document.getElementById('idlogradouro')
const numeroInput = document.getElementById('idnumero')
const spanNumero = document.getElementById('idspanNumero')
const bairroInput = document.getElementById('idbairro')
const complementoInput = document.getElementById('idcomplemento')
const cidadeInput = document.getElementById('idmunicipio')
const ufInput = document.getElementById('iduf')
const modalidadeInput = document.getElementById('idmodalidade')
const message = document.getElementById('idmenssage')
const enviar = document.getElementById('idsubmit')
const resete = document.getElementById('idreset')


// função enter para pular para proximo campo
  document.addEventListener('keydown', function(event) {
  // Verifica se a tecla pressionada foi Enter (código 13)
  if (event.key === 'Enter') {
        const campos = document.querySelectorAll('.campo');
        const index = Array.from(campos).indexOf(event.target);
        
        // Se o campo atual for um dos campos da lista
        if (index > -1 && index < campos.length - 1) {
            event.preventDefault(); // Impede o envio do form
            campos[index + 1].focus(); // Move o foco para o próximo
        }
  }
});


// valida nome 
nomeInput.addEventListener('blur', () => {
  if (nomeInput.value === ""){
    document.getElementById("idspanNome").style.display = 'block';
    nomeInput.focus ();
    
  } else {
      document.getElementById("idspanNome").style.display = 'none';
    }
})

//mascara cpf
  cpfInput.addEventListener('keypress', () =>{
  let cpfcomprimento = cpfInput.value.length;
  var filtroTeclas = function(event) {
    return (event.charCode >= 48 && event.charCode <= 57) 
  }

  if (cpfcomprimento === 3 || cpfcomprimento ===7 ){
    cpfInput.value += ".";
  }
  else if  (cpfcomprimento === 11 ){
    cpfInput.value += "-";
  }
  
  })

// valida Cpf
cpfInput.addEventListener('blur', () => {
  $cpfLimpo = cpfInput.value;
  $cpfLimpo1 = $cpfLimpo.replace(/[^\d]+/g, "");
  console.log($cpfLimpo1.length);

  if (cpfInput.value =="" || $cpfLimpo1.length !== 11){
    document.getElementById("idspanCpf").style.display = 'block';
    cpfInput.value = "";
    cpfInput.focus ();
  } else{
    document.getElementById("idspanCpf").style.display = 'none';
    document.getElementById("idspanTelefone").style.display = 'none';
    telefoneInput.focus (); 
  }  

})


  // função máscara telefone
   telefoneInput.addEventListener('keypress', () =>{
  let telefonecomprimento = telefoneInput.value.length
  
  if (telefonecomprimento === 0){
    telefoneInput.value += "("
  }
  else if (telefonecomprimento === 3){
    telefoneInput.value += ")"
  }
  else if(telefonecomprimento === 9){
    telefoneInput.value += "-"
  }
  })

  // valida Telefone
  telefoneInput.addEventListener('blur', () => {
    $telefone = telefoneInput.value;
    $telefone1 = $telefone.replace(/[^\d]+/g, "");
    
    if (telefoneInput.value =="" ){
      document.getElementById("idspanCpf").textContent = ''
      document.getElementById("idspanCpf").style.display = 'block'
      document.getElementById("idspanTelefone").style.display = 'block'
      telefoneInput.focus ()
    } else { document.getElementById("idspanTelefone").style.display = 'none'
              document.getElementById("idspanTelefone").style.display = 'none'
    }
  })

// valida email
emailInput.addEventListener('blur', () => {
  if (emailInput.value ==""){
    document.getElementById("idspanEmail").style.display = 'block'
    emailInput.focus ()
  } 
  else { 
    let valida = '^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$'
    return valida.textContent
    if (!emailInput.checkvalidity()){
      idspanEmail.innerhtml == "email inválido"
      document.getElementById("idspanEmail").style.display = 'block'
      emailInput.focus ()
    }
    else{
        document.getElementById("idspanEmail").style.display = 'none'
    }
  }
})

  // valida CEP
  cepInput.addEventListener('blur', () => {
    if (cepInput.value == "" || cepInput.value.length != 8 ){
      cepInput.value = "";
      document.getElementById("idspanCep").style.display = 'block'
      cepInput.focus ()
    }
    else {
      fetch(`https://viacep.com.br/ws/${cepInput.value}/json/`)
      .then(resposta => resposta.json())
      .then(json=>{
        ruaInput.value = json.logradouro;
        cidadeInput.value = json.localidade;
        ufInput.value = json.uf;
        bairroInput.value = json.bairro;
      });
      document.getElementById("idspanCep").style.display = 'none'
      numeroInput.focus ()
    }
})

// valida Numero
numeroInput.addEventListener('blur', () => {
  if (numeroInput.value === ""){
    document.getElementById("idspanNumero").style.display = 'block';
    document.getElementById("idspanNumero1").style.display = 'block';
    numeroInput.focus ();
  } else {
      document.getElementById("idspanNumero").style.display = 'none';
      document.getElementById("idspanNumero1").style.display = 'none';
      complementoInput.focus ()
    }
})

// valida Complemento
complementoInput.addEventListener('blur', () => {
      modalidadeInput.focus () 
})

// valida modalidade
modalidadeInput.addEventListener('blur', () => {
enviar.style.disabled="true"
})
