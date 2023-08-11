function exportCSV() {
    let table = document.querySelector('.cep-table');
    let rows = table.querySelectorAll('tr');
    let csvContent = "data:text/csv;charset=utf-8,";
    
    rows.forEach(row => {
        let rowData = [];
        row.querySelectorAll('td').forEach(cell => {
            rowData.push(cell.textContent);
        });
        csvContent += rowData.join(',') + "\r\n";
    });
    
    let encodedUri = encodeURI(csvContent);
    let link = document.createElement("a");
    link.setAttribute("href", encodedUri);
    link.setAttribute("download", "cep_data.csv");
    document.body.appendChild(link);
    link.click();
}

function clearTable() {
    let table = document.querySelector('.cep-table');
    table.innerHTML = '<thead><tr><th>CEP</th><th>Logradouro</th><th>Bairro</th><th>Cidade</th><th>Estado</th></tr></thead><tbody></tbody>';
}