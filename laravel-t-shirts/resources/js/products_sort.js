const array = [...document.getElementsByClassName('protuct-sort')];

function sortA() {
    let sortAscend = array.slice().sort((a, b) => {
        if (a.dataset.name < b.dataset.name) {
            return -1;
        }
        if (b.dataset.name < a.dataset.name) {
            return 1;
        }
        return 0;
    });
    
    sortAscend.forEach((elem, index) => elem.style.order = index);
}

function sortZ() {
    let sortDescend = array.slice().sort((a, b) => {
        if (a.dataset.name > b.dataset.name) {
            return -1;
        }
        if (b.dataset.name > a.dataset.name) {
            return 1;
        }
        return 0;
    });

    sortDescend.forEach((elem, index) => elem.style.order = index);
}

function sortLow() {
    let sortAscend = array.slice().sort((a, b) => a.dataset.price - b.dataset.price);
    
    sortAscend.forEach((elem, index) => elem.style.order = index);
}

function sortHigh() {
    let sortDescend = array.slice().sort((a, b) => b.dataset.price - a.dataset.price);
    
    sortDescend.forEach((elem, index) => elem.style.order = index);
}

function sortTime() {
    let sortDescend = array.slice().sort((a, b) => b.dataset.time - a.dataset.time);
    
    sortDescend.forEach((elem, index) => elem.style.order = index);
}

function sortPopular() {
    let sortDescend = array.slice().sort((a, b) => b.dataset.popular - a.dataset.popular);
    
    sortDescend.forEach((elem, index) => elem.style.order = index);
    console.log(sortDescend);
}

function sortDefault() {
    let sortDescend = array;

    sortDescend.forEach((elem, index) => elem.style.order = index);
}