<h2>Liste des abonnées</h2>
<p>Nombre d'abonnées : <?=$count; ?></p>

<section class="abonne">
    <?php foreach ($abonnes as $abonne) { ?>
        <div>
            <p><?= $abonne->nom; ?></p>
        </div>
        <ul>
            <li><a href="<?= $view->path('show',[$abonne->id]); ?>">Show</a></li>
            <li><a href="<?= $view->path('edit',[$abonne->id]); ?>">Edit</a></li>
            <li><a onClick="return confirm('Etes vous vraiment certain sur et sur de supprimer cette abonné')" href="<?= $view->path('delete',[$abonne->id]); ?>">Delete</a></li>
        </ul>
    <?php } ?>
</section>