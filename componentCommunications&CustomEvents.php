<!DOCTYPE html>
<html>
<head>
   <title>Vue js tutorial</title>
   <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <div id="abc">
      <button @click="showLogin = true">Login</button>
      
      <model v-if="showLogin" @onsave="showLogin = false">
         <template slot="header">
            This is model header
         </template>
         <template slot="body">
            <h2>Enter your name</h2>
            <input type="text" name="">
         </template>
      </model> 
   </div>

<script type="text/javascript" src="vue.js"></script>
<script type="text/javascript">

   Vue.component("model", {
      template: `
         <div class="model">
            <div class="modelContent">
               
               <div class="modelHeader">
                  <slot name="header"></slot>
               </div>
               
               <div class="modelBody">
                  <slot name="body"></slot>
               </div>
               
               <div class="modelFooter">
                  <button @click="$emit('onsave')">Save</button>
                  <button>Cancel</button>
               </div>
            
            </div>
         </div>
      `,
      props: ["title", "content"],
         data: function(){
            return {
               show: true
            }
         }
   });

   var app=new Vue({
         el:"#abc",
      data: {
         showLogin: false   
      } 
   });

</script>
</body>
</html>