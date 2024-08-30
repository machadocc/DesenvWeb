function adicionarNoDisplay(valor) {
    const display = document.getElementById('display');
    let currentText = display.textContent;

    if (valor === '.') {
        if (!currentText.includes('.')) {
            display.textContent += valor;
        }
    } else {
        if (currentText === '0') {
            display.textContent = valor;
        } else {
            display.textContent += valor;
        }
    }

    console.log('Valor Adicionado');
}

function limparDisplay() {
    const display = document.getElementById('display');
    display.textContent = '0';
    display.className = '';
    console.log('Calculadora Zerada');
}

function apagarUltimoElemento() {
    const display = document.getElementById('display');
    display.textContent = display.textContent.slice(0, -1);
    console.log('Retirado Ultimo Elemento');
    if (display.textContent === '') {
        display.textContent = '0';
    }
    atualizarCorDeFundo();
}

function calcularResutado() {
    const display = document.getElementById('display');
    let expression = display.textContent;

    try {
        expression = expression.replace(/,/g, '.');
        let result = eval(expression);

        display.textContent = result;

        atualizarCorDeFundo();
    } catch (error) {
        display.textContent = 'Erro';
        display.className = '';
    }

    console.log('Resultado Calculado');
}

function atualizarCorDeFundo() {
    const display = document.getElementById('display');
    const result = parseFloat(display.textContent);

    display.className = '';

    if (isNaN(result)) {
        return;
    }

    if (result < 0) {
        display.classList.add('negative');
    } else if (result > 0) {
        display.classList.add('positive');
    } else {
        display.classList.add('zero');
    }
}