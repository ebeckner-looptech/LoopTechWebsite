<?php
/**
 * login.php
 *
 * Publicly accessible login page. 
 * Verifies user credentials and sets $_SESSION['logged_in'] on success.
 */
session_start();

// If user is already logged in, go straight to the "home" or protected page
if (!empty($_SESSION['logged_in'])) {
  header('Location: index.php');
  exit;
}

$errorMsg = '';

// If the login form was submitted
if (isset($_POST['login-submit'])) {
  $email = $_POST['login-email'] ?? '';
  $pass  = $_POST['login-password'] ?? '';

  // Connect to DB
  $pdo = require __DIR__ . '/db.php';

  // Prepare and execute
  $stmt = $pdo->prepare("SELECT id, password_hash FROM users WHERE email = ?");
  $stmt->execute([$email]);
  $user = $stmt->fetch();

  // Check if user record found and password is correct
  if ($user && password_verify($pass, $user['password_hash'])) {
      // success
      $_SESSION['logged_in']  = true;
      $_SESSION['user_email'] = $email;
      header('Location: index.php');
      exit;
  } else {
      $errorMsg = "Invalid email or password.";
  }
}

// If sign-up is relevant, you can handle that here too, e.g. `$_POST['signup-submit']`...
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Login</title>
  <!-- Include your CSS (just like you would in any HTML file) -->
  <link rel="stylesheet" href="assets/css/master.css">
</head>
<body class="login-page">
  <!-- Your video background, overlay, etc. -->
  <video autoplay muted loop id="bg-video">
    <source src="assets/videos/background.mp4" type="video/mp4" />
  </video>
  <div class="overlay"></div>

  <div class="login-container">
    <div class="branding">
      <img src="assets/images/LoopTech_horizontal_Color_login.svg" alt="LoopTechHorz" class="looptech_logo" />
      <h1>Welcome to <strong>PodPilot</strong></h1>
      <p>Powered by <strong>Theseus</strong> and <strong>Elevenlabs</strong></p>
    </div>

    <div id="toggle-container">
      <button id="toggle-login" class="active">Login</button>
      <button id="toggle-signup">Sign Up</button>
    </div>

    <!-- Show error message if login failed -->
    <?php if (!empty($errorMsg)): ?>
      <div id="error-msg" style="color:red;"><?php echo htmlspecialchars($errorMsg); ?></div>
    <?php endif; ?>

    <!-- LOGIN form (replace your JS-based approach with an actual HTML form) -->
    <form id="login-form" method="post">
      <input 
        type="email" 
        name="login-email"
        id="login-email" 
        placeholder="Email" 
        required 
      />
      <input 
        type="password" 
        name="login-password"
        id="login-password" 
        placeholder="Password" 
        required 
      />
      <button type="submit" name="login-submit" id="login-submit">Login</button>
    </form>

    <!-- SIGNUP form (if you need it) 
         For now, can keep as decorative or handle with server logic.
    -->
    <form id="signup-form" method="post" style="display: none;">
      <input 
        type="email" 
        name="signup-email"
        id="signup-email" 
        placeholder="Email (whitelisted)" 
        required 
      />
      <input 
        type="password"
        name="signup-password"
        id="signup-password" 
        placeholder="Password" 
        required 
      />
      <input 
        type="password"
        name="signup-password-confirm"
        id="signup-password-confirm" 
        placeholder="Confirm Password" 
        required 
      />
      <button type="submit" name="signup-submit" id="signup-submit">Sign Up</button>
    </form>
  </div>

  <!-- If you have toggle logic in login.js for show/hide, you can still use it -->
  <script src="assets/js/login.js"></script>
</body>
</html>
