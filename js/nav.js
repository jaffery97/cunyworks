function openNav() {
	document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
}


const currentYear = new Date().getFullYear();
document.getElementById("current_year").innerHTML = currentYear;
