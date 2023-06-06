<?php 



function fetchAllGroceries($pdo){
    $statement =$pdo->prepare('select * from groceries' );

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function groceryToProduct($grocery){
    $product=new Grocery($grocery->name, $grocery->number, $grocery->price );
    
    return productToArray($product);
}

function productToArray($product){
    $array = [
        'name' => $product->name,
        'productPrice' => $product->price,
        'productQuantity' => $product->number,
        'productTotalCost' => $product->cost,
    ];
    return $array;
}

