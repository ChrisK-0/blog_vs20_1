<?php require_once APPROOT . '/views/inc/header.php'; ?>

<div class="row mb-3">
    <div class="col-md-6">
        <h1>Tags</h1>
    </div>
</div>
<ul class="list-group">
    <?php foreach ($data['tags'] as $tag): ?>
        <a href="<?php echo URLROOT ?>/tags/show/<?php echo $tag->id; ?>" class="">
            <li class="list-group-item">
                <?php echo $tag->name; ?>
            </li>
        </a>
    <?php endforeach; ?>
</ul>

<?php require_once APPROOT . '/views/inc/footer.php'; ?>
