function carousel() {
    const leftArrow = document.getElementById('left_arrow');
    const rightArrow = document.getElementById('right_arrow');
    const films = document.querySelectorAll('.film_block');
    const listOfFilms = document.querySelector('.carousel');
    let lastFilm = films.length - 1;
    let i = 0;

    function slideRight(){
        listOfFilms.appendChild(films[i]);
        if (i < lastFilm) {
            i++;
        } else {
            i = 0;
        }
    }

    function slideLeft(){
        if (i <= 0) {
            i = lastFilm;
            listOfFilms.insertBefore(films[lastFilm], films[lastFilm - i]);
        } else {
            i--;
            listOfFilms.insertBefore(films[i], films[i + 1]);
        }
    }
    rightArrow.addEventListener("click", slideRight);
    leftArrow.addEventListener("click", slideLeft);
}

window.onload = carousel;