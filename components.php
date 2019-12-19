<!DOCTYPE html>
<html>
<head>
   <title>Vue js tutorial</title>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <div id="abc">
      <div class="panel">
         <div class="panelTitle">
            This is panel title [html way]
         </div>       
         <div class="panelContent">
            This is panel content.
            This is panel content. 
            This is panel content. 
            This is panel content. 
            This is panel content.
         </div>     
      </div>

      <panel title="This is title">
         <h2>Enter your name</h2>
         <input type="text" name="" >
         <button>Submit</button>
      </panel>
   </div>

<script type="text/javascript" src="vue.js"></script>
<script type="text/javascript" src="components.js"></script>
<script type="text/javascript">

   Vue.component("panel", {
      template: `
         <div class="panel" v-if="show">
            <div class="panelTitle">
               <div class="close" @click="show= false">X</div>
                  {{title}}
            </div>
            <div class="panelContent">
               <slot></slot>
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
         
         }      
   });

</script>
</body>
</html>