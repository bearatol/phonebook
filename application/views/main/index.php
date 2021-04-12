<?php

/**
 * @var array $list
 */

?>

<h1>Phonebook list</h1>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Number</th>
      <th scope="col">Mod</th>
      <th scope="col">Del</th>
    </tr>
  </thead>
  <tbody>
    <?if(!empty($list)):?>
    <?foreach($list as $item):?>
    <tr data-phone="<?= $item["id"] ?>" data-user="<?= $item["user_id"] ?>">
      <th class="num" scope="row"><?= $item["id"] ?></th>
      <td class="name"><?= $item["name"] ?></td>
      <td class="phone"><?= $item["phone"] ?></td>
      <td>
        <button type="button" class="btn btn-warning mod">Mod</button>
      </td>
      <td>
        <form action="/" method="POST" style="display: inline;">
          <?if($item["id"]):?>
            <input type="hidden" name="ID" value="<?= $item["id"] ?>">
            <button type="submit" class="btn btn-danger" name="ACTION_DELETE">Del</button>
          <?elseif($item["user_id"]):?>
            <input type="hidden" name="ID" value="<?= $item["user_id"] ?>">
            <button type="submit" class="btn btn-danger" name="ACTION_DELETE_USER">Del</button>
          <?endif;?>
        </form>
      </td>
    </tr>
    <?endforeach;?>
    <?endif;?>
  </tbody>
</table>

<div class="modal" id="modal-mod" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <form method="POST" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="hidden" name="USER_ID" value="">
            <input type="text" class="form-control name" placeholder="Name" name="NAME">
        </div>
        <div class="form-group">
            <label for="name">Phone</label>
            <input type="hidden" name="PHONE_ID" value="">
            <input type="text" class="form-control phone phone-mask" placeholder="Phone" name="PHONE">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="ACTION_MOD">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </form>
  </div>
</div>