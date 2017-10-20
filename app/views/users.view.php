<?php require('partials/header.php') ?>


<h1> all users</h1>

<?php foreach ($users as $user): ?>
 <li> <?= $user->name; ?></li>
<?php endforeach; ?>

<h2>submit your responsse</h2>


    <form method="POST" action="/users">
        <input name="name">
        <button type="submit">ok</button>
    </form>



<?php require('partials/footer.php') ?>