carousel();

function carousel() {
    const leftArrow = document.getElementById('left_arrow');
    const rightArrow = document.getElementById('right_arrow');
    const films = document.querySelectorAll('.film_block');
    const listOfFilms = document.querySelector('.carousel');
    const numberOfFilms = films.length - 1;
    const mainFilms = 3;
    let i = 0;
    let count = mainFilms;

    rightArrow.onclick = function(){
        if (count <= films.length + 1) {
            offsetToEnd();
            i++;
        } else {
            offsetToEnd();
            if (count == films.length + mainFilms) {
                count = mainFilms;
                i = 0;
            }
        }
    }

    leftArrow.onclick = function(){
        if (count > mainFilms) {
            listOfFilms.insertBefore(films[i - 1], films[i]);
            i--;
            count--;
        } else {
            listOfFilms.insertBefore(films[numberOfFilms], films[i]);
            i = numberOfFilms;
            count = films.length + mainFilms - 1;
        }
    }

    function offsetToEnd() {
        listOfFilms.appendChild(films[i]);
        count++;
    }
}