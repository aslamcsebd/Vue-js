<!DOCTYPE html>
<html>
<head>
   <title>Vue js tutorial</title>
</head>
<body>
   <div id="abc">

      <h2>Skills -> Experience(year)</h2>
     <ul>
        <li v-for="(skill, i) in skills">
            {{i+1}}. {{skill.name}} ({{skill.experience}})
        </li>  
      </ul>      

      <h2>Skills -> Experience(year>3  if condition)</h2>
     <ul>
        <li v-for="(skill, i) in skills">
            <p v-if="skill.experience > 3">
               {{i+1}}. {{skill.name}} ({{skill.experience}})            
            </p>
        </li>  
      </ul>      
      <h2>Skills -> Experience(year>3  if or show condition)</h2>
     <ul>
        <li v-for="(skill, i) in skills" v-show="skill.experience > 3">
            <p>
               {{i+1}}. {{skill.name}} ({{skill.experience}})            
            </p>
        </li>  
      </ul>      
   </div>

<script type="text/javascript" src="vue.js"></script>
<script type="text/javascript">
   var  app=new Vue({
         el:"#abc",
      data:{
         skills: [
                     {name: "html", experience: 4},
                     {name: "css", experience: 6},
                     {name: "php", experience: 5},
                     {name: "sql", experience: 3},
                     {name: "js", experience: 7}
         ]
      }      
   });
</script>
</body>
</html>