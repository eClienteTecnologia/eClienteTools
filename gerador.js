
const quantidadeletras = document.getElementById('quantidadeletras')
const incluirmaiusculasElement = document.getElementById('incluirmaiusculas')
const incluirnumerosElement = document.getElementById('incluirnumeros')
const incluirsimbolosElement = document.getElementById('incluirsimbolos')
const form = document.getElementById('geradorform')
const displaysenha = document.getElementById('displaysenha')

const codigo_maiusculas = arrayFromLowToHigh(65, 90)
const codigo_minussculas = arrayFromLowToHigh(97, 122)
const codigo_numeros = arrayFromLowToHigh(48, 57)
const codigo_simbolos = arrayFromLowToHigh(33, 47).concat(
  arrayFromLowToHigh(58, 64)
).concat(
  arrayFromLowToHigh(91, 96)
).concat(
  arrayFromLowToHigh(123, 126)
)

let input = document.getElementById('demo3');
let valor = input.value;


form.addEventListener('submit', e => {

input.addEventListener('input', syncCharacterAmount)
quantidadeletras.addEventListener('input', syncCharacterAmount)


  e.preventDefault()
  const characterAmount = input.value
  const incluirmaiusculas = incluirmaiusculasElement.checked
  const incluirnumeros = incluirnumerosElement.checked
  const incluirsimbolos = incluirsimbolosElement.checked
  const password = generatePassword(characterAmount, incluirmaiusculas, incluirnumeros, incluirsimbolos)
  displaysenha.value = password
})

function generatePassword(characterAmount, incluirmaiusculas
, incluirnumeros, incluirsimbolos) {
  let charCodes = codigo_minussculas
  if (incluirmaiusculas) charCodes = charCodes.concat(codigo_maiusculas)
  if (incluirsimbolos) charCodes = charCodes.concat(codigo_simbolos)
  if (incluirnumeros) charCodes = charCodes.concat(codigo_numeros)
  
  const passwordCharacters = []
  for (let i = 0; i < characterAmount; i++) {
    const characterCode = charCodes[Math.floor(Math.random() * charCodes.length)]
    passwordCharacters.push(String.fromCharCode(characterCode))
  }
  return passwordCharacters.join('')
}

function arrayFromLowToHigh(low, high) {
  const array = []
  for (let i = low; i <= high; i++) {
    array.push(i)
  }
  return array
}

function syncCharacterAmount(e) {
  const value = e.target.value
  input.value = value
  quantidadeletras.value = value
}
  

function copyfunc() {
  // Get the text field
  var copyText = document.getElementById("displaysenha");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); 

   // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);

  // Alert the copied text
     alert("Texto Copiado: " + copyText.value);
   
}
