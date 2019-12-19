<!DOCTYPE html>
<html>
<head>
   <title>Vue js tutorial</title>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <div id="abc">
      <tabs>
         <tab name="Tab" selected="true">
            Tab content... <button>btn</button>
         </tab>
         <tab name="Tab2">
            Tab2 content..
         </tab>
         <tab name="Tab3">
            Tab3 content...
         </tab>
      </tabs>
   </div>

<script type="text/javascript" src="vue.js"></script>
<script type="text/javascript" src="components.js"></script>
<script type="text/javascript">

   var app=new Vue({
         el:"#abc",
      data: {
         
      }      
   });

</script>
</body>
</html>