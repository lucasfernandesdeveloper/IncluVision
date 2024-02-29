<?php

require '../vendor/autoload.php';

// Crie um cliente para o serviço Texto para Fala
use Google\Cloud\TextToSpeech\V1\AudioConfig;
use Google\Cloud\TextToSpeech\V1\SynthesisInput;
use Google\Cloud\TextToSpeech\V1\TextToSpeechClient;
use Google\Cloud\TextToSpeech\V1\VoiceSelectionParams;
use Google\Cloud\TextToSpeech\V1\AudioEncoding;

// Carregue as credenciais de API
$credentials_json = file_get_contents( '../resources/views/audios/opportune-eye-411223-d391dd6401fa.json');
$credentials_array = json_decode($credentials_json, true);

// Crie uma instância do cliente TextToSpeech
$textToSpeechClient = new TextToSpeechClient(['credentials' => $credentials_array]);

$text = 'Pressione a tecla enter para iniciar';

// Configure os parâmetros de voz
$voice = (new VoiceSelectionParams())
    ->setLanguageCode('pt-BR')
    ->setName('pt-BR-Neural2-C')
    ->setSsmlGender(0);

// Configure as opções de áudio
$audioConfig = (new AudioConfig())
    ->setAudioEncoding(AudioEncoding::LINEAR16);

// Crie a entrada de síntese de texto
$inputText = (new SynthesisInput())
    ->setText($text);

// Sintetize o texto para fala
$response = $textToSpeechClient->synthesizeSpeech(
    $inputText,
    $voice,
    $audioConfig
);

// Reproduza o áudio
$audio = $response->getAudioContent();

// Nome do arquivo

$nomeArquivo = '../resources/views/audios/historia/audio-inicio.wav';



// Verifica se o arquivo já existe
if (!file_exists($nomeArquivo)) {
    // Tenta criar o arquivo
    $arquivo = fopen($nomeArquivo, 'x+');

    if ($arquivo) {
        // Escreve o conteúdo no arquivo
        file_put_contents($nomeArquivo, $audio);

        // Fecha o arquivo
        fclose($arquivo);

        echo 'Arquivo criado e conteúdo gravado com sucesso.';
    } else {
        echo 'Não foi possível criar o arquivo.';
    }
} else {
    echo 'O arquivo já existe.';
}

// Feche o cliente TextToSpeech após o uso
$textToSpeechClient->close();


header(sprintf("Location: ../inicio"));
exit();




