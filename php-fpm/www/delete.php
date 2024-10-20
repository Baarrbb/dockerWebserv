<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete a File</title>
</head>
<body>
    <h1>Delete a File</h1>

    <form action="delete_.php" method="post">
        <label for="fileSelect">Select file to delete:</label>
        <select id="fileSelect" name="file">
            <?php
				// PHP pour lister les fichiers du répertoire uploads
				$directory = __DIR__ . '/uploads';

				// Vérification que le répertoire existe
				if (is_dir($directory)) {
					$files = scandir($directory);  // Récupérer les fichiers

					// Afficher les fichiers dans la liste déroulante
					foreach ($files as $file) {
						if ($file !== '.' && $file !== '..') {
							echo '<option value="' . htmlspecialchars($file) . '">' . htmlspecialchars($file) . '</option>';
						}
					}

					if (count($files) <= 2) {
						echo '<option disabled>No files available</option>';
					}
				} else {
					echo '<option disabled>Uploads directory not found</option>';
				}
            ?>
        </select>
        <button type="submit">Delete</button>
    </form>
</body>
</html>