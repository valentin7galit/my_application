const array = [...document.getElementsByClassName('protuct-sort')];

    window.sortA = function() {
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

    window.sortZ = function() {
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

    window.sortLow = function() {
        let sortAscend = array.slice().sort((a, b) => a.dataset.price - b.dataset.price);
        
        sortAscend.forEach((elem, index) => elem.style.order = index);
    }

    window.sortHigh = function() {
        let sortDescend = array.slice().sort((a, b) => b.dataset.price - a.dataset.price);
        
        sortDescend.forEach((elem, index) => elem.style.order = index);
    }

    window.sortTime = function() {
        let sortDescend = array.slice().sort((a, b) => b.dataset.time - a.dataset.time);
        
        sortDescend.forEach((elem, index) => elem.style.order = index);
    }

    window.sortPopular = function() {
        let sortDescend = array.slice().sort((a, b) => b.dataset.popular - a.dataset.popular);
        
        sortDescend.forEach((elem, index) => elem.style.order = index);
    }

    window.showDefault = function() {
        let showArray = array;

        showArray.forEach((elem, index) => elem.style.order = index);
    }