<?php
session_start();

if (!isset($_SESSION['word_counts'])) {
    $_SESSION['word_counts'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['sentence'])) {
    $sentence = strtolower($_POST['sentence']);
    $sentence = str_replace(
        ['.', ',', ';', ':', '!', '?', '(', ')', '[', ']', '{', '}', '"', "'", '’', '«', '»', '–', '-'], 
        ' ', 
        $sentence
    );
    
    $sentence = preg_replace('/[^a-z0-9\s]/', ' ', $sentence);

    $words = array_filter(explode(' ', $sentence));
    
    foreach ($words as $word) {
        $word = trim($word);
        if ($word !== '') {
            if (isset($_SESSION['word_counts'][$word])) {
                $_SESSION['word_counts'][$word]++;
            } else {
                $_SESSION['word_counts'][$word] = 1;
            }
        }
    }
}

$current_counts = $_SESSION['word_counts'];
ksort($current_counts);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Comptaor de Paraules Sense Extensions</title>
</head>
<body>
    <h2>Introdueix una frase</h2>
    <form method="post" action="">
        <input type="text" name="sentence" size="50" required>
        <button type="submit">Comptar Paraules</button>
    </form>
    
    <hr>
    
    <h2>Recompte Acumulatiu de Paraules</h2>
    <?php if (!empty($current_counts)): ?>
        <ul>
            <?php foreach ($current_counts as $word => $count): ?>
                <li><?php echo htmlspecialchars($word); ?>: <?php echo $count; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Encara no s'ha introduït cap frase.</p>
    <?php endif; ?>
</body>
</html>