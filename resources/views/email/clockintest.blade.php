{{-- <p>Hello , Users clocked in yesterday </p>
<p>Clockin time! {{$clockin['created_at']}} {{$clockin['lat']}} {{$clockin['long']}}</p> --}}

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clockin Stats</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }
        .header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .logo {
            height: 50px;
            margin-right: 10px;
        }
        h2 {
            color: rgb(237, 28, 36);
            margin: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: rgb(237, 28, 36);
            color: #ffffff;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #666;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div 
        {{-- class="header" --}}
        >
            <div style="display: block;width:100%;">
                <img src="https://rtms.scgafrica.com/assets/images/brand/logo-dark.png" 
                class="logo" alt="logo" 
                style="display: block; margin: 0 auto;"
                >
            </div>
            <br/>
            <div style="display:block;width:100%">
                <h2>Clockin Statistics</h2>
            </div>  
        </div>
        <p>Here is the cumulative breakdown of clockins yesterday:</p>
        
        <table>
            <tr>
                <th>Total Clockins</th>
                <th>Earliest Clockin</th>
                <th>Latest Clockin</th>
                <th>00:00 - 08:00</th>
                <th>08:00 - 16:00</th>
                <th>16:00 - 24:00 </th>
            </tr>
            <tr>
                <td>{{ $clockincount }}</td>
                <td>{{ date('H:i', strtotime($clockinlast['created_at'])) }}</td>
                <td>{{ date('H:i', strtotime($clockinfirst['created_at'])) }}</td>
                <td>{{ $clockincounttill8 }}</td>
                <td>{{ $clockincounttill16 }}</td>
                <td>{{ $clockincounttill24 }}</td>
            </tr>
        </table>

        <div style="display:block;width:100%;margin-top:20px;">
            <h2>Clockout Statistics</h2>
        </div>  
    <p>Here is the cumulative breakdown of clockouts yesterday:</p>
    <table>
        <tr>
            <th>Total Clockouts</th>
            <th>Earliest Clockout</th>
            <th>00:00 - 08:00</th>
            <th>08:00 - 16:00</th>
            <th>16:00 - 24:00 </th>
        </tr>
        <tr>
            <td>{{ $clockoutcount }}</td>
            <td>{{ date('H:i', strtotime($clockoutfirst['created_at'])) }}</td>
            <td>{{ $clockoutcounttill8 }}</td>
            <td>{{ $clockoutcounttill16 }}</td>
            <td>{{ $clockoutcounttill24 }}</td>
        </tr>
    </table>

    <div>
    <div style="display:block;width:100%;margin-top:20px;">
        <h2>Visit Statistics</h2>
    </div>  
<p>Here is the cumulative breakdown of visits yesterday:</p>
<table>
    <tr>
        <th>Total Visits</th>
        <th>New Outlets</th>
        <th>00:00 - 08:00</th>
        <th>08:00 - 16:00</th>
        <th>16:00 - 24:00 </th>
    </tr>
    <tr>
        <td>{{ $visitcount }}</td>
        <td>{{ $newoutletscount }}</td>
        <td>{{ $visitcounttill8 }}</td>
        <td>{{ $visitcounttill16 }}</td>
        <td>{{ $visitcounttill24 }}</td>
    </tr>
</table>
    </div>

    <div>
        <div style="display:block;width:100%;margin-top:20px;">
            <h2>Sales Statistics</h2>
        </div>  
    <p>Here is the cumulative breakdown of sales yesterday:</p>
    <table>
        <tr>
            <th>Total Sales</th>
            <th>Top Seller By Sale Count</th>
            <th>Sales</th>
            <th>Top Product Sold</th>
            <th>Sales</th>
        </tr>
        <tr>
            <td>{{ $salescount }}</td>
            <td>{{ $topseller }}</td>
            <td>{{ $topsellercount }}</td>
            <td>{{ $topproduct }}</td>
            <td>{{ $topproductcount }}</td>
        </tr>
    </table>
        </div>
        
        <p class="footer">This is an automated email. Please do not reply.</p>
    </div>
</body>
</html>