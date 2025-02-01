//membuat objek
var xhr = new XMLHttpRequest();
xhr.open('GET', 'https://jsonplaceholder.typicode.com/posts',true);

xhr.onreadystatechange = ()=>{
   if(xhr.readyState === 4 && xhr.status===200){
      var responseData = JSON.parse(xhr.responseText);
      const cont = document.getElementById("content");
      responseData.forEach((item) => {
         const div = document.createElement("div");
         div.innerHTML = ` <h3> ${item.title}</h3>
         <p>${item.body} </p>`;
         cont.appendChild(div);

      });
   }
};
xhr.send();