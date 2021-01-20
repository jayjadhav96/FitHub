<?php

    if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];

?>



<?php
    }
    $to = $email;

    // Sender
    $from = 'getfithub.in@gmail.com';
    $fromName = 'FitHub';

    // Email subject
    $subject = 'Surya Namaskar Ebook from FitHub';

    // Attachment file
    $file = "files/Surya Namaskar.pdf";

    // Email body content

    $htmlContent = "Hello $name\n";

    $htmlContent .= '
        <h3>Attachment by FitHub.</h3>
        <p>This email is sent from getfithub.in with attachment.</p>
        <div class="container"
            style="width: 330px;display: block;margin: 0 auto;border: 0.2px solid rgb(102, 101, 101);margin-top: 2rem;">
            <div class="header"
                style="background: #A7FF83;max-width: 400px;text-align: center;font-size: 1.7rem;padding: 1rem 0;font-family: sans-serif;">
                FitHub</div>
            <h3 style="text-align: center;font-size: 1.3rem;font-family: sans-serif;">Thank for Choosing us.</h3>
            <p style="text-align: center;font-size: 1.1rem;font-family: sans-serif;">Get in touch with us for new updates.
            </p>
            <p style="text-align: center;font-size: 1.1rem;font-family: sans-serif;">For more Information Visit us.</p>
            <a href="www.getfithub.in"
                style="display: block;margin: 0 auto;background: #071A52;text-decoration: none;color: #fff;font-family: sans-serif;width: 100px;padding: 12px 24px;text-align: center;">Get
                Started</a>
            <div class="footer" style="margin-top: 2rem;background: #2F2E41;padding: 24px;"></div>
        </div>
    ';

    // $htmlContent .= "Hello $name";

    // Header for sender info
    $headers = "From: $fromName"." <".$from.">";

    // Boundary
    $semi_rand = md5(time());
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

    // Headers for attachment
    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

    // Multipart boundary
    $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
    "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";

    // Preparing attachment
    if(!empty($file) > 0){
        if(is_file($file)){
            $message .= "--{$mime_boundary}\n";
            $fp =    @fopen($file,"rb");
            $data =  @fread($fp,filesize($file));

            @fclose($fp);
            $data = chunk_split(base64_encode($data));
            $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" .
            "Content-Description: ".basename($file)."\n" .
            "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" .
            "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
        }
    }
    $message .= "--{$mime_boundary}--";
    $returnpath = "-f" . $from;

    // Send email
    $mail = mail($to, $subject, $message, $headers, $returnpath);

    // // Email sending status
    echo $mail?"<p style='text-align:center;font-size:1.6rem;margin-top:70px; font-weight:700; font-family:sans-serif; color: #00cc00;'>Email Sent Successfully! <span style='font-size:1rem;'> ( Keep Patience, Ebook will get in Minutes )</span></p>":"
      <p style='text-align:center;font-size:1.6rem;margin-top:70px;font-weight:700; font-family:sans-serif; color: red;'>Email Sending Fail! <span style='font-size:1rem;'> ( Enter Valid Details )</span></p>";

?>
