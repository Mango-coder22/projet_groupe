<?php
include("header.php")
;?>
    <section>
        <div id="div_profil_hautpage">
            <img src="img/nani_profil.svg" alt="" class="img_profil1">
            <img src="img/jap_kutabare.svg" alt="" class="img_profil2">
            <img src="img/jap_gauche.svg" alt="" class="img_profil3">
        </div>
    </section>
    <section id="votre_profil_section">
        <div id="votre_profil_div">
            <h1 id="h1_profil_top">VOTRE PROFIL</h1>
            <i class="fa-solid fa-user"></i>
        </div>
    </section>
    <section>
        <p id="text_profil_top">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam ea doloribus, consequuntur saepe quia expedita.</p>
    </section>
    <div id="div_historique_container">
        <ul>
            <li><i class="fa-solid fa-user"></i></li>
            <li><h2>Historique</h2></li>
        </ul>
        <div class="historique_div"></div>
    </div>
    <div id="div_watchlist_container">
        <ul>
            <li><i class="fa-solid fa-user"></i></li>
            <li><h2>Watchlist</h2></li>
        </ul>
        <div class="watchlist_div"></div>
    </div>
    <div id="div_favoris_container">
        <ul>
            <li><i class="fa-solid fa-user"></i></li>
            <li><h2>Favoris</h2></li>
        </ul>
        <div class="favoris_div"></div>
    </div>
    <?php
include("footer.php")
;?>