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
    </tr>
  </thead>
  <tbody>
    <?if(!empty($list)):?>
        <?foreach($list as $item):?>
            <tr>
                <th scope="row"><?=$item["id"]?></th>
                <td><?=$item["name"]?></td>
                <td><?=$item["phone"]?></td>
            </tr>
        <?endforeach;?>
    <?endif;?>
  </tbody>
</table>


