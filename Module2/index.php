<?php
  $firstName = filter_input(INPUT_GET, 'firstname', FILTER_SANITIZE_STRING);
  $lastName = filter_input(INPUT_GET, 'lastname', FILTER_SANITIZE_STRING);
  $age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_NUMBER_INT);
  $leapDays = $age / 4;
  $daysOld = ($age * 365) + $leapDays; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Voting Age</title>
  <link rel="stylesheet" href="index.css" type="text/css" />
</head>
<body>
  <div class="container">
    <header>
      <p>Today is <?php echo date("m/d/Y") ?></p>
    </header>
    <main>
      <?php if($firstName && $lastName && $age) { ?>
        <p>Hello, my name is <?php echo $firstName ?> <?php echo $lastName ?></p>
        <p>I am <?php echo $age ?> years old.</p>
        <p>That makes me at least <?php echo $daysOld ?></p>
        <p>I am <?php if($age < 18) { ?><strong>not</strong> <?php } ?>old enough to vote in the United States</p>
      <?php } else { ?>
        <p class="not-sent">Values for firstname and lastname were not sent.</p>
        <p class="not-sent">Value for age was not sent</p>
      <?php } ?>
    </main>
  </div>
</body>
</html>