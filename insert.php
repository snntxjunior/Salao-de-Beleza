<?php

require_once './conn.php';

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$address = filter_input(INPUT_POST, 'address');
$birthday = filter_input(INPUT_POST, 'birthday');

echo "$name - $email - $address - $birthday";

//preparar
$stmt = $conn->prepare("INSERT INTO users (name, email, address, birthday) VALUES(:NAME, :EMAIL, :ADDRESS, :BIRTHDAY)");

//trocar
$stmt->bindValue(':NAME', $name);
$stmt->bindValue(':EMAIL', $email);
$stmt->bindValue(':ADDRESS', $address);
$stmt->bindValue(':BIRTHDAY', $birthday);

//executar
$stmt->execute();

header('Location: index.php');