<?php
try {
    $pdo = new PDO('sqlite:hydra.db');
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "CREATE TABLE IF NOT EXISTS usuarios (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        nome TEXT NOT NULL,
        email TEXT UNIQUE NOT NULL
    )";
    $pdo->exec($sql);
    
    echo "Banco de dados e tabela criados com sucesso localmente!";
    
} catch (PDOException $e) {
    echo "Erro ao conectar: " . $e->getMessage();
}