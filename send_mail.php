<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Одержуємо дані з форми
    $phone = htmlspecialchars($_POST['phone']);
    $rubric = htmlspecialchars($_POST['rubric']);
    $message = htmlspecialchars($_POST['message']);
    
    // Пошта, на яку будуть надсилатись оголошення
    $to = "vika_bond2002@ukr.net";  // Змініть на потрібну електронну адресу
    $subject = "Нове оголошення від користувача";
    
    // Тіло повідомлення
    $body = "Номер телефону: $phone\nРубрика: $rubric\n\nТекст оголошення:\n$message";
    
    // Встановлення заголовків (від кого і т.д.)
    $headers = "From: NashaGazeta";
    
    // Надсилаємо листа
    if (mail($to, $subject, $body, $headers)) {
        echo "Оголошення успішно надіслано!";
    } else {
        echo "Помилка при відправленні оголошення. Спробуйте ще раз.";
    }
}
?>