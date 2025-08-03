<?php
// lib/auth.php

// Mulai session jika belum
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/**
 * Cek apakah user sudah login
 * @return bool
 */
function is_logged_in() {
    return isset($_SESSION['user'], $_SESSION['user_id']);
}

/**
 * Middleware: paksa redirect ke login jika belum autentikasi
 */
function require_login() {
    if (!is_logged_in()) {
        header('Location: index.php?page=login');
        exit;
    }
}

/**
 * Logout: bersihkan session
 */
function logout() {
    session_unset();
    session_destroy();
}

// Tidak usah ada penutup PHP tag, dan pastikan tidak ada karakter < setelah ini
