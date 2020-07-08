function check() {
    var e = document.getElementById("blood-group");
    var text = e.options[e.selectedIndex].text;
    document.getElementById("bg-show").innerHTML = text;
}