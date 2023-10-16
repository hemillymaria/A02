<!DOCTYPE html>
<html>
<head>
    <title>Dados da Página da Web</title>
</head>
<body>
    <h1>Dados da Página da Web</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Idade</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Luciano</td>
            <td>20</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Hemilly</td>
            <td>21</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Samuel</td>
            <td>20</td>
        </tr>
    </table>

    <script>
        // JavaScript para manipular e exibir dados na página
        var table = document.querySelector("table");
        var data = [
            { id: 4, nome: "Raiane", idade: 21 },
            { id: 5, nome: "Cassiano", idade: 28 }
        ];

        // Adicionar dados à tabela
        data.forEach(function(item) {
            var row = table.insertRow();
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            cell1.innerHTML = item.id;
            cell2.innerHTML = item.nome;
            cell3.innerHTML = item.idade;
        });
    </script>
</body>
</html>