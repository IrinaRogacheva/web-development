async function getData() {
    event.preventDefault();

    const form = document.getElementById('form');
    const email = form.elements.email;

    let input = {
        "email": email.value
    };

    const response = await fetch('http://localhost:8080/src/show_sender.php', {
        method: 'POST',
        body: JSON.stringify(input)
    });
    if (response.ok) {
        const errorMessage = document.getElementById('error_message');
        const answer = await response.json();
        if (answer === "error") {
            errorMessage.classList.add('show_message');
        } else {
            if (errorMessage.classList.contains('show_message')) {
                errorMessage.classList.remove('show_message');
            }
            for (let field of Object.keys(answer)) {
                let data = answer[field];
                let item = document.getElementById(field);
                item.textContent = data;
            }
        }
    } else {
        alert('Ошибка' + response.status);
    }
}

function run() {
    const form = document.getElementById('form');
    form.addEventListener('submit', getData);
}

window.onload = run;