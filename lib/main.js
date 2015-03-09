/*
 * Image preview script 
 * powered by jQuery (http://www.jquery.com)
 * 
 * written by Alen Grakalic (http://cssglobe.com)
 * 
 * for more info visit http://cssglobe.com/post/1695/easiest-tooltip-and-image-preview-using-jquery
 *
 */
 
this.imagePreview = function(){	
	/* CONFIG */
		
		xOffset = -10;
		yOffset = -250;
		
		// these 2 variable determine popup's distance from the cursor
		// you might want to adjust to get the right result
		
	/* END CONFIG */
	$("a.preview").hover(function(e){
		this.t = this.title;
		this.title = "";	
		var c = (this.t != "") ? "<br/>" + this.t : "";
		$("body").append("<p id='preview'><img src='"+ this.href +"' alt='Image preview' />"+ c +"</p>");								 
		$("#preview")
			.css("top",(e.pageY - xOffset) + "px")
			.css("left",(e.pageX + yOffset) + "px")
			.fadeIn("fast");						
    },
	function(){
		this.title = this.t;	
		$("#preview").remove();
    });	
	$("a.preview").mousemove(function(e){
		$("#preview")
			.css("top",(e.pageY - xOffset) + "px")
			.css("left",(e.pageX + yOffset) + "px");
	});			
};


// starting the script on page load
$(document).ready(function(){
	imagePreview();
});

///////////////////////////////////////////////////////
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
//////////////////////////////////////////////////////////
  function runNotepad() {
        var Shell = new ActiveXObject("WScript.Shell");
        Shell.Run("%WINDIR%\\notepad.exe");
    }