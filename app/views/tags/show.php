<?php require_once APPROOT . '/views/inc/header.php'; ?>

<?php
/*
echo '<pre>';
print_r($data);
echo '</pre>';
*/
?>
    <!-- <h1>Tag nimi > <?php echo $data['tags']->name ?> </h1> -->

<?php foreach ($data['tags'] as $tag): ?>
    <div class="bg-secondary text-white p-2 mb-3">
        <h3>Postituse andmed:</h3>
        <table class="tag_Table">
            <tr>
                <th>Pealkiri</th>
                <td><?php echo $tag->title; ?></td>
            </tr>
            <tr>
                <th>Id</th>
                <td><?php echo $tag->post_id; ?></td>
            </tr>
            <tr>
                <th>Tagi nimi</th>
                <td><?php echo $tag->name; ?></td>
            </tr>
        </table>
    </div>
<?php endforeach; ?>


    <a href="<?php echo URLROOT; ?>/tags" class="btn btn-info">Back</a>
    <!-- <hr> ma ei tea mis see on ega miks see on -->


<?php require_once APPROOT . '/views/inc/footer.php'; ?>