<?php

function showFooter()
{
    $year = date("Y");
    return "<footer class='site-footer'>
    <div class='footer-inner'>
        <div class='footer-brand'>
            <span class='footer-logo-text'>Lotus</span>
            <p class='footer-tagline'>Le réseau social convivial</p>
        </div>
        <nav class='footer-nav'>
            <ul class='footer-nav-list'>
                <li><a href='index.php' class='footer-link'>Accueil</a></li>
                <li><a href='posts.php' class='footer-link'>Posts</a></li>
                <li><a href='profil.php' class='footer-link'>Profil</a></li>
                <li><a href='dashboard.php' class='footer-link'>Dashboard</a></li>
            </ul>
        </nav>
        <div class='footer-legal'>
            <p class='footer-copy'>&copy; $year Lotus &mdash; Tous droits réservés</p>
        </div>
    </div>
</footer>";
}
