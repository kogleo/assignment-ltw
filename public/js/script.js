(function() {
    var forms = document.querySelectorAll(".needs-validation");
    Array.prototype.slice.call(forms).forEach((form) => {
        form.addEventListener("submit", (event) => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add("was-validated");
        }, false)
    })
})()
if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
function formatNumber(num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
}
function checkAll() {
    var all = document.getElementById("checkAll");
    var check = document.getElementsByClassName("check");
    if (all.checked == true) {
        for (let i = 0; i < check.length; i++) {
            check[i].checked = true;
        }
    } else {
        for (let i = 0; i < check.length; i++) {
            check[i].checked = false;
        }
    }
    let price = 0;
    var priceList = document.getElementsByClassName("price_cart");   
    var quantityList = document.getElementsByClassName("quantity");   
    for (let i = 0; i < check.length; i++) {
        if (check[i].checked == true) {
            price += priceList[i].innerHTML.replace(/,/g, "") * 1 * quantityList[i].value;
        }
    }
    document.getElementById("temp").innerHTML = formatNumber(price);
    document.getElementById("totalPrice").innerHTML = formatNumber(price);
    console.log(price);
}
function check() {
    var all = document.getElementById("checkAll");
    var check = document.getElementsByClassName("check");  
    var priceList = document.getElementsByClassName("price_cart");   
    var quantityList = document.getElementsByClassName("quantity"); 
    var flag = 0;     
    for (let i = 0; i < check.length; i++) {
        if (check[i].checked == false) {
            all.checked = false;
            flag = 1;
        }
    }
    if (flag == 0)
        all.checked = true;
    let price = 0;
    for (let i = 0; i < check.length; i++) {
        if (check[i].checked == true) {
            price += priceList[i].innerHTML.replace(/,/g, "") * 1 * quantityList[i].value;
        }
    }
    document.getElementById("temp").innerHTML = formatNumber(price);
    document.getElementById("totalPrice").innerHTML = formatNumber(price);
}