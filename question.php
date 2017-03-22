<?php

   session_start();

   if (isset($_POST['name'], $_POST['email'], $_POST['question'])) {

      $fields = [
         'name' => $_POST['name'],
         'email' => $_POST['email'],
         'question' => $_POST['question']
      ];

      if(!ctype_alpha($fields['name'])) {
         $error = 'Names can only contain letters.';
      } else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $error = 'That\'s not a valid email address';
      }

      foreach ($fields as $field => $data) {
         if(empty($data)) {
            $error = 'The ' . $field . ' field is required!';
         }
      }

      $fields['website'] = $_POST['website'];

      $success = 'Thank you for your question, ' . $fields['name'] . '!';

   }

$_SESSION['error'] = $error;
$_SESSION['fields'] = $fields;
$_SESSION['success'] = $success;

header('Location: index.php#contact');

?>
