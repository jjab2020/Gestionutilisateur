

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Users</title>
        <style type="text/css">
            table.users {
                width: 100%;
            }
            
            table.users thead {
                background-color: #eee;
                text-align: left;
            }
            
            table.users thead th {
                border: solid 1px #fff;
                padding: 3px;
            }
            
            table.users tbody td {
                border: solid 1px #eee;
                padding: 3px;
            }
            
            a, a:hover, a:active, a:visited {
                color: blue;
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <div><a href="index.php?op=new">Add new user</a></div>
        <table class="users" border="0" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th>Name</a></th>
                    <th>Naissance</a></th>
                    <th>Email</a></th>
                    <th>ID</a></th>
                    
                </tr>
            </thead>
            <tbody>
            <?php 
            foreach ($contacts as $contact): ?>
                <tr>
                    <td><?php print htmlentities($contact['nom_UTILISATEUR']); ?></a></td>
                    <td><?php print htmlentities($contact['naissance_UTILISATEUR']); ?></td>
                    <td><?php print htmlentities($contact['email_UTILISATEUR']); ?></td>
                    <td><?php print htmlentities($contact['id_UTILISATEUR']); ?></td>
                  
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>