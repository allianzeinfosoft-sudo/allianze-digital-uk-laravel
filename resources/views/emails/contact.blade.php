<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background-color: #f5f5f5;
            line-height: 1.6;
        }
        .email-wrapper {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
        }
        .email-header {
            background: linear-gradient(135deg, #dc2626 0%, #991b1b 100%);
            padding: 40px 30px;
            text-align: center;
        }
        .email-header h1 {
            margin: 0;
            color: #ffffff;
            font-size: 24px;
            font-weight: 700;
            letter-spacing: 0.5px;
        }
        .email-header p {
            margin: 10px 0 0 0;
            color: #fecaca;
            font-size: 14px;
        }
        .email-body {
            padding: 40px 30px;
        }
        .info-section {
            margin-bottom: 20px;
        }
        .info-label {
            display: block;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #9ca3af;
            margin-bottom: 8px;
        }
        .info-value {
            display: block;
            font-size: 16px;
            color: #1f2937;
            padding: 14px 18px;
            background-color: #f9fafb;
            border-left: 3px solid #dc2626;
            border-radius: 6px;
            word-wrap: break-word;
        }
        .message-section {
            margin-top: 30px;
            padding-top: 30px;
            border-top: 2px solid #e5e7eb;
        }
        .message-content {
            background-color: #f9fafb;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #e5e7eb;
            color: #374151;
            font-size: 15px;
            line-height: 1.7;
            white-space: pre-wrap;
        }
        .contact-grid {
            display: table;
            width: 100%;
            margin-bottom: 10px;
        }
        .contact-row {
            display: table-row;
        }
        .contact-cell {
            display: table-cell;
            width: 50%;
            padding: 10px 10px 10px 0;
            vertical-align: top;
        }
        .email-footer {
            background-color: #f9fafb;
            padding: 30px;
            text-align: center;
            border-top: 1px solid #e5e7eb;
        }
        .email-footer p {
            margin: 0;
            color: #6b7280;
            font-size: 13px;
        }
        .timestamp {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 16px;
            background-color: #fef2f2;
            border-radius: 6px;
            font-size: 12px;
            color: #991b1b;
            font-weight: 500;
        }
        @media only screen and (max-width: 600px) {
            .email-header {
                padding: 30px 20px;
            }
            .email-header h1 {
                font-size: 20px;
            }
            .email-body {
                padding: 30px 20px;
            }
            .contact-cell {
                display: block;
                width: 100%;
                padding: 10px 0;
            }
        }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <div class="email-header">
            <h1>📬 New Contact Form Submission</h1>
            <p>You have received a new message from Allianze Digital UK website</p>
        </div>

        <div class="email-body">
            <div class="contact-grid">
                <div class="contact-row">
                    <div class="contact-cell">
                        <div class="info-section">
                            <span class="info-label">First Name</span>
                            <span class="info-value">{{ $data['first_name'] }}</span>
                        </div>
                    </div>
                    <div class="contact-cell">
                        <div class="info-section">
                            <span class="info-label">Last Name</span>
                            <span class="info-value">{{ $data['last_name'] }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="info-section">
                <span class="info-label">Email Address</span>
                <span class="info-value">
                    <a href="mailto:{{ $data['email'] }}" style="color: #dc2626; text-decoration: none;">{{ $data['email'] }}</a>
                </span>
            </div>

            <div class="info-section">
                <span class="info-label">Phone Number</span>
                <span class="info-value">
                    <a href="tel:{{ $data['phone'] }}" style="color: #dc2626; text-decoration: none;">{{ $data['phone'] }}</a>
                </span>
            </div>

            <div class="message-section">
                <span class="info-label">Message</span>
                <div class="message-content">{{ $data['message'] }}</div>
            </div>

            <div style="text-align: center;">
                <span class="timestamp">⏰ Received: {{ now() }} </span>
            </div>
        </div>

        <div class="email-footer">
            <p><strong>This is an automated message</strong></p>
            <p style="margin-top: 8px;">Contact form submission from your website</p>
        </div>
    </div>
</body>
</html>