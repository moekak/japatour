<!DOCTYPE html>
<html>
<head>
    <title>New Booking - ShogunTours Admin</title>
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
            max-width: 600px; 
            margin: auto; 
            background: white;
            border-radius: 6px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        .header {
            background: #1a365d;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 20px;
        }
        .alert {
            background: #fff3cd;
            border: 1px solid #ffeaa7;
            padding: 12px;
            margin: 0;
            border-radius: 4px 4px 0 0;
            text-align: center;
            font-weight: bold;
            color: #856404;
        }
        .content {
            padding: 20px;
        }
        .section { 
            margin: 15px 0; 
            padding: 15px;
            background: #f9f9f9;
            border-radius: 4px;
            border-left: 4px solid #1a365d;
        }
        .section h3 {
            margin: 0 0 8px 0;
            font-size: 16px;
            color: #1a365d;
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
            background: #e8f4f8;
            padding: 8px;
            border-radius: 4px;
        }
        .action-buttons {
            text-align: center;
            margin: 20px 0;
        }
        .action-buttons a {
            background: #1a365d;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            margin: 0 5px;
            display: inline-block;
            font-weight: bold;
        }
        .action-buttons a.confirm {
            background: #28a745;
        }
        .action-buttons a.decline {
            background: #dc3545;
        }
        .footer { 
            font-size: 11px; 
            color: #666; 
            border-top: 1px solid #eee; 
            padding: 15px 20px;
            background: #f9f9f9;
        }
        .status {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: bold;
        }
        .status.pending {
            background: #fff3cd;
            color: #856404;
        }
        ul {
            margin: 8px 0;
            padding-left: 18px;
        }
        li {
            margin-bottom: 2px;
        }
        .booking-id {
            background: #e9ecef;
            padding: 8px 12px;
            border-radius: 4px;
            font-family: monospace;
            font-weight: bold;
            color: #495057;
            text-align: center;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="alert">
            NEW BOOKING REQUEST - ACTION REQUIRED
        </div>
        
        <div class="header">
            <h1>New Tour Booking</h1>
            <p style="margin: 5px 0 0 0; opacity: 0.9;">ShogunTours Admin Panel</p>
        </div>

        <div class="content">
            <p><strong>Status:</strong> <span class="status pending">PENDING CONFIRMATION</span></p>
            <p><strong>Received:</strong> {{ date('F j, Y, g:i a') }}</p>

            <div class="section">
                <h3>Customer Information</h3>
                <p><strong>Name:</strong> {{ $personalInfo["first_name"] }} {{ $personalInfo["last_name"]}}</p>
                <p><strong>Email:</strong> <a href="mailto:{{ $personalInfo["email"] }}">{{ $personalInfo["email"] }}</a></p>
                <p><strong>Phone:</strong> <a href="tel:{{ $personalInfo["phone_number"] }}">{{ $personalInfo["phone_number"] }}</a></p>
            </div>

            <div class="section">
                <h3>Tour Booking Details</h3>
                <p><strong>Main Tour:</strong> {{ $tourDetails["tour_title"] }}</p>
                <p><strong>Selected Itinerary:</strong> {{ $tourDetails["itinerary_title"] }}</p>
                <p><strong>Requested Date:</strong> {{ $tourDetails["tour_date"] }}</p>
                <p><strong>Participants:</strong> {{ $tourDetails["adult_number"] }} Adults{{ $tourDetails["children_number"] > 0 ? ', ' . $tourDetails["children_number"] . ' Children' : '' }}</p>
                <p><strong>Total Guests:</strong> {{ $tourDetails["adult_number"] + $tourDetails["children_number"] }} people</p>
            </div>

            @if($tourDetails["request"])
            <div class="section">
                <h3>Special Requests</h3>
                <p>{{ $tourDetails["request"] }}</p>
            </div>
            @endif

            <div class="section">
                <h3>Revenue Summary</h3>
                <div class="price-line">
                    <span>Adults ({{ $tourDetails["adult_number"] }} × ¥{{ number_format($tourDetails["adult_price"] / $tourDetails["adult_number"]) }})</span>
                    <span>¥{{ number_format($tourDetails["adult_price"]) }}</span>
                </div>
                @if($tourDetails["children_number"] > 0)
                <div class="price-line">
                    <span>Children ({{ $tourDetails["children_number"] }} × ¥{{ number_format($tourDetails["children_price"] / $tourDetails["children_number"]) }})</span>
                    <span>¥{{ number_format($tourDetails["children_price"]) }}</span>
                </div>
                @endif
                <div class="price-line total">
                    <span>Total Revenue</span>
                    <span>¥{{ number_format($tourDetails["children_price"] + $tourDetails["adult_price"]) }}</span>
                </div>
                <p style="font-size: 12px; color: #666; margin-top: 8px;">
                    Payment will be collected on tour day
                </p>
            </div>


            <div class="section">
                <h3>Next Steps</h3>
                <ul>
                    <li>Check availability for {{ $tourDetails["tour_date"] }}</li>
                    <li>Assign guide for this tour</li>
                    <li>Send confirmation or decline email to customer</li>
                    <li>Update booking status in admin panel</li>
                    <li>Block calendar date if confirmed</li>
                </ul>
            </div>

            <div class="section">
                <h3>Booking Timeline</h3>
                <p><strong>Booking Received:</strong> {{ date('F j, Y, g:i a') }}</p>
                <p><strong>Response Due:</strong> Within 72 hours</p>
                <p><strong>Tour Date:</strong> {{ $tourDetails["tour_date"] }}</p>
            </div>
        </div>

        <div class="footer">
            <p><strong>ShogunTours Admin System</strong></p>
            <p>This is an automated booking notification.<br>
            Please respond within 72 hours to maintain service quality.</p>
            <p>Admin Panel: <a href="#">https://admin.shoguntours.com</a></p>
        </div>
    </div>
</body>
</html>