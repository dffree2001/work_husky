(function() { 
	var Tasks = function() {
		var nudge = function(){
			setTimeout(function(){ window.scrollTo(0,0);}, 1000);
		}
		var jump = function(){
			switch(location.hash){
				case '#s2':
					document.body.className = 'section2';
					break;
				case '#s3':
					document.body.className = 'section3';
					break;
				case '#s4':
					document.body.className = 'section4';
					break;
				default:
					document.body.className = 'section1';
					break;
			}
			nudge();
		}
		jump();
		window.addEventListener('hashchange', jump, false);
		window.addEventListener('orientationchange', nudge, false);
	}
	window.addEventListener('load', function() {
		new Tasks();	
	},false);
})();