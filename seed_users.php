<?php
/**
 * seed_users.php
 *
 * Usage:
 *   1. Edit $plaintextPassword to the desired password.
 *   2. Run `php seed_users.php` on your local machine or server console.
 *   3. Copy the resulting hash for use in your database (users table).
 */

// Example user + password
$plaintextPassword = 'Secret123';

// Generate a secure hashed password (bcrypt by default)
$hashed = password_hash($plaintextPassword, PASSWORD_DEFAULT);

echo "Plaintext: $plaintextPassword\n";
echo "Hashed   : $hashed\n";
