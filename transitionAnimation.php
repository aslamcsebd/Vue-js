<!DOCTYPE html>
<html>
<head>
   <title>Vue js tutorial</title>
   <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" type="text/css" href="bootstrap-min.css">
   <style type="text/css">
      .foo { background: gray; text-align: center; width: 960px; margin: 44px auto; min-height: 250px; }
      .fade-enter-active, .fade-leave-active { transition: margin-top 1s; }
      .fade-enter, .fade-leave-to { margin-top: -555px; }
      .bar-enter-active, .bar-leave-active { transition: transform 1s; }
      .bar-enter, .bar-leave-to { transform: rotate(-180deg); }
      /*abc2*/
      .bar2-enter-active, .bar2-leave-active { transition: margin-left 1s; }
      .bar2-enter, .bar2-leave-to { margin-left: -222px; }
   </style>
</head>
<body>
   <div id="abc">
      <button @click="show = !show" class="btn btn-success">Toggle</button>
      <transition name="fade">
         <div class="foo" v-show="show">
            <p>Hello world</p>
         </div>
      </transition>
      <transition name="bar">
         <div class="foo" v-show="show">
            <p>Hello world</p>
         </div>
      </transition>
   </div>
   <div id="abc2">
      <h2>Skills</h2>
      <input type="text" v-model="newSkill">
      <button v-on:click="addNewSkill()">Add</button>
      <ul>
         <transition-group name="bar2">
            <li v-for="(skill, i) in skills" :key="i">
               <p>{{skill}} <button v-on:click="removeSkill(i)">x</button></p>           
            </li>
         </transition-group>
      </ul>
   </div>

<script type="text/javascript" src="vue.js"></script>
<script type="text/javascript">

   var app=new Vue({
         el:"#abc",
      data: {
         show: false
      }      
   });

   var  app=new Vue({
         el:"#abc2",
      data: {
         newSkill: "", 
         skills: ["HTML", "CSS", "JS"]
      },
      methods: {
         addNewSkill: function(){
            this.skills.push(this.newSkill);
            this.newSkill= '';
         },
         removeSkill: function(i){
            this.skills.splice(i, 1);
         }
      } 
   });

</script>
</body>
</html>