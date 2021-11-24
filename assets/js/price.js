            grandtotal();
              let elementsArray = document.querySelectorAll(".quantity-input");

              elementsArray.forEach(function(elem) {
                  elem.addEventListener("input", function(e) {
                      //this function does stuff
                      console.log(event.target.value);
                      console.log(event.target.getAttribute("data-price"));

                      let element = event.target.parentElement.parentElement.querySelectorAll('.total')[0];
                      let qty = event.target.value;
                      let price = event.target.getAttribute("data-price");
                      element.innerHTML = '$' + qty*price;
                      element.setAttribute( 'data-mrp' , qty*price );
                      grandtotal();
                  });
              });
              function grandtotal(){
                
                let rows = document.querySelectorAll("#table-display tbody tr");

                let totalPrice = 0;
                rows.forEach(function(elem) {
                    console.log(elem)
                    totalPrice += parseFloat( elem.querySelectorAll('.total')[0].getAttribute("data-mrp"));
                  });

                  console.log(totalPrice);

                  document.getElementById("grandTotal").innerText ='$' + totalPrice;

              }