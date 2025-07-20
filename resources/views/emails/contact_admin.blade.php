<!DOCTYPE html>
<html>
<head>
    <title>New Contact Form Submission</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; }
        .container { max-width: 600px; margin: 20px auto; padding: 20px; }
        .info-box { background: #f5f5f5; padding: 15px; margin: 20px 0; }
        .footer { margin-top: 30px; font-size: 12px; color: #666; }
    </style>
</head>
<body>
    <div class="container">
        <h2>New Contact Form Submission</h2>

        <p>A new contact form submission has been received.</p>

        <div class="info-box">
            <h3>Submission Details:</h3>
            <p><strong>Reference ID:</strong> #{{ time() }}</p>
            <p><strong>Date:</strong> {{ date('F j, Y, g:i a') }}</p>
            <p><strong>Name:</strong> {{ $name }}</p>
            <p><strong>Email:</strong> {{ $email}}</p>
            <p><strong>Message:</strong></p>
            <p>{{ $body }}</p>
        </div>

        <div class="actions">
            <h3>Required Actions:</h3>
            <ul>
                <li>Review the submission</li>
                <li>Respond within 24 business hours</li>
                <li>Update CRM if necessary</li>
            </ul>
        </div>

        <div class="footer">
            <p>This is an automated message from your contact form system.</p>
            <p>To reply to the sender, use their email: {{ $email }}</p>
        </div>
    </div>
</body>
</html>