<!DOCTYPE html>
<html>
<head>
    <title>Thank You for Your Inquiry</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: auto; padding: 10px; }
        .message-box { background: #f5f5f5; padding: 15px; margin: 10px 0; border-left: 4px solid #007bff; }
        .footer { font-size: 12px; color: #666; border-top: 1px solid #eee; margin-top: 30px; padding-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Thank You for Contacting JapaTour</h2>

        <p>Dear {{ $name}},</p>

        <p>Thank you for reaching out to us. This email confirms that we have received your inquiry and our team will review it promptly.</p>

        <h3>Your Message Details:</h3>
        <div class="message-box">
            <p><strong>Reference Number:</strong> #{{ time() }}</p>
            <p><strong>Date Received:</strong> {{ date('F j, Y, g:i a') }}</p>
            <p><strong>Name:</strong> {{ $name}}</p>
            <p><strong>Email:</strong> {{ $email}}</p>
            <p><strong>Message:</strong></p>
            <p>{{ $body }}</p>
        </div>

        <h3>What Happens Next?</h3>
        <ul>
            <li>Our team will review your inquiry</li>
            <li>You will receive a response within 24-48 business hours</li>
            <li>If urgent, please call us at <a href="tel:+8190-6495-4567">090-6495-4567</a></li>
        </ul>

        <p>For future reference, please save your inquiry reference number: #{{ time() }}</p>

        <p>Best regards,<br>
        The JapaTour Team</p>

        <div class="footer">
            <p>This is an automated response. Please do not reply to this email.</p>
            <p>JapaTour<br>
            phone number: 090-6495-4567
            email: info@japatour-official.com</p>
            <p>Follow us on: 
                <a href="https://www.instagram.com/japatour_official/">Instagram</a> | 
            </p>
        </div>
    </div>
</body>
</html>