<!---Best of luck--->



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<style>
  .container-box{
    display:flex;
    align-items:center;
    flex-direction:column;
  }
</style>
<body>
  <div class="container-box">
    <div class="row">
      <div class="col">




      
        <label for="aaa">aaa</label>
        <input type="text" name="" id="aaa">
      </div>
      <div class="col">
        <label for="bb">bb</label>
        <select name="" id="salesSelect">
          <option value="Sales">Sales</option>
          <option value="Expense">Expense</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <label for="ccc">ccc</label>
        <input type="text" name="" id="ccc">
      </div>
      <div class="col">
        <label for="dd" id="dd1">dd</label>
        <input type="text" name="" id="dd">
      </div>
    </div>
    <div class="row">
      <div class="col">
        <label for="ee">ee</label>
        <input type="text" name="" id="ee">
      </div>
      <div class="col">
        <label for="ff">ff</label>
        <input type="text" name="" id="ff">
      </div>
    </div>
  </div>
  <script>
    // Get the select element
    const salesSelect = document.getElementById('salesSelect');

    // Get the input field for "dd"
    const ddInput = document.getElementById('dd');
    const dd1Input = document.getElementById('dd1');

    // Add an event listener to the select element
    salesSelect.addEventListener('change', function () {
      if (salesSelect.value === 'Expense') {
        // If "Expense" is selected, hide the "dd" input
        ddInput.style.display = 'none';
        dd1Input.style.display = 'none';
      } else {
        // If "Sales" or another option is selected, show the "dd" input
        ddInput.style.display = 'block';
        dd1Input.style.display = 'block';
      }
    });
  </script>
</body>
</html>
