<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col"></th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>


<?php foreach( $pageData["users"] as $user){ ?>

    <tr>
      <th scope="row"><?php echo $user['id']?></th>
      <td><?php echo $user['user']?></td>
      <td><?php echo $user['password']?></td>
      <td><?php echo $user['session']?></td>
      <td><a href="/adminpanel/remove_user/?id=<?php echo $user['id'] ?>" >Remove</a></td>
    </tr>
<?php }?>
      <form action="/adminpanel/add_edit_user" method="post">


        <input type="hidden" name="data[id]" value="<?php ?>">
        <input type="hidden" name="data[tokken]" value="<?php  ?>">
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" name="data[user]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter user">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="data[password]" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">First name</label>
          <input type="text" name="data[first_name]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter user">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Last Name</label>
          <input type="text" name="data[last_name]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter user">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </tbody>
</table>

<script>

</script>