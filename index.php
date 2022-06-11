<!-- <form action="includes/add_product.php" method="POST">
    <p>Название товара</p>
    <input type="text" name="name">
    <p>Описание товара</p>
    <input type="text" name="description">
    <p>Категория товара</p>
    <select name="category">
        <option>Игрушки для младенцев</option>
        <option>Игрушки для подростков</option>
        <option>Игрушки для мальчиков</option>
        <option>Игрушки для девочек</option>
    </select>
    <p>Цена товара</p>
    <input type="number" name="price"><br><br>
    <button type="sumbit">Добавить</button>
</form> -->

<!-- <form action="includes/upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="img"><br><br>
    <button type="submit">Загрузить</button>
</form> -->




<table>
    <tr>
        <th>Никнейм</th>
        <th>Логин</th>
        <th>Пароль</th>
        <th>email</th>
    </tr>
    <?php
    require "karnel/connection.php";
    $users = mysqli_query($connection, "SELECT * FROM `users`");
    $users = mysqli_fetch_all($users);
    // echo '<pre>';
    // print_r($users);
    // echo '</pre>';
    foreach ($users as $user){
        ?>
        <tr>
            <td><?= $user[1]?></td>
            <td><?= $user[2]?></td>
            <td><?= $user[3]?></td>
            <td><?= $user[4]?></td>
            <td><a href="karnel/users.php?id=<?= $user[0]?>">Открыть отдельно</a></td>
            <td><a href="change.php?id=<?= $user[0]?>">Изменить</a></td>
            <td><a href="karnel/delete.php?id=<?= $user[0]?>">Удалить</a></td>
        </tr>
        <?php
    }
    ?>
</table>

<form action="karnel/create.php" method="post">
    <p>Введите никнейм</p>
    <input type="text" name="name">
    <p>Введите логин</p>
    <input type="text" name="login">
    <p>Введите пароль</p>
    <input type="password" name="password">
    <p>Введите email (необязательно)</p>
    <input type="email" name="email"><br><br>
    <button type="submit">Войти</button>
</form>