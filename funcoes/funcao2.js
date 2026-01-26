// função máscara cpf
const cpfInput = document.getElementById("idcpf")
  cpfInput.addEventListener('keypress', () =>{
  let cpfcomprimento = cpfInput.value.length

  if (cpfcomprimento === 3 || cpfcomprimento ===7 ){
    cpfInput.value += "."
  }
  else if  (cpfcomprimento === 11 ){
    cpfInput.value += "-"
  }
  
  })

  // função máscara telefone
const telefoneInput = document.getElementById("idtelefone")
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

//função carrega valormensalidade

