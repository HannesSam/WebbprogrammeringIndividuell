<?php
session_start();
if (isset($_SESSION['userID'])) {
  echo '<a id="makePost" >Make post<i class="fas fa-pencil-alt"></i></a>';
  echo '<a id="logIn" href="loggout.php">Log out</a>';
} else {
  echo '<div class="login-container">
    <form name="form">
      <input id="emailLogin" type="text" placeholder="E-mail" name="email">
      <input id="passwordLogin" type="password" placeholder="Password" name="password">
      <button id="submitLogin" type="button">Login</button>
    </form>
  </div>';
  echo '<a id="register">Register</a>';
}
