filterProduct("all");

function filterProduct(name) {
    const x = document.getElementsByClassName("filterCol");
    
    if (name == "all") {
        name = "";
    }
    for (let i = 0; i < x.length; i++) {
        removeProduct(x[i], "show");
        if (x[i].className.indexOf(name) > -1) {
            addProduct(x[i], "show");
        }
  }
}

function addProduct(element, name) {
    let arr1 = element.className.split(" ");
    let arr2 = name.split(" ");
    
    for (let i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
    }
}

function removeProduct(element, name) {
    let arr1 = element.className.split(" ");
    let arr2 = name.split(" ");
    
    for (let i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
        arr1.splice(arr1.indexOf(arr2[i]), 1);     
        }
    }
    
    element.className = arr1.join(" ");
}