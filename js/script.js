"use strict"

let btns = document.querySelectorAll('.button_type_submit');

btns.forEach((btn, i) => {
    btns[i].addEventListener('click', (e) => {
        let card = e.target;
        while (card && !card.classList.contains('card')) {
            card = card.parentElement;
        }
        if (!card) {
            return;
        }

        let form = document.createElement('form');
        form.action = 'add.php';
        form.method = 'GET';

        form.innerHTML = `<input name="id" value="${card.dataset.id}">`;

        document.body.append(form);
        form.submit();
    });
});

let clearBtn = document.querySelector('.button_type_clear');
if (clearBtn) {
    clearBtn.addEventListener('click', (e) => {
        let form = document.createElement('form');
        form.action = 'basket.php';
        form.method = 'POST';

        form.innerHTML = `<input name="clear" value="1">`;

        document.body.append(form);
        form.submit();
    });
}