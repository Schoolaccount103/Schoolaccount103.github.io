<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="styles/default.css">
</head>
<body>

    <header class="header">
        <h1>Lee Harris's Leaping Horse || WEB250</h1>
        <nav>
            <ul class="col1l">
                <?php 
                $navItems = [
                    'Home' => 'index.php',
                    'Introduction' => 'introduction.php',
                    'Contract' => 'contract.php'
                ];
                foreach ($navItems as $name => $link) {
                    echo "<li class='coll'><a href='$link'>$name</a></li>";
                }
                ?>
                <li class="coll"><a href="htdocs/web250/index.html">View Static Site</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>
