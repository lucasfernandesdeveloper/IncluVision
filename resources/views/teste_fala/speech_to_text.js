// Step 1: Create a SpeechRecognition instance
const recognition = new SpeechRecognition();

// Step 2: Define grammar (optional)
const grammar = `#JSGF V1.0; grammar colors; public <color> = aqua | azure | beige | bisque | black | blue | brown | chocolate | coral | crimson | cyan | fuchsia | ghostwhite | gold | goldenrod | gray | green | indigo | ivory | khaki | lavender | lime | linen | magenta | maroon | moccasin | navy | olive | orange | orchid | peru | pink | plum | purple | red | salmon | sienna | silver | snow | tan | teal | thistle | tomato | turquoise | violet | white | yellow ;`;
const speechRecognitionList = new SpeechGrammarList();
speechRecognitionList.addFromString(grammar, 1);
recognition.grammars = speechRecognitionList;

// Step 3: Set recognition parameters
recognition.lang = "en-US";
recognition.continuous = false;
recognition.interimResults = false;
recognition.maxAlternatives = 1;

// Step 4: Handle events
recognition.onresult = (event) => {
  const color = event.results[0][0].transcript;
  console.log(`Result received: ${color}.`);
  // Handle the recognized color here
};

recognition.onnomatch = (event) => {
  console.log("I didn't recognize that color.");
};

recognition.onerror = (event) => {
  console.error(`Error occurred in recognition: ${event.error}`);
};

// Step 5: Start recognition
document.body.onclick = () => {
  recognition.start();
  console.log("Ready to receive a color command.");
};
