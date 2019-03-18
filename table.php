<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table</title>
</head>
<body>
    <table border="2px">
        <thead>
            <?php foreach ($tableHeader as $header): ?>
            <th><?= $header ?></th>
            <?php endforeach; ?>
        </thead>
        <tbody>
            <?php foreach ($tableBody as $row): ?>
            <tr> 
                <?php foreach ($row as $cell): ?>
                <td><?= $cell ?></td>   
                <?php endforeach; ?>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>