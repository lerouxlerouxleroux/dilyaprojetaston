function aPayerParArticle() {
    var facturations=document.querySelectorAll('.facturations li')
    facturations.forEach(function(facturation) {
        var price=facturation.querySelector('.price');
        var quantite=facturation.querySelector('.quantite');
        if ((quantite.value !=''&& !isNaN(quantite.value)) && (price.value!='' && !isNaN(price.value))) {
            var calc=price.value*quantite.value;
            facturation.querySelector('.totalAPayer').value=calc;
        }
    });
}

function net_a_payer() {
   var elements=document.querySelectorAll('.totalAPayer li')
   var netapayer=0;
   elements.forEach(function(element) {
        if ((element.value !=''&& !isNaN(element.value))) {
        var netapayer+=elements.value*1;
        element.querySelector('.totalPanier').value=netapayer;
}

    });
}