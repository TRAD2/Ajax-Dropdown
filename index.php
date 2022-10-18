<?php 
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>ajax</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
    body{
        margin:0;
        padding:0;
        font-family:;
    }
    #filters{
        margin-left: 10%;
        margin-top: 2%;
        margin-bottom: 2%;
    }

  </style>
</head>
<body>

<div id="filters">
    <span> Fetch results by &nbsp; </span>
    <select name= "fetchval" id="fetchval">
        <option value="" disabled="" selected=""> Select Filter</option>
        <option value="">Advertisement</option>
        <option>Technology</option>
        <option>Education</option>
        <option>Fashion</option>
    </select>
</div>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th> Sr No. </th>
                <th>Username</th>
                <th>Date</th>
                <th>Post Title</th>
                <th>Post Image<th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>