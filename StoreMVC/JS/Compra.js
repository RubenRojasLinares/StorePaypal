


$( document ).ready(function(){
    paypal.Buttons({
        createOrder: function(data, actions) {
          // This function sets up the details of the transaction, including the amount and line item details.
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: $('#cantidadProductos').val()
              }
            }]
          });
        },
        onApprove: function(data, actions) {
            // This function captures the funds from the transaction.
            return actions.order.capture().then(function(details) {
              // This function shows a transaction success message to your buyer.
                var paypalform=document.getElementById('paypalform');
                var detailsInput= document.getElementById('details-input');
                var jsonDetails= JSON.stringify(details);
                detailsInput.value=  jsonDetails;
                var detalle=jsonDetails;
                console.log(jsonDetails);
                alert(jsonDetails);
                paypalform.submit();
            });
          }
      }).render('#paypal-button-container');
})
