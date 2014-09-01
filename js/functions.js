// JavaScript Document

var action = true;
var actionLogin = true;
function changeImageOver(){
	document.getElementById("idUSerTool").src = "images/UserTool.png";
}

function changeImageOut(){
	document.getElementById("idUSerTool").src = "images/UserTool2.png";
}

function changeArrowOver(){
	document.getElementById("downArros").src = "images/down-arrow1.png";
}

function changeArrowOut(){
	document.getElementById("downArros").src = "images/down-arrow2.png";
}


function openMenuSubHeader(){
	
	if(action == true){
		document.getElementById("drowDowMenuSubHeader").style.display = "-webkit-box"
		document.getElementById("drowDowMenuSubHeader").style.display = "-moz-box"
		document.getElementById("drowDowMenuSubHeader").style.display = "-ms-flexbox"
		setTimeout(function(){document.getElementById("drowDowMenuSubHeader").style.height = "128px"},500);
	action = false;
	
		}else{
		document.getElementById("drowDowMenuSubHeader").style.display = "none"
		document.getElementById("drowDowMenuSubHeader").style.height = "0px;";
			action = true;
		}
	
	
	
}


function HomeLink(){
	location.href ="index.php";	
}



function openCalender(){
	location.href ="calendar.php";	
}


function openUpdateDb(){
	location.href ="UpdateDb.php";	
}


function openLoginBar(){
	
	if(actionLogin == true){
		document.getElementById("loginBox").style.height = "35px";
		document.getElementById("formLogin").style.display = "-webkit-box";
		document.getElementById("formLogin").style.display = "-moz-box";
		document.getElementById("formLogin").style.display = "-ms-flexbox";
		
		
		actionLogin = false;
		}else{
		document.getElementById("loginBox").style.height = "0px";
		document.getElementById("formLogin").style.display = "none";
		actionLogin = true;
			}
	
	
}



function openRegister(){
	location.href = "Register.php";
}


function openHomeDb(){
	location.href = "indes.php";
}
function openStudentInfo(){
	location.href = "StudentInfo.php";
}

function openToDo(){
	location.href = "ToDo.php";
}


function openModalBoxUpdate(){
	document.getElementById("modalEditItem").style.display = "block";
}
	
$('#rightLogout').click(function(){
	location.href="php/FunctionsUser.php?Logout";
	});
	
	