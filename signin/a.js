		function myselect(){

	document.getElementById("login1").onclick = function () 
	{
		if (document.getElementById("login1").checked) 
		{
			document.getElementById("loginform").style.display = "block";
			document.getElementById("signup").style.display = "none";
		}
		};
	document.getElementById("register1").onclick = function ()
		{
		if (document.getElementById("register1").checked)
		{
			document.getElementById("loginform").style.display = "none";
			document.getElementById("signup").style.display = "block";
		}
		};
	}
	window.onload = function () 
    {
	document.getElementById("loginform").style.display = "none";
	document.getElementById("signup").style.display = "none";
	myselect();
	};
		////////////////////////////////////
    function changeImage()
{
    var img = document.getElementById("img");
    img.src = images[x];
    x++;

    if(x >= images.length){
        x = 0;
    } 
   var timerid = setInterval(changeImage(), 1000);
}


}

var images = [], x = 0;

images[0] = "nnn.jpg";
images[1] = "abc.jpg";
images[2] = "doctor.jpg";


 