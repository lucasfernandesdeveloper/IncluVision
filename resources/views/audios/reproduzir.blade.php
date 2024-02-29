<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "C:/xampp/htdocs/Incluvision/vendor/autoload.php";

// Crie um cliente para o serviço Texto para Fala
use Google\Cloud\TextToSpeech\V1\AudioConfig;
use Google\Cloud\TextToSpeech\V1\SynthesisInput;
use Google\Cloud\TextToSpeech\V1\TextToSpeechClient;
use Google\Cloud\TextToSpeech\V1\VoiceSelectionParams;
use Google\Cloud\TextToSpeech\V1\AudioEncoding;

// Carregue as credenciais de API
$credentials_json = file_get_contents('C:/xampp/htdocs/Incluvision/resources/views/audios/opportune-eye-411223-d391dd6401fa.json');
$credentials_array = json_decode($credentials_json, true);

// Crie uma instância do cliente TextToSpeech
$textToSpeechClient = new TextToSpeechClient(['credentials' => $credentials_array]);

// Obtenha o texto enviado via POST
$inputJson = file_get_contents('php://input');
$inputData = json_decode($inputJson);

$text = '$inputData->text';


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


// Converta o áudio para base64
$audioBase64 = base64_encode($audio);

// Crie um array para a resposta JSON
$responseArray = array(
    'audio' => $audioBase64
);

$textToSpeechClient->close();

header('Content-Type: application/json');
echo json_encode($responseArray);






