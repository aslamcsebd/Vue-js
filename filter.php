<!DOCTYPE html>
<html>
<head>
   <title>Vue js tutorial</title>
</head>
<body>
   <div id="abc">
      <h3>Upper case</h3>
      <h2>{{name | upper}}</h2>

      <h3>Lower case</h3>
      <h2>{{name | lower}}</h2>

      <h3>Date: {{today | bdFormat}}</h3>
   </div>

<script type="text/javascript" src="vue.js"></script>
<script type="text/javascript">

   Vue.filter("lower", function(s){    //globsl function
      return s.toLowerCase();
   });
   
   var  app=new Vue({
         el:"#abc",
      data: {
         name: "Md Aslam Hossain",
         profession: "Softwere Engineer",
         today: new Date()
      },
      filters: {
         upper: function(s){               //local function
            return s.toUpperCase();
         },
         
         bdFormat: function(d){
            return d.getUTCDate() + "-" + (d.getUTCMonth()+1) + "-" + d.getUTCFullYear();
         }
      }      
   });

</script>
</body>
</html>