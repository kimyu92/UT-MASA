// select officer year page
function selectYear() {
	var dropdown = document.getElementById('yearDropDown');
    var fileName = "committees_page/officers_" + dropdown.value + ".html";
    $("body").fadeOut(800, function() {
        window.open(fileName, "_self")
    });
};