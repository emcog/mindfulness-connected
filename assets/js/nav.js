 /*mobile nav */

// navButton
const navContent = document.querySelector('.nav__mobile-contents');
const navButton = document.querySelector('#nav__mobile-button');

navButton.addEventListener('touchend', navButtonTouched, false);
navButton.addEventListener('mouseup', navButtonClicked, false);

function navButtonClicked(event) { 
	if (navContent.classList.contains('nav__mobile-contents_is-active')) {
	//colapse menu 
    navContent.classList.remove('nav__mobile-contents_is-active');
    navButton.classList.remove('nav__mobile-button_is-active')
    // console.log(event)
    // hide open tabs/expanded drop-down
    deactivateTabs()
    // stop a touch event becoming a mouse event, ie, stop the event sequence at this event
    // event.preventDefault();
  } else { 
    console.log(event)
  	//expand menu
    navContent.classList.add('nav__mobile-contents_is-active');
    navButton.classList.add('nav__mobile-button_is-active');
    // stop a touch event becoming a mouse event, ie, stop the event sequence at this event
    // event.preventDefault();
  }
}


/* this WET is implemented because I couldn't get event.preventDefault to suppress the generation of further mouse click events. 
the only fix I could find was to call a separate function for mouse events and touch events */

function navButtonTouched(event) { 
	if (navContent.classList.contains('nav__mobile-contents_is-active')) {
	//colapse menu 
    navContent.classList.remove('nav__mobile-contents_is-active');
    navButton.classList.remove('nav__mobile-button_is-active')
    // console.log(event)
    // hide open tabs/expanded drop-down
    deactivateTabs()
    // stop a touch event becoming a mouse event, ie, stop the event sequence at this event
    // event.preventDefault();
  } else { 
    console.log(event)
  	//expand menu
    navContent.classList.add('nav__mobile-contents_is-active');
    navButton.classList.add('nav__mobile-button_is-active');
    // stop a touch event becoming a mouse event, ie, stop the event sequence at this event
    // event.preventDefault();
  }
}








//navTab 
let navTabs = document.querySelectorAll('.nav__mobile-contents > li');

navTabs.forEach(navTab => navTab.addEventListener('touchend', navTabPressed));
navTabs.forEach(navTab => navTab.addEventListener('mouseup', navTabPressed));


function deactivateTabs() {
	for (let i = 0; i < navTabs.length; i++) {
		navTabs[i].classList.remove('menu__tab_is-active');
	}
}


function activateTabs() {
	for (let i = 0; i < navTabs.lenth; i++ ) {
		navTabs[i].classList.add('menu__tab_is-active');
	}
}


function navTabPressed() {
	if(this.classList.contains('menu__tab_is-active')) {		
		//01 remove this tab's active state
		setTimeout(this.classList.remove('menu__tab_is-active'), 1000);
	} else {
		// 01 hide all active tabs
		setTimeout(deactivateTabs(),1000);
		// 02 activate this tab
		this.classList.add('menu__tab_is-active');


		/* todo the steps necessry if the dimms are not hard coded in*/
		// 1 Hide all children of expanded tabs
		// 2 Hide dropdown menu
		// 3 Collapse all dropdown menus
		// 4 Declare the active tabs to start the process getting its (expanded) dimensions
		// 5 Show the active tabs children
		// 6 Manipulate GUI
		// 7 Get the dimensions (of 4)
		// 8 Assign the dimensions
	}

}





/* end mobile nav */ //////////////////////////

/* jQuery One Page Nav Plugin  http://github.com/davist11/jQuery-One-Page-Nav */