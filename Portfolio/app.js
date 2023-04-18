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
		setTimeout(autoReply(textarea.value), 1000)
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

function autoReply(inputmessage) {
	const today = new Date()
	if(decidemessage(inputmessage) == 1){
	let message = `
		<div class="chatbox-message-item received">
			<span class="chatbox-message-item-text">
				Hello! I am Reshma. How can I help you?
			</span>
			<span class="chatbox-message-item-time">${addZero(today.getHours())}:${addZero(today.getMinutes())}</span>
		</div>
	`
	chatboxMessageWrapper.insertAdjacentHTML('beforeend', message)
	scrollBottom()
}
else{
	let message = `
		<div class="chatbox-message-item received">
			<span class="chatbox-message-item-text">
				Thank you for your awesome support!
			</span>
			<span class="chatbox-message-item-time">${addZero(today.getHours())}:${addZero(today.getMinutes())}</span>
		</div>
	`
	chatboxMessageWrapper.insertAdjacentHTML('beforeend', message)
	scrollBottom()
}
}
function scrollBottom() {
	chatboxMessageWrapper.scrollTo(0, chatboxMessageWrapper.scrollHeight)
}

function isValid(value) {
	let text = value.replace(/\n/g, '')
	text = text.replace(/\s/g, '')

	return text.length > 0
}

function decidemessage(input){

	if(input.equals("hi")){
		return 1;
	}
	else return 0;
}