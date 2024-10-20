<?php
header('Content-Type: application/json');

// Vérifier si le fichier uploads existe et est accessible
$directory = './uploads';

if (!is_dir($directory)) {
    echo json_encode(['error' => 'Uploads directory not found']);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['error' => 'Invalid request method']);
    exit;
}

// Récupérer le fichier à supprimer
$filename = isset($_POST['file']) ? $_POST['file'] : null;

if (!$filename) {
    echo json_encode(['error' => 'No file specified']);
    exit;
}

// Construire le chemin complet du fichier à supprimer
$filePath = $directory . '/' . basename($filename);

// Vérifier si le fichier existe
if (!file_exists($filePath)) {
    echo json_encode(['error' => 'File not found: ' . $filename]);
    exit;
}

// Supprimer le fichier
if (unlink($filePath)) {
    echo json_encode(['success' => 'File deleted successfully']);
} else {
    echo json_encode(['error' => 'Failed to delete file']);
}
header('Location: /uploads');
?>