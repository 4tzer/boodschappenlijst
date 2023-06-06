<?php require 'partials/header.php'; ?>


<body>
    <div class="main">
        <section>
            <!-- ID op de table -->
            <table id="table">
                <tr>
                    <th>Product</th>
                    <th>Prijs</th>
                    <th>Aantal</th>
                    <th>Subtotaal</th>
                </tr>
                
                <?php foreach ($products as $product) : ?>
                   <tr>
                       <td class="product"><?= $product['name']?></td>;
                       <td class="number productPrice"><?=$product['productPrice']?></td>;
                       <td><input type="number" class="productQuantity" min="0" max="10000" value= <?= $product['productQuantity'] ?>></td>
                       <?php $product['productTotalCost'] = $product['productPrice'] * $product['productQuantity'];
                       $totalCost = $totalCost + $product['productTotalCost'] ?>
                       <td class="number productTotalCost"><?= $product['productTotalCost']?></td>

                   
                </tr>
                 <?php endforeach ?>
                
                <tr>
                    <td colspan="3" class="Totaal"><?= $totalCost ?> </td>
                    <td class="number" id="totalCost">0</td>
                </tr>

            </table>
        </section>
    </div>

    <form method='POST' action='/name'>
   
        <button type='submit'>Submit</button>

    </form>
    
    <p id="log"></p>
    


</body>

<?php require 'partials/footer.php' ?>