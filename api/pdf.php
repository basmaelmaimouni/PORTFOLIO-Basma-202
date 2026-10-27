<?php
// Serve PDFs from public/docs so the fallback route cannot return the portfolio page.
$requested = $_GET['file'] ?? '';
if (!is_string($requested) || !str_starts_with($requested, 'docs/')) {
    http_response_code(400);
    exit('Invalid PDF path.');
}

$publicRoot = realpath(__DIR__ . '/../public');
$pdfPath = realpath(__DIR__ . '/../public/' . $requested);
if (!$publicRoot || !$pdfPath || !str_starts_with($pdfPath, $publicRoot . DIRECTORY_SEPARATOR)
    || !is_file($pdfPath) || strtolower(pathinfo($pdfPath, PATHINFO_EXTENSION)) !== 'pdf') {
    http_response_code(404);
    exit('PDF not found.');
}

header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="' . str_replace('"', '', basename($pdfPath)) . '"');
header('Content-Length: ' . filesize($pdfPath));
readfile($pdfPath);
