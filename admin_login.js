const x= document.getElementById('email')
const y= document.getElementById('pass')
const z= document.getElementById('pass-rep')
const form= document.getElementById('myform')

form.addEventListener('submit',(e)=>{
    e.preventDefault()
})


function validateForm() {
    if ((x.value == 'admin@system.com')&&(y.value=='12345')&&(z.value=='12345')) {
      alert("Login Successful");
      window.location="Admin-Portal.html"
    }else{
        alert("Invalid Credentials");
    }
  }
 