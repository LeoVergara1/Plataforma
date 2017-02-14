@Grapes([
    @Grab("org.gebish:geb-core:1.1.1"),
    @Grab("org.seleniumhq.selenium:selenium-chrome-driver:2.52.0"),
    @Grab("org.seleniumhq.selenium:selenium-support:2.52.0")
])
import geb.Browser

/*
Browser.drive {
    go "http://gebish.org"

    assert title == "Geb - Very Groovy Browser Automation" 

    $("#sidebar .sidemenu a", text: "jQuery-like API").click()

    assert $("#main h1")*.text() == ["Navigating Content", "Form Control Shortcuts"] 
    assert $("#sidebar .sidemenu a", text: "jQuery-like API").parent().hasClass("selected")
}
*/

Browser.drive {
	go "http://didacticalgames.esy.es/registro.html"
	
	
	$("#firstname1").value "Prueba"
	$("#lastname1").value "Prueba"
	$("#username1").value "5542796166"
	$("#email1").value "barandon@gmail.com"
	$("#password1").value "nose1234A"
	$("#confirm_password1").value "nose1234A"
	$("#agree1", name:"agree1").value() == true
	//$("#month")
	//$("#year")
	$("#signupForm1 > div:nth-child(8) > div > button").click()


	Thread.sleep 100000


	

}