<?php
/**
 * @var array $message
 */
?>

<h1>Create phone</h1>

<?if($message):?>
    <h4><?=$message?></h4>
<?else:?>
    <form method="POST" action="/create-number/">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Name" name="NAME" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="tel" class="form-control" id="phone" placeholder="Phone" name="PHONE" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
<?endif;?>
