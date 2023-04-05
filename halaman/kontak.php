<div class="kontak">
<form action="send_email.php" method="POST">
    <label for="name">Nama:</label>
    <input type="text" name="name" required>
    
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    
    <label for="subject">Subjek:</label>
    <input type="text" name="subject" required>
    
    <label for="message">Pesan:</label>
    <textarea name="message" required></textarea>
    
    <button type="submit">Kirim</button>
</form>

<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
    $to = "tujuan@email.com";
    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $body = "Nama: $name\nEmail: $email\n\nPesan:\n$message";

    if (mail($to, $subject, $body)) {
        echo "Pesan berhasil dikirim";
    } else {
        echo "Pesan gagal dikirim";
    }
} else {
    echo "Silahkan isi formulir kontak dengan benar";
}
?>

</div>