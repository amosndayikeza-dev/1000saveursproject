<?php
require_once 'daophp/UserDAO.php';
$userDao = new UserDAO();

$email = 'admin2@1000saveurs.com';
$password = 'admin123';  // mot de passe simple pour tester
$hash = password_hash($password, PASSWORD_DEFAULT);

// Supprimer l'ancien utilisateur s'il existe
$existing = $userDao->findByEmail($email);
if ($existing) {
    $userDao->delete($existing['id']);
    echo "Ancien utilisateur supprimé.\n";
}

// Créer le nouvel admin
$id = $userDao->create([
    'first_name' => 'Admin',
    'last_name' => 'Deux',
    'email' => $email,
    'password' => $hash,
    'role' => 'admin',
    'is_active' => 1
]);

if ($id) {
    echo "\n✅ Administrateur créé avec succès !\n";
    echo "Email : $email\n";
    echo "Mot de passe : $password\n";
    echo "Hash : $hash\n";
} else {
    echo "\n❌ Erreur lors de la création.\n";
}
?>