const uname=document.getElementById('name')
const password=document.getElementById('password')
const form=document.getElementById('form')
const errors=document.getElementById('error')


form.addEventListener('submit',(e) => {
    let messages=[]
    if(messages.length===0 &&(uname.value==='' || uname.value==null)){
        messages.push("*Username is required");
    }
    if(messages.length===0 && password.value.length<=6){
        messages.push("*Password must be at least 6 characters")
    }
    if(messages.length===0 && password.value.length>=20){
        messages.push("*Password must be less than 20 characters")
    }
    if(messages.length>0){
        e.preventDefault()
        errors.innerText=messages.join(", ")
    }
})
