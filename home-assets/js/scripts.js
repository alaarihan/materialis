function closeopen() {
	jQuery('#content .open').removeClass('open').addClass('fadeoutUp animated hidden').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		jQuery(this).removeClass('fadeInUp animated');
	});
}
function rotateout() {
	jQuery('#main-content .circle').addClass('rotateOut animated fly').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		jQuery(this).removeClass('rotateOut animated');
	});
};


function rotatein() {
	jQuery('#main-content .circle').addClass('rotateIn animated').removeClass('fly').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		jQuery(this).removeClass('rotateIn animated');
	});
};

function aboutsec() {
	jQuery('.about').removeClass('hidden').addClass('fadeInUp animated open').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		jQuery(this).removeClass('fadeInUp animated');
	});
	window.location.hash = '#about'
};

function libsec() {
	jQuery('.lib').removeClass('hidden').addClass('fadeInUp animated open').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		jQuery(this).removeClass('fadeInUp animated');
	});
	window.location.hash = '#lib'
};

function confsec() {
	jQuery('.conf').removeClass('hidden').addClass('fadeInUp animated open').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		jQuery(this).removeClass('fadeInUp animated');
	});
	window.location.hash = '#conf'
};


function thsec() {
	jQuery('.thoughts').removeClass('hidden').addClass('fadeInUp animated open').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		jQuery(this).removeClass('fadeInUp animated');
	});
	window.location.hash = '#thoughts'
};

function loginsec() {
	jQuery('.login').removeClass('hidden').addClass('fadeInUp animated open').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		jQuery(this).removeClass('fadeInUp animated');
	});
	window.location.hash = '#reg'
};

function contactsec() {
	jQuery('.contact').removeClass('hidden').addClass('fadeInUp animated open').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		jQuery(this).removeClass('fadeInUp animated');
	});
	window.location.hash = '#contact'
};

function librarysec() {
	jQuery('.library').removeClass('hidden').addClass('fadeInUp animated open').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		jQuery(this).removeClass('fadeInUp animated');
	});
	window.location.hash = '#library'
};

function galsec() {
	jQuery('.gal').removeClass('hidden').addClass('fadeInUp animated open').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		jQuery(this).removeClass('fadeInUp animated');
	});
	window.location.hash = '#gal'
};

function showmain() {
	jQuery('#splash').addClass('fadeOut animated hidden').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		jQuery(this).removeClass('fadeInUp animated');
	});
	jQuery('#main-content').removeClass('hidden').addClass('fadeInUp animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		jQuery(this).removeClass('fadeInUp animated');
	});
	window.location.hash = '#main'
};

function hidemain() {
	jQuery('#main-content').addClass('fadeOut animated hidden').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		jQuery(this).removeClass('fadeInUp animated');
	});
	jQuery('#splash').removeClass('hidden').addClass('fadeInUp animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		jQuery(this).removeClass('fadeInUp animated');
	});
	window.location.hash = '#'
};

jQuery(document).ready(function(e){
	jQuery('#main-content button.icon').click(function(e){
		e.preventDefault();
		rotateout();
	});

	jQuery('#content button.closex').click(function(e){
		e.preventDefault();
		rotatein();
		jQuery(this).parent().parent().addClass('hidden');
		window.location.hash = '#main'
	});

	jQuery('#main-content button.icon.about').click(function(e){
		e.preventDefault();
		closeopen();
		aboutsec();
	});


jQuery('#main-content button.icon.lib').click(function(e){
		e.preventDefault();
		closeopen();
		libsec();
	});

jQuery('#main-content button.icon.conf').click(function(e){
		e.preventDefault();
		closeopen();
		confsec();
	});

	jQuery('#main-content button.icon.thoughts').click(function(e){
		e.preventDefault();
		closeopen();
		thsec();
	});

	jQuery('#main-content button.icon.reg').click(function(e){
		e.preventDefault();
		closeopen();
		loginsec();
	});

	jQuery('#main-content button.icon.contact').click(function(e){
		e.preventDefault();
		closeopen();
		contactsec();
	});

	jQuery('#main-content button.icon.gal').click(function(e){
		e.preventDefault();
		closeopen();
		galsec();
	});
	
	jQuery('#main-content button.icon.library').click(function(e){
		e.preventDefault();
		closeopen();
		librarysec();
	});

	jQuery('#splash a.icon.home.desktop').click(function(e){
		e.preventDefault();
		showmain();
	});
	jQuery('#splash a.icon.home.mobile').click(function(e){
		e.preventDefault();
		jQuery('.main_menu_col [data-component=offcanvas]').trigger( "click" );
	});

	jQuery('#main-content a.btn.back').click(function(e){
		e.preventDefault();
		hidemain();
	});
	HashHandler()
});

function HashHandler(e) {
	if(window.location.hash !== '#main' && window.location.hash != '' && window.location.hash != '#'){
		jQuery('#splash').addClass('hidden')
		jQuery('#main-content').removeClass('hidden')
	}
	if(window.location.hash === '#main'){
		jQuery('#content button.closex').trigger('click')
		showmain();
	}else if(!window.location.hash || window.location.hash == '' || window.location.hash == '#'){
		hidemain();
	}else if(window.location.hash == '#about'){
		jQuery('#main-content button.icon.about').trigger('click')
	}else if(window.location.hash == '#gal'){
		jQuery('#main-content button.icon.gal').trigger('click')
	}
	else if(window.location.hash == '#lib'){
		jQuery('#main-content button.icon.lib').trigger('click')
	}
	else if(window.location.hash == '#conf'){
		jQuery('#main-content button.icon.conf').trigger('click')
	}
	else if(window.location.hash == '#thoughts'){
		jQuery('#main-content button.icon.thoughts').trigger('click')
	}
	else if(window.location.hash == '#reg'){
		jQuery('#main-content button.icon.reg').trigger('click')
	}
	else if(window.location.hash == '#contact'){
		jQuery('#main-content button.icon.contact').trigger('click')
	}
	else if(window.location.hash == '#library'){
		jQuery('#main-content button.icon.library').trigger('click')
	}
}

window.addEventListener("hashchange", HashHandler, false);


