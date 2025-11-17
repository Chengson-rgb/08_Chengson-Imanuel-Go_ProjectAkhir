<!DOCTYPE html>
<html>
<head>
    <title>Update Data</title>
    <link rel="stylesheet" href="style_update.css">
    <link rel="icon" type="image/x-icon" href="logo.jpg">
</head>

<body>

<div class="update-container">
    <div class="update-box">

        <h2 class="update-title">UPDATE DATA</h2>
        <a href="index.php" class="back-link">KEMBALI</a>

        <h3 class="form-title">EDIT DATA MAHASISWA</h3>

        <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "SELECT * FROM data WHERE id='$id'");
        while($d = mysqli_fetch_array($data)){
        ?>
        <form method="post" action="ubah.php" class="update-form">
            <table>
                <tr>
                    <td>outfit</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" name="outfit" value="<?php echo $d['outfit']; ?>" class="input-field">
                    </td>
                </tr>
                <tr>
                    <td>item</td>
                    <td>
                        <input type="text" name="item" value="<?php echo $d['item']; ?>" class="input-field">
                    </td>
                </tr>
                <tr>
                    <td>size</td>
                    <td>
                        <select name="size" class="input-field">
                            <option value="S"  <?php if($d['size']=="S")  echo "selected"; ?>>S</option>
                            <option value="M"  <?php if($d['size']=="M")  echo "selected"; ?>>M</option>
                            <option value="L"  <?php if($d['size']=="L")  echo "selected"; ?>>L</option>
                            <option value="XL" <?php if($d['size']=="XL") echo "selected"; ?>>XL</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>budget</td>
                    <td>
                        <input type="number" name="budget" value="<?php echo $d['budget']; ?>" class="input-field">
                    </td>
                </tr>
                <tr>
                    <td>purpose</td>
                    <td>
                        <input type="text" name="purpose" value="<?php echo $d['purpose']; ?>" class="input-field">
                    </td>
                </tr>
                <tr>
                    <td>material</td>
                    <td>
                        <input type="text" name="material" value="<?php echo $d['material']; ?>" class="input-field">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="btn-container">
                            <button type="submit" class="save-btn">SIMPAN</button>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
        <?php } ?>

    </div>
</div>

</body>
</html>
