<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?= $title ?? 'Admin Panel'; ?></title>
<link rel="stylesheet" href="<?= base_url('/admin.css');?>">
</head>
<body>
<div id="container">
<header>
<h1>Admin Portal Berita</h1>
</header>
<nav>
<a href="<?= base_url('/admin');?>">Dashboard</a>
<a href="<?= base_url('/admin/artikel');?>">Artikel</a>
<a href="<?= base_url('/admin/artikel/add');?>">Tambah Artikel</a>
<a href="<?= base_url('/');?>">Lihat Website</a>
</nav>
<section id="wrapper">
<section id="main">
