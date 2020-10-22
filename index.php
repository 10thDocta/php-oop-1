<?php

class User {

    public $name;
    public $lastname;
    public $age;
    public $email;

    function __construct($name, $lastname, $age, $email) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->email = $email;
    }

}

$user1 = new User('Pippo', 'Franco', 80, 'pippo@p.it');
$user2 = new User('Freddie', 'Mercurie', 'xx', 'freddie@p.it');
$user3 = new User('The', 'Dcotor', 10000, 'thedoctor@p.it');
$user4 = new User('Iron', 'Man', 50, 'iron@p.it');

$arrUser = [$user1, $user2, $user3, $user4];
// var_dump($arrUser);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    ul {
        list-style: none;
    }
    </style>
</head>

<body>
    <?php foreach ($arrUser as $user) { ?>
    <div class="user">
        <ul class="user-list">
            <li class="user-list__item"> <?php echo $user->name ?> </li>
            <li class="user-list__item"> <?php echo $user->lastname ?> </li>
            <li class="user-list__item"> <?php echo $user->age ?> </li>
            <li class="user-list__item"> <?php echo $user->email ?> </li>
            <br>
        </ul>
    </div>
    <?php } ?>
</body>

</html>