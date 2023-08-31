<?php
// Database credentials
$DB_HOST = 'localhost';
$DB_USER = 'n1589736_gpstracklimbungan';
$DB_PASS = '4HJDkDKv}J^t';
$DB_NAME = 'n1589736_smart_all';


$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

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
  $fromName = 'Smart Water Pump';
  $toEmail = 'rtyuakatsuki@gmail.com';
  $toName = 'Zidan Rafif Pratama';

  // Email content
  $subject = 'Air Keruh';
  $message = 'Air terdeteksi keruh, silahkan datang ke lokasi untuk memeriksa air secara nyata';

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
