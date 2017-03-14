<?php defined('BASEPATH') OR exit('No direct script access allowed.');

$config['useragent']        = 'PHPMailer';              // Mail engine switcher: 'CodeIgniter' or 'PHPMailer'
$config['protocol']         = 'smtp';                   // 'mail', 'sendmail', or 'smtp'
$config['mailpath']         = '/usr/sbin/sendmail';
$config['smtp_host']        = 'smtp.gmail.com';
$config['smtp_user']        = 'dyazincahya.cd@gmail.com';
$config['smtp_pass']        = 'yamiyugi';
$config['smtp_port']        = 587;
$config['smtp_timeout']     = 30;                        // (in seconds)
$config['smtp_crypto']      = 'tls';                    // '' or 'tls' or 'ssl'
$config['smtp_debug']       = 2;                        // PHPMailer's SMTP debug info level: 0 = off, 1 = commands, 2 = commands and data
$config['wordwrap']         = true;
$config['wrapchars']        = 76;
$config['mailtype']         = 'text';                   // 'text' or 'html'
$config['charset']          = 'utf-8';
$config['validate']         = true;
$config['priority']         = 3;                        // 1, 2, 3, 4, 5
$config['crlf']             = "\n";                     // "\r\n" or "\n" or "\r"
$config['newline']          = "\n";                     // "\r\n" or "\n" or "\r"
$config['bcc_batch_mode']   = false;
$config['bcc_batch_size']   = 200;

?>
