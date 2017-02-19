// handle button onclick
        function add(id) {

            // get references to form elements
            var prodid = id;
            // another way to get reference
            var qty = document.getElementById("id" + id).value;

            // encode data
            var data = dw_encodeVars({ productid: prodid, quantity: qty });

            // callback object with functions for success and failure of ajax request
            var callback = {
                success: function (req) {
                    alert(req.responseText);
                },
                failure: function (req) {
                    alert('Error encountered');
                }
            }

            // call function to initiate request and handle response
            // with form data appended to url query string
            dw_makeXHRRequest('addtocart.php?' + data, callback);

        }