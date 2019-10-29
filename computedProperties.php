<!DOCTYPE html>
<html>
<head>
   <title>Vue js tutorial</title>
</head>
<body>
   <div id="abc">
      <h2>All Payments</h2> <hr>
     <ul>
        <li v-for="(payment, i) in payments">
            <p>
               {{payment.name}} ({{payment.amount}})
            </p>           
        </li>
     </ul>

     <h2>All unpaid Payments</h2> <hr>
     <ul>
        <li v-for="(payment, i) in unpaidPayments">
            <p>
               {{payment.name}} ({{payment.amount}})
            </p>           
        </li>
     </ul>
     <h3>Total Amount: {{totalAmount}}</h3>
   </div>

<script type="text/javascript" src="vue.js"></script>
<script type="text/javascript">
   var  app=new Vue({
         el:"#abc",
      data: {
         payments: [
            {name: "houseRent", amount: 15000, paid: true},
            {name: "electricity", amount: 1000, paid: false},
            {name: "gas", amount: 800, paid: true},
            {name: "water", amount: 700, paid: false},
            {name: "net", amount: 600, paid: false}
         ]
      },
      computed: {
         unpaidPayments: function(){
            return this.payments.filter(function(p){
               return !p.paid;
            });
         },
         totalAmount: function(i){
            var sum=0;
            for (var i=0; i<this.payments.length; i++) {
               sum += this.payments[i].amount;
            }
            return sum;
         }
      } 
   });
</script>
</body>
</html>