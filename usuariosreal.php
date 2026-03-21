<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="dashreal.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

 
 </head>
<body>
    <header>
    </header>
    <main>
          <div class="header-content">
             <h2>Gestão de Usuários</h2>
             <p>Visualize e gerencie as permissões dos usuários do sistema.</p>
          </div>
    <div class= "table-responsive">
            <table>
                <thread>
                    <tr>
                       <th>ID</th>
                       <th>Nome</th>
                       <th>E-mail</th>
                       <th>Acesso</th>
                       <th>Status</th>
                       <th>Ações</th>
                    </tr> 
                </thread>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Eric Freitas</td>
                        <td>eric@unifev.edu.br</td>
                        <td>Administrador</td>
                        <td>Ativo</td>
                        
                        <td>
                          <span class= "badge ativo"></span>
                         <button class="btn-icon"><i class="fa-solid fa-pen"></i></button>
                         <button class="btn-icon"><i class="fa-solid fa-trash"></i></button>
                         <button class="btn-icon"><i class="fa-solid fa-eye"></i></button>
                      </td>
                   </tr>
                        <td>02</td>
                        <td>Ana Souza</td>
                        <td>ana.souza@unifev.edu.br</td>
                        <td>Editor</td>
                        <td>Ativo</td>
                       <td>
                         <span class= "badge ativo"></span>
                         <button class="btn-icon"><i class="fa-solid fa-pen"></i></button>
                         <button class="btn-icon"><i class="fa-solid fa-trash"></i></button>
                         <button class="btn-icon"><i class="fa-solid fa-eye"></i></button>
                     </td>

                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Simone</td>
                        <td>122269@unifev.edu.br</td>
                        <td>Usuário</td>
                        <td>Ativo</td>
                        <td>
                            <span class= "badge ativo"></span>
                          <button class="btn-icon"><i class="fa-solid fa-pen"></i></button>
                          <button class="btn-icon"><i class="fa-solid fa-trash"></i></button>
                          <button class="btn-icon"><i class="fa-solid fa-eye"></i></
                        </td>

                    </tr>
                </tbody> 
            </table>      
        </div>
    </main>

    <footer>
      <p>&copy; <?php echo date('Y'); ?> Desenvolvido na aula de Web I</p>
   </footer>
    
</body>
</html>