let table = document.getElementById('table-1').getElementsByTagName('tbody')[0];

/**
 * Método que recibe y muestra la información
 */
function displayData() {
    table.innerHTML = '';
    $.ajax({
        type: "GET",
        url: '/ejercicio1-2/getData.php',
        success:function(html) {
            let rows = JSON.parse(html);
            console.log(rows);
            // Crea las filas
            for (const key in rows) {
                if (Object.hasOwnProperty.call(rows, key)) {
                    const element = rows[key];
                    // console.log(element);
                    table.insertRow().innerHTML = `
                        <td>${element.id}</td>
                        <td class="text-capitalize">${element.type}</td>
                        <td class="text-capitalize">${element.color}</td>
                    `;
                }
            }
        }
    });
}