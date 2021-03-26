<?php require_once APPROOT . '/views/inc/header.php'; ?>
<?php
echo '<pre>';
print_r($data);
echo '</pre>';
?>


    <h1><?php echo $data['tags']->name ?></h1>
    <div class="bg-secondary text-white p-2 mb-3">
        Created by <?php echo $data['post']->user_id; ?> at <?php echo $data['post']->created_at; ?>
    </div>
    <div class="bg-secondary text-white p-2 mb-3">
        <?php foreach ($data['tags'] as $tag): ?>
            <a href="<?php echo URLROOT; ?>/posts/show/<?php echo $tag->id; ?>"
               class=""><?php echo $tag->name; ?></a>
            <p><?php echo $tag->id ?></p>
        <?php endforeach; //removed endforeach and replaced with } ?>
    </div>


<?php require_once APPROOT . '/views/inc/footer.php'; ?>