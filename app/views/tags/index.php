<?php require_once APPROOT . '/views/inc/header.php'; ?>
    <!-- hea kraam tags indeksi jaoks -->
    <div class="row mb-3">
        <div class="col-md-6">
            <h1>tags</h1>
        </div>
        <?php if (isset($_SESSION['user_id'])): ?>
            <div class="col-md-6">
                <a href="<?php echo URLROOT ?>/posts/add" class="btn btn-primary puul-right">Add post</a>
            </div>
        <?php endif; ?>
    </div>
    <ul class="list-group">
        <?php foreach ($data['tags'] as $post): ?>
            <div class="card card-body mb-3">
                <li class="list-group-iem">Test</li>
                <a href="'<?php echo URLROOT ?>/tags/show'"></a>
                <h3 class="card-title"><?php echo $post->title; ?></h3>
                <div class="bg-light p-2 mb-3">Created by <?php echo $post->name; ?>
                    at <?php echo $post->postCreated; ?></div>
                <p class="card-text"><?php echo $post->content; ?></p>
                <a href="<?php echo URLROOT ?>/posts/show/<?php echo $post->postId; ?>" class="btn btn-info">More</a>
            </div>
        <?php endforeach; ?>
    </ul>
<?php require_once APPROOT . '/views/inc/footer.php'; ?>