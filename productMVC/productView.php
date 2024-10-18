<?php
class ProductView {
    public function displayChemises($chemises) {
        foreach ($chemises as $chemise) {
            echo "<div class='chemise' id='{$chemise['ID']}'><img src='images/tshirt{$chemise['ID']}.webp' alt='tshirt{$chemise['ID']}'><h3>{$chemise['Nom']}</h3><div class='prix'>$ {$chemise['Prix']}</div></div>";
        }
    }
    public function displayCravattes($cravattes) {
        foreach ($cravattes as $cravatte) {
            echo "<div class='cravatte' id='{$cravatte['ID']}'><img src='images/tie{$cravatte['ID']}.webp' alt='tie{$cravatte['ID']}'><h3>{$cravatte['Nom']}</h3><div class='prix'>$ {$cravatte['Prix']}</div></div>";
        }
    }
}