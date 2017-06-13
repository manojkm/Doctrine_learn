<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 13/06/2017
 * Time: 12:23 PM
 */

require_once ('Post.php');
require_once ('User.php');

$user = new User();
$post = new Post($user);


$post->addComment("First..");
$post->addComment("Second!");

$entityManager->persist($user);
$entityManager->persist($post);

$entityManager->flush();