<?php
require '../vendor/autoload.php';

use Google\Cloud\Speech\V1\SpeechClient;
use Google\Cloud\Speech\V1\RecognitionConfig;
use Google\Cloud\Speech\V1\RecognitionAudio;
use Google\Cloud\Speech\V1\RecognitionConfig\AudioEncoding;

// Definindo variáveis
$caminhoCredenciais = '../resources/views/teste_fala/sensitive/opportune-eye-411223-d391dd6401fa.json';
$caminhoAudio = '../resources/views/teste_fala/historia/audio-inicio.mp3';
$codigoLinguagem = 'pt-BR';

// Criando o cliente - Credenciais
$clienteFala = new SpeechClient([
    'credentials' => $caminhoCredenciais,
]);

// Configurações de reconhecimento de fala
$configReconhecimento = new RecognitionConfig([
    'language_code' => $codigoLinguagem,
    'encoding' => AudioEncoding::LINEAR16,
    //'sample_rate_hertz' => 24000,
]);

// Audio de reconhecimento de fala
$audioReconhecimento = new RecognitionAudio([
    'content' => file_get_contents($caminhoAudio),
]);

// Criando a requisição
$request = [
    'config' => $configReconhecimento,
    'audio' => $audioReconhecimento,
];

//Enviando a requisição e obtendo a resposta
$response = $clienteFala->recognize($configReconhecimento, $audioReconhecimento);

// Fazendo transcrição
$trasncricao = $response->getResults()[0]->getAlternatives()[0]->getTranscript();

echo $trasncricao;
