let stop = false;
let arrData = document.getElementsByClassName('box');
let arr = [null, null, null, null, null, null, null, null, null];
let modal = document.getElementById("myModal");
let span = document.getElementsByClassName("close")[0];
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
function concat(a, b, c){
	let result = arr[a] + arr[b] + arr[c] ;
	
	if (result === "xxx" || result === "ooo"){
		return result;
	}
	
	switch (result){
		case "xxnull":
			return ["x", c];
			
		case "xnullx":
			return ["x", b];
			
		case "nullxx":
			return ["x", a];
			
		case "oonull":
			return ["o", c];
			
		case "onullo":
			return ["o", b];
			
		case "nulloo":
			return ["o", a];
	}
}

function endGame(a, b, c,winner ='default'){
	arrData[a].style.color = "red";
	arrData[b].style.color = "red";
	arrData[c].style.color = "red";
	modal.style.display = "block";
	console.log(winner);
	if(winner == 'default'){
		stop = true;
	} else {
		let url = "send.php";
		let params = "winner=" + winner;
		request.open("POST", url, true);
		request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		request.addEventListener("readystatechange", () => {
		    if(request.readyState === 4 && request.status === 200) {       
				console.log(request.responseText);
		    }
		});
		request.send(params);
	}

	
}

function checkWin(){
	for (let i = 0; i < 3; i++){
		let result = concat(i, i + 3, i + 6);
		
		if (result === "xxx" || result === "ooo"){
			endGame(i, i + 3, i + 6,result);
		}
	}
	
	for (let i = 0; i <= 6; i +=3){
		let result = concat(i, i + 1, i + 2);
		
		if (result === "xxx" || result === "ooo"){
			endGame(i, i + 1, i + 2,result);
		}
	}
	
	result = concat(0, 4, 8);
	if (result === "xxx" || result === "ooo"){
		endGame(0, 4, 8,result);
	}
	
	result = concat(2, 4, 6);
	if (result === "xxx" || result === "ooo"){
		endGame(2, 4, 6,result);
	}	
}

function botStep(){
	for (let i = 0; i < 3; i++){
		let result = concat(i, i + 3, i + 6);
		if (typeof(result) === "object" && result[0] === "o"){
			arrData[result[1]].innerHTML = "o"
			arr[result[1]] = "o"
			return;
		}
	}
	
	for (let i = 0; i <= 6; i +=3){
		let result = concat(i, i + 1, i + 2);
		
		if (typeof(result) === "object" && result[0] === "o"){
			arrData[result[1]].innerHTML = "o";
			arr[result[1]] = "o";
			return;
		}
	}
	
	result = concat(0, 4, 8)
	if (typeof(result) === "object" && result[0] === "o"){
		arrData[result[1]].innerHTML = "o";
		arr[result[1]] = "o";
		return;
	}
	
	result = concat(2, 4, 6)
	if (typeof(result) === "object" && result[0] === "o"){
		arrData[result[1]].innerHTML = "o";
		arr[result[1]] = "o";
		return;
	}	
	
	for (let i = 0; i < 3; i++){
		let result = concat(i, i + 3, i + 6);
		
		if (typeof(result) === "object" && result[0] === "x"){
			arrData[result[1]].innerHTML = "o";
			arr[result[1]] = "o";
			return;
		}
	}
	
	for (let i = 0; i <= 6; i +=3){
		let result = concat(i, i + 1, i + 2);
		
		if (typeof(result) === "object" && result[0] === "x"){
			arrData[result[1]].innerHTML = "o";
			arr[result[1]] = "o";
			return;
		}
	}
	
	result = concat(0, 4, 8)
	if (typeof(result) === "object" && result[0] === "x"){
		arrData[result[1]].innerHTML = "o";
		arr[result[1]] = "o";
		return;
	}
	
	result = concat(2, 4, 6)
	if (typeof(result) === "object" && result[0] === "x"){
		arrData[result[1]].innerHTML = "o";
		arr[result[1]] = "o";
		return;
	}
	
	let tempArr = [];
	for(let i = 0; i < 9; i++){
		if (arr[i] === null){
			tempArr.push(i);
		}
	}

	let randIndexTempArr = Math.floor(Math.random() * tempArr.length);
	let randNull = tempArr[randIndexTempArr];
	arrData[randNull].innerHTML = "o";
	arr[randNull] = "o"	;
}

addEventListener("click", function(event){
	if (stop === true){
		return;
	}
	
	if (event.target.className === "box" && event.target.textContent === ""){
		event.target.style.color = "blue";
		event.target.innerHTML = "x";
		
		arr[event.target.dataset.num] = "x";
				
	}else{
		return;
	}
	
	checkWin();
	
	if (stop === true){
		return;
	}
	
	botStep();
	
	checkWin();
})




