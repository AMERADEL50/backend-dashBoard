<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>products table</h2>

  <table class="table">
    <thead>

      <tr>
        <th>product</th>
        <th>category</th>
        <th>price</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $product ){

            echo "<tr>";

            echo "<td>".$product->name."</td>";

            echo "<td>".$product->category->name."</td>";

            echo "<td>".$product->price."</td>";
            echo "</tr>";
        }
        ?>
      
    </tbody>
  </table>
</div>

</body>
</html>
