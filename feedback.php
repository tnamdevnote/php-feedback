<?php include 'inc/header.php'; ?>

<?php
  // $feedback = [
  //   [
  //     'id' => '1',
  //     'name' => 'Taek Nam',
  //     'email' => 'taekbeen30@gmail.com',
  //     'body' => 'I\'m a front end developer'
  //   ],
  //   [
  //     'id' => '2',
  //     'name' => 'George Sand',
  //     'email' => 'gsand@gmail.com',
  //     'body' => 'Simplicity is the most difficult thing to secure in this world; it is the last limit of experience and the last effort of genius.'
  //   ],
  //   [
  //     'id' => '3',
  //     'name' => 'St. Francis de Sales',
  //     'email' => 'sfdsales@gmail.com',
  //     'body' => 'True progress quietly and persistently moves along without notice.'
  //   ],
  // ]
?>

<?php
  $sql = 'SELECT * FROM feedback';
  $result = mysqli_query($conn, $sql);
  $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
  <h2>Past Feedback</h2>

  <?php if(empty($feedback)): ?>
    <p class="lead mt3">There is no feedback</p>
  <?php endif; ?>

  <?php foreach($feedback as $item): ?>
    <div class="card my-3 w-75">
      <div class="card-body text-center">
        <?php echo $item['body']; ?>
        <div class="text-secondary mt-2">
          By <?php echo $item['name']; ?> on <?php echo $item['date']; ?>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
<?php include 'inc/header.php'; ?>
