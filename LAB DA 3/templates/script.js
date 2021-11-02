const uname=document.getElementById('name')
const password=document.getElementById('password')
const cpassword=document.getElementById('c_password')
const form=document.getElementById('form')
const errors=document.getElementById('error')
const fname=document.getElementById('first_name');
const dob=document.getElementById('dob')
const mob=document.getElementById('mobile')


form.addEventListener('submit',(e) => {
    let messages=[]
    if(messages.length===0 &&(fname.value==='' || fname.value==null)){
        messages.push("*Name is required");
    }
    if(messages.length===0 &&(uname.value==='' || uname.value==null)){
        messages.push("*Username is required");
    }
    if(messages.length===0 && password.value.length<=6){
        messages.push("*Password must be at least 6 characters")
    }
    if(messages.length===0 && password.value.length>=20){
        messages.push("*Password must be less than 20 characters")
    }
    if(messages.length===0 && cpassword.value!==password.value){
        messages.push("*Password and Confirm password must be equal")
    }
    if(messages.length===0 && (uname.value==='' || uname.value==null)){
        messages.push("*Date of Birth is required")
    }
    if(messages.length===0 && (mob.value==='' || mob.value==null || mob.value.length!==10)){
        messages.push("*Enter valid mobile number")
    }
    if(messages.length>0){
        e.preventDefault()
        errors.innerText=messages.join(", ")
    }
})
