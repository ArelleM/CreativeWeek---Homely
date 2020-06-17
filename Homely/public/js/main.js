/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function Dropdown() {
    document.getElementById("UserDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
    if (!e.target.matches('.dropbtn')) {
        var UserDropdown = document.getElementById("UserDropdown");
        if (UserDropdown.classList.contains('show')) {
            UserDropdown.classList.remove('show');
        }
    }
}


