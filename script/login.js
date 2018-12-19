var loginPanel = document.querySelector(".loginPanelRight");
var signUpButton  = document.querySelector("#signUpButton");

function showLoginPanel(e){

	if(loginPanel.classList.contains("animated"))
	{   
		loginPanel.classList.remove("animated");
		loginPanel.classList.remove("loginPanelRight--show");
		
	}
	else 
	{
		loginPanel.classList.add("animated");
		loginPanel.classList.add("loginPanelRight--show");
		
	}
}

signUpButton.addEventListener('click',showLoginPanel);

