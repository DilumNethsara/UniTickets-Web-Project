<?php
  session_start();
  $getEmail = $_SESSION['email'];
  $getUser = $_SESSION['username'];
  $getStatus = $_SESSION['loginStatus'];
  $getCategory = $_SESSION['category'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Events</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f9;
        }
        h1, h2 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        table th {
            background-color: #007BFF;
            color: white;
        }
        form {
            margin: 20px 0;
            padding: 15px;
            background: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
        }
        form input, form button, form select, form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        form button {
            background-color: #007BFF;
            color: white;
            cursor: pointer;
        }
        form button:hover {
            background-color: #0056b3;
        }
    </style>
    <link href="../css/bootsrap/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/custom/style-admin-dashboard.css" rel="stylesheet" />
    <link href="../css/custom/style-user-dashboard.css" rel="stylesheet" />
</head>
<body>
<?php
    require_once "../public/navbar.php";

    admin_dashboard_navBar();

  ?>

    <div class="container text-center" style="margin-left: 200px;">
  <div class="row">
  <h2>All Events</h2>
    <table>
        <thead>
            <tr>
                <th>Event ID</th>
                <th>University</th>
                <th>Name</th>
                <th>Date</th>
                <th>Time</th>
                <th>Venue</th>
                <th>Description</th>
                <th>Image</th>
                <th>Price</th>
                <th>Max Tickets</th>
            </tr>
        </thead>
        <tbody>
 
            <tr>
                <td>1</td>
                <td>University A</td>
                <td>Tech Conference</td>
                <td>2024-12-30</td>
                <td>10:00 AM</td>
                <td>Auditorium</td>
                <td>An exciting tech event.</td>
                <td><img src="image1.png" alt="Event Image" style="width:50px;height:50px;"></td>
                <td>50.00</td>
                <td>200</td>
            </tr>
        </tbody>
    </table>
  </div>
  <div class="row">
  <form action="/add-event" method="POST" enctype="multipart/form-data">
        <h2>Add Event</h2>
        <select name="university_id" required>
            <option value="" disabled selected>Select University</option>
            <option value="1">University A</option>
            <option value="2">University B</option>
        </select>
        <input type="text" name="event_name" placeholder="Event Name" required>
        <input type="date" name="event_date" required>
        <input type="time" name="event_time" required>
        <input type="text" name="venue" placeholder="Venue">
        <textarea name="description" placeholder="Description"></textarea>
        <input type="file" name="image" accept="image/*">
        <input type="number" name="ticket_price" placeholder="Ticket Price" required>
        <input type="number" name="max_tickets" placeholder="Max Tickets" required>
        <button type="submit">Add Event</button>
    </form>
  </div>
  <div class="row">
  <form action="/update-event" method="POST" enctype="multipart/form-data">
        <h2>Update Event</h2>
        <input type="number" name="event_id" placeholder="Event ID" required>
        <input type="text" name="event_name" placeholder="Updated Event Name">
        <input type="date" name="event_date">
        <input type="time" name="event_time">
        <input type="text" name="venue" placeholder="Updated Venue">
        <textarea name="description" placeholder="Updated Description"></textarea>
        <input type="file" name="image" accept="image/*">
        <input type="number" name="ticket_price" placeholder="Updated Ticket Price">
        <input type="number" name="max_tickets" placeholder="Updated Max Tickets">
        <button type="submit">Update Event</button>
    </form>
  </div>
  <div class="row">
  <form action="/update-event" method="POST" enctype="multipart/form-data">
        <h2>Update Event</h2>
        <input type="number" name="event_id" placeholder="Event ID" required>
        <input type="text" name="event_name" placeholder="Updated Event Name">
        <input type="date" name="event_date">
        <input type="time" name="event_time">
        <input type="text" name="venue" placeholder="Updated Venue">
        <textarea name="description" placeholder="Updated Description"></textarea>
        <input type="file" name="image" accept="image/*">
        <input type="number" name="ticket_price" placeholder="Updated Ticket Price">
        <input type="number" name="max_tickets" placeholder="Updated Max Tickets">
        <button type="submit">Update Event</button>
    </form>
  </div>
  <div class="row">
  <form action="/delete-event" method="POST">
        <h2>Delete Event</h2>
        <input type="number" name="event_id" placeholder="Event ID" required>
        <button type="submit">Delete Event</button>
    </form>
  </div>
</div>  
</body>
</html>