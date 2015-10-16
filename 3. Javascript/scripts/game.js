	
	// Some Comments go here	

	/*

	This is a
	Multi-line comment section

	*/

	var clickedTime = 0;
	var createdTime = 0;
	var reactionTime = 0;
	var marginTop;
	var marginLeft;
	var randomPositionX;
	var randomPositionY;

	function showTheBox() {

		var visbilityTimeLapse;

		visbilityTimeLapse = Math.floor(Math.random() * 3000);

		randomPositionX = Math.random() * 600
		randomPositionY = Math.random() * 600

		if (randomPositionX > 300) {

			document.getElementById("box1").style.borderRadius = "100px";

		} else {

			document.getElementById("box1").style.borderRadius = "0px";

		}

		document.getElementById("box1").style.backgroundColor = getRandomColor();

		document.getElementById("box1").style.marginTop = randomPositionX + "px";

		document.getElementById("box1").style.marginLeft = randomPositionY + "px";

		setTimeout(function() {

			document.getElementById("box1").style.visibility="visible"
			
			createdTime = Date.now();

		}, visbilityTimeLapse);

	}	

	function getRandomColor() {
  	
		var letters = "0123456789ABCDEF".split('');
		var color = "#";

		for (var i = 0; i < 6; i++) {

			color += letters[Math.round(Math.random() * 15)];
		}		
		return color;
 	}


	document.getElementById("box1").onclick=function() {

		clickedTime = Date.now();

		reactionTime = (clickedTime - createdTime) / 1000;

		document.getElementById("time").innerHTML = reactionTime + "s";

		this.style.visibility="hidden";

		showTheBox();
	}


	showTheBox();
