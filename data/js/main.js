function createPageElement() {
    var elementsToChange = document.getElementsByClassName("container");
    for(var i = 0; i < elementsToChange.length; i++) {
        var obj = document.createElement("p");
        obj.className = "containerTitle";
        obj.innerHTML = elementsToChange[i].id;
        elementsToChange[i].insertBefore(obj, elementsToChange[i].firstChild);
    }

    document.getElementById("currentWindowLoc").innerHTML = `Je bevind jezelf nu in: ${window.location.pathname}`;

    var imageElements = document.getElementsByTagName("img");
    for(var i = 0; i < imageElements.length; i++) {
        if(imageElements[i].id != "background") {
            imageElements[i].addEventListener("click", function() {
                window.location.href = this.src; //`/portfolio/${this.id}`;
            });
        }
    }
}