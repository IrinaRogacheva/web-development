async function sendData(event) {

    event.preventDefault();

    const form = document.getElementById('form');
    const name = form.elements.name;
    const email = form.elements.email;
    let gender = "male";
    if (form.elements.gender.value === "female") {
        gender = "female";
    }
    const inputs = {
        "name": name.value,
        "email": email.value,
        "country": form.elements.country.value,
        "gender": gender,
        "message": form.elements.message.value
    };

    const response = await fetch('http://localhost:8080/src/saving_form.php', {
        method: 'POST',
        body: JSON.stringify(inputs)
    });
    if (response.ok) {
        const errors = await response.json();
        if (errors['success']) {
            const successMessage = document.getElementById('success_message');
            successMessage.classList.add('show_message');
            removeRedBorder();
        } else {
            addRedBorder(errors);
        }
    } else {
        alert('Ошибка' + response.status);
    }
}

function addRedBorder(errors) {
    for (let inputId of Object.keys(errors)) {
        if (errors[inputId] === true) {
            let invalidInput = document.getElementById(inputId);
            invalidInput.classList.add('red_border');
        }
    }
}

function removeRedBorder() {
    const inputsWithRedBorder = document.querySelectorAll('.red_border');
    for (let input of inputsWithRedBorder) {
        input.classList.remove('red_border');
    }
}

function removeRedBorderOnClick() {
    const inputsWithRedBorder = document.querySelectorAll('.red_border');
    for (let input of inputsWithRedBorder) {
        input.classList.remove('red_border');
    }
}

function run() {
    const form = document.getElementById('form');
    form.addEventListener('submit', sendData);
}

window.onload = run;