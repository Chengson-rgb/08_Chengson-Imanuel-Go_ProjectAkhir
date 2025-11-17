<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
    <link rel="stylesheet" href="style_index.css">
    <link rel="icon" type="image/x-icon" href="logo.jpg">
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="logo.jpg" alt="Elegant Women's Wear Logo" class="logo-image">
            </div>
            <nav>
                <a href="tambah.php">Input Data</a>
                <a href="index.php" class="active">Show Data</a>
                <a href="landing.php" class="btn-login">Log Out</a>
            </nav>
        </div>
    </header>

<section class="content">
    <h1>Customers Data</h1>

    <div class="table-wrapper">
        <table>
            <tr>
                <th>Daily Outfit Preference</th>
                <th>Preferred Clothing Item</th>
                <th>Size Preference</th>
                <th>Fashion Budget Range ($)</th>
                <th>Style Purpose</th>
                <th>Clothing Material Preference</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>

            <?php
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "SELECT * FROM data");
            while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $d['outfit']; ?></td>
                <td><?php echo $d['item']; ?></td>
                <td><?php echo $d['size']; ?></td>
                <td><?php echo $d['budget']; ?></td>
                <td><?php echo $d['purpose']; ?></td>
                <td><?php echo $d['material']; ?></td>
                <td><a class="update" href="update.php?id=<?php echo $d['id']; ?>">Update</a></td>
                <td><a class="delete" href="delete.php?id=<?php echo $d['id']; ?>">Delete</a></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</section>

<footer>
    VELLORA &middot; Chengson Imanuel Go @2025
</footer>

</body>
</html>
