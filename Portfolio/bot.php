<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- for icons like fontawesome  -->
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

	<link rel="stylesheet" href="botstyle.css">
	<title>Reshma S</title>
</head>
<body>

	<div class="chatbox-wrapper">
		<div class="chatbox-toggle">
			<i class='bx bx-message-dots'></i> <!--the icon message in the page-->
		</div>
		<div class="chatbox-message-wrapper">
			<div class="chatbox-message-header">
				<div class="chatbox-message-profile">
					<img src="https://tse1.mm.bing.net/th?id=OIP._ZtP4arLagfUbNWzrc1B4QHaLH&pid=Api&P=0" alt="" class="chatbox-message-image">
					<div>
						<h4 class="chatbox-message-name">Reshma S</h4>
						<p class="chatbox-message-status">online</p>
					</div>
				</div>
				<div class="chatbox-message-dropdown">
					<i class='bx bx-dots-vertical-rounded chatbox-message-dropdown-toggle'></i><!--the 3 dots in the header-->
					<ul class="chatbox-message-dropdown-menu">
						<li>
							<a href="https://www.google.com/">Search</a>
						</li>
						<li>
							<a href="mailto:sreshma2112@gmail.com">Report</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="chatbox-message-content">
				<h4 class="chatbox-message-no-message">You don't have message yet!</h4>
				<!-- <div class="chatbox-message-item sent">
					<span class="chatbox-message-item-text">
						Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Quod, fugiat?
					</span>
					<span class="chatbox-message-item-time">08:30</span>
				</div>
				<div class="chatbox-message-item received">
					<span class="chatbox-message-item-text">
						Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Quod, fugiat?
					</span>
					<span class="chatbox-message-item-time">08:30</span>
				</div> -->
			</div>
			<div class="chatbox-message-bottom">
				<form action="#" class="chatbox-message-form">
					<textarea rows="1" placeholder="Type message..." class="chatbox-message-input"></textarea>
					<button type="submit" class="chatbox-message-submit" style="position:relative;left:120px;"><i class='bx bx-send' ></i></button>
				</form>
			</div>
		</div>
	</div>


	<script>

		
		const textarea = document.querySelector('.chatbox-message-input') //the text area ie the input message
const chatboxForm = document.querySelector('.chatbox-message-form')

textarea.addEventListener('input', function () {
	let line = textarea.value.split('\n').length

	if(textarea.rows < 6 || line < 6) {
		textarea.rows = line
	}

	if(textarea.rows > 1) {
		chatboxForm.style.alignItems = 'flex-end' // assigned to the justify-content property and will align all flex items to the right end of the container
	} else {
		chatboxForm.style.alignItems = 'center'
	}
})



// TOGGLE CHATBOX
const chatboxToggle = document.querySelector('.chatbox-toggle') //the icon message in the page
const chatboxMessage = document.querySelector('.chatbox-message-wrapper') //header + the content of 3 dots + the text are and body

chatboxToggle.addEventListener('click', function () {
	chatboxMessage.classList.toggle('show') //classlist returns the list of the class names of the element"chatboxMessage" toggles between tokens in list
})



// DROPDOWN TOGGLE
const dropdownToggle = document.querySelector('.chatbox-message-dropdown-toggle') //the 3 dots in the header
const dropdownMenu = document.querySelector('.chatbox-message-dropdown-menu') //search and report options

dropdownToggle.addEventListener('click', function () {
	dropdownMenu.classList.toggle('show')
})

document.addEventListener('click', function (e) {
	if(!e.target.matches('.chatbox-message-dropdown, .chatbox-message-dropdown *')) { // search and reports goes off when we click on any other element other than those two
		dropdownMenu.classList.remove('show')
	}
})







// CHATBOX MESSAGE
const chatboxMessageWrapper = document.querySelector('.chatbox-message-content') //message displaying body area
const chatboxNoMessage = document.querySelector('.chatbox-message-no-message')
chatboxForm.addEventListener('submit', function (e) {
	e.preventDefault() //default action of the event will not occur.....submit action will not occur

	if(isValid(textarea.value)) {
		writeMessage()
		setTimeout(output(textarea.value), 1000)
	}
})



function addZero(num) {
	return num < 10 ? '0'+num : num
}

function writeMessage() {
	const today = new Date()
	let message = `
		<div class="chatbox-message-item sent">
			<span class="chatbox-message-item-text">
				${textarea.value.trim().replace(/\n/g, '<br>\n')}  
			</span>
			<span class="chatbox-message-item-time">${addZero(today.getHours())}:${addZero(today.getMinutes())}</span>
		</div>
	` ///\n/g is a regex expression that says to replace new line with break and newline
	// regex is regular expression is a pattern of characters that is used to do patter matching search-and-replace
	chatboxMessageWrapper.insertAdjacentHTML('beforeend', message) // add the message before the end of the element
	chatboxForm.style.alignItems = 'center'
	textarea.rows = 1
	textarea.focus()
	textarea.value = ''
	chatboxNoMessage.style.display = 'none'
	scrollBottom()
}

function autoReply(outputmessage) {
	const today = new Date()
	let message = `
		<div class="chatbox-message-item received">
			<span class="chatbox-message-item-text">
				${outputmessage}
			</span>
			<span class="chatbox-message-item-time">${addZero(today.getHours())}:${addZero(today.getMinutes())}</span>
		</div>
	`
	chatboxMessageWrapper.insertAdjacentHTML('beforeend', message)
	scrollBottom()
}
function scrollBottom() {
	chatboxMessageWrapper.scrollTo(0, chatboxMessageWrapper.scrollHeight)
}

function isValid(value) {
	let text = value.replace(/\n/g, '')
	text = text.replace(/\s/g, '')

	return text.length > 0
}
function compare(utterancesArray, answersArray, string) {
  let item;
  for (let x = 0; x < utterancesArray.length; x++) {
    for (let y = 0; y < utterancesArray[x].length; y++) {
      if (utterancesArray[x][y] === string) {
        items = answersArray[x];
        item = items[Math.floor(Math.random() * items.length)];
        } //
      }
   }
  return item;
}
function output(input){
	const utterances = [ 
  ["how are you", "how is life", "how are things"],        //0
  ["hi", "hey", "hello", "good morning", "good afternoon"],      //1
  ["what are you doing", "what is going on", "what is up"],      //2
  ["how old are you"],					//3
  ["who are you", "are you human", "are you bot", "are you human or bot"]];
 
// Possible responses corresponding to triggers
 
const answers = [
   [
    "Fine... how are you?",
    "Pretty well, how are you?",
    "Fantastic, how are you?"
  ],                                                                                  	//0
  [
    "Hello!", "Hi!", "Hey!", "Hi there!", "Howdy"
  ],						//1
  [
    "Nothing much",
    "About to go to sleep",
    "Can you guess?",
    "I don't know actually"
  ],						//2
  ["I am infinite"],					//3
  ["I am just a bot", "I am a bot. What are you?"],	//4
];
 
// For any other user input
 
const alternatives = [
  "Go on...",
  "Try again",
];
	let product;
	let text = input.toLowerCase().replace(/[^\w\s\d]/g, "");
	text = text
    .replace(/ a /g, " ")
    .replace(/whats/g, "what is")
    .replace(/please /g, "")
    .replace(/ please/g, "");
	if (compare(utterances, answers, text)) {
    product = compare(utterances, answers, text);
	}
  else {
    product = alternatives[Math.floor(Math.random() * alternatives.length)];
  }
  autoReply(product);
}
	</script>
</body>
</html>
