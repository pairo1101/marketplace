<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pet Friendly Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #fef8e4;
      color: #5a5a5a;
    }
    .form-container {
      max-width: 500px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
    .form-container h2 {
      font-family: 'Comic Sans MS', cursive, sans-serif;
      text-align: center;
      color: #ff8a00;
      margin-bottom: 20px;
    }
    .form-label {
      font-weight: bold;
    }
    .btn-submit {
      background-color: #ff8a00;
      color: #fff;
      border: none;
      font-size: 18px;
      padding: 10px 20px;
      border-radius: 25px;
      transition: background-color 0.3s ease;
    }
    .btn-submit:hover {
      background-color: #e67600;
    }
    .form-container .input-group-text {
      background-color: #fff;
      border: none;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Item Information</h2>
    <form method="post" action="{{route('user.list', ['account_id'=>$user->id])}}">
      @csrf
      @method('POST')
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Item: </label>
        <input type="text" class="form-control" name="item" placeholder="What are you selling?">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Qty: <span class="pet-icon"></span></label>
        <input type="text" class="form-control" name="qty" placeholder="Stock">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Price: </label>
        <input type="text" class="form-control" name="price" placeholder="Enter Price">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Description</label>
        <input type="text" class="form-control" name="description" placeholder="Item Description">
      </div>
      <div class="text-center">
        <input type="submit" value="Submit" class="btn btn-submit">
      </div>
    </form>
  </div>
</body>
</html>
