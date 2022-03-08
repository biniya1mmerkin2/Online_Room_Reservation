function checkValidity1()
{
    var fname, lname,usr ,ema,phn,pwd,cpwd,namerr,phonerr,passerr,cpasserr,fer,ler,emer;
    function $(id)
    {
        return document.getElementById(id);
    }
    fname=$("name");
    lname=$("lname");
    ema=$("email");
    usr=$("uname");
    phn=$("phone");
    pwd=$("password");
    cpwd=$("cpassword");

    fname=$('fer');
    lname=$('ler');
    email=$('emer');
    namerr=$("user")
    phonerr=$("per")
    passerr=$("paser")
    cpasserr=$("cpaser")
    

    fname.innerHTML="";
    lname.innerHTML="";
    email.innerHTML="";
    namerr.innerHTML="";
    phonerr.innerHTML="";
    passerr.innerHTML="";
    cpasserr.innerHTML="";
    
    var namchk= new RegExp(/\b\D+\b/);
    var phchk= new RegExp(/\b\d{10}\b/);
    if(usr.value.search(namchk)!=-1)
    {
        namerr.innerHTML=""
    }
    else{
        namerr.innerHTML="invalid format";
    }
    if(phn.value.search(phchk)!=-1)
    {
        phonerr.innerHTML=""
    }
    else{
        phonerr.innerHTML="invalid phone format";
    }
    if(pwd.value !=cpwd.value)
    {
        cpasserr.innerHTML="password not match";
    }
   
    if(namerr.innerHTML=="" && phonerr.innerHTML=="" && passerr.innerHTML=="" && cpasserr.innerHTML=="")
    {
        return true;
    }


    return false;
}