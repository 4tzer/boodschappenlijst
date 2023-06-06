const product = document.getElementsByClassName('Product')
const productQuantity = document.getElementsByClassName('productQuantity')
const productPrice = document.getElementsByClassName('productPrice')
const productTotalCost = document.getElementsByClassName('productTotalCost')
const totalCost = document.getElementById('totalCost')

// table binnenhalen middels getElementById
const table = document.getElementById('table')

// event listener op die table zetten, luisteren naar changes
table.addEventListener("change", updateValue);


function updateValue() {
    let totaal = 0;
    
    for (let i = 0; i < product.length; i++) {
        let subTotaal = Number(productPrice[i].innerHTML) * productQuantity[i].value;
        productTotalCost[i].innerHTML = subTotaal.toFixed(2);
        totaal += (subTotaal)

    }
    totalCost.innerHTML = totaal.toFixed(2);
    
}
