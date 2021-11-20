import './styles/haiku.css';

class HaikuElement extends HTMLElement{
	constructor(){
		super()
		this.attachShadow({mode: 'open'})
	}
}

class SwitchNightMode extends HaikuElement{
	static style = `
	.nightmode{
		  /** sunny side **/
		  --blue-background: #C2E9F6;
		  --blue-border: #72cce3;
		  --blue-color: #96dcee;
		  --yellow-background: #fffaa8;
		  --yellow-border: #f5eb71;
		  /** dark side **/
		  --indigo-background: #348;
		  --indigo-border: #5d6baa;
		  --indigo-color: #6b7abb;
		  --gray-border: #e8e8ea;
		  --gray-dots: #e8e8ea;
		  /** general **/
		  --white: #fff;
		  width:3em;
		  height:2em;
		  background: var(--blue-color);
		  border-radius: 2em;
		  border: 1px solid var(--blue-border);
		  transition: all 0.6s ease;
		  overflow:hidden;
	  }
	  .nightmode input[type="checkbox"] {
		display: none;
	  }
	  .nightmode input[type="checkbox"] ~ label{
		width: 3em;
		height: 2em;
		display:block;
		border-radius: 1em;
		position: relative;
		background: var(--blue-color);
	  }
	  
	  .nightmode input[type="checkbox"] ~ label span {
		animation-name: reverse;
		animation-duration: 350ms;
		animation-fill-mode: forwards;
		transition: all 350ms ease-in;
		content: "";
		width: 1.7em;
		height: 1.7em;
		left: .1em;
		top: .1em;
		z-index:1;
		position: absolute;
		border-radius: 2em;
		background: var(--blue-color);
		box-shadow: inset 2em 0px 0px 2px var(--yellow-background);
	  }
	  .nightmode input[type="checkbox"] ~ label span:before,
	  .nightmode input[type="checkbox"] ~ label span:after
	  {
		  display:block;
		  position:relative;
		  border-radius:2px;
		  
		  height:3px;
		  content:"";
		  
		  background:var(--white);
		  
		  transition:all .6s ease;
	  }
	  .nightmode input[type="checkbox"] ~ label span:before{
		  top:45%;
		  left:120%;
		  width:.7em;
	  }
	  .nightmode input[type="checkbox"] ~ label span:after{
		  top:55%;
		  left:100%;
		  width:1em;
	  }
	  
	  .nightmode input[type="checkbox"]:checked ~ label {
		background: var(--indigo-background);
	  }
	  
	  .nightmode input[type="checkbox"]:checked + label span {
		animation-name: switch;
		animation-duration: 350ms;
		animation-fill-mode: forwards;
		transition: all 350ms ease-in;
		background: var(--indigo-background);
		box-shadow:inset -.5em 0px 0px 2px var(--gray-dots);
	  }
	  .nightmode input[type="checkbox"]:checked ~ label span:before{
		  top:23%;
		  left:-10%;
		  width:3px;
		  background:var(--yellow-background);
	  }
	  .nightmode input[type="checkbox"]:checked ~ label span:after{
		  top:35%;
		  left:-30%;
		  width:3px;
		  background:var(--yellow-border);
	  }
	  @keyframes switch {
		0% {
		  left: .1em;
		}
		60% {
		  left: .1em;
		  width: 2.7em;
		}
		100% {
		  left: 1.1em;
		  width: 1.7em;
		}
	  }
	  @keyframes reverse {
		0% {
		  left: 1.1em;
		  width: 1.7em;
		}
		60% {
		  left: .1em;
		  width: 2.7em;
		}
		100% {
		  left: .1em;
		}
	  }
	  `
	constructor(){
		super()
		var style = document.createElement('style')
		style.innerHTML = SwitchNightMode.style
		this.shadowRoot.innerHTML = `<div class="nightmode"><input id="night-toggle" value="false" onchange="document.body.classList.toggle('night');localStorage.setItem('nightmode',localStorage.getItem('nightmode')=='false')" type="checkbox"><label for="night-toggle"><span></span></label></div>`
		if(localStorage.getItem("nightmode")=="true"){
			document.body.classList.add("night")
			this.shadowRoot.querySelector('input').checked = true
		}
		this.shadowRoot.appendChild(style)

	}


}

window.customElements.define("switch-mode-night",SwitchNightMode)

class NavBarToggle extends HaikuElement{
	static style = `
	input {
		display:none;
	}
	input ~ div{
		width: 40px;
		height: 40px;
		margin: auto;
	}
	input ~ div span{
		display:block;
		height:2px;
		border-radius:2px;
		width:2em;
		background:#eee;
		position:relative;
		transition:transform .6s ease,width .6s ease;
		left:50%;
		transform: translate(-50%,-2.5px);
	}
	input ~ div span:nth-child(1){
		top: 25%;
	}
	input ~ div span:nth-child(2){
		top: 50%;
	}
	input ~ div span:nth-child(3){
		top: 75%;
	}
	input:checked ~ div span:nth-child(1) {
	  transform: translate(-50%,9px) rotate(45deg);
	}
	input:checked ~ div span:nth-child(2) {
	  width:0;
	}
	input:checked ~ div span:nth-child(3) {
	  transform: translate(-50%,-15px) rotate(-45deg);
	}
	`
	constructor(){
		super()
		var input = document.createElement('input')
		input.type = "checkbox"

		var div = document.createElement('div')
		var span1 = document.createElement('span')
		var span2 = document.createElement('span')
		var span3 = document.createElement('span')
		var style = document.createElement('style')
		style.innerHTML = NavBarToggle.style
		this.shadowRoot.appendChild(style)

		this.shadowRoot.appendChild(input)
		this.shadowRoot.appendChild(div)

		div.appendChild(span1)
		div.appendChild(span2)
		div.appendChild(span3)

		this.style = "width:3em;height:3em;"

		this.addEventListener('click',()=>{
			input.checked = !input.checked
		})
	}
}

window.customElements.define("navbar-toggle",NavBarToggle)

class InputSearch extends HaikuElement{
	static style = `
		
.search {
    background:rgb(var(--dark));
    height: 40px;
    border-radius: 40px;
    padding-left: 10px;
	display: flex;
}

.search:hover > .input,.search input:focus {
	width: 240px;
	padding: 0 6px;
	color: rgb(var(--light));
}
.button {
    float: right;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 0.4s;
}

.input {
    border:none;
    background: none;
    outline:none;
    float:left;
    padding: 0;
    color: rgb(var(--dark));
    font-size: 16px;
    line-height: 40px;
    width: 0px;
	transition: all 0.6s ease;
}

@media screen and (max-width: 620px) {
.search:hover > .input,.search input:focus{
    width: 150px;
    padding: 0 6px;
}
}
.search .input + svg.button{
  display: block;
  height: 40px;
  width: 40px;
  right: 0;
  top: 0;
  fill: none;
  stroke: rgb(var(--dark));
  stroke-width: 1.5px;
  stroke-dashoffset: 271.908;
  stroke-dasharray: 59 212.908;
  /* transform:rotate(0deg); */
  transition: all 0.6s ease;
  animation-play-state: paused;
}
.search:hover .input + svg.button,.search input:focus + svg.button{
  stroke-dasharray: 150 212.908;
  stroke-dashoffset: 300;
  stroke: rgb(var(--color));
  cursor:pointer;
  animation: rotate-button 2s linear infinite;
  animation-play-state: running;
}
@keyframes rotate-button {
  0% {
	  transform:rotate(0deg);
  }
  60% {
	  transform:rotate(180deg);
  }
  100% {
	  transform:rotate(360deg);
  }
}
	`
	constructor(){
		super()
		var style = document.createElement('style')
		style.innerHTML = InputSearch.style
		this.shadowRoot.appendChild(style)

		var div = document.createElement('div')
		div.classList.add('search')
		this.shadowRoot.appendChild(div)

		div.innerHTML = `
		<input class="input random-search" type="text" name="" onchange="searchFX(this.value)" placeholder="${this.getAttribute('placeholder')}">
		<svg class="button"><path d="m0-8c5 0 8 4 8 8c0 4-3 8-8 8c-5 0-8-4-8-8c0-4 3-8 8-8l0-9.1825c0-.4971 0-.8175 0-.8175a1 1 0 010 35a1 1 0 010-35" transform="translate(20,20) rotate(-225)"></path></svg>
		`
	}
}

window.customElements.define("input-search",InputSearch)

class ImageAspect extends HaikuElement{
	constructor(){
		super()
		this.style.width = this.getAttribute('width')
		this.style.height = this.getAttribute('height')
		var parent = document.createElement('div')
		parent.style = `width:100%;aspect-ratio:${this.getAttribute('aspect')||"16/9"};overflow:hidden;`
		var src = this.getAttribute('src')
		if(src){
			var img = new Image()
			img.src = src
			img.style = "object-fit:cover;width:100%;height:100%;"
			parent.appendChild(img)
		}else{
			parent.innerHTML = `<svg style="cover;width:100%;height:100%;" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>`
		}
		this.shadowRoot.appendChild(parent)
	}
}

window.customElements.define("img-aspect",ImageAspect)

function UpdateTabber(){
	const tabcontrolers = document.querySelectorAll("[open-tab]")
	tabcontrolers.forEach(tabcontroler=>{
		tabcontroler.addEventListener('click',(ev)=>{
			location.assign(tabcontroler.getAttribute('open-tab'))
		})
	})
}
const filtred = document.querySelector("#filtred")
const filters = document.querySelectorAll("input.filter")
const filtererror = document.querySelector(".filter.error")

function doFilter(){
	var any = ! [...filters].some((o)=>o.checked)
	elements = filtred.querySelectorAll(".filter:not(.error)")
	var isempty = false;
	[...elements].map(filter=>{
		var clzzs = filter.classList
		clzzs = Object.values(clzzs)
		var mod = [...filters].reduce(
			(p,o)=>{
			if(o.checked)
				p.push(o.getAttribute("id"))
			return p
			},[]
		)
		var isgood = mod.some(x=>clzzs.includes(x))
		isgood||=any
		filter.style.display = isgood ?"flex":"none"
		isempty ||= isgood
	})
	filtererror.style.display = !isempty ?"flex":"none"
}
function UpdateFilter(){
	const filtersCategory = document.querySelectorAll("[type='filters-category']")
	console.log(filtersCategory)
	filtersCategory.forEach(element=>{
		var id = element.getAttribute('filterfor')
		element.classList.add('list-group')
		var caterories = element.querySelectorAll("[category]")
		const checkerboard = new Set()
		var filtering = document.getElementById(id);
		var elements = [...filtering.children]

		const update = ()=>{
			var fillonempty = element.hasAttribute('fillonempty')
			var any = false
			if(fillonempty){
				any = checkerboard.size==0
			}
			console.log(fillonempty,any)
			elements.forEach(filter=>{
				var categories = filter.getAttribute('categories').split(' ')
				var isgood = [...checkerboard].some(category=>categories.includes(category))
				isgood ||= any
				filter.style.display = isgood ?"flex":"none";
			})
		}
		caterories.forEach(category=>{
			category.classList.add('list-group-item')
			category.addEventListener('click',(ev)=>{
				var name = ev.target.getAttribute('category')
				if(checkerboard.has(name)){
					checkerboard.delete(name)
					ev.target.classList.remove("active")
				}else{
					checkerboard.add(name)
					ev.target.classList.add("active")
				}
				update()
			})
		})

		update()
		
	})
}
window.addEventListener('load',()=>{
	UpdateFilter()
	UpdateTabber()
})