function criptografar(){
    const textInitial = document.getElementById('inputText').value;
    const textCriptografado = textInitial
          .replace(/e/g, "enter")
          .replace(/i/g, "imes")
          .replace(/a/g, "ai")
          .replace(/o/g, "ober")
          .replace(/u/g, "ufat");
    document.getElementById('outputText').innerHTML = textCriptografado;
}

function descriptografar() {
    const textInitial = document.getElementById("inputText").value;
    const textDescriptografado = textInitial
        .replace(/enter/g, "e")
        .replace(/imes/g, "i")
        .replace(/ai/g, "a")
        .replace(/ober/g, "o")
        .replace(/ufat/g, "u");
    document.getElementById("outputText").innerText = textDescriptografado;
}

function alterarMensagem(){
    const textInitial = document.getElementById("inputText").value;
    if(textInitial){
        $("#image-single").css('display','none');
        $('#text-single').css('display','none');
        $('#btnCopiar').css('display','block');
    }
}

function copiarTexto(){
    const textFinal = document.getElementById("outputText").value;
    navigator.clipboard.writeText(textFinal).then(() => {
        alert("Texto copiado para a área de transferência!");
    }).catch(err => {
        console.error("Erro ao copiar texto: ", err);
    });
}
