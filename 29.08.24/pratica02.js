function adicionarLinhaMedia() {
    const tabela = document.getElementById("tabela-notas");
    const numLinhas = tabela.rows.length;
    const numColunas = tabela.rows[0].cells.length;
    
    const linhaMedia = tabela.insertRow(numLinhas);

    const celulaAluno = linhaMedia.insertCell(0);
    celulaAluno.innerHTML = "Médias";

    for (let col = 1; col < numColunas; col++) {
        let soma = 0;
        for (let row = 1; row < numLinhas; row++) {
            soma += parseFloat(tabela.rows[row].cells[col].innerHTML);
        }
        const media = soma / (numLinhas - 1);
        const celulaMedia = linhaMedia.insertCell(col);
        celulaMedia.innerHTML = media.toFixed(2);
    }
}

function adicionarColunaMedia() {
    const tabela = document.getElementById("tabela-notas");
    const numLinhas = tabela.rows.length;
    const numColunas = tabela.rows[0].cells.length;
    const cabecalho = tabela.rows[0].insertCell(numColunas);
    cabecalho.innerHTML = "Média Aluno";
    for (let row = 1; row < numLinhas; row++) {
        let soma = 0;
        let numNotas = numColunas - 1;
        for (let col = 1; col < numColunas; col++) {
            soma += parseFloat(tabela.rows[row].cells[col].innerHTML);
        }
        const media = soma / numNotas;
        const celulaMedia = tabela.rows[row].insertCell(numColunas);
        celulaMedia.innerHTML = media.toFixed(2);
    }
}