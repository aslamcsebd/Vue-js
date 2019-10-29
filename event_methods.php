<!DOCTYPE html>
<html>
<head>
   <title>Vue js tutorial</title>
</head>
<body>
   <div id="abc">
      <h2>Skills  [N:B: v-on:click vs @click  same meaning...</h2> <hr>
     <ul>
        <li v-for="(skill, i) in skills">
            <p>
               {{skill}} <button v-on:click="removeSkill(i)">x</button>
            </p>           
        </li>
     </ul>
     <input type="text" v-model="newSkill">
     <button v-on:click="addNewSkill()">Add</button>
   </div>

<script type="text/javascript" src="vue.js"></script>
<script type="text/javascript">
   var  app=new Vue({
         el:"#abc",
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