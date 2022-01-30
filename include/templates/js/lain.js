$(document).ready(function () {
	$("#show_hide_password a").on('click', function (event) {
		event.preventDefault();
		if ($('#show_hide_password input').attr("type") == "text") {
			$('#show_hide_password input').attr('type', 'password');
			$('#show_hide_password i').addClass("fa-eye-slash");
			$('#show_hide_password i').removeClass("fa-eye");
		} else if ($('#show_hide_password input').attr("type") == "password") {
			$('#show_hide_password input').attr('type', 'text');
			$('#show_hide_password i').removeClass("fa-eye-slash");
			$('#show_hide_password i').addClass("fa-eye");
		}
	});
});



function _open() {
	document.getElementById("main").style.marginLeft = "15%";
	document.getElementById("mySidebar").style.width = "15%";
	document.getElementById("mySidebar").style.display = "block";
	document.getElementById("openNav").style.display = 'none';
	// document.getElementById("coba").classList.remove("container-fluid");
	// document.getElementById("coba").classList.add("container");

}

function _close() {
	document.getElementById("main").style.marginLeft = "0%";
	document.getElementById("mySidebar").style.display = "none";
	document.getElementById("openNav").style.display = "inline-block";
	// document.getElementById("coba").classList.remove("container");
	// document.getElementById("coba").classList.add("container-fluid");
}