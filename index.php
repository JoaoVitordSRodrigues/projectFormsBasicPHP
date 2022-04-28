<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>
    </head>
    <body>
        <form action="controller/controllerPessoa.php" method='post' >            
            <table>
                <tr>
                    <td>
                        <label for="txtNome">Nome:</label><br>
                    </td>
                    <td>
                        <input type="text" name="txtNome" id="txtNome" /><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="txtEnd">Endereço:</label><br>
                    </td>
                    <td>
                        <input type="text" name="txtEnd" id="txtEnd" /><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button>Cadastrar</button>
                    </td>
                </tr>
            </table>       
        </form>       
    </body>
</html>
