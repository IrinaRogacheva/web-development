function carousel() {
    const leftArrow = document.getElementById('left_arrow');
    const rightArrow = document.getElementById('right_arrow');
    const films = document.querySelectorAll('.film_block');
    const listOfFilms = document.querySelector('.carousel');
    let numberOfFilms = films.length - 1;
    let i = 0;

    function slideRight(){
        listOfFilms.appendChild(films[i]);
        if (i < numberOfFilms) {
            i++;
        } else {
            i = 0;
        }
    }

    function slideLeft(){
        if (i <= 0) {
            i = numberOfFilms;
            listOfFilms.insertBefore(films[numberOfFilms], films[numberOfFilms - i]);
        } else {
            i--;
            listOfFilms.insertBefore(films[i], films[i + 1]);
        }
    }
    rightArrow.addEventListener("click", slideRight);
    leftArrow.addEventListener("click", slideLeft);
}

window.onload = carousel;