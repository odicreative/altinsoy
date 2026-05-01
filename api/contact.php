<?php
// İletişim formu handler
require_once __DIR__ . '/config.php';

header('Content-Type: application/json');

// POST isteği kontrolü
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// JSON veriyi al
$json_input = file_get_contents('php://input');
$data = json_decode($json_input, true);

// Validasyon
if (!$data || !isset($data['name']) || !isset($data['email']) || !isset($data['message'])) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Missing required fields']);
    exit;
}

// Verileri temizle
$name = sanitize_input($data['name']);
$email = sanitize_input($data['email']);
$phone = isset($data['phone']) ? sanitize_input($data['phone']) : '';
$subject = isset($data['subject']) ? sanitize_input($data['subject']) : 'Genel Bilgi';
$message = sanitize_input($data['message']);

// Email validasyonu
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid email address']);
    exit;
}

// Email gönderme (Vercel için placeholder)
$email_sent = send_email(
    SITE_EMAIL,
    'Yeni İletişim Formu Mesajı - ' . $subject,
    "Ad: $name\nEmail: $email\nTelefon: $phone\nKonu: $subject\n\nMesaj:\n$message",
    $email
);

if ($email_sent) {
    // Log kaydı
    error_log("Contact form submission: Name=$name, Email=$email, Subject=$subject");
    
    echo json_encode([
        'success' => true, 
        'message' => 'Mesajınız başarıyla gönderildi!'
    ]);
} else {
    http_response_code(500);
    echo json_encode([
        'success' => false, 
        'message' => 'Mesaj gönderilemedi. Lütfen daha sonra tekrar deneyin.'
    ]);
}
?>
