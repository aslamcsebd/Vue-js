<!DOCTYPE html>
<html>
<head>
   <title>Vue js tutorial</title>
</head>
<body>
   <div id="abc">
      <p>Enter your name...</p>
      <input type="text" v-model="name">
      <h2>My name is {{ name }}</h2>
   </div>

<script type="text/javascript" src="vue.js"></script>
<script type="text/javascript">
   var app=new Vue({
      el:"#abc",
      data:{
         name: "" 
      }
   });
</script>
</body>
</html>