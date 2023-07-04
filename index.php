<!DOCTYPE html>
<html>
<head>
  <title>Email Client</title>
  <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>
<body>
  <header>
    <h1>Email Client</h1>
  </header>
  <?php  
  $r=require('inc/createdb.php');//; ?>
  <div class="container">
    <aside>
      <ul class="folders">
        <li class="folder">Inbox</li>
        <li class="folder">Sent</li>
        <li class="folder">Drafts</li>
        <li class="folder">Trash</li>
      </ul>
    </aside>
  
    <main>
      <div class="email-list">
        <div class="email">
          <h2 class="email-subject">Welcome to the email client!</h2>
          <p class="email-sender">John Doe</p>
          <p class="email-date">June 21, 2023</p>
        </div>
         <div class="email">
          <h2 class="email-subject">Welcome to the email client!</h2>
          <p class="email-sender">John Doe</p>
          <p class="email-date">June 21, 2023</p>
        </div>
                <div class="email">
          <h2 class="email-subject">Welcome to the email client!</h2>
          <p class="email-sender">John Doe</p>
          <p class="email-date">June 21, 2023</p>
        </div>
                <div class="email">
          <h2 class="email-subject">Welcome to the email client!</h2>
          <p class="email-sender">John Doe</p>
          <p class="email-date">June 21, 2023</p>
        </div>
                <div class="email">
          <h2 class="email-subject">Welcome to the email client!</h2>
          <p class="email-sender">John Doe</p>
          <p class="email-date">June 21, 2023</p>
        </div> 
        <!-- Repeat the email structure for other emails -->
  
      </div>
    </main>



  <?php //
 
$r=require('inc/createdb.php');//; ?> 
    <div class="email-view">
      <h2 class="email-subject">Welcome to the email client!</h2>
      <p class="email-sender">John Doe</p>
      <p class="email-date">June 21, 2023</p>
      <div class="email-body">
        <p>This is the email content.</p>
      </div>
    </div>
  </div>
  
  <script src="script.js"></script>
</body>
</html>
