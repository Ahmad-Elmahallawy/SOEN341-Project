<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./productsStyles.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title> Construction</title>
  </head>
  <body>
  <?php
    require_once ('../header/header.php');
    ?>

  
    <section class="offer">
      <h1>Construction Page</h1>
    </section>  

    <div class="row">
        <div class="offer-col">
          <h3>Helmet</h3>
          <img src="../images/helmet.jpeg" alt="construction" />
          <p>
            Protective construction helmet
          </p>

          <form>
            <div>
                <select class="size">
                    <option>Select Size</option>
                    <option>Small</option>
                    <option>Medium</option>
                    <option>Large</option>
                    <option>X-Large</option>
                </select>
                <select class="type">
                    <option>Select Type</option>
                    <option>Bad</option>
                    <option>Used</option>
                    <option>Normal Condition</option>
                    <option>Like New</option>
                </select>
            </div>
            

            <div class="quantity-select">
                <p>Quantity</p>
                <input class='quantity-input' type="number" value="1">
            </div>

            <button class="buy-btn">Add to Cart</button>
        </form>

        </div>
        <div class="offer-col">
          <h3>Construction gloves</h3>
          <img src="../images/gloves.jpg" alt="construction" />
          <p> Protective Construction gloves  </p>

          <form>
            <div>
                <select class="size">
                    <option>Select Size</option>
                    <option>Small</option>
                    <option>Medium</option>
                    <option>Large</option>
                    <option>X-Large</option>
                </select>
                <select class="type">
                    <option>Select Type</option>
                    <option>Bad</option>
                    <option>Used</option>
                    <option>Normal Condition</option>
                    <option>Like New</option>
                </select>
            </div>
            

            <div class="quantity-select">
                <p>Quantity</p>
                <input class='quantity-input' type="number" value="1">
            </div>

            <button class="buy-btn">Add to Cart</button>
        </form>

        </div>

        <div class="offer-col">
          <h3>Tool kit</h3>
          <img src="../images/kit.jpg" alt="construction" />
          <p>Full tools kit</p>

          <form>
            <div>
                <select class="size">
                    <option>Select Size</option>
                    <option>Small</option>
                    <option>Medium</option>
                    <option>Large</option>
                    <option>X-Large</option>
                </select>
                <select class="type">
                    <option>Select Type</option>
                    <option>Bad</option>
                    <option>Used</option>
                    <option>Normal Condition</option>
                    <option>Like New</option>
                </select>
            </div>
            

            <div class="quantity-select">
                <p>Quantity</p>
                <input class='quantity-input' type="number" value="1">
            </div>

            <button class="buy-btn">Add to Cart</button>
        </form>
        
        </div>
      </div>


  </body>
<script src="./product.js"></script>
</html>