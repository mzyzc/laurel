<?php include "templates/header.php"; ?>
<?php include "templates/post.php"; ?>

<p>Welcome to the Laurel forum.</p>

<?php
  if (isset($_SESSION['user'])) {
    echo ("<p>You are logged in as <a href='/users.php?id=" . $_SESSION['user'] . "'>" . $_SESSION['user'] . "</a></p>");
  } else {
    echo "<p>You must log in to post content</p>";
  }

  $thread = $_GET["thread"];

  if ($thread) {
    include "templates/thread.php";
  } else {
    include "templates/page.php";
  }


?>

<?php include "templates/footer.html"; ?>
