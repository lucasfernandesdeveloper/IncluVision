const botaoFala = document.getElementById('botao_fala')
const texto = document.getElementById('elemento_texto');

console.log(botaoFala)

botaoFala.addEventListener('click', e => {
    reconhecimento.start();
})



const reconhecimento = criarReconhecimento();

function criarReconhecimento() {
    const reconhecerFala = window.SpeechRecognitionAlternative || window.webkitSpeechRecognition
    const reconhecimento = reconhecerFala !== undefined ? new reconhecerFala() : null

    if(!reconhecimento){
        texto.innerHTML = "Som não encontrado"
        return null
    }

    reconhecimento.lan = "pt-BR"
    reconhecimento.onstart = () => console.log('iniciou')
}
