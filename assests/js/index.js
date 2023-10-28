let showPassword=()=>{
    let password=document.querySelectorAll('.password');
    for(let i=0;i<password.length;i++){
        (password[i].type=='password')?password[i].type="text":password[i].type="password";
    }
}
let passwordShow=()=>{
    let pass=document.getElementsByClassName('password');
    for(let i=0;i<pass.length;i++){
    (pass[i].type=='password')?pass[i].type="text":pass[i].type="password"; 
    }
}
 document.getElementsByClassName
 