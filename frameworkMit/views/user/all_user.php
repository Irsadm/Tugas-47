<?php $this->layout('templates/template', ['title' => 'User Profil']); ?>
  <div class="container" align="center" width="100%">
      <h3>User Profile</h3>
    <table class="table-bordered" >
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>email</th>
            <th>Password</th>
        </tr>
    <?php foreach ($user as $val) : ?>
    <tr>
        <td><?=$val['id']?></td>
        <td><?=$val['name']?></td>
        <td><?=$val['email']?></td>
        <td><?=$val['password']?></td>
    </tr>
<?php endforeach;?>
    </table>
</div>
