<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us</title>
    </head>
    <body>
        <h1>A customer has ordered few items</h1>
        <br/>
        <h2>Ticket Details</h2>
        <p>Reference : {{ $ticket->reference }}</p>
        <p>Problem : {{ $ticket->problem }}</p>
        <br/>
        
        <h2>Reply Details</h2>
        <p>Reply: {{ $reply->reply }} </p>
        <br/>
            <p>Thank you</p>
    </body>
</html>