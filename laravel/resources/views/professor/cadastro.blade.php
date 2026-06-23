<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Professor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div class="card shadow m-3">
                    <div class="card-body">
                        <div class="form-group mb-2">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="telefone" required>
                        </div>
                        <button class="btn btn-primary mt-3" id="btn-cadastrar">Cadastrar Professor</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('btn-cadastrar').addEventListener('click', function() {
            const nome = document.getElementById('nome').value;
            const email = document.getElementById('email').value;
            const telefone = document.getElementById('telefone').value;

            fetch("{{ url('/api/professor/add') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ nome, email, telefone })
            })
            .then(response => response.json())
            .then(data => {
                if (data.errors) {
                    console.log('Erros de validação:', data.errors);
                    alert('Erro de validação.');
                } else {
                    console.log('Professor cadastrado:', data);
                    alert('Professor cadastrado com sucesso!');
                }
            })
            .catch(errors => console.log('Erro:', errors));
        });
    </script>
  </body>
</html>