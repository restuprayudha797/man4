<?php
// Database credentials
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "smart_all");

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

if (!$conn) {

  echo 'gagal konek ke database';
}


function query($query)
{

  global $conn;

  $result = mysqli_query($conn, $query);
  $rows = [];

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}


function send_mail()
{
  // SMTP server settings
  $smtpServer = 'smtp';
  $smtpPort = 465; // Change this tNo the appropriate port for your SMTP server
  $smtpUsername = 'gpstracker@gpstracklimbungan.site';
  $smtpPassword = '^*}-OczG9Tu1';

  // Sender and recipient
  $fromEmail = 'gpstracklimbungan.site';
  $fromName = 'Smart Toilet';
  $toEmail = 'febrita1995@gmail.com';
  $toName = 'Febrita Syafitri';

  // Email content
  $subject = 'ADA Orang Terjatuh terdeteksi';
  $message = 'Segera lakukan pengecekan ke ruangan kamar mandi';

  // Additional headers
  $headers = array(
    'MIME-Version: 1.0',
    'Content-type: text/html; charset=UTF-8',
    "From: $fromName <$fromEmail>",
    "Reply-To: $fromEmail",
    "X-Mailer: PHP/" . phpversion()
  );

  // Set the SMTP server options
  ini_set('SMTP', $smtpServer);
  ini_set('smtp_port', $smtpPort);
  ini_set('sendmail_from', $fromEmail);

  // Create the email headers
  $emailHeaders = implode("\r\n", $headers);

  // Send the email
  if (mail($toEmail, $subject, $message, $emailHeaders)) {
    echo 'Email has been sent successfully!';
  } else {
    echo 'Error sending email. Please check your SMTP settings.';
  }
}
