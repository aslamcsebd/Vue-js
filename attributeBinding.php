<!DOCTYPE html>
<html>
<head>
   <title>Vue js tutorial</title>
</head>
<body>
   <div id="abc">
     <ul>
        <li>
           <a :class="{'active': activeLink=='link1'}" :href="link1.url" :title="link1.title">{{link1.text}}</a>
        </li>
        <li>
           <a :class="{'active': activeLink=='link2'}" :href="link2.url" :title="link2.title">{{link2.text}}</a>
        </li>     
     </ul> 
      <p v-html="htmlCode">
      </p>
   </div>


<script type="text/javascript" src="vue.js"></script>
<script type="text/javascript">
   var  app=new Vue({
         el:"#abc",
      data:{
         link1: {
            text: "Facebook", title: "Go to Facebook", url: "https://facebook.com"
         },
         link2: {
            text: "Youtube", title: "Go to Youtube", url: "https://youtube.com"
         },
         activeLink: "link2",
         htmlCode: '<a href="http://aslambd.ml">About Me</a>'
      }      
   });
</script>
</body>
</html>