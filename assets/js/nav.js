 /*mobile nav */

// navButton
const navContent = document.querySelector('.nav__mobile-contents');
const navButton = document.querySelector('#nav__mobile-button');

navButton.addEventListener('click', navButtonPressed);
// navButton.addEventListener('mouseup', navButtonPressed, false);

// ['mouseup', 'touchend'].forEach(evnt => navButton.addEventListener(evnt, navButtonPressed, false));


function navButtonPressed(event) { 
	if (navContent.classList.contains('nav__mobile-contents_is-active')) {
    // stop a touch event becoming a mouse event, ie, stop the event sequence at this event
    // event.preventDefault();
	//colapse menu 
    navContent.classList.remove('nav__mobile-contents_is-active');
    navButton.classList.remove('nav__mobile-button_is-active')
    // console.log(event)
    // hide open tabs/expanded drop-down
    deactivateTabs()
  } else { 
    // stop a touch event becoming a mouse event, ie, stop the event sequence at this event
    // event.preventDefault();
    // console.log(event)
  	//expand menu
    navContent.classList.add('nav__mobile-contents_is-active');
    navButton.classList.add('nav__mobile-button_is-active');
  }
}








//navTab 
let navTabs = document.querySelectorAll('.nav__mobile-contents > li');

navTabs.forEach(navTab => navTab.addEventListener('click', navTabPressed));
// navTabs.forEach(navTab => navTab.addEventListener('mouseup', navTabPressed));


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
	}

}





/* end mobile nav */ //////////////////////////

/* jQuery One Page Nav Plugin  http://github.com/davist11/jQuery-One-Page-Nav */