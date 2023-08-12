<?php
include_once 'core.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2 style="color: blue;">Soal Nomor 1</h2>
    <h4 style="color: blue;">Penjual Kaos Kaki</h4>
    <form action="" method="POST" style="padding-bottom: 2rem;">
        <textarea type="text" name="input" rows="3" cols="50">
<?php echo $_POST['input'] ?? ''; ?>
        </textarea>
        <p style="color: red;">*Input harus berupa angka dan dipisahkan dengan koma (,)</p>
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $input = explode(',', $_POST['input']);
        $output = countSellKaosKaki($input);
        echo "<h1>Hasil </h1>";
        echo "Input : " . implode(', ', $input) . "<br/>";
        echo "Output : " . $output['pairs'] . "<br/>";
        echo "Hanya ada " . $output['pairs'] . " pasang kaos kaki yang bisa dijual (" . implode(', ', $output['details']) . ")\n";
        echo `
        <br/>
        Kembali ke <a href="index.php">index</a>
        <br/>
        `;
    }
    ?>

    <br />
    <h2 style="color: blue;">Soal Nomor 2</h2>
    <h4 style="color: blue;">Penghitung Kata</h4>
    <form action="" method="POST">
        <input type="text" name="input_text" style="width: 30%;" value="<?php echo $_POST['input_text'] ?? ''; ?>" />
        <p style="color: red;">*Input harus tulisan</p>
        <input type="submit" name="submit_text" value="submit_text">
    </form>

    <?php
    if (isset($_POST['submit_text'])) {
        $input = $_POST['input_text'];
        $output = countWords($input);
        echo "<h1>Hasil Penghitung Kata</h1>";
        echo "Input : " . $input . "<br/>";
        echo "Output : " . $output['wordCount'];
        if (count($output['details']) > 0) {
            echo "<br/>";
            echo "Kata yang tidak valid : " . implode(', ', $output['details']);
        }
        echo `
        <br/>
        Kembali ke <a href="index.php">index</a>
        <br/>
        `;
    }
    ?>
</body>

</html>