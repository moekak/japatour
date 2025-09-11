<!DOCTYPE html>
<html>
<head>
      <title>Tour Booking Confirmed - ShogunTours</title>
      <style>
            body { 
                  font-family: Arial, sans-serif; 
                  line-height: 1.6; 
                  color: #333; 
                  background-color: #f5f5f5;
                  margin: 0;
                  padding: 15px;
            }
            .container { 
                  max-width: 500px; 
                  margin: auto; 
                  background: white;
                  border-radius: 6px;
                  box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            }
            .header {
                  background: #d32f2f;
                  color: white;
                  padding: 20px;
                  text-align: center;
            }
            .header h1 {
                  margin: 0;
                  font-size: 20px;
            }
            .content {
                  padding: 20px;
            }
            .section { 
                  margin: 15px 0; 
                  padding: 15px;
                  background: #f9f9f9;
                  border-radius: 4px;
            }
            .section h3 {
                  margin: 0 0 8px 0;
                  font-size: 16px;
                  color: #d32f2f;
            }
            .section p {
                  margin: 4px 0;
            }
            .price-line {
                  display: flex;
                  justify-content: space-between;
                  margin: 3px 0;
            }
            .total {
                  border-top: 1px solid #ddd;
                  padding-top: 8px;
                  margin-top: 8px;
                  font-weight: bold;
            }
            .contact {
                  text-align: center;
                  margin: 20px 0;
            }
            .contact a {
                  background: #d32f2f;
                  color: white;
                  padding: 8px 15px;
                  text-decoration: none;
                  border-radius: 4px;
                  margin: 0 5px;
                  display: inline-block;
            }
            .footer { 
                  font-size: 11px; 
                  color: #666; 
                  border-top: 1px solid #eee; 
                  padding: 15px 20px;
                  background: #f9f9f9;
            }
            ul {
                  margin: 8px 0;
                  padding-left: 18px;
            }
            li {
                  margin-bottom: 2px;
            }
      </style>
</head>
<body>
      <div class="container">
            <div class="header">
                  <h1>Request Received</h1>
            </div>

      <div class="content">
            <p>Dear {{ $personalInfo["first_name"] }} {{ $personalInfo["last_name"] }},</p>

            <p>Thank you for your request! Here are the details you submitted:</p>

            <div class="section">
                  <h3>Your Information</h3>
                  <p><strong>Name:</strong> {{ $personalInfo["first_name"] }} {{ $personalInfo["last_name"] }}</p>
                  <p><strong>Email:</strong> {{ $personalInfo["email"] }}</p>
                  <p><strong>Phone:</strong> {{ $personalInfo["phone_number"] }}</p>
            </div>

            <div class="section">
                  <h3>Requested Tour Details</h3>
                  <p><strong>Tour:</strong> {{ $tourDetails["tour_title"] }}</p>
                  <p><strong>Itinerary:</strong> {{ $tourDetails["itinerary_title"] }}</p>
                  <p><strong>Preferred Date:</strong> {{ $tourDetails["tour_date"] }}</p>
                  <p><strong>Guests:</strong> {{ $tourDetails["adult_number"] }} Adults{{ $tourDetails["youth_number"] > 0 ? ', ' . $tourDetails["youth_number"] . ' Children' : '' }}</p>
            </div>

            <div class="section">
                  <h3>Estimated Price</h3>
                  <div class="price-line">
                  <span>Adults ({{ $tourDetails["adult_number"] }})</span>
                  <span>　¥{{ number_format($tourDetails["adult_price"]) }}</span>
                  </div>
                  @if($tourDetails["youth_number"] > 0)
                  <div class="price-line">
                        <span>Children ({{ $tourDetails["youth_number"] }})</span>
                        <span>　¥{{ number_format($tourDetails["youth_price"]) }}</span>
                  </div>
                  @endif
                  <div class="price-line total">
                  <span>Total (estimate)</span>
                  <span>   ¥{{ number_format($tourDetails["youth_price"] + $tourDetails["adult_price"]) }}</span>
                  </div>
                  <p style="font-size: 12px; color: #666; margin-top: 8px;">
                  Payment details will be confirmed after your request is approved.
                  </p>
            </div>

            @if($tourDetails["request"])
            <div class="section">
                  <h3>Special Requests</h3>
                  <p>{{ $tourDetails["request"] }}</p>
            </div>
            @endif

            <div class="section">
                  <h3>Next Steps</h3>
                  <ul>
                  <li>We will review your request and confirm availability.</li>
                  <li>Once confirmed, we’ll send booking and payment instructions.</li>
                  <li>No payment is required until your booking is officially confirmed.</li>
                  </ul>
            </div>

            <div class="section">
                  <h3>Important Notes</h3>
                  <ul>
                  <li>Free cancellation up to 7 days before confirmed booking</li>
                  <li>Guide contact details will be provided a week before a tour</li>
                  </ul>
            </div>

            <div class="contact">
                  <p><strong>Questions or changes?</strong></p>
                  <a href="mailto:info@shoguntoursjapan.com">Email</a>
            </div>

            <p>Best regards,<br>
            <strong>ShogunTours Team</strong></p>
      </div>

      <div class="footer">
            <p>ShogunTours<br>
            Email: info@shoguntoursjapan.com</p>
      </div>
</div>

</body>
</html>