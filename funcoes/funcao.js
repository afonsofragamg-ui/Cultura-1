/* funções do login.php */
   
  var btn3 = [btnconsultaemail].forEach((el)=> {
    el.addEventListener("click", () => consultaemail ());
})

  function fechar() {
    window.location.href = "index.php";
  }

  function esqueceusenha(){
    window.location.href = "esqueceusenha.php";
  }

  function sairesqueceusenha(){
    window.location.href = "login.php";
  }
  function enviar() {
        geraSenha(
        getletterLowerCase,
        getletterUpperCase,
        getletterNumber
    )
    //window.location.href = "trocasenha.php";
    window.location.href = "enviaemail.php";
  }

  function abreErro() {
    document.getElementById("idmodalerro").style.display == 'block'
  }

  function mostrarerro() {
    if (document.getElementById("fundo").style.display == 'block') {
      document.getElementById("fundo").style.display = 'none';
      document.getElementById("idmodalerro").style.display = 'none';

    } else {
      document.getElementById("fundo").style.display = 'block'; 
      document.getElementById("idmodalerro").style.display = 'block';
    }        
  }

  //função gerar senha
  // eleção do elemento
  

  //funções
  //Letras e Números
  const getletterLowerCase  = () =>{
    return String.fromCharCode(Math.floor(Math.random() * 26) + 97)
  }

  const getletterUpperCase  = () =>{
    return String.fromCharCode(Math.floor(Math.random() * 26) + 65)
  }

  const getletterNumber  = () =>{
    return (Math.floor(Math.random() * 10).toString());
  }

  const geraSenha = (getletterLowerCase, getletterUpperCase, getletterNumber ) =>{
    
    let $senha = ""

    const tamanhoSenha = 10

    const generators = [
        getletterLowerCase,
        getletterUpperCase,
        getletterNumber
    ]
    for (i = 0; 
        i < tamanhoSenha;
        i = i + 4){
            generators. forEach(() => {
                const randowValue = generators [Math.floor(Math.random() * generators.length)]()
                $senha += randowValue
            })
        }
        $senha = $senha.slice(0, tamanhoSenha)
               
  };


  


