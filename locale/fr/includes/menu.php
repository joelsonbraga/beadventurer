<div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown"> <a class="nav-link active dropdown-toggle" href="index.php?lang=<?php echo $lang?>" >Accueil <i class=""></i></a>
        </li>
        <li class="nav-item"><a class="nav-link" href="index.php?lang=<?php echo $lang?>&page=sobre-nos">À propos de Bea</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?lang=<?php echo $lang?>&page=servicos">Services </a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?lang=<?php echo $lang?>&page=galeria">Galerie </a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?lang=<?php echo $lang?>&page=contato">Contact </a></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                <strong>🌐 FRA</strong> <i class="ti-angle-down"></i>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="index.php?lang=pt-BR&page=<?php echo $page?>" class="dropdown-item">
                        <span>BRA</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?lang=en&page=<?php echo $page?>" class="dropdown-item">
                        <span>ENG</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>