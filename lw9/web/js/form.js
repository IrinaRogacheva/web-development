async function sendData() {


    let inputs = {
        "name": document.getElementById('name').value,
        "email": document.getElementById('email').value
    };

    let errors = [];

    let promise = fetch('http://localhost:8080/index.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json;charset=utf-8'
        },
        body: JSON.stringify(inputs)
    })

        .then((response) => {
        return response.json;
        })

        .then((data) => {
            errors = data;
        });

        if (errors.length === 0) {
            let success = document.getElementById('success');
            success.innerHTML = "Ваше сообщение успешно отправлено";
        } else {
            for (error of errors) {
                let input = document.getElementById(error);
                input.style.borderColor = '#EE5252';
            }
        }
    }

function run() {
    let form = document.getElementById('form');
    form.addEventListener('submit', sendData);
}

window.onload = run;