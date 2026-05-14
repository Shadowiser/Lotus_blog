<?php

function showHeader($path)
{
    return "<header>
    <div class='logo-div'>
        <img src='$path' alt='lotus logo' class='logo'>
        <h2 class='logo-text'>Lotus</h2>
    </div>
    <nav class='navbar'>
        <ul class='nav-list'>
            <li> <a href='index.php' class='nav-link'>Accueil</a> </li>
            <li> <a href='posts.php' class='nav-link'>Posts</a> </li>
            <li> <a href='profil.php' class='nav-link'>Profil</a> </li>
            <a href='dashboard.php'><button class='post-btn'> Postez</button></a>
        </ul>
    </nav>
</header>";
}
