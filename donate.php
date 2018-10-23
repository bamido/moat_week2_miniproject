<form >
  <script src="https://js.paystack.co/v1/inline.js"></script>
  <input type="text" name="amount" id="amount" placeholder="enter amount" />
  <input type="email" name="email" id="email" placeholder="enter email">
  <button type="button" onclick="payWithPaystack()"> Donate </button> 
</form>
 
<script>
  function payWithPaystack(){
    var handler = PaystackPop.setup({
      key: 'pk_test_16b46cc8f7247f409341c148e36a882f0d19647c',
      email: document.getElementById('email').value,
      amount: document.getElementById('amount').value * 100,
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                display_name: "Mobile Number",
                variable_name: "mobile_number",
                value: "+2348012345678"
            }
         ]
      },
      callback: function(response){
          alert('success. transaction ref is ' + response.reference);
      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
  }
</script>